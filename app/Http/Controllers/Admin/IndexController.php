<?php
/**
 * Created by IntelliJ IDEA.
 * User: feizhugame
 * Date: 2017/9/5
 * Time: 12:26
 */

namespace App\Http\Controllers\Admin;


class IndexController extends BaseController
{
    public function index()
    {
        return view('admin.Index.index');
    }

    public function welcome()
    {
        
    }

    public function outLogin()
    {
        
    }

    public function getLeftMenu()
    {
        $menu = [
            [
                'title' => '后台首页',
                'icon' => 'larry-neirong',
                'href' => route('admin.index.welcome')
            ],
            [
                'title' => '用户管理',
                'icon' => 'larry-neirong',
                'href' => route('admin.member.index')
            ],
            [
                'title' => '专辑管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '新增专辑',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.album.create')
                    ],
                    [
                        'title' => '专辑列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.album.index')
                    ],
                ],
            ],
            [
                'title' => '视频管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '新增视频',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.video.create')
                    ],
                    [
                        'title' => '视频列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.video.index')
                    ],
                ]
            ],
            [
                'title' => '文章管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '发布文章',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.article.create')
                    ],
                    [
                        'title' => '文章列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.article.index')
                    ]
                ]
            ],
            [
                'title' => '分类管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '新增分类',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.type.create')
                    ],
                    [
                        'title' => '分类列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.type.index')
                    ]
                ],
            ],
            [
                'title' => '标签管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '新增标签',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.tag.create')
                    ],
                    [
                        'title' => '标签列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.tag.index')
                    ]
                ]
            ],
            [
                'title' => '演员管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '演员类型',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.actor.create')
                    ],
                    [
                        'title' => '演员列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.actor.index')
                    ]
                ]
            ],
            [
                'title' => '缩略图管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '新增缩略图',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.thumb.create')
                    ],
                    [
                        'title' => '缩略图列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.thumb.index')
                    ]
                ],
            ],
            [
                'title' => '解析类型管理',
                'icon' => 'larry-neirong',
                'children' => [
                    [
                        'title' => '新增解析类型',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.parseType.create')
                    ],
                    [
                        'title' => '解析类型列表',
                        'icon' => 'larry-neirong',
                        'href' => route('admin.parseType.index')
                    ]
                ]
            ],
            [
                'title' => '会员观看记录',
                'icon' => 'larry-neirong',
                'href' => route('admin.memberWatchRecord.create')
            ],
        ];
        return $this->successRender("成功", $menu);
    }
}