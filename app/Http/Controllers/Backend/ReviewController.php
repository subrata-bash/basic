<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ReviewController extends Controller
{
    public function allReview()
    {
        $reviews = Review::latest()->get();
        return view('admin.backend.review.all_review', compact('reviews'));
    }

    public function addReview()
    {
        return view('admin.backend.review.add_review');
    }

    public function storeReview(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $nameGen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(60, 60)->save('upload/review/' . $nameGen);
            $save_url = 'upload/review/' . $nameGen;

            Review::create([
               'name' => $request->name,
               'position' => $request->position,
               'message' => $request->message,
                'image' => $save_url,
            ]);
        }
        $notification = array(
            'message' => 'Review Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.review')->with($notification);

    }
}
