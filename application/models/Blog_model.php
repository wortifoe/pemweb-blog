<?php
Class Blog_model extends CI_Model
{
public function getBlogs()
{
    $query = $this->db->get("blog");
    return $query->result_array();
}
public function getSingleBlog($field,$value)
    {
        $this->db->where($field,$value);
        $query = $this->db->get('blog');
        return $query->row_array();
    }
public function insertBlog($data)
{
    $this->db->insert('blog',$data);
    return $this->db->insert_id();
}

public function updateBlog($id,$post)
{
    $this->db->where('id',$id);
    $this->db->update('blog',$post);
    return $this->db->affected_rows();
}
}
?>