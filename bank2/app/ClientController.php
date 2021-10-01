<?php
namespace App;
use App\Json;
use App\Client;

class ClientController {

    public function index() {
        
        $users = Json::getDB()->readData();
        require DIR.'views/account_list.php';
    }
    public function new_account() {

        require DIR.'views/new_account.php';
    }
    public function store() {

        $client = new Client;
        $client->vardas = (string) ($_POST['name'] ?? '');
        $client->pavarde = (string) ($_POST['surname'] ?? '');
        $client->asmensKodas = $this->tikrintiId ((string) ($_POST['id'] ?? ''));
        $client->asmeninisId = ClientController::saskaitosNumeris();
        $client->likutis = (int) ($_POST['add_money'] ?? 0);

        Json::getDB()->store($client); // sukuria 
        header('Location: '.URL); //nukreipiama i index, kuris rodo visa bananu sarasa puslapi
        die;
        
    }
    public function delete(int $id)
    {
        Json::getDB()->delete($id);
        header('Location: '.URL);
        die;
    }
    public function add(int $id) {
    
        $clients = Json::getDB()->readData();
        $client = Json::getDB()->getUser($id);
        require DIR.'views./add_money.php';
        }
    
        public function pridetiPinigus(int $id) {
    
        $client = Json::getDB()->getClient($id);
        $pridetiLesas =(float) ($_POST['add_money'] ?? 0);
         $suapvalinti = round($pridetiLesas, 2);
         if($suapvalinti <= 0) {
             return;
         }
        $client->remainder += $suapvalinti;
        Json::getDB()->update($client);
        header('Location: '.URL);
        die;
        }
        public function deduct_money(int $id)
    {
        $clients = Json::getDB()->readData();
        $client = Json::getDB()->getClient($id);
        require DIR.'views/deduct_money.php';
    }

    public function nuskaiciuotiPinigus(int $id) : void {
    
        $client = Json::getDB()->getClient($id);
        $deduct = (float) ($_POST['nuskaiciuotiPinigus'] ?? 0);
        $deductRound = round($deduct, 2);
        if($deductRound <= 0) {
            return;
        }
        $remainder = $client->remainder;
        $afterDeduct = $remainder - $deductRound;
        $afterDeductRound = round($afterDeduct, 2);
         if($afterDeduct >= 0) {
             $client->remainder = $afterDeductRound;
             Json::getDB()->update($client);
         }  else {
             return;
         }
        header('Location: '.URL);
        die;
    }
    public static function saskaitosNumeris() : string {
    
        $numeris = '01';
        $bankoKodas = '88000';
        $betkoksSkaicius = '';
        for($i = 0; $i <= 10; $i++) {
            $rand = (string) rand(0, 9);
            $betkoksSkaicius .= $rand;
        }
        $saskaitosNumeris = 'LT' . $numeris . $bankoKodas . $betkoksSkaicius;
        $saskaitosNumeris = (string) $saskaitosNumeris;
        return $saskaitosNumeris;
    }
    private function tikrintiId(string $id) {

        $uclient = Json::getDB()->readData();
        foreach($clients as $client) {
            if($client->id == $id || strlen($id) < 11) {
                header('Location: '.URL);
                die;
                return;
            } else {
                return $id;
            }
        }
    }
}