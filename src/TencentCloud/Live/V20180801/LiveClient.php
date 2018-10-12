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

namespace TencentCloud\Live\V20180801;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Live\V20180801\Models as Models;

/**
* @method Models\AddDelayLiveStreamResponse AddDelayLiveStream(Models\AddDelayLiveStreamRequest $req) 对流设置延播
* @method Models\DescribeLiveStreamOnlineInfoResponse DescribeLiveStreamOnlineInfo(Models\DescribeLiveStreamOnlineInfoRequest $req) 查询在线推流信息列表
* @method Models\DescribeLiveStreamOnlineListResponse DescribeLiveStreamOnlineList(Models\DescribeLiveStreamOnlineListRequest $req) 返回正在直播中的流列表
* @method Models\DescribeLiveStreamPublishedListResponse DescribeLiveStreamPublishedList(Models\DescribeLiveStreamPublishedListRequest $req) 返回已经推过流的流列表
* @method Models\DescribeLiveStreamStateResponse DescribeLiveStreamState(Models\DescribeLiveStreamStateRequest $req) 返回直播中、无推流或者禁播等状态
* @method Models\DropLiveStreamResponse DropLiveStream(Models\DropLiveStreamRequest $req) 断开推流连接，但可以重新推流
* @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) 禁止某条流的推送，可以预设某个时刻将流恢复。
* @method Models\ResumeDelayLiveStreamResponse ResumeDelayLiveStream(Models\ResumeDelayLiveStreamRequest $req) 恢复延迟播放设置
* @method Models\ResumeLiveStreamResponse ResumeLiveStream(Models\ResumeLiveStreamRequest $req) 恢复某条流的推送。
 */

class LiveClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "live.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-08-01";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("live")."\\"."V20180801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
