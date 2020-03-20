<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategorysExcs;
use App\Ex_Category;
use App\Exercise;
use App\ImgCategory;
use App\ImgExc;
use App\LastMember;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class MangerAdmin extends Controller
{
    public function AdminCp(){
        $res = [
            'users' => null,
            'countAllUsers' => null,
            'excs' => null,
            'countAllExcs' => null,
            'poo' => null,

        ];
        $res['users'] = $this->GetInfoUsers()['users'];
        $res['countAllUsers'] = $this->GetInfoUsers()['countAllUsers'];
        $res['poo'] = $this->GetInfoUsers()['test'];
        $res['countAllExcs'] = $this->GetExcs()['countAllExcs'];
    $res['excs'] = $this->GetExcs()['excs'];
        return $res;
    }

    function GetInfoUsers(){
        $infoUsers = [
            'users' =>[],
            'countAllUsers' => User::all()->count(),
            'test' => null
        ];
        $now = now();
        $now->day -= 7;
        $newMember = User::all()->where('created_at', '>',$now);
        $index = 0;
        foreach ($newMember as &$item){
            if ($item->seen == false){
                $infoUsers['users'][$index]['user'] = $item;
                $infoUsers['users'][$index]['img'] = $item->img;
                $index++;
                User::query()->update(['seen' => true]);
            }
        }
        return $infoUsers;
    }

    function GetExcs(){
        $infoExcs = [
            'excs' =>[] ,
            'countAllExcs' => Exercise::all()->count(),
        ];
        $now = now();
        $now->day -= 7;
        $newExcs = Exercise::all()->where('created_at', '>',$now);
        $index = 0;
        foreach ($newExcs as &$item){
            if ($item->seen != false){
                $infoExcs['excs'][$index]['exc'] = $item;
                $infoExcs['excs'][$index]['img'] = $item->img;
                $index++;
                Exercise::query()->update(['seen' => true]);
            }
        }
        return $infoExcs;
    }

    public function CategoryExist(){
        $res = ['find' => true];
        if (Category::where('name',request('Category'))->first() == null){
            $res['find'] = false;
        }
        return $res;
    }

    public function AddCategory(){
        $res = [
          'status' =>false
        ];
        $category = new Category();
        $category->name = request('nameCategory');
        $category->save();
        $img = new ImgCategory();
        if (request('image') != 0) {
            $ext = explode('.', request('image'));
            $ext = $ext[count($ext) - 1];
            $now = time() . '.' . $ext;
            $img->nameImg =  $now;
            $img->idCategory = $category->id;
            $img->save();
            $res['status'] = true;
            move_uploaded_file(request('image'), './img/' . $now);
        }else{
            $img->idCategory = $category->id;
            $img ->nameImg = 'defaultCategory.png';
            $img->save();
        }
        $res['status'] = true;
        return $res;
    }

    public function GetAllCategories(){
        $res = ['categories' => Category::all(),];
        return $res;
    }

    public function DeleteCategory(){
        $res = Category::query()->where('name',strval(request('name')));
        $res->delete();
        return $res;
    }

    public function AddExc(){
        $exc = new Exercise();
        $exc->title = request('title');
        $exc->description = request('description');
        $exc->level = request('level');
        $exc->ageClass = request('ageClass');
        $exc->orderInTrack = request('orderInTrack');
        $exc->achiveRank = request('achiveRank');
        $exc->input = request('input');
        $exc->output = request('output');
        $exc->countSolved = request('minRankRequired');
        $categories = request('categories');
        $exc->save();
        $img = new ImgExc();
        $img->idExc = $exc->id;
        $img->save();
        $categories = explode(",",$categories);
        foreach($categories as &$item){
            $categorie = new CategorysExcs();
            $categorie->idExc = $exc->id;
            $categorie->idCategory = Category::query()->where('name',$item)->first()->id;
            $categorie->save();
        }
        return null;
    }

    public function getAllExcs(){
        $infoExcs = [
            'excs' =>[] ,
        ];
        $newExcs = Exercise::all();
        $index = 0;
        foreach ($newExcs as &$item){
            $infoExcs['excs'][$index]['exc'] = $item;
            $infoExcs['excs'][$index]['img'] = $item->img;
            $indexCategory = 0;
            foreach ($item->categories as &$category){
                $infoExcs['excs'][$index]['categories'][$indexCategory] = $category->category;
                $indexCategory++;
            }
            $infoUsers['excs'][$index]['img'] = $item->categories;
            $index++;
            Exercise::query()->update(['seen' => true]);
        }
        return $infoExcs;
    }

    public function DeleteExc(){
        $res = Exercise::query()->where('title',strval(request('name')));
        $res->delete();
        return $res;
    }

    public function getAllUsers(){
        $infoUsers = [
            'users' =>[],
            'countAllUsers' => User::all()->count(),
        ];
        $newMember = User::all();
        $index = 0;
        foreach ($newMember as &$item){
            $infoUsers['users'][$index]['user'] = $item;
            $infoUsers['users'][$index]['img'] = $item->img;
            $index++;
            User::query()->update(['seen' => true]);
        }
        return $infoUsers;
    }
}

