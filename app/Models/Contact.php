<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function getId()
    {
    return $this->attributes['id'];
    }
    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }
    public function getName()
    {
    return $this->attributes['name'];
    }
    public function setName($name)
    {
    $this->attributes['name'] = $name;
    }
    public function getEmail()
    {
    return $this->attributes['email'];
    }
    public function setEmail($email)
    {
    $this->attributes['email'] = $email;
    }
    public function getPhone()
    {
    return $this->attributes['phone'];
    }
    public function setPhone($phone)
    {
    $this->attributes['phone'] = $phone;
    }
    public function getCountry()
    {
    return $this->attributes['country'];
    }
    public function setCountry($country)
    {
    $this->attributes['country'] = $country;
    }
    public function getGender()
    {
    return $this->attributes['gender'];
    }
    public function setGender($gender)
    {
    $this->attributes['gender'] = $gender;
    }
    public function getMessage()
    {
    return $this->attributes['message'];
    }
    public function setMessage($message)
    {
    $this->attributes['message'] = $message;
    }
    public function getCreatedAt()
    {
    return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
    $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
    return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
    $this->attributes['updated_at'] = $updatedAt;
    }
}
