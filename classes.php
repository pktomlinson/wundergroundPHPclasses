<?php
/*
	classes
*/
class weatherReq
	{
		public $apiUrl;
		public $apiKey;
		public $forecast;
		public $action;
		public $location;
		public $dataType;
		public $data;
		public $ch;
		public function GetWeather()
			{
				$this->data = $this->apiUrl . "/" . $this->apiKey . "/" . $this->forecast . "/" . $this->action . "/" . $this->location  . $this->dataType;
				$this->ch = curl_init($this->data);
				curl_setopt($this->ch, CURLOPT_HEADER,0);
				$this->data = curl_exec($this->ch);
				curl_close($this->ch);
				return $this->data[0];
			}
	}

?>
