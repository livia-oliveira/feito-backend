<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtarefa extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'status', 'tarefa_id'];

    // Relacionamento: Uma subtarefa pertence a uma tarefa.

    public function tarefa()
    {
        return $this->belongsTo(Tarefa::class); // Relacionamento com Model Tarefa
    }
}
