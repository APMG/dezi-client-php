<?php

class Dezi_Response {

    public $results;
    public $total;
    public $search_time;
    public $build_time;
    public $query;
    public $fields;
    public $facets;
    protected $VERSION = '0.001000';

    /**
     *
     *
     * @param unknown $args (optional)
     */
    public function __construct($args=array()) {
        foreach ($args as $k=>$v) {
            $self->$k = $v;
        }

    }


}
