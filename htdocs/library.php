<?php
 
require __DIR__ . '/db_connection.php';
 
class ShopingCart
{
    protected $db;
 
    function __construct()
    {
        $this->db = DB();
    }
      
    public function getProducts()
    {
        $query = "SELECT *  FROM `products`";
        if (!$result = mysqli_query($this->db, $query)) {
            exit(mysqli_error($this->db));
        }
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
 
        return $data;
    }

    public function getProductDetails($id)
    {
        $id = mysqli_real_escape_string($this->db, $id);
        $query = "SELECT *  FROM `products` WHERE `id` = '$id'";
        if (!$result = mysqli_query($this->db, $query)) {
            exit(mysqli_error($this->db));
        }
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data['id'] = $row['id'];
                $data['title'] = $row['title'];
                $data['price'] = $row['price'];
                $data['quantity'] = 1;
            }
        }
 
        return $data;
    }
 
    public function addToCart($id)
    {
        $product = $this->getProductDetails($id);
 
        $isFound = false;
        $i = 0;
 
        if (!isset($_SESSION['shopping_cart']) || count($_SESSION['shopping_cart']) < 1)
        {
            $_SESSION['shopping_cart'] = array(0 => $product);
        } else {
 
            foreach ($_SESSION['shopping_cart'] as $item) {
                $i++;
                foreach ($item as $key => $value) {
                    if ($key == "id" && $value == $id) {
                        array_splice($_SESSION['shopping_cart'], $i - 1, 1, array([
                            'id' => $item['id'],
                            'title' => $item['title'],
                            'price' => $item['price'],
                            'quantity' => $item['quantity'] + 1,
                        ]));
                        $isFound = true;
                    }
                }
 
            }
            if ($isFound == false) {
                array_push($_SESSION['shopping_cart'], $product);
            }
        }	
        
    }
 
    public function removeProductFromCart($id)
    {
        unset($_SESSION['shopping_cart'][$id - 1]);
    }
}
 
?>