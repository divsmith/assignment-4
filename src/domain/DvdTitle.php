<?php

class DvdTitle {
    protected $asin;
    protected $title;
    protected $price;

    public function asin()
    {
        return $this->asin;
    }

    public function title()
    {
        return $this->title;
    }

    public function price()
    {
        return $this->price;
    }

    public function SetAsin($asin)
    {
        if (!is_string($asin))
        {
            return false;
        }

        $this->asin = $asin;
        return true;
    }

    public function SetTitle($title)
    {
        if (!is_string($title))
        {
            return false;
        }

        $this->title = $title;
        return true;
    }

    public function SetPrice($price)
    {
        if (!is_float($price))
        {
            return false;
        }

        $this->price = $price;
        return true;
    }
}