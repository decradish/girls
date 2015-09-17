<?php
class Ori_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
		$this->load->database();
    }

	public function mAdd($data, $table=DEFAULT_TB){
        $query = $this->db->insert($table, $data);
        if($query){
        	return $this->db->insert_id();
        }else{
        	return $query;
        }
	}

	public function mGetAllReal($table=DEFAULT_TB, $order='desc'){
		$this->db->order_by('create_time', $order);
		$query = $this->db->get($table);
		$result = fOb2Arr($query->result());
		return $result;
	}

	public function mGetAll($limit=5, $no=0, $order='desc', $table=DEFAULT_TB){
		$this->db->order_by('create_time', $order);
		$this->db->limit($limit, $no);
		$query = $this->db->get($table);
		$result = fOb2Arr($query->result());
		return $result;
	}

	public function mPngGetBy($field, $val, $limit=5, $no=0, $order='desc', $table=DEFAULT_TB){
		$this->db->where($field, $val);
		$this->db->order_by('create_time', $order);
		$this->db->limit($limit, $no);
		$query = $this->db->get($table);
		$result = fOb2Arr($query->result());
		return $result;
	}

	public function mGet($id, $table=DEFAULT_TB){
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return fOb2Arr($query->result());
	}

	public function mGetBy($field, $val, $table=DEFAULT_TB, $order=null){
		if($order){
			$this->db->order_by($order, "asc"); 
		}
		$this->db->where($field, $val);
		$query = $this->db->get($table);
		return fOb2Arr($query->result());
	}

	public function mGetByArray($aPost, $table=DEFAULT_TB){
		foreach ($aPost as $key => $value) {
			$this->db->where($key, $value);
		}
		$query = $this->db->get($table);
		return fOb2Arr($query->result());
	}

	public function mUpdate($id, $data, $table=DEFAULT_TB){
        $this->db->where('id', $id);
		$query = $this->db->update($table, $data);
		return $query;
	}

	public function mUpdateById($id, $data, $table=DEFAULT_TB){
        $this->db->where('id', $id);
		$query = $this->db->update($table, $data);
		return $query;
	}

	public function mUpdateBy($field, $value, $data, $table=DEFAULT_TB){
        $this->db->where($field, $value);
		$query = $this->db->update($table, $data);
		return $query;
	}

	public function mUpdateByArray($aPost, $data, $table=DEFAULT_TB){
		foreach ($aPost as $key => $value) {
			$this->db->where($key, $value);
		}
		$query = $this->db->update($table, $data);
		return $query;
	}

	public function mDelete($id, $table=DEFAULT_TB){
		$query = $this->db->delete($table, array('id' => $id));
		return $query;
	}

	public function mDeleteBy($field, $value, $table=DEFAULT_TB){
		$query = $this->db->delete($table, array($field => $value));
		return $query;
	}

	public function mCountBy($by='id', $value='', $table=DEFAULT_TB){
		$this->db->where($by, $value);
		$this->db->from($table);
		$query = $this->db->count_all_results();
		return $query;
	}

	public function mCountAll($table=DEFAULT_TB){
		$query = $this->db->count_all_results($table);
		return $query;
	}

	public function mSearch($by='', $value='', $table=DEFAULT_TB){
		$this->db->from($table);
		$query = $this->db->like($by, $value, 'both');
		$result = $query->get()->result_array();
		return $result;
	}
}