<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWebsite extends Model
{
	public $db;

	public function __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
	}

	protected $table      = 'tab_website';
	protected $primaryKey = 'id';

	protected $returnType     = 'object';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['website'];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';

	protected $skipValidation  = true;
}
