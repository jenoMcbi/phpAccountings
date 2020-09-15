<?php  
		
	class DBconnection {

		protected $servername = "BOGARTZPROPERTY";
		protected $username = "sa";
		protected $password = "jeno";
		protected $database = "accountingcpc";
		protected $dbcon;
		
		public function __construct() {
			
			$define = array('UID'=>$this->username, 'PWD'=>$this->password, 'Database'=>$this->database);
			$this->dbcon = sqlsrv_connect($this->servername, $define);
		}
		
		public function getdbStatus() {

			if(!$this->dbcon ) return sqlsrv_errors($this->dbcon);
			else  return 'Connection Success';
		}

		public function getdbConn() {
			return $this->dbcon;
		}

		public function getdbClose() {
			return sqlsrv_close($this->dbcon);
		}
	}
?>