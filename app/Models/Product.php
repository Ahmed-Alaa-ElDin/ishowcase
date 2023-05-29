<?php

namespace App\Models;

abstract class Product
{
    protected $id;
    protected $pid;
    protected $type;
    protected $model_number;
    protected $model_case;
    protected $water_resistance;
    protected $movement;
    protected $caliber;
    protected $power_reserve;
    protected $bracelet;
    protected $dial;
    protected $large_title;
    protected $small_title;
    protected $description;
    protected $price;

    public function __construct(
        $id,
        $pid,
        $type,
        $model_number,
        $model_case,
        $water_resistance,
        $movement,
        $caliber,
        $power_reserve,
        $bracelet,
        $dial,
        $large_title,
        $small_title,
        $description,
        $price
    ) {
        $this->id = $id;
        $this->pid = $pid;
        $this->type = $type;
        $this->model_number = $model_number;
        $this->model_case = $model_case;
        $this->water_resistance = $water_resistance;
        $this->movement = $movement;
        $this->caliber = $caliber;
        $this->power_reserve = $power_reserve;
        $this->bracelet = $bracelet;
        $this->dial = $dial;
        $this->large_title = $large_title;
        $this->small_title = $small_title;
        $this->description = $description;
        $this->price = $price;
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
