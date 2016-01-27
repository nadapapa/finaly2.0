<?php
namespace App\Finaly;


class Finaly
{
    private $url;
    private $page;
    private $ch;

    /**
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        $this->ch = curl_init($this->url);

        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, false);

        $this->page = curl_exec($this->ch);

        curl_close($this->ch);

        return $this->page;
    }
}