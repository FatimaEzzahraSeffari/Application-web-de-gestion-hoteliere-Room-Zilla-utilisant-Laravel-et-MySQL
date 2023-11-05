<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
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
    public function getRoom_type()
    {
    return $this->attributes['room_type'];
    }
    public function setRoom_type($room_type)
    {
    $this->attributes['room_type'] = $room_type;
    }
    public function getNo_of_room()
    {
    return $this->attributes['no_of_room'];
    }
    public function setNo_of_room($no_of_room)
    {
    $this->attributes['no_of_room'] = $no_of_room;
    }
    public function getNo_of_children()
    {
    return $this->attributes['no_of_children'];
    }
    public function setNo_of_children($no_of_children)
    {
    $this->attributes['no_of_children'] = $no_of_children;
    }
    public function getNo_of_adult()
    {
    return $this->attributes['no_of_adult'];
    }
    public function setNo_of_adult($no_of_adult)
    {
    $this->attributes['no_of_adult'] = $no_of_adult;
    }
    public function getCheckin_date()
    {
    return $this->attributes['checkin_date'];
    }
    public function setCheckin_date($checkin_date)
    {
    $this->attributes['checkin_date'] = $checkin_date;
    }
    public function getCheckout_date()
    {
    return $this->attributes['checkout_date'];
    }
    public function setCheckout_date($checkout_date)
    {
    $this->attributes['checkout_date'] = $checkout_date;
    }
    public function getSpecial_Requests()
    {
    return $this->attributes['special_Requests'];
    }
    public function setSpecial_Requests($special_Requests)
    {
    $this->attributes['special_Requests'] = $special_Requests;
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
