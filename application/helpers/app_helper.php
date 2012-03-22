<?php

function xdebug($v)
{
    echo '<pre>' . print_r($v, 1) . '</pre>';
}

function create_unique_slug($string, $table, $field='slug', $key=NULL, $value=NULL)
{
    $t = & get_instance();

    $slug = url_title($string);
    $slug = strtolower($slug);
    $i = 0;
    $params = array();
    $params[$field] = $slug;

    if ( $key )
        $params["$key !="] = $value;

    while ($t->db->where($params)->get($table)->num_rows()) {
        if ( !preg_match('/-{1}[0-9]+$/', $slug) ) {
            $slug .= '-' . ++$i;
        } else {
            $slug = preg_replace('/[0-9]+$/', ++$i, $slug);
        }
        $params [$field] = $slug;
    }
    return $slug;
}

function create_pagination($segment, $total, $limit, $uri_segment)
{
    $CI = & get_instance();
    $CI->load->library('pagination');
    $config['full_tag_open'] = '<div class="pagination"><ul>';
    $config['full_tag_close'] = '</ul></div >';
    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="' . current_url() . '">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['base_url'] = site_url($segment);
    $config['total_rows'] = $total;
    $config['per_page'] = $limit;
    $config['uri_segment'] = $uri_segment;

    $CI->pagination->initialize($config);

    return $CI->pagination->create_links();
}
