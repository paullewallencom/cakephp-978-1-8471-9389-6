<?php
class QuestionsController extends AppController {

	var $name = 'Questions';

	function home() {
		
		if (!empty($this->data)) {
			$this->Question->create();
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash('Your Question has been added');
				$this->redirect(array('action'=>'home'), null, true);
			} else {
				$this->Session->setFlash('The Question could not be saved. Please, try again.');
			}
		}
		
		$this->Question->recursive = 1;
		$this->set('questions', $this->Question->find('all'));
	}

	function show( $id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Question.');
			$this->redirect(array('action'=>'home'));
		}
		
		if (!empty($this->data)) {
			$this->Question->Answer->create();
			if ($this->Question->Answer->save($this->data)) {
				$this->Session->setFlash('The Answer has been saved');
				$this->redirect(array('action' => 'show', $id), null, true);
			} else {
				$this->Session->setFlash('The Answer could not be saved. Please, try again.');
			}
		}

		$this->set('question', $this->Question->read(null, $id));
	}
}
?>