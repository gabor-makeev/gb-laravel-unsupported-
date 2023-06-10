<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function getNews(): array
    {
        return [
            'sports' => [
                [
                    'title' => 'dui ut ornare lectus',
                    'content' => 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi'
                ],
                [
                    'title' => 'facilisi cras fermentum odio',
                    'content' => 'id neque aliquam vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis'
                ],
                [
                    'title' => 'pretium fusce id velit',
                    'content' => 'vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies'
                ],
                [
                    'title' => 'convallis a cras semper',
                    'content' => 'ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at'
                ]
            ],
            'video games' => [
                [
                    'title' => 'ultricies lacus sed turpis',
                    'content' => 'ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra'
                ],
                [
                    'title' => 'habitasse platea dictumst quisque',
                    'content' => 'sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque massa placerat'
                ],
                [
                    'title' => 'donec adipiscing tristique risus',
                    'content' => 'ac placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed'
                ],
                [
                    'title' => 'risus nec feugiat in',
                    'content' => 'vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis dis parturient montes'
                ]
            ],
            'movies' => [
                [
                    'title' => 'justo eget magna fermentum',
                    'content' => 'orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl vel pretium'
                ],
                [
                    'title' => 'accumsan sit amet nulla',
                    'content' => 'id diam vel quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique sollicitudin'
                ],
                [
                    'title' => 'at urna condimentum mattis',
                    'content' => 'tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit amet porttitor eget dolor morbi non'
                ],
                [
                    'title' => 'congue quisque egestas diam',
                    'content' => 'posuere ac ut consequat semper viverra nam libero justo laoreet sit amet cursus sit amet dictum sit amet justo donec enim diam vulputate ut pharetra'
                ]
            ],
            'tech' => [
                [
                    'title' => 'eu feugiat pretium nibh',
                    'content' => 'arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt'
                ],
                [
                    'title' => 'imperdiet dui accumsan sit',
                    'content' => 'pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt'
                ],
                [
                    'title' => 'pretium viverra suspendisse potenti',
                    'content' => 'facilisis volutpat est velit egestas dui id ornare arcu odio ut sem nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis'
                ],
                [
                    'title' => 'tellus at urna condimentum',
                    'content' => 'imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada'
                ]
            ],
            'memes' => [
                [
                    'title' => 'commodo odio aenean sed',
                    'content' => 'dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique'
                ],
                [
                    'title' => 'sem fringilla ut morbi',
                    'content' => 'iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus'
                ],
                [
                    'title' => 'sagittis orci a scelerisque',
                    'content' => 'aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas'
                ],
                [
                    'title' => 'habitant morbi tristique senectus',
                    'content' => 'pharetra convallis posuere morbi leo urna molestie at elementum eu facilisis sed odio morbi quis commodo odio aenean sed adipiscing diam donec adipiscing tristique risus'
                ]
            ]
        ];
    }
}
