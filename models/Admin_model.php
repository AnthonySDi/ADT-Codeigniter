<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	public function insertuser($data)
	{
		return $this->db->insert('administration', $data);
	} //end of insertuser

	public function verifyemail($key)
	{
		$data = array('status' => 1);
		$this->db->where('md5(email)', $key);
		return $this->db->update('administration', $data);
	}//end of verifyemail

	public function check_user($AdminEmail,$pass)
	{
		$sql = "SELECT AdminStatus, idAdmin, AdminName FROM administration where AdminEmail = ? and AdminPassword = ?";
		$data = $this->db->query($sql, array($AdminEmail,$pass));
		return ($data->result_array()) ;
	} // end of check_user

	public function getPosts()
	{
	// Gets the posts for Dashboard view
		$this->db->select('adtBlog.*');
		$this->db->from('adtBlog');
		$data = $this->db->get();

		return($data->result());
	} // end of getPosts()

	public function getCats()
	{
		$this->db->select('adtCategories.*');
		$this->db->from('adtCategories');
		
		$data = $this->db->get();

		return($data->result());

	}// end of getCats

	public function getTags()
	{
		
		$this->db->select('adtTags.*');
		$this->db->from('adtTags');
		
		$data = $this->db->get();

		return($data->result());

	}// end of getCats	


	public function insertCats($categories)
	{
	// assigning the count once
		$count = count($categories);
	//make sure there's atleast one item
		if($count != 0){
			if($count > 1)
			{ // if array has more than one item

				//loop through item and insert one by one
				foreach($categories as $category){

					$this->db->insert('adtcategories',$category);

				} // end of foreach

			}
			else
			{ // if Item 
				$this->db->insert('adtcategories', $categories);
			}
		return true;
		}// End of Primary If
		else
		{ // If the Array has nothing

			return false;
		
		}

	} // end of function insertCats($categories)

	public function insertTags($Tags)
	{
	// assigning the count once
		$count = count($Tags);
	//make sure there's atleast one item
		if($count != 0){
			if($count > 1)
			{ // if array has more than one item

				//loop through item and insert one by one
				foreach($Tags as $tag){

					$this->db->insert('adttags',$tag);

				} // end of foreach

			}
			else
			{ // if Item 
				$this->db->insert('adttags', $tag);
			}
		return true;
		}// End of Primary If
		else
		{ // If the Array has nothing

			return false;
		
		}

	} // end of function insertTags($Tags)


} // end of User_model

?>