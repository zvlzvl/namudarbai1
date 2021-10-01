<?php
namespace App;

class Json {

    private static $jsonObj;

    private $data;
 
    public static function getDB() {

        return self::$jsonObj ?? self::$jsonObj = new self;
    }

    private function __construct()
    {
        if (!file_exists(DIR.'data/clients.json')) {// pirmas kartas
            $data = json_encode([]); // tuscias masyvas kuriame bus objektai
            file_put_contents(DIR.'data/clients.json', $data);
        }
        $data = file_get_contents(DIR.'data/clients.json');
        $this->data = json_decode($data); //iraso i data json objektas
    }

    public function __destruct() {
        // irasoma i json faila
        file_put_contents(DIR.'data/clients.json', json_encode($this->data));
    }
// funkcija kuri nuskaito duomenis is json
    public function readData() : array {

        return $this->data;
    }
    //funkcija kuri iraso duomenis i this->data
    // void - grazinam nieko, () - argumentas turi buti array
    public function writeData(array $data) : void {
        $this->data = json_encode($data);
        
    }
    // senas skaicius pakeiciamas nauju
    // ? - galima grazint objekta arba null
    
     public function getClient(int $id) : ?object {
         //paimamos visos dezes, skaitoma kaip viena deze ir jeigu dezes id sutampa su ieskomos dezes id, grazinama ieskoma
         foreach($this->data as $client) {
             if($client->id == $id) {
                 return $client;
             }
         }
         return null;
     }
 // perduodam kiek mum reik count
     public function store(Client $client) : void {

        _dc($client);

         $id = $this->getNextId();
         $client->id = $id;
         $this->data[] = $client; // i json faila bus automatiskai irasyta

     }

     public function update(object $updateUClient) : void {

         foreach($this->data as $key => $client) {
             if($client->id == $updateClient->id) { // jei id sutampa su id - Client update
                 $this->data[$key] = $client; //pakeiciama i nauja
                 return;
             }
         }
     }

     public function delete(int $id) : void {

         foreach ($this->data as $key => $client) {
             if($client->id == $id) {
                 unset($this->data[$key]);
                 // normalizuojam masyva iki normalaus masyvo be "skyliu"
                 $this->data = array_values($this->data);
                 /*
                 pvz indeksai pries trynima 0 1 2 3 4
                 trinam 2 elementa
                 indeksai po trynimo 0 1 3 4
                 indeksai po normalizavimo 0 1 2 3
                 */
                 return;
             }
         }
     }
//     //grazina sekancia id, kai norima irasyti nauja deze, duoda sekanti index
     private function getNextId() : int {
         if(!file_exists(DIR. 'data/indexes.json')) {
             $index = json_encode(['id'=>1]);
             file_put_contents(DIR. 'data/indexes.json', $index);
         }
         $index = file_get_contents(DIR. 'data/indexes.json');
         $index = json_decode($index, 1);
         $id = (int) $index['id'];
         //seknati karta rasant butu vienetu didesnis
         $index['id'] = $id + 1;
         $index = json_encode($index);
         file_put_contents(DIR. 'data/indexes.json', $index);
         return $id;
     }
}