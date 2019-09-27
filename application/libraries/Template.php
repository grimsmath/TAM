<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
    public $template_data = array();

    function load($template = '',
                  $view = '',
                  $view_data = array(),
                  $return = false) {
        $CI =& get_instance();

        $data = [
            'contents' => $CI->load->view($view, $view_data, TRUE)
        ];

        return $CI->load->view($template,
                               $data,
                               $return);
    }
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */