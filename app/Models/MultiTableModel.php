<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MultiTableModel extends Model
{
    use HasFactory;

    public function demo()
    {
        // Insert into table1
        $model = new MultiTableModel();
        $model->useTable1()->create([
            'name' => 'Alice',
            'email' => 'alice@example.com',
        ]);

        // Insert into table2
        $model->useTable2()->create([
            'title' => 'Laravel Tips',
            'description' => 'Learn how to use Laravel effectively!',
        ]);

        // Fetch from table1
        $dataFromTable1 = $model->useTable1()->get();

        // Fetch from table2
        $dataFromTable2 = $model->useTable2()->get();

        return [
            'table1_data' => $dataFromTable1,
            'table2_data' => $dataFromTable2,
        ];
    }
}