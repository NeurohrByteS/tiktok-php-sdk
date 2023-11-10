<?php

namespace Msaaq\TikTok\Models;

class Content extends Model
{
    public float|int|null $price;
    public int|null $quantity;
    public string|null $content_id;
    public string|null $content_name;
    public string|null $content_category;
    public string|null $brand;

    public function setPrice(float|int $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function setQuantity(int $value): static
    {
        $this->quantity = $value;

        return $this;
    }

    public function setContentId(string $value): static
    {
        $this->content_id = $value;

        return $this;
    }

    public function setContentName(string $value): static
    {
        $this->content_name = $value;

        return $this;
    }

    public function setContentCategory(string $value): static
    {
        $this->content_category = $value;

        return $this;
    }

    public function setBrand(string $value): static
    {
        $this->brand = $value;

        return $this;
    }
}
