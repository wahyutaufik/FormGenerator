<?php

namespace FormGenerator\HtmlTemplate;

class Checkbox{
    public function template(){
        return  '<input [type] [name] [id] [class] [value] [checked]>';
    }
    public function additionalTag(){
        return '<div>[content]</div>';
    }
}

