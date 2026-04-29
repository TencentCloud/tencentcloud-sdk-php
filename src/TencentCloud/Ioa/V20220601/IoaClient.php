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
 * @method Models\CreateBusinessResourceResponse CreateBusinessResource(Models\CreateBusinessResourceRequest $req) 创建业务资源，会对一些必填参数进行校验和参数合法性校验，创建业务资源时，先调用下校验相同业务资源接口，看资源是不是有冲突。创建时也会做校验，但没有返回对应的异常信息，私有化调用path为：capi/GatewayResource/CreateBusinessResource
 * @method Models\CreateDLPFileDetectTaskResponse CreateDLPFileDetectTask(Models\CreateDLPFileDetectTaskRequest $req) 创建文件鉴定任务，私有化调用path为：capi/DlpOpenApi/CreateDLPFileDetectTask
 * @method Models\CreateDLPFileDetectionTaskResponse CreateDLPFileDetectionTask(Models\CreateDLPFileDetectionTaskRequest $req) 提交送检任务
 * @method Models\CreateDeviceTaskResponse CreateDeviceTask(Models\CreateDeviceTaskRequest $req) 创建获取终端进程网络服务信息任务，私有化调用path为：capi/Assets/Device/DescribeDeviceInfo
 * @method Models\CreateDeviceVirtualGroupResponse CreateDeviceVirtualGroup(Models\CreateDeviceVirtualGroupRequest $req) 创建终端自定义分组，私有化调用path为：/capi/Assets/Device/CreateDeviceVirtualGroup
 * @method Models\CreatePrivilegeCodeResponse CreatePrivilegeCode(Models\CreatePrivilegeCodeRequest $req) 生成特权码，私有化调用path为：capi/Assets/Device/CreatePrivilegeCode，生成的特权码、卸载码，仅对该设备当天有效
 * @method Models\DescribeAccountGroupsResponse DescribeAccountGroups(Models\DescribeAccountGroupsRequest $req) 以分页的方式查询账号分组列表，私有化调用path为：/capi/Assets/DescribeAccountGroups
 * @method Models\DescribeAggrSoftCategorySoftListResponse DescribeAggrSoftCategorySoftList(Models\DescribeAggrSoftCategorySoftListRequest $req) 聚合的分类软件列表
 * @method Models\DescribeAggrSoftDetailResponse DescribeAggrSoftDetail(Models\DescribeAggrSoftDetailRequest $req) 聚合的软件详情
 * @method Models\DescribeAggrSoftDeviceListResponse DescribeAggrSoftDeviceList(Models\DescribeAggrSoftDeviceListRequest $req) 聚合软件的已安装终端列表
 * @method Models\DescribeBusinessResourcesResponse DescribeBusinessResources(Models\DescribeBusinessResourcesRequest $req) 获取业务资源列表,支持分页，如果分页信息不传递会有默认分页，支持排序，不传排序字段，按业务资源创建时间排序,私有化调用path为：capi/GatewayResource/DescribeBusinessResources
 * @method Models\DescribeDLPEdgeNodeGroupsResponse DescribeDLPEdgeNodeGroups(Models\DescribeDLPEdgeNodeGroupsRequest $req) 查询边缘节点分组，私有化调用path为：capi/Connectors/DescribeDLPEdgeNodeGroups
 * @method Models\DescribeDLPEdgeNodesResponse DescribeDLPEdgeNodes(Models\DescribeDLPEdgeNodesRequest $req) 查询边缘节点列表，私有化调用path为：capi/DlpOpenApi/DescribeDLPEdgeNodes
 * @method Models\DescribeDLPFileDetectResultResponse DescribeDLPFileDetectResult(Models\DescribeDLPFileDetectResultRequest $req) webservice查询文件检测结果
 * @method Models\DescribeDLPFileDetectTaskResultResponse DescribeDLPFileDetectTaskResult(Models\DescribeDLPFileDetectTaskResultRequest $req) 查询文件鉴定任务结果
 * @method Models\DescribeDeviceChildGroupsResponse DescribeDeviceChildGroups(Models\DescribeDeviceChildGroupsRequest $req) 查询设备组子分组详情，私有化调用path为：capi/Assets/Device/DescribeDeviceChildGroups
 * @method Models\DescribeDeviceDetailListResponse DescribeDeviceDetailList(Models\DescribeDeviceDetailListRequest $req) 基于软件查看终端详情列表,私有化调用path为：capi/Software/DescribeDeviceDetailList
 * @method Models\DescribeDeviceHardwareInfoListResponse DescribeDeviceHardwareInfoList(Models\DescribeDeviceHardwareInfoListRequest $req) 查询满足条件的查询终端硬件信息列表，私有化调用path为：/capi/Assets/Device/DescribeDeviceHardwareInfoList
 * @method Models\DescribeDeviceInfoResponse DescribeDeviceInfo(Models\DescribeDeviceInfoRequest $req) 获取终端进程网络服务信息，私有化调用path为：capi/Assets/Device/DescribeDeviceInfo
 * @method Models\DescribeDeviceVirtualGroupsResponse DescribeDeviceVirtualGroups(Models\DescribeDeviceVirtualGroupsRequest $req) 查询终端自定义分组列表，私有化调用path为：/capi/Assets/Device/DescribeDeviceVirtualGroups
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 查询满足条件的终端数据详情，私有化调用path为：/capi/Assets/Device/DescribeDevices
 * @method Models\DescribeDirectAccountGroupResourcesResponse DescribeDirectAccountGroupResources(Models\DescribeDirectAccountGroupResourcesRequest $req) 列表账户组直接关联的资源，私有化调用path为：capi/Assets/DescribeDirectAccountGroupResources
 * @method Models\DescribeLocalAccountsResponse DescribeLocalAccounts(Models\DescribeLocalAccountsRequest $req) 获取账号列表，支持分页，模糊搜索，私有化调用path为：/capi/Assets/Account/DescribeLocalAccounts
 * @method Models\DescribeResourceGrantedAccountGroupsResponse DescribeResourceGrantedAccountGroups(Models\DescribeResourceGrantedAccountGroupsRequest $req) 列表账户组直接关联的资源，私有化调用path为：capi/NGN/DescribeResourceGrantedAccounts
 * @method Models\DescribeResourceGrantedAccountsResponse DescribeResourceGrantedAccounts(Models\DescribeResourceGrantedAccountsRequest $req) 列表账户组直接关联的资源，私有化调用path为：capi/NGN/DescribeResourceGrantedAccounts
 * @method Models\DescribeResourceGrantedVirtualGroupsResponse DescribeResourceGrantedVirtualGroups(Models\DescribeResourceGrantedVirtualGroupsRequest $req) 列表账户组直接关联的资源，私有化调用path为：capi/NGN/DescribeResourceGrantedVirtualGroups
 * @method Models\DescribeRootAccountGroupResponse DescribeRootAccountGroup(Models\DescribeRootAccountGroupRequest $req) 查询账号根分组详情。对应“用户与授权管理”里内置不可见的全网根账号组，所有新建的目录，都挂在该全网根账号组下。
 * @method Models\DescribeSoftCensusListByDeviceResponse DescribeSoftCensusListByDevice(Models\DescribeSoftCensusListByDeviceRequest $req) 查看终端树下的软件列表,私有化调用path为：capi/Software/DescribeSoftCensusListByDevice
 * @method Models\DescribeSoftwareInformationResponse DescribeSoftwareInformation(Models\DescribeSoftwareInformationRequest $req) 查看指定终端的软件详情列表,私有化调用path为：capi/Software/DescribeSoftwareInformation
 * @method Models\DescribeVirtualDevicesResponse DescribeVirtualDevices(Models\DescribeVirtualDevicesRequest $req) 展示自定义分组终端列表，私有化调用path为：/capi/Assets/DescribeVirtualDevices
 * @method Models\ExportDeviceDownloadTaskResponse ExportDeviceDownloadTask(Models\ExportDeviceDownloadTaskRequest $req) 创建终端导出任务，私有化调用path为：capi/Assets/Device/ExportDeviceDownloadTask
 * @method Models\ExportSoftwareInformationListResponse ExportSoftwareInformationList(Models\ExportSoftwareInformationListRequest $req) 导出基于指定终端查看软件信息详情列表查询,私有化调用path为：capi/Software/ExportSoftwareInformationList
 * @method Models\GrantResourcesByAccountGroupsResponse GrantResourcesByAccountGroups(Models\GrantResourcesByAccountGroupsRequest $req) 添加资源授权到账号组
 * @method Models\GrantResourcesByAccountsResponse GrantResourcesByAccounts(Models\GrantResourcesByAccountsRequest $req) 添加资源授权到账号组
 * @method Models\GrantResourcesByVirtualGroupsResponse GrantResourcesByVirtualGroups(Models\GrantResourcesByVirtualGroupsRequest $req) 添加资源授权到账号组
 * @method Models\ModifyDeviceTrustStatusResponse ModifyDeviceTrustStatus(Models\ModifyDeviceTrustStatusRequest $req) 给接入设备加黑加白,私有化调用path为：capi/NGN/ModifyDeviceTrustStatus
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
