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

namespace TencentCloud\Hai\V20230812;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Hai\V20230812\Models as Models;

/**
 * @method Models\DescribeApplicationsResponse DescribeApplications(Models\DescribeApplicationsRequest $req) 查询应用
 * @method Models\DescribeInstanceNetworkStatusResponse DescribeInstanceNetworkStatus(Models\DescribeInstanceNetworkStatusRequest $req) 查询实例的网络配置及消耗情况
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询实例
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 查询地域列表
 * @method Models\DescribeScenesResponse DescribeScenes(Models\DescribeScenesRequest $req) 查询场景
 * @method Models\DescribeServiceLoginSettingsResponse DescribeServiceLoginSettings(Models\DescribeServiceLoginSettingsRequest $req) 查询服务登录配置
 * @method Models\InquirePriceRunInstancesResponse InquirePriceRunInstances(Models\InquirePriceRunInstancesRequest $req) 本接口 (InquirePriceRunInstances) 用于实例询价。
 * @method Models\RunInstancesResponse RunInstances(Models\RunInstancesRequest $req) 本接口 (RunInstances) 用于创建一个或多个指定配置的实例。
 * @method Models\StartInstanceResponse StartInstance(Models\StartInstanceRequest $req) 本接口 (StartInstance) 用于主动启动实例。
 * @method Models\StopInstanceResponse StopInstance(Models\StopInstanceRequest $req) 本接口 (StopInstance) 用于主动关闭实例。
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 本接口 (TerminateInstances) 用于主动退还实例。
 */

class HaiClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "hai.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "hai";

    /**
     * @var string
     */
    protected $version = "2023-08-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("hai")."\\"."V20230812\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
