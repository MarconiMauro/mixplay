<?php 

namespace App;

Class UsersCollection
{
    private $users = [];

    public function __construct(array $data = [])
    {
        foreach ($data as $item)
        {
            $user = new User;
            $user->setId($item->id);
            $user->setName($item->name);
            $user->setUsername($item->username);
            $user->setEmail($item->email);
            $user->setPhone($item->phone);
            $user->setWebsite($item->website);
            $user->setCompany($item->company);
            $this->users[] = $user;
            var_dump($user);

            $address = new Address;
            $address->setStreet($item->address->street);
            $address->setSuite($item->address->suite);
            $address->setCity($item->address->city);
            $address->setZipCode($item->address->zipcode);
            $this->users[] = $address;
            var_dump($address);


            $geo = new GEO;
            $geo->setLat($item->address->geo->lat);
            $geo->setLng($item->address->geo->lng);
            $this->users[] = $geo;
            var_dump($geo);



        }

    }
    public function get()
    {
        return $this->users;
    }
}
