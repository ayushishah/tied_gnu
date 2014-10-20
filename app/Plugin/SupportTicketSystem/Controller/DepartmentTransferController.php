<?php
App::uses('SupportTicketSystemAppController', 'SupportTicketSystem.Controller');
/**
 * Department Transfer Controller
 *
 * @property Department Transfer $Transfer
 * @property PaginatorComponent $Paginator
 */
class DepartmentTransferController extends SupportTicketSystemAppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function transfer(){
		unset($this->request->data);
		$this->loadModel('Staff');
		$userid = $this->Auth->user('staff_id');
		$instid = $this->Staff->find('first', array('fields' => ['Staff.institution_id'], 'conditions' => array('Staff.id' => $userid)));
		$departments = $this->DepartmentTransfer->Category->Department->find('list', array(
		      			'conditions' => array('Department.institution_id' => $instid['Staff']['institution_id'])));
		//$categories = $this->TicketManage->Category->find('list',['conditions' => ['Category.recstatus' => 1,
		//					'Category.flag' => 0, 'Category.institution_id' => $instid['Staff']['institution_id'] ]]);
		$categories = [];
		$this->set(compact('departments','categories'));
		
	}
}
