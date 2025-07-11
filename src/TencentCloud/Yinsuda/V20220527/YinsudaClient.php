<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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

namespace TencentCloud\Yinsuda\V20220527;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Yinsuda\V20220527\Models as Models;

/**
 * @method Models\ApplyChorusResponse ApplyChorus(Models\ApplyChorusRequest $req) 申请合唱相关信息，用于标记用户的演唱是在合唱场景下。
 * @method Models\BatchDescribeKTVMusicDetailsResponse BatchDescribeKTVMusicDetails(Models\BatchDescribeKTVMusicDetailsRequest $req) 批量获取歌曲详细信息，包括：歌词下载链接、播放凭证、音高数据下载链接信息等。
 * @method Models\CreateKTVRobotResponse CreateKTVRobot(Models\CreateKTVRobotRequest $req) 创建机器人，支持进入 RTC 房间，播放曲库歌曲。
 * @method Models\DescribeKTVMatchMusicsResponse DescribeKTVMatchMusics(Models\DescribeKTVMatchMusicsRequest $req) 根据输入的规则匹配曲库中的歌曲。
 * @method Models\DescribeKTVMusicAccompanySegmentUrlResponse DescribeKTVMusicAccompanySegmentUrl(Models\DescribeKTVMusicAccompanySegmentUrlRequest $req) 获取歌曲伴奏片段链接，可用于抢唱
 * @method Models\DescribeKTVMusicAccompanySegmentUrlVipResponse DescribeKTVMusicAccompanySegmentUrlVip(Models\DescribeKTVMusicAccompanySegmentUrlVipRequest $req) 获取歌曲伴奏高潮的开始、结束时间，可用于抢唱
 * @method Models\DescribeKTVMusicsByTagResponse DescribeKTVMusicsByTag(Models\DescribeKTVMusicsByTagRequest $req) 通过标签过滤歌曲列表。
 * @method Models\DescribeKTVPlaylistDetailResponse DescribeKTVPlaylistDetail(Models\DescribeKTVPlaylistDetailRequest $req) 根据歌单 Id 获取歌单详情。
 * @method Models\DescribeKTVPlaylistsResponse DescribeKTVPlaylists(Models\DescribeKTVPlaylistsRequest $req) 获取歌单列表。
 * @method Models\DescribeKTVRobotsResponse DescribeKTVRobots(Models\DescribeKTVRobotsRequest $req) 获取机器人列表，支持 Id、状态等过滤条件。
 * @method Models\DescribeKTVSuggestionsResponse DescribeKTVSuggestions(Models\DescribeKTVSuggestionsRequest $req) 根据关键词获取联想词列表。
 * @method Models\DescribeKTVTagsResponse DescribeKTVTags(Models\DescribeKTVTagsRequest $req) 获取标签分组及分组下的标签列表信息。
 * @method Models\DescribeLiveVipTradeInfosResponse DescribeLiveVipTradeInfos(Models\DescribeLiveVipTradeInfosRequest $req) 批量获取直播会员充值流水详细信息，包括：流水号，订单状态，下订单时间等
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) 获取用户信息，包括是否为直播会员，及直播会员信息等
 * @method Models\DescribeVipUserInfoResponse DescribeVipUserInfo(Models\DescribeVipUserInfoRequest $req) 获取会员信息：获取用户是否开通会员
 * @method Models\DestroyKTVRobotResponse DestroyKTVRobot(Models\DestroyKTVRobotRequest $req) 销毁机器人，机器人退出 RTC 房间。
 * @method Models\RechargeLiveVipResponse RechargeLiveVip(Models\RechargeLiveVipRequest $req) 充值直播会员，使该用户可以在直播场景使用
 * @method Models\RechargeVipResponse RechargeVip(Models\RechargeVipRequest $req) 充值会员
 * @method Models\SearchKTVMusicsResponse SearchKTVMusics(Models\SearchKTVMusicsRequest $req) 根据关键词搜索歌曲，返回相关歌曲列表。
 * @method Models\SyncKTVRobotCommandResponse SyncKTVRobotCommand(Models\SyncKTVRobotCommandRequest $req) 下发操作机器人指令，支持播放、暂停、恢复、歌单设置等操作指令，实现对机器人行为的控制。
 */

class YinsudaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "yinsuda.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "yinsuda";

    /**
     * @var string
     */
    protected $version = "2022-05-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("yinsuda")."\\"."V20220527\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
