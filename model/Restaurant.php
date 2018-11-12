<?php
    class Restaurant
    {
        private $id;
        private $name;
        private $image;
        private $suburb;
        private $address;
        private $price;
        private $menu;
        private $food_of_day;
        private $homemade;
        private $american;
        private $mexican;
        private $asian;

        public function __construct($id, $name, $image, $suburb, $address, $price, $menu, 
                                    $fod, $hm, $american, $mexican, $asian)
        {
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->suburb = $suburb;
            $this->address = $address;
            $this->price = $price;
            $this->menu = $menu;
            $this->food_of_day = $fod;
            $this->homemade = $hm;
            $this->american = $american;
            $this->mexican = $mexican;
            $this->asian = $asian;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getImage()
        {
            return $this->image;
        }

        public function getSuburb()
        {
            return $this->suburb;
        }

        public function getAddress()
        {
            return $this->address;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function getMenu()
        {
            return $this->menu;
        }

        public function getFOD()
        {
            return $this->food_of_day;
        }
        
        public function getHomeMade()
        {
            return $this->homemade;
        }
        
        public function getAmerican()
        {
            return $this->american;
        }
        
        public function getMexican()
        {
            return $this->mexican;
        }
        
        public function getAsian()
        {
            return $this->asian;
        }
        
    }
?>