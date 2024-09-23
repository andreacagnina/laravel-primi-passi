<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $greeting = 'Hello World';
    return view('home', compact('greeting'));
})->name('greeting');

Route::get('/features', function () {
    $description = '

Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus ipsum sed interdum faucibus. Etiam cursus dapibus turpis in placerat. Duis condimentum nisl erat, quis suscipit lorem aliquam a. Maecenas rhoncus interdum vulputate. Maecenas erat odio, iaculis non diam tristique, vulputate pretium turpis. Vestibulum metus est, congue ac pulvinar sed, facilisis non nulla. Nullam vel congue magna, vulputate blandit risus. Mauris ultrices rhoncus urna quis consequat. Duis pretium elementum mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis in enim libero. Suspendisse potenti.

Duis non quam eget dolor feugiat ullamcorper. Donec feugiat odio sed finibus sollicitudin. In non nibh et mi vehicula venenatis. Fusce rhoncus, nisi in fermentum vestibulum, ligula nunc scelerisque risus, et placerat purus enim sed nisi. Aliquam non nibh id magna vestibulum efficitur. Proin gravida lorem lorem, vel aliquam lacus commodo sit amet. Sed ullamcorper nibh magna, ut convallis tortor ultrices eu. Phasellus rutrum fringilla justo non aliquet. Morbi ante augue, porta et semper id, venenatis dignissim ipsum. Sed quis varius felis, id tempor leo. Suspendisse finibus nunc ultricies erat convallis vestibulum.

Nunc mauris mauris, luctus id massa id, facilisis fringilla purus. Sed commodo hendrerit libero. Fusce pretium, nisi congue egestas tempor, nulla elit aliquet erat, congue maximus erat lacus viverra tortor. Quisque ac tempus sapien. Duis id dui convallis, varius magna et, accumsan orci. Pellentesque molestie, ex eget ultricies imperdiet, est sapien molestie libero, nec sodales odio felis id eros. Mauris efficitur turpis vel diam laoreet, vel sodales elit convallis.

Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce placerat arcu quis lectus facilisis aliquam. Vestibulum est neque, pretium sed dui sed, porttitor ultrices lacus. Aliquam fringilla quis dui semper vehicula. Sed non purus sit amet leo tristique elementum. Quisque pretium malesuada maximus. Fusce in ante vitae sem placerat sollicitudin. Proin finibus ex et lobortis interdum. Aenean a elit rutrum, dictum nunc quis, scelerisque massa. Etiam lacinia in nisi vitae tempor.

Aliquam aliquet dolor dui, quis accumsan purus mollis id. Donec ornare, erat in venenatis commodo, velit sem congue quam, dignissim pharetra nisi urna ac tellus. Etiam lobortis odio vel quam consectetur porta. In suscipit placerat risus vitae rutrum. Etiam quis lorem a nulla posuere elementum sed sit amet lacus. Aenean lacus urna, dignissim nec magna a, vehicula suscipit nunc. Fusce eu nibh ornare, commodo lacus sit amet, pulvinar nisl. Donec efficitur congue aliquam. Fusce vel nisi justo. Aliquam efficitur, arcu sed lobortis luctus, nisl quam dictum dui, nec bibendum nibh diam ornare nisl. Morbi quis sapien in urna malesuada auctor. Maecenas id sapien sapien. ';
    return view('features', compact('description'));
})->name('features');

Route::get('/pricing', function () {
    $price = '50.99€';
    return view('pricing', compact('price'));
})->name('pricing');
