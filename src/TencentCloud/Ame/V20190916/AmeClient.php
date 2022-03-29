<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Ame\V20190916;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ame\V20190916\Models as Models;

/**
 * @method Models\BatchDescribeKTVMusicDetailsResponse BatchDescribeKTVMusicDetails(Models\BatchDescribeKTVMusicDetailsRequest $req) 根据 Id 列表查询歌曲的详细信息，包含基础信息及播放信息。
 * @method Models\CreateKTVRobotResponse CreateKTVRobot(Models\CreateKTVRobotRequest $req) 创建机器人，支持进入 RTC 房间，播放直播互动曲库歌曲。
 * @method Models\DescribeAuthInfoResponse DescribeAuthInfo(Models\DescribeAuthInfoRequest $req) 获取授权项目信息列表
 * @method Models\DescribeCloudMusicResponse DescribeCloudMusic(Models\DescribeCloudMusicRequest $req) 获取云音乐播放信息接口
 * @method Models\DescribeCloudMusicPurchasedResponse DescribeCloudMusicPurchased(Models\DescribeCloudMusicPurchasedRequest $req) 获取授权项目下已购云音乐列表
 * @method Models\DescribeItemByIdResponse DescribeItemById(Models\DescribeItemByIdRequest $req) 根据歌曲ID查询歌曲信息
 * @method Models\DescribeItemsResponse DescribeItems(Models\DescribeItemsRequest $req) 该服务后续会停用，不再建议使用
 * @method Models\DescribeKTVMusicDetailResponse DescribeKTVMusicDetail(Models\DescribeKTVMusicDetailRequest $req) 根据 Id 查询歌曲的详细信息，包含基础信息及播放信息。
 * @method Models\DescribeKTVMusicTagsResponse DescribeKTVMusicTags(Models\DescribeKTVMusicTagsRequest $req) 获取直播互动曲库标签分组信息和标签信息
 * @method Models\DescribeKTVPlaylistDetailResponse DescribeKTVPlaylistDetail(Models\DescribeKTVPlaylistDetailRequest $req) 根据歌单 Id 获取歌单详情，包括歌单的基础信息以及歌曲列表。
 * @method Models\DescribeKTVPlaylistsResponse DescribeKTVPlaylists(Models\DescribeKTVPlaylistsRequest $req) 获取直播互动曲库推荐歌单列表。
 * @method Models\DescribeKTVRobotsResponse DescribeKTVRobots(Models\DescribeKTVRobotsRequest $req) 获取机器人列表，支持 Id、状态等过滤条件。
 * @method Models\DescribeKTVSingerCategoriesResponse DescribeKTVSingerCategories(Models\DescribeKTVSingerCategoriesRequest $req) 获取直播互动曲库歌手分类信息
 * @method Models\DescribeKTVSingerMusicsResponse DescribeKTVSingerMusics(Models\DescribeKTVSingerMusicsRequest $req) 根据歌手id，返回该歌手下歌曲列表。



 * @method Models\DescribeKTVSingersResponse DescribeKTVSingers(Models\DescribeKTVSingersRequest $req) 根据过滤条件，返回匹配的歌手列表。
 * @method Models\DescribeKTVSuggestionsResponse DescribeKTVSuggestions(Models\DescribeKTVSuggestionsRequest $req) 获取直播互动曲库联想词
 * @method Models\DescribeKTVTopListResponse DescribeKTVTopList(Models\DescribeKTVTopListRequest $req) 获取直播互动曲库歌曲的周榜和月榜
 * @method Models\DescribeLyricResponse DescribeLyric(Models\DescribeLyricRequest $req) 根据接口的模式及歌曲ID来取得歌词信息或者波形图信息。
 * @method Models\DescribeMusicResponse DescribeMusic(Models\DescribeMusicRequest $req) 获取曲库包歌曲播放信息接口
 * @method Models\DescribeMusicSaleStatusResponse DescribeMusicSaleStatus(Models\DescribeMusicSaleStatusRequest $req) 根据音乐信息查询音乐是否在售
 * @method Models\DescribePackageItemsResponse DescribePackageItems(Models\DescribePackageItemsRequest $req) 获取曲库包下已核销歌曲列表接口
 * @method Models\DescribePackagesResponse DescribePackages(Models\DescribePackagesRequest $req) 获取已购曲库包列表接口
 * @method Models\DescribePkgOfflineMusicResponse DescribePkgOfflineMusic(Models\DescribePkgOfflineMusicRequest $req) 根据购买曲库包用户可查询已回退的歌曲信息
 * @method Models\DescribeStationsResponse DescribeStations(Models\DescribeStationsRequest $req) 该服务后续会停用，不再建议使用
 * @method Models\DestroyKTVRobotResponse DestroyKTVRobot(Models\DestroyKTVRobotRequest $req) 销毁机器人，机器人退出 RTC 房间。
 * @method Models\ModifyMusicOnShelvesResponse ModifyMusicOnShelves(Models\ModifyMusicOnShelvesRequest $req) 根据资源方，需要变更的参数，请求该接口进行变更，为空的参数默认为无变更
 * @method Models\PutMusicOnTheShelvesResponse PutMusicOnTheShelves(Models\PutMusicOnTheShelvesRequest $req) 根据资源方所传歌曲信息，进行歌曲上架，多个歌曲同时请求时，需构造复合结构进行请求
 * @method Models\ReportDataResponse ReportData(Models\ReportDataRequest $req) 客户上报用户数据功能，为了更好地为用户提供优质服务
 * @method Models\SearchKTVMusicsResponse SearchKTVMusics(Models\SearchKTVMusicsRequest $req) 根据搜索条件，返回匹配的歌曲列表。
 * @method Models\SyncKTVRobotCommandResponse SyncKTVRobotCommand(Models\SyncKTVRobotCommandRequest $req) 下发操作机器人指令，支持播放、暂停、恢复、歌单设置等操作指令，实现对机器人行为的控制。
 * @method Models\TakeMusicOffShelvesResponse TakeMusicOffShelves(Models\TakeMusicOffShelvesRequest $req) 根据资源方所传MusicId进行将歌曲进行下架，多个MusicId使用逗号隔开
 */

class AmeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ame.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ame";

    /**
     * @var string
     */
    protected $version = "2019-09-16";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ame")."\\"."V20190916\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
