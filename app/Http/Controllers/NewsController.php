<?php

namespace App\Http\Controllers;

use App\Models\News; // <-- อย่าลืม import Model เข้ามา
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * แสดงหน้ารวมข่าวทั้งหมด
     */
    public function index()
    {
        // ดึงข้อมูลข่าวทั้งหมดจากฐานข้อมูล
        $news = News::all(); 
        
        // ส่งตัวแปรชื่อ $news ไปที่ view ชื่อ 'news'
        return view('news', compact('news'));
    }

    /**
     * แสดงรายละเอียดข่าว 1 ชิ้น
     */
    public function show(string $id)
    {
        // ค้นหาข่าวจาก ID ที่ได้รับ
        $news = News::find($id);

        // ส่งตัวแปรชื่อ $news ไปที่ view ชื่อ 'news-detail'
        return view('news-detail', compact('news'));
    }
}