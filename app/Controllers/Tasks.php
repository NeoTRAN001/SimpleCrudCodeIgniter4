<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\Task;

class Tasks extends BaseController
{

    public function GetTask($id = null) {
        $model = new Task();
        $view = "getTasks";
        $dataHeader = [ 'title' => 'Task List' ];
        $lstTasks = [ 
            'tasks' => $model->GetTask($id),
            'success' => null
        ];

        if($id != null) {
            $view = "GetTask";
            $dataHeader = [ 'title' => "Task $id °" ];
        }

        $this->_loadDefaultView($dataHeader, $lstTasks, $view);
    }

    public function AddTask() {

        $model = new Task();
        $view = "getTasks";
        $dataHeader = [ 'title' => 'Task List' ];
        $success = true;

        if($this->validate(['title' => 'required'])) {
            $date    = Time::today('America/Mexico_City', 'en_US')->toLocalizedString('dd/MM/yyyy');
            $title  = $this->request->getPost('title');
            $body    = $this->request->getPost('body');

            if($model->AddTask($date, $title, $body))
                return redirect()->to('http://localhost/crud/public/tasks/get')->with('message', 'La tarea ha sido agregada');
        }
        return redirect()->back()->withInput();
    }

    public function EditTask($id) {
        $model = new Task();
        $view = "editTask";
        $dataHeader = [ 'title' => 'Task List' ];
        $lstTasks = [ 
            'tasks' => $model->GetTask($id),
            'success' => null
        ];

        $this->_loadDefaultView($dataHeader, $lstTasks, $view);
    }

    public function UpdateTask() {
        $model = new Task();

        $id    = $this->request->getPost('id');
        $date  = Time::today('America/Mexico_City', 'en_US')->toLocalizedString('dd/MM/yyyy');
        $title = $this->request->getPost('title');
        $body  = $this->request->getPost('body');

        if($model->UpdateTask($id, $date, $title, $body))
            return redirect()->to('http://localhost/crud/public/tasks/get')->with('message', 'La tarea ha sido actualizada');
        return redirect()->back()->withInput();
    }

    public function DeleteTask($id) {
        $model = new Task();
        if($model->DeleteTask($id)) 
            return redirect()->to('http://localhost/crud/public/tasks/get')->with('message', 'La tarea ha sido eliminada');
    
        return redirect()->back()->withInput();
    }

    // Utilities function
    private function _loadDefaultView($dataHeader, $data, $view) {
        echo view("header", $dataHeader);
        echo view("$view", $data);
        echo view("footer", $dataHeader);
    }
}