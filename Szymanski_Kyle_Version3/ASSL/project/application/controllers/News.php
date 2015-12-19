<?php
class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->database();
    }

    public function index()
    {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'Vape Forum!';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a Vape Post';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');

        } else {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }

    public function update()
    {
        $id = $this->uri->segment(3);
        $data['title'] = 'Edit a Vape item';
        $data['success'] = 0;

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text','text','required');

        if($this->form_validation->run())
        {
            $data['success'] = $this->news_model->update_news($id);
        }

        $data['news_item'] = $this->news_model->get_news($slug = FALSE);
        if(empty($data['news_item']))
        {
            show_404();
        }

        $this->load->view('templates/header',$data);
        $this->load->view('news/update',$data);
        $this->load->view('templates/footer');
    }



    public function delete($id) {
        $this->news_model->delete_news($id);
        $this->load->helper('url');
        $this->index();
    }

    public function edit($slug)
    {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = 'Edit: '.$data['news_item']['title'];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'text', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->news_model->update_news( $this->input->post('id'),
                $this->input->post('title'),
                $this->input->post('text'));


            $data['news_item'] = $this->news_model->get_news($slug);
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer', $data);
        }
    }
}