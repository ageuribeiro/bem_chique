<?php
class Cart
{
    public function add(Product $product)
    {
        $inCart = false;
        if (count($this->getCart()['products']) > 0) {
            foreach ($this->getCart()['products'] as $productInCart) {
                if ($productInCart->getId() === $product->getId()) {
                    $quantity = $productInCart->getQuantity() + $product->getQuantity();
                    $productInCart->setQuantity($quantity);
                    $inCart = true;
                    break;
                }
            }
        }

        if (!$inCart) {
            $this->setProductsInCart($product);
        }
    }

    private function setProductsInCart($product)
    {
        $this->getCart()['products'][] = $product;
    }

    public function remove()
    {
    }

    public function getCart()
    {
        return $_SESSION['cart'] ?? [];
    }
}
