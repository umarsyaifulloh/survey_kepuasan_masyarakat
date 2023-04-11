<?php

namespace App\Models;

use CodeIgniter\Model;

class RPOJModel extends Model
{
    protected $table = 'tr_rpoj';
    protected $primaryKey = 'rpoj_id';
    protected $allowedFields = ['rpoj_respondensurvey_id', 'rpoj_pertanyaanopsi_id'];
}
