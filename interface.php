<?php 

interface Template{
    public function setValue($name, $var);
    public function getHtml($template);
}
class WorkingTemaplate implements Template{
    private $vars =[];
    public function setValue($name, $var)
    {
        $this->vars[$name] = $var;
    }
    public function getHtml($template)
    {
        foreach($this->vars as $name=>$value)
        {
            $template = str_replace($name, $value, $template);
        }
        return $template;
    }
}