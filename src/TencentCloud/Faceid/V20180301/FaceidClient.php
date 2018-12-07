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

namespace TencentCloud\Faceid\V20180301;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Faceid\V20180301\Models as Models;

/**
* @method Models\DetectAuthResponse DetectAuth(Models\DetectAuthRequest $req) 实名核身鉴权。用于获取一次核身流程的BizToken。如果是微信平台，会同时返回一个URL，用作微信平台的跳转。
* @method Models\GetDetectInfoResponse GetDetectInfo(Models\GetDetectInfoRequest $req) 获取实名核身结果信息
 */

class FaceidClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "faceid.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-03-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("faceid")."\\"."V20180301\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
