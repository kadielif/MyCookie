<?php      
class API {
     
    public $data = "";
    //Enter details of your database
    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB = "tarif";
     
    private $db = NULL;
 
    public function __construct(){
        $this->dbConnect();                 
	}
		 
	private function dbConnect(){
			$this->db = new mysqli(self::DB_SERVER,self::DB_USER,self::DB_PASSWORD,self::DB);
			if($this->db->connect_error){
				die("HATA:".$conn->connect_error);
			}
	}
	public function getData($param="all"){
		if($param=="all"){
			$sql = "select * from tarifler";			
		}else{
			$sql = "select * from tarifler where id=".$param;			
		}
		$veriler = $this->db->query($sql);
		while($rs = $veriler->fetch_object()){
			$data["veriler"]["v".$rs->id]["id"]=$rs->id;
			$data["veriler"]["v".$rs->id]["adi"]=$rs->adi;
			$data["veriler"]["v".$rs->id]["tarif"]=$rs->tarif;
			$data["veriler"]["v".$rs->id]["malzeme"]=$rs->malzeme;
			$data["veriler"]["v".$rs->id]["sure"]=$rs->sure;
			$data["veriler"]["v".$rs->id]["kisi"]=$rs->kisi;
			$data["veriler"]["v".$rs->id]["derece"]=$rs->derece;
			$data["veriler"]["v".$rs->id]["resim"]=$rs->resim;
			
		}
		
		echo $this->json($data);
	}	 

	private function json($data){
		if(is_array($data)){
			return json_encode($data);
		}
	}

}
   $api = new API;
	if($_SERVER['REQUEST_METHOD']=="GET"){
		$api->getData($_GET["param"]);
	}elseif($_SERVER['REQUEST_METHOD']=="POST"){
		echo "POST";
	}
 
/* if(isset($_GET["param"]))
		$api->getData($_GET["param"]);
	else
		$api->getData();
	//$test = json_decode($test);
	//echo $test->v4->tarih;
	//print_r(json_decode($test));
	*/
	?>