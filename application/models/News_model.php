<?php
class News_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    public function get_news($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), '-', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }

    public function delete_item($id)
    {
        return $this->db->delete('news', array('id' => $id));
    }

    public function update_news_item($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('news', $data);
    }
}
