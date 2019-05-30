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

namespace TencentCloud\Bizlive\V20190313;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bizlive\V20190313\Models as Models;

/**
* @method Models\DescribeStreamPlayInfoListResponse DescribeStreamPlayInfoList(Models\DescribeStreamPlayInfoListRequest $req) 查询播放数据，支持按流名称查询详细播放数据，也可按播放域名查询详细总数据。
* @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) 禁止某条流的推送，可以预设某个时刻将流恢复。
* @method Models\RegisterIMResponse RegisterIM(Models\RegisterIMRequest $req) 注册聊天室
 */

class BizliveClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "bizlive.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-03-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("bizlive")."\\"."V20190313\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
