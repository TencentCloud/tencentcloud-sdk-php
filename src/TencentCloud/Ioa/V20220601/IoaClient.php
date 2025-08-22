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

namespace TencentCloud\Ioa\V20220601;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ioa\V20220601\Models as Models;

/**
 * @method Models\CreateDLPFileDetectionTaskResponse CreateDLPFileDetectionTask(Models\CreateDLPFileDetectionTaskRequest $req) 提交送检任务
 * @method Models\CreateDeviceTaskResponse CreateDeviceTask(Models\CreateDeviceTaskRequest $req) 创建获取终端进程网络服务信息任务，私有化调用path为：capi/Assets/Device/DescribeDeviceInfo
 * @method Models\CreateDeviceVirtualGroupResponse CreateDeviceVirtualGroup(Models\CreateDeviceVirtualGroupRequest $req) 创建终端自定义分组，私有化调用path为：/capi/Assets/Device/CreateDeviceVirtualGroup
 * @method Models\CreatePrivilegeCodeResponse CreatePrivilegeCode(Models\CreatePrivilegeCodeRequest $req) 生成特权码，私有化调用path为：capi/Assets/Device/CreatePrivilegeCode，生成的特权码、卸载码，仅对该设备当天有效
 * @method Models\DescribeAccountGroupsResponse DescribeAccountGroups(Models\DescribeAccountGroupsRequest $req) 以分页的方式查询账号分组列表，私有化调用path为：/capi/Assets/DescribeAccountGroups
 * @method Models\DescribeAggrSoftCategorySoftListResponse DescribeAggrSoftCategorySoftList(Models\DescribeAggrSoftCategorySoftListRequest $req) 聚合的分类软件列表
 * @method Models\DescribeDLPFileDetectResultResponse DescribeDLPFileDetectResult(Models\DescribeDLPFileDetectResultRequest $req) webservice查询文件检测结果
 * @method Models\DescribeDeviceChildGroupsResponse DescribeDeviceChildGroups(Models\DescribeDeviceChildGroupsRequest $req) 查询设备组子分组详情，私有化调用path为：capi/Assets/Device/DescribeDeviceChildGroups
 * @method Models\DescribeDeviceHardwareInfoListResponse DescribeDeviceHardwareInfoList(Models\DescribeDeviceHardwareInfoListRequest $req) 查询满足条件的查询终端硬件信息列表，私有化调用path为：/capi/Assets/Device/DescribeDeviceHardwareInfoList
 * @method Models\DescribeDeviceInfoResponse DescribeDeviceInfo(Models\DescribeDeviceInfoRequest $req) 获取终端进程网络服务信息，私有化调用path为：capi/Assets/Device/DescribeDeviceInfo
 * @method Models\DescribeDeviceVirtualGroupsResponse DescribeDeviceVirtualGroups(Models\DescribeDeviceVirtualGroupsRequest $req) 查询终端自定义分组列表，私有化调用path为：/capi/Assets/Device/DescribeDeviceVirtualGroups
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 查询满足条件的终端数据详情，私有化调用path为：/capi/Assets/Device/DescribeDevices
 * @method Models\DescribeLocalAccountsResponse DescribeLocalAccounts(Models\DescribeLocalAccountsRequest $req) 获取账号列表，支持分页，模糊搜索，私有化调用path为：/capi/Assets/Account/DescribeLocalAccounts
 * @method Models\DescribeRootAccountGroupResponse DescribeRootAccountGroup(Models\DescribeRootAccountGroupRequest $req) 查询账号根分组详情。对应“用户与授权管理”里内置不可见的全网根账号组，所有新建的目录，都挂在该全网根账号组下。
 * @method Models\DescribeSoftCensusListByDeviceResponse DescribeSoftCensusListByDevice(Models\DescribeSoftCensusListByDeviceRequest $req) 查看终端树下的软件列表,私有化调用path为：capi/Software/DescribeSoftCensusListByDevice
 * @method Models\DescribeSoftwareInformationResponse DescribeSoftwareInformation(Models\DescribeSoftwareInformationRequest $req) 查看指定终端的软件详情列表,私有化调用path为：capi/Software/DescribeSoftwareInformation
 * @method Models\DescribeVirtualDevicesResponse DescribeVirtualDevices(Models\DescribeVirtualDevicesRequest $req) 展示自定义分组终端列表，私有化调用path为：/capi/Assets/DescribeVirtualDevices
 * @method Models\ModifyVirtualDeviceGroupsResponse ModifyVirtualDeviceGroups(Models\ModifyVirtualDeviceGroupsRequest $req) 终端自定义分组增减终端，私有化调用path为：/capi/Assets/Device/ModifyVirtualDeviceGroups
 */

class IoaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ioa.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ioa";

    /**
     * @var string
     */
    protected $version = "2022-06-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("ioa")."\\"."V20220601\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
