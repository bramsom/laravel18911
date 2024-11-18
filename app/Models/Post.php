<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


const BOORADOR =1;
const PUBLICADO=2;
//relacion uno a muchos inversa
public function User(){
return $this->BelongsTo (User::class);
}
public function Category() {
return $this->BelongsTo (Category::class);
}
//relacion muchos a muchos
public function Tags(){
return $this->BelongsToMany (Tag::class);
}
//Relacion uno a muchos polimorfica
public function Images(){
return $this->morphMany (Image::class, 'imageable');
}
}
