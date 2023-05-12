<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplianceApp extends Model
{
    use HasFactory;
    protected $fillable = ["group_of_complaints", "type_of_complaints", "detail_of_event", "the_attached_file"];

}
