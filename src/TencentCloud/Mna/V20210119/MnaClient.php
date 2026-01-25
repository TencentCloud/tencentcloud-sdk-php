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

namespace TencentCloud\Mna\V20210119;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mna\V20210119\Models as Models;

/**
 * @method Models\ActivateHardwareResponse ActivateHardware(Models\ActivateHardwareRequest $req) 激活硬件设备
 * @method Models\AddDeviceResponse AddDevice(Models\AddDeviceRequest $req) 新建设备记录
 * @method Models\AddGroupResponse AddGroup(Models\AddGroupRequest $req) 新建分组
 * @method Models\AddHardwareResponse AddHardware(Models\AddHardwareRequest $req) 添加硬件设备，生成未激活的硬件设备，可支持批量添加
 * @method Models\AddL3ConnResponse AddL3Conn(Models\AddL3ConnRequest $req) 新建互通规则
 * @method Models\CreateEncryptedKeyResponse CreateEncryptedKey(Models\CreateEncryptedKeyRequest $req) 通过此接口设置和更新预置密钥
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 删除设备信息
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) 删除分组
 * @method Models\DeleteL3ConnResponse DeleteL3Conn(Models\DeleteL3ConnRequest $req) 删除互通规则
 * @method Models\DownloadActiveDeviceCountResponse DownloadActiveDeviceCount(Models\DownloadActiveDeviceCountRequest $req) 下载活跃设备数量统计
 * @method Models\GetActiveDeviceCountResponse GetActiveDeviceCount(Models\GetActiveDeviceCountRequest $req) 活跃设备数量统计
 * @method Models\GetDestIPByNameResponse GetDestIPByName(Models\GetDestIPByNameRequest $req) 统计单个设备访问目标IP地址信息
 * @method Models\GetDeviceResponse GetDevice(Models\GetDeviceRequest $req) 通过指定设备的ID查找设备详细信息
 * @method Models\GetDevicePayModeResponse GetDevicePayMode(Models\GetDevicePayModeRequest $req) 获取设备付费模式
 * @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) 获取设备信息列表
 * @method Models\GetFlowAlarmInfoResponse GetFlowAlarmInfo(Models\GetFlowAlarmInfoRequest $req) 根据AppId查询用户设置的流量告警信息，包括阈值，回调url和key
 * @method Models\GetFlowPackagesResponse GetFlowPackages(Models\GetFlowPackagesRequest $req) 获取流量包列表
 * @method Models\GetFlowStatisticResponse GetFlowStatistic(Models\GetFlowStatisticRequest $req) 获取指定设备Id，指定时间点数据流量使用情况
 * @method Models\GetFlowStatisticByGroupResponse GetFlowStatisticByGroup(Models\GetFlowStatisticByGroupRequest $req) 获取指定分组，指定时间数据流量使用情况
 * @method Models\GetFlowStatisticByNameResponse GetFlowStatisticByName(Models\GetFlowStatisticByNameRequest $req) 获取指定设备Id，指定时间点数据流量使用情况
 * @method Models\GetFlowStatisticByRegionResponse GetFlowStatisticByRegion(Models\GetFlowStatisticByRegionRequest $req) 获取指定区域，指定时间点数据流量使用情况
 * @method Models\GetGroupDetailResponse GetGroupDetail(Models\GetGroupDetailRequest $req) 查看分组详细信息
 * @method Models\GetGroupListResponse GetGroupList(Models\GetGroupListRequest $req) 获取分组列表
 * @method Models\GetHardwareListResponse GetHardwareList(Models\GetHardwareListRequest $req) 获取厂商硬件列表
 * @method Models\GetL3ConnListResponse GetL3ConnList(Models\GetL3ConnListRequest $req) 获取互通规则列表
 * @method Models\GetMonitorDataByNameResponse GetMonitorDataByName(Models\GetMonitorDataByNameRequest $req) 获取单个设备所有监控指标的下载文件链接
 * @method Models\GetMultiFlowStatisticResponse GetMultiFlowStatistic(Models\GetMultiFlowStatisticRequest $req) 批量获取设备流量统计曲线
 * @method Models\GetNetMonitorResponse GetNetMonitor(Models\GetNetMonitorRequest $req) 获取单设备的实时流量统计指标
 * @method Models\GetNetMonitorByNameResponse GetNetMonitorByName(Models\GetNetMonitorByNameRequest $req) 获取单设备的实时流量统计指标
 * @method Models\GetPublicKeyResponse GetPublicKey(Models\GetPublicKeyRequest $req) 获取公钥用于验签
 * @method Models\GetStatisticDataResponse GetStatisticData(Models\GetStatisticDataRequest $req) 在用量统计页面下载流量数据
 * @method Models\GetStatisticDataByNameResponse GetStatisticDataByName(Models\GetStatisticDataByNameRequest $req) 在用量统计页面下载流量数据
 * @method Models\GetVendorHardwareResponse GetVendorHardware(Models\GetVendorHardwareRequest $req) 获取厂商硬件设备列表
 * @method Models\GroupAddDeviceResponse GroupAddDevice(Models\GroupAddDeviceRequest $req) 向已存在分组中添加设备
 * @method Models\GroupDeleteDeviceResponse GroupDeleteDevice(Models\GroupDeleteDeviceRequest $req) 删除分组中的设备
 * @method Models\ModifyPackageRenewFlagResponse ModifyPackageRenewFlag(Models\ModifyPackageRenewFlagRequest $req) 可开启/关闭流量包自动续费，不影响当前周期正在生效的流量包。
 * @method Models\OrderFlowPackageResponse OrderFlowPackage(Models\OrderFlowPackageRequest $req) 购买预付费流量包
 * @method Models\OrderPerLicenseResponse OrderPerLicense(Models\OrderPerLicenseRequest $req) 购买一次性授权License
 * @method Models\ReportOrderResponse ReportOrder(Models\ReportOrderRequest $req) 用户上报自定义的订单信息，多网聚合加速服务将相关信息进行保存
 * @method Models\SetNotifyUrlResponse SetNotifyUrl(Models\SetNotifyUrlRequest $req) 设置用户流量告警信息接口，通过该接口设置流量包告警阈值以及告警时回调的url和key
 * @method Models\UpdateDeviceResponse UpdateDevice(Models\UpdateDeviceRequest $req) 更新设备信息
 * @method Models\UpdateGroupResponse UpdateGroup(Models\UpdateGroupRequest $req) 更新分组备注
 * @method Models\UpdateHardwareResponse UpdateHardware(Models\UpdateHardwareRequest $req) 更新硬件信息
 * @method Models\UpdateL3CidrResponse UpdateL3Cidr(Models\UpdateL3CidrRequest $req) 更新互通规则CIDR
 * @method Models\UpdateL3ConnResponse UpdateL3Conn(Models\UpdateL3ConnRequest $req) 更新互通规则备注
 * @method Models\UpdateL3SwitchResponse UpdateL3Switch(Models\UpdateL3SwitchRequest $req) 更新互通规则开关
 */

class MnaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mna.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mna";

    /**
     * @var string
     */
    protected $version = "2021-01-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("mna")."\\"."V20210119\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
