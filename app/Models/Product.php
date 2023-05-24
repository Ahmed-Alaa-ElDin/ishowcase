<?php

namespace App\Models;

abstract class Product
{
    public function __construct(
        protected int $id,
        protected int $pid,
        protected string $type,
        protected int $model_number,
        protected string $model_case,
        protected string $water_resistance,
        protected string $movement,
        protected string $caliber,
        protected string $power_reserve,
        protected string $bracelet,
        protected string $dial,
        protected string $large_title,
        protected string $small_title,
        protected string $description,
        protected float $price,
    ) {
        # code...
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPid(): int
    {
        return $this->pid;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getModelNumber(): int
    {
        return $this->model_number;
    }

    public function getModelCase(): string
    {
        return $this->model_case;
    }

    public function getWaterResistance(): string
    {
        return $this->water_resistance;
    }

    public function getMovement(): string
    {
        return $this->movement;
    }

    public function getCaliber(): string
    {
        return $this->caliber;
    }

    public function getPowerReserve(): string
    {
        return $this->power_reserve;
    }

    public function getBracelet(): string
    {
        return $this->bracelet;
    }

    public function getDial(): string
    {
        return $this->dial;
    }

    public function getLargeTitle(): string
    {
        return $this->large_title;
    }

    public function getSmallTitle(): string
    {
        return $this->small_title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
