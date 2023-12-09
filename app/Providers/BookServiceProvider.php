<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;

class BookServiceProvider
{
    private $table;
    public function __construct()
    {
        $this->table = DB::table('books');
    }

    public function create(array $data): bool
    {
        return $this->table->insert($data);
    }

    public function read($id)
    {
        //DB::select('SELECT * FROM books WHERE id=%d', $id);
        return $this->table->where('id', $id)->first();
    }

    public function readAll()
    {
        return $this->table->get();
    }

    public function update($id, array $data): int
    {
        if (empty($data)){
            return 0;
        }
        return $this->table->where('id', $id)->update($data);
    }

    public function delete($id) {
        return $this->table->delete(['id'=>$id]);
    }

    public function lastThree(){
        return $this->table->orderBy('created_at', 'desc')->take(3)->get();
    }
}
