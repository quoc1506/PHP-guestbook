<?php
require_once "Model.php";

class Message extends Model
{
    protected $table = "messages";

    protected $fields = ['id', 'name', 'message', 'created_at'];

    public function createMessage($data)
    {
        $key = 'name, message';
        $binds = [
            $data["name"],
            $data["message"]
        ];
        return parent::create($key, "?,?", $binds); // TODO: Change the autogenerated stub
    }

    public function updateMessage($data) {
        $binds = [
            $data["name"],
            $data["message"]
        ];
        return parent::update($binds, $data['id']);
    }

    public function deleteMessage($data) {
        return parent::delete($data['id']);
    }
}
