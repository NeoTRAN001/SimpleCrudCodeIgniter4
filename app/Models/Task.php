<?php namespace App\Models;

use CodeIgniter\Model;

class Task extends Model 
{
    protected $table = 'Tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['date', 'title', 'body'];

    public function GetTask($id = null) {

        $task = null;

        if($id === null) $task = $this->paginate(10);
        else $task = $this->find($id);

        return $task;
    }

    public function AddTask($date, $title, $body) {
        $data = [
            'date' => $date,
            'title' => $title,
            'body' => $body
        ];

        return $this->save($data) ? true : false;
    }

    public function UpdateTask($id, $date, $title, $body) {
        if($this->find($id) == null) return false;

        $data = [
            '$date' => $date,
            'title' => $title,
            'body'  => $body 
        ];

        return $this->update($id, $data) ? true : false;

    }

    public function DeleteTask($id) {
        if($this->find($id) == null) return false;

        return $this->delete($id) ? true : false;
    }
}