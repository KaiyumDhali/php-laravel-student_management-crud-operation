<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    private static $course,$image,$imageName,$directory,$imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        =$request->file('image');
        self::$imageName    =self::$image->getClientOriginalName();
        self::$directory    ='img/Course-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function newCourse($request)
    {


        self::$course =new Student();
        self::$course->title     = $request->title;
        self::$course->name      = $request->name;
        self::$course->fee       = $request->fee;
        self::$course->duration  = $request->duration;
        self::$course->date      = $request->date;
        self::$course->objective = $request->objective;
        self::$course->details   = $request->details;
        self::$course->image     = self::getImageUrl($request);

        self::$course->save();

    }



    public static function updateStudent($request,$id)
    {
        self::$course = Student::find($id);

        if($request->file('image'))
        {

            if (file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }

            self::$imageUrl = self::getImageUrl($request);

        }

        else
        {
            self::$imageUrl = self::$course->image;
        }
        self::$course->title     = $request->title;
        self::$course->name      = $request->name;
        self::$course->fee       = $request->fee;
        self::$course->duration  = $request->duration;
        self::$course->date      = $request->date;
        self::$course->objective = $request->objective;
        self::$course->details   = $request->details;
        self::$course->image     = self::$imageUrl;

        self::$course->save();
    }

    public static function deleteStudent($id)

    {
        self::$course = Student::find($id);

        if (file_exists(self::$course->image))

        {
            unlink(self::$course->image);
        }

        self::$course->delete();
    }
}
