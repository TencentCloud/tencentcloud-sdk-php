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

namespace TencentCloud\Hai\V20230812;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Hai\V20230812\Models as Models;

/**
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) 本接口（CreateApplication）用于对HAI实例制作自定义应用。
 * @method Models\CreateMuskPromptResponse CreateMuskPrompt(Models\CreateMuskPromptRequest $req) 创建musk prompt 任务
 * @method Models\DescribeApplicationsResponse DescribeApplications(Models\DescribeApplicationsRequest $req) 本接口（DescribeApplications）用于查询应用
 * @method Models\DescribeInstanceNetworkStatusResponse DescribeInstanceNetworkStatus(Models\DescribeInstanceNetworkStatusRequest $req) 本接口（DescribeInstanceNetworkStatus）用于查询实例的网络配置及消耗情况
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口（DescribeInstances）用户查询实例
 * @method Models\DescribeMuskPromptsResponse DescribeMuskPrompts(Models\DescribeMuskPromptsRequest $req) 获取prompt任务列表
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 本接口（DescribeRegions）用于查询地域列表
 * @method Models\DescribeScenesResponse DescribeScenes(Models\DescribeScenesRequest $req) 本接口（DescribeScenes）用于查询场景
 * @method Models\DescribeServiceLoginSettingsResponse DescribeServiceLoginSettings(Models\DescribeServiceLoginSettingsRequest $req) 本接口（DescribeServiceLoginSettings）用于查询服务登录配置
 * @method Models\InquirePriceRunInstancesResponse InquirePriceRunInstances(Models\InquirePriceRunInstancesRequest $req) 本接口 (InquirePriceRunInstances) 用于实例询价。
 * @method Models\InquirePriceUpdateServiceConfigsResponse InquirePriceUpdateServiceConfigs(Models\InquirePriceUpdateServiceConfigsRequest $req) 本接口(InquirePriceUpdateServiceConfigs)用于更新服务配置询价
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) 本接口 (ResetInstancesPassword) 用于重置实例的用户密码。
 * @method Models\ResizeInstanceDiskResponse ResizeInstanceDisk(Models\ResizeInstanceDiskRequest $req) 本接口（ResizeInstanceDisk）用于对指定HAI实例进行扩容云硬盘操作。
 * @method Models\RunInstancesResponse RunInstances(Models\RunInstancesRequest $req) 本接口 (RunInstances) 用于创建一个或多个指定配置的实例。
 * @method Models\StartInstanceResponse StartInstance(Models\StartInstanceRequest $req) 本接口 (StartInstance) 用于主动启动实例。
‘运行中’、‘预付费’的实例不支持启动实例
 * @method Models\StopInstanceResponse StopInstance(Models\StopInstanceRequest $req) 本接口 (StopInstance) 用于主动关闭实例。
‘已关机’、‘预付费’的实例不支持关机
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 本接口 (TerminateInstances) 用于主动退还实例。
 * @method Models\UpdateServiceConfigsResponse UpdateServiceConfigs(Models\UpdateServiceConfigsRequest $req) 本接口(UpdateServiceConfigs)用于更新服务配置
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
