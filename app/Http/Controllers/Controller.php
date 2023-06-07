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
            'Sports' => [
                [
                    'Title' => 'dui ut ornare lectus',
                    'Content' => 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi'
                ],
                [
                    'Title' => 'facilisi cras fermentum odio',
                    'Content' => 'id neque aliquam vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis'
                ],
                [
                    'Title' => 'pretium fusce id velit',
                    'Content' => 'vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies'
                ],
                [
                    'Title' => 'convallis a cras semper',
                    'Content' => 'ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at'
                ]
            ],
            'Video Games' => [
                [
                    'Title' => 'ultricies lacus sed turpis',
                    'Content' => 'ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra'
                ],
                [
                    'Title' => 'habitasse platea dictumst quisque',
                    'Content' => 'sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque massa placerat'
                ],
                [
                    'Title' => 'donec adipiscing tristique risus',
                    'Content' => 'ac placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed'
                ],
                [
                    'Title' => 'risus nec feugiat in',
                    'Content' => 'vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis dis parturient montes'
                ]
            ],
            'Movies' => [
                [
                    'Title' => 'justo eget magna fermentum',
                    'Content' => 'orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl vel pretium'
                ],
                [
                    'Title' => 'accumsan sit amet nulla',
                    'Content' => 'id diam vel quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique sollicitudin'
                ],
                [
                    'Title' => 'at urna condimentum mattis',
                    'Content' => 'tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit amet porttitor eget dolor morbi non'
                ],
                [
                    'Title' => 'congue quisque egestas diam',
                    'Content' => 'posuere ac ut consequat semper viverra nam libero justo laoreet sit amet cursus sit amet dictum sit amet justo donec enim diam vulputate ut pharetra'
                ]
            ],
            'Tech' => [
                [
                    'Title' => 'eu feugiat pretium nibh',
                    'Content' => 'arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt'
                ],
                [
                    'Title' => 'imperdiet dui accumsan sit',
                    'Content' => 'pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt'
                ],
                [
                    'Title' => 'pretium viverra suspendisse potenti',
                    'Content' => 'facilisis volutpat est velit egestas dui id ornare arcu odio ut sem nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis'
                ],
                [
                    'Title' => 'tellus at urna condimentum',
                    'Content' => 'imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada'
                ]
            ],
            'Memes' => [
                [
                    'Title' => 'commodo odio aenean sed',
                    'Content' => 'dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique'
                ],
                [
                    'Title' => 'sem fringilla ut morbi',
                    'Content' => 'iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus'
                ],
                [
                    'Title' => 'sagittis orci a scelerisque',
                    'Content' => 'aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas'
                ],
                [
                    'Title' => 'habitant morbi tristique senectus',
                    'Content' => 'pharetra convallis posuere morbi leo urna molestie at elementum eu facilisis sed odio morbi quis commodo odio aenean sed adipiscing diam donec adipiscing tristique risus'
                ]
            ]
        ];
    }
}
