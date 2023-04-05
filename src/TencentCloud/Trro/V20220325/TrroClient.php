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

namespace TencentCloud\Trro\V20220325;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trro\V20220325\Models as Models;

/**
 * @method Models\BatchDeleteDevicesResponse BatchDeleteDevices(Models\BatchDeleteDevicesRequest $req) 用于批量删除设备
 * @method Models\BatchDeletePolicyResponse BatchDeletePolicy(Models\BatchDeletePolicyRequest $req) 用于批量删除修改权限配置
 * @method Models\BoundLicensesResponse BoundLicenses(Models\BoundLicensesRequest $req) 为推流设备绑定license，优先绑定到期时间最近的，到期时间相同优先绑定月包
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 用于创建设备
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 用于创建项目
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 用于删除项目
 * @method Models\DescribeDeviceInfoResponse DescribeDeviceInfo(Models\DescribeDeviceInfoRequest $req) 用于获取指定设备信息
 * @method Models\DescribeDeviceListResponse DescribeDeviceList(Models\DescribeDeviceListRequest $req) 用于获取设备信息列表
 * @method Models\DescribeDeviceSessionDetailsResponse DescribeDeviceSessionDetails(Models\DescribeDeviceSessionDetailsRequest $req) 获取设备会话数据详单
 * @method Models\DescribeDeviceSessionListResponse DescribeDeviceSessionList(Models\DescribeDeviceSessionListRequest $req) 获取设备会话列表
 * @method Models\DescribePolicyResponse DescribePolicy(Models\DescribePolicyRequest $req) 用于查看权限配置
 * @method Models\DescribeProjectInfoResponse DescribeProjectInfo(Models\DescribeProjectInfoRequest $req) 用于获取项目信息
 * @method Models\DescribeProjectListResponse DescribeProjectList(Models\DescribeProjectListRequest $req) 用于获取项目列表
 * @method Models\DescribeRecentSessionListResponse DescribeRecentSessionList(Models\DescribeRecentSessionListRequest $req) 获取最新设备会话列表
 * @method Models\DescribeSessionStatisticsResponse DescribeSessionStatistics(Models\DescribeSessionStatisticsRequest $req) 获取会话统计值
 * @method Models\DescribeSessionStatisticsByIntervalResponse DescribeSessionStatisticsByInterval(Models\DescribeSessionStatisticsByIntervalRequest $req) 获取各时间段的会话统计值
 * @method Models\GetDeviceLicenseResponse GetDeviceLicense(Models\GetDeviceLicenseRequest $req) 获取设备已经绑定的可用授权数量
 * @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) 查询用户设备的授权绑定情况
 * @method Models\GetLicenseStatResponse GetLicenseStat(Models\GetLicenseStatRequest $req) 统计license类型数量
 * @method Models\GetLicensesResponse GetLicenses(Models\GetLicensesRequest $req) 按授权查看license列表
 * @method Models\ModifyDeviceResponse ModifyDevice(Models\ModifyDeviceRequest $req) 用于修改设备信息
 * @method Models\ModifyPolicyResponse ModifyPolicy(Models\ModifyPolicyRequest $req) 用于修改权限配置
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 用于修改项目信息
 */

class TrroClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trro.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trro";

    /**
     * @var string
     */
    protected $version = "2022-03-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("trro")."\\"."V20220325\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
