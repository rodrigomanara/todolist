<?php

namespace Rmanara\Controller;

use Lib\AbstractController;

/**
 * Description of Default
 *
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
class DefaultController extends AbstractController {

//put your code here

    public function index() {


        $array = array(
            'title' => $this->request->get('title'),
            'tags' => $this->request->get('tags'),
            'description' => $this->request->get('description')
        );

        if ($this->request->server['REQUEST_METHOD'] === 'POST') {

            if ($this->model->save($array)) {
                return $this->request->redirect('/todolist');
            }
        }

        $array['base'] = "http://" . $this->request->server['HTTP_HOST'];
        $this->view->render("Default/index.php", $array);
    }

    /**
     * 
     */
    public function todolist() {


        $list = $this->model->todoList();

        $rows = $list->rows;


        $rows['base'] = "http://" . $this->request->server['HTTP_HOST'];

        $this->view->render("Default/todo_list.php", $rows);
    }

    /**
     * this will update the value from 
     */
    public function update() {



        if ($this->request->server['REQUEST_METHOD'] === 'POST') {

            $array = array(
                'id' => $this->request->get('id'),
                'title' => $this->request->get('title'),
                'tags' => $this->request->get('tags'),
                'description' => $this->request->get('description')
            );
            if ($this->model->save($array)) {
                return $this->request->redirect('/todolist');
            }
        }



        $list = $this->model->todoListById($this->request->get('id'));
        $rows = $list->row;
        $rows['base'] = "http://" . $this->request->server['HTTP_HOST'];


        $this->view->render("Default/update.php", $rows);
    }

    /**
     * this will update the value from 
     */
    public function delete() {

        if ($this->request->server['REQUEST_METHOD'] === 'GET') {

            if ($this->model->DeletetodoListById($this->request->get('id'))) {
                return $this->request->redirect('/todolist');
            }
        } else {
            return $this->request->redirect('/todolist');
        }
    }

}
