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

namespace TencentCloud\Tcex\V20200727;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcex\V20200727\Models as Models;

/**
 * @method Models\DescribeInvocationResultResponse DescribeInvocationResult(Models\DescribeInvocationResultRequest $req) 产品控制台已经下线

获取服务调用结果。和InvokeService接口配置合适，其InvokeId参数为InvokeService接口返回的RequestId。
 * @method Models\InvokeServiceResponse InvokeService(Models\InvokeServiceRequest $req) 产品控制台已经下线

通过传入文档url，测试服务算法。此接口需要和DescribeInvocationResult接口配置使用，该接口使用InvokeService返回的RequestId作为InvokeId参数，用于查询调用结果。
 */

class TcexClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcex.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcex";

    /**
     * @var string
     */
    protected $version = "2020-07-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcex")."\\"."V20200727\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
