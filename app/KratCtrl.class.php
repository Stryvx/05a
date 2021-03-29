<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/KratForm.class.php';
require_once $conf->root_path.'/app/KratResult.class.php';

class KratCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku


	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new KratForm();
		$this->result = new KratResult();
	}
	

	public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
		$this->form->op = isset($_REQUEST ['op']) ? $_REQUEST ['op'] : null;
	}
	

	public function validate() {
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ($this->form->z) && isset ( $this->form->op ))) {
			return false; 
		}
		
		if ($this->form->x == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
		

		if (! $this->msgs->isError()) {
			
			if (! is_numeric ( $this->form->x )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->z )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}		
		return ! $this->msgs->isError();
	}
	

	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->z = intval($this->form->z);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			switch ($this->form->op) {
				case 'Rata' :
					$this->result->result = ($this->form->x / ($this->form->y * 12)) + ((($this->form->x) / ($this->form->y * 12)) * ($this->form->z * 0.01));
					$this->result->op_name = 'Rata:';
					break;
			}
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/kredyt_view.html');
	}

}

