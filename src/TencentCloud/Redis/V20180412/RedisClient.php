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

namespace TencentCloud\Redis\V20180412;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Redis\V20180412\Models as Models;

/**
 * @method Models\AddReplicationInstanceResponse AddReplicationInstance(Models\AddReplicationInstanceRequest $req) 添加复制组成员
 * @method Models\AllocateWanAddressResponse AllocateWanAddress(Models\AllocateWanAddressRequest $req) 开通外网
 * @method Models\ApplyParamsTemplateResponse ApplyParamsTemplate(Models\ApplyParamsTemplateRequest $req) 应用参数模板到实例
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口 (AssociateSecurityGroups) 用于安全组批量绑定多个指定实例。
 * @method Models\ChangeInstanceRoleResponse ChangeInstanceRole(Models\ChangeInstanceRoleRequest $req) 复制组实例更换角色
 * @method Models\ChangeMasterInstanceResponse ChangeMasterInstance(Models\ChangeMasterInstanceRequest $req) 复制组实例切主
 * @method Models\ChangeReplicaToMasterResponse ChangeReplicaToMaster(Models\ChangeReplicaToMasterRequest $req) 本接口（ChangeReplicaToMaster）适用于实例副本组提主或副本提主。
 * @method Models\CleanUpInstanceResponse CleanUpInstance(Models\CleanUpInstanceRequest $req) 回收站实例立即下线
 * @method Models\ClearInstanceResponse ClearInstance(Models\ClearInstanceRequest $req) 清空Redis实例的实例数据。
 * @method Models\CloneInstancesResponse CloneInstances(Models\CloneInstancesRequest $req) 本接口（CloneInstances）用于基于当前实例的备份文件克隆一个完整的新实例。
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) 关闭SSL
 * @method Models\CreateInstanceAccountResponse CreateInstanceAccount(Models\CreateInstanceAccountRequest $req) 创建实例子账号
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 本接口（CreateInstances）用于创建 Redis 实例。
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) 创建参数模板。
 * @method Models\CreateReplicationGroupResponse CreateReplicationGroup(Models\CreateReplicationGroupRequest $req) 创建复制组
 * @method Models\DeleteInstanceAccountResponse DeleteInstanceAccount(Models\DeleteInstanceAccountRequest $req) 删除实例子账号
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) 删除参数模板
 * @method Models\DeleteReplicationInstanceResponse DeleteReplicationInstance(Models\DeleteReplicationInstanceRequest $req) 移除复制组成员 注：接口下线中，请使用 RemoveReplicationInstance
 * @method Models\DescribeAutoBackupConfigResponse DescribeAutoBackupConfig(Models\DescribeAutoBackupConfigRequest $req) 获取备份配置
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) 本接口（DescribeBackupDownloadRestriction）用于查询当前地域数据库备份文件的下载地址。
 * @method Models\DescribeBackupUrlResponse DescribeBackupUrl(Models\DescribeBackupUrlRequest $req) 本接口（DescribeBackupUrl）用于查询备份 Rdb 文件的下载地址。
 * @method Models\DescribeBandwidthRangeResponse DescribeBandwidthRange(Models\DescribeBandwidthRangeRequest $req) 本接口（DescribeBandwidthRange）用于查询实例带宽信息。
 * @method Models\DescribeCommonDBInstancesResponse DescribeCommonDBInstances(Models\DescribeCommonDBInstancesRequest $req) 查询Redis实例列表信息。该接口已废弃。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口（DescribeDBSecurityGroups）用于查询实例的安全组详情。
 * @method Models\DescribeInstanceAccountResponse DescribeInstanceAccount(Models\DescribeInstanceAccountRequest $req) 本接口（DescribeInstanceAccount）用于查看实例子账号信息。
 * @method Models\DescribeInstanceBackupsResponse DescribeInstanceBackups(Models\DescribeInstanceBackupsRequest $req) 本接口（DescribeInstanceBackups）用于查询实例备份列表。
 * @method Models\DescribeInstanceDTSInfoResponse DescribeInstanceDTSInfo(Models\DescribeInstanceDTSInfoRequest $req) 查询实例DTS信息
 * @method Models\DescribeInstanceDealDetailResponse DescribeInstanceDealDetail(Models\DescribeInstanceDealDetailRequest $req) 本接口（DescribeInstanceDealDetail）用于查询订单信息。
 * @method Models\DescribeInstanceMonitorBigKeyResponse DescribeInstanceMonitorBigKey(Models\DescribeInstanceMonitorBigKeyRequest $req) 腾讯云数据库 Redis 已经于2022年10月31日下线查询实例大 Key 接口。具体公告，请参见[查询实例大 Key 接口下线公告](https://cloud.tencent.com/document/product/239/81005)。
 * @method Models\DescribeInstanceMonitorBigKeySizeDistResponse DescribeInstanceMonitorBigKeySizeDist(Models\DescribeInstanceMonitorBigKeySizeDistRequest $req) 腾讯云数据库 Redis 已经于2022年10月31日下线查询实例大 Key 接口。具体公告，请参见 [查询实例大 Key 接口下线公告](https://cloud.tencent.com/document/product/239/81005)。
 * @method Models\DescribeInstanceMonitorBigKeyTypeDistResponse DescribeInstanceMonitorBigKeyTypeDist(Models\DescribeInstanceMonitorBigKeyTypeDistRequest $req) 腾讯云数据库 Redis 已经于2022年10月31日下线查询实例大 Key 接口。具体公告，请参见 [查询实例大 Key 接口下线公告](https://cloud.tencent.com/document/product/239/81005)。
 * @method Models\DescribeInstanceMonitorHotKeyResponse DescribeInstanceMonitorHotKey(Models\DescribeInstanceMonitorHotKeyRequest $req) 查询实例热Key
 * @method Models\DescribeInstanceMonitorSIPResponse DescribeInstanceMonitorSIP(Models\DescribeInstanceMonitorSIPRequest $req) 查询实例访问来源信息
 * @method Models\DescribeInstanceMonitorTookDistResponse DescribeInstanceMonitorTookDist(Models\DescribeInstanceMonitorTookDistRequest $req) 查询实例访问的耗时分布
 * @method Models\DescribeInstanceMonitorTopNCmdResponse DescribeInstanceMonitorTopNCmd(Models\DescribeInstanceMonitorTopNCmdRequest $req) 查询实例访问命令
 * @method Models\DescribeInstanceMonitorTopNCmdTookResponse DescribeInstanceMonitorTopNCmdTook(Models\DescribeInstanceMonitorTopNCmdTookRequest $req) 查询实例CPU耗时
 * @method Models\DescribeInstanceNodeInfoResponse DescribeInstanceNodeInfo(Models\DescribeInstanceNodeInfoRequest $req) 本接口（DescribeInstanceNodeInfo）用于查询实例节点信息。
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) 查询参数修改历史列表
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 本接口（DescribeInstanceParams）用于查询实例参数列表。
 * @method Models\DescribeInstanceSecurityGroupResponse DescribeInstanceSecurityGroup(Models\DescribeInstanceSecurityGroupRequest $req) 本接口（DescribeInstanceSecurityGroup）用于查询实例安全组信息。
 * @method Models\DescribeInstanceShardsResponse DescribeInstanceShards(Models\DescribeInstanceShardsRequest $req) 本接口（DescribeInstanceShards）用于获取集群架构实例的分片信息。
 * @method Models\DescribeInstanceZoneInfoResponse DescribeInstanceZoneInfo(Models\DescribeInstanceZoneInfoRequest $req) 本接口（DescribeInstanceZoneInfo）用于查询 Redis 节点详细信息。
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口（DescribeInstances）用于查询Redis实例列表。
 * @method Models\DescribeMaintenanceWindowResponse DescribeMaintenanceWindow(Models\DescribeMaintenanceWindowRequest $req) 查询实例维护时间窗，在实例需要进行版本升级或者架构升级的时候，会在维护时间窗时间内进行切换
 * @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) 本接口（DescribeParamTemplateInfo）用于查询参数模板详情。
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) 查询参数模板列表
 * @method Models\DescribeProductInfoResponse DescribeProductInfo(Models\DescribeProductInfoRequest $req) 本接口（DescribeProductInfo）用于查询全地域 Redis 的售卖规格。
 * @method Models\DescribeProjectSecurityGroupResponse DescribeProjectSecurityGroup(Models\DescribeProjectSecurityGroupRequest $req) 查询项目安全组信息
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口(DescribeProjectSecurityGroups)用于查询项目的安全组详情。
 * @method Models\DescribeProxySlowLogResponse DescribeProxySlowLog(Models\DescribeProxySlowLogRequest $req) 本接口（DescribeProxySlowLog）用于查询代理慢查询。
 * @method Models\DescribeReplicationGroupResponse DescribeReplicationGroup(Models\DescribeReplicationGroupRequest $req) 本接口（DescribeReplicationGroup）查询复制组。
 * @method Models\DescribeSSLStatusResponse DescribeSSLStatus(Models\DescribeSSLStatusRequest $req) 本接口（DescribeSSLStatus）用于查询实例 SSL 认证相关信息，包括开启状态、配置状态、证书地址等。
 * @method Models\DescribeSlowLogResponse DescribeSlowLog(Models\DescribeSlowLogRequest $req) 本接口（DescribeSlowLog）查询实例慢查询记录。
 * @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) 用于查询任务结果
 * @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) 本接口（DescribeTaskList）用于查询指定实例的任务列表信息。
 * @method Models\DescribeTendisSlowLogResponse DescribeTendisSlowLog(Models\DescribeTendisSlowLogRequest $req) 查询Tendis慢查询
 * @method Models\DestroyPostpaidInstanceResponse DestroyPostpaidInstance(Models\DestroyPostpaidInstanceRequest $req) 按量计费实例销毁
 * @method Models\DestroyPrepaidInstanceResponse DestroyPrepaidInstance(Models\DestroyPrepaidInstanceRequest $req) 包年包月实例退还
 * @method Models\DisableReplicaReadonlyResponse DisableReplicaReadonly(Models\DisableReplicaReadonlyRequest $req) 禁用读写分离
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
 * @method Models\EnableReplicaReadonlyResponse EnableReplicaReadonly(Models\EnableReplicaReadonlyRequest $req) 启用读写分离
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) 查询新购实例价格
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) 查询实例续费价格（包年包月）
 * @method Models\InquiryPriceUpgradeInstanceResponse InquiryPriceUpgradeInstance(Models\InquiryPriceUpgradeInstanceRequest $req) 查询实例扩容价格
 * @method Models\KillMasterGroupResponse KillMasterGroup(Models\KillMasterGroupRequest $req) 本接口（KillMasterGroup）模拟故障。
 * @method Models\ManualBackupInstanceResponse ManualBackupInstance(Models\ManualBackupInstanceRequest $req) 本接口（ManualBackupInstance）用于手动备份Redis实例。
 * @method Models\ModfiyInstancePasswordResponse ModfiyInstancePassword(Models\ModfiyInstancePasswordRequest $req) 本接口（ModfiyInstancePassword）用于修改实例访问密码。
 * @method Models\ModifyAutoBackupConfigResponse ModifyAutoBackupConfig(Models\ModifyAutoBackupConfigRequest $req) 本接口（ModifyAutoBackupConfig）用于设置自动备份的配置。
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) 本接口（ModifyBackupDownloadRestriction）用于修改备份文件下载的网络信息与地址。
 * @method Models\ModifyConnectionConfigResponse ModifyConnectionConfig(Models\ModifyConnectionConfigRequest $req) 修改实例的连接配置，包括带宽和最大连接数。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改实例相关信息
 * @method Models\ModifyInstanceAccountResponse ModifyInstanceAccount(Models\ModifyInstanceAccountRequest $req) 修改实例子账号
 * @method Models\ModifyInstanceParamsResponse ModifyInstanceParams(Models\ModifyInstanceParamsRequest $req) 本接口(ModifyInstanceParams)用于修改Redis实例的参数配置。
 * @method Models\ModifyInstanceReadOnlyResponse ModifyInstanceReadOnly(Models\ModifyInstanceReadOnlyRequest $req) 设置实例输入模式
 * @method Models\ModifyMaintenanceWindowResponse ModifyMaintenanceWindow(Models\ModifyMaintenanceWindowRequest $req) 修改实例维护时间窗时间，需要进行版本升级或者架构升级的实例，会在维护时间窗内进行时间切换。注意：已经发起版本升级或者架构升级的实例，无法修改维护时间窗。
 * @method Models\ModifyNetworkConfigResponse ModifyNetworkConfig(Models\ModifyNetworkConfigRequest $req) 本接口（ModifyNetworkConfig）用于修改实例网络配置。
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) 修改参数模板
 * @method Models\OpenSSLResponse OpenSSL(Models\OpenSSLRequest $req) 开启SSL
 * @method Models\ReleaseWanAddressResponse ReleaseWanAddress(Models\ReleaseWanAddressRequest $req) 关闭外网
 * @method Models\RemoveReplicationInstanceResponse RemoveReplicationInstance(Models\RemoveReplicationInstanceRequest $req) 移除复制组成员
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) 本接口（RenewInstance）可用于为实例续费。
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) 重置密码
 * @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) 恢复 CRS 实例
 * @method Models\StartupInstanceResponse StartupInstance(Models\StartupInstanceRequest $req) 实例解隔离
 * @method Models\SwitchInstanceVipResponse SwitchInstanceVip(Models\SwitchInstanceVipRequest $req) 在通过DTS支持跨可用区灾备的场景中，通过该接口交换实例VIP完成实例灾备切换。交换VIP后目标实例可写，源和目标实例VIP互换，同时源与目标实例间DTS同步任务断开
 * @method Models\SwitchProxyResponse SwitchProxy(Models\SwitchProxyRequest $req) Proxy模拟故障接口
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) 变更实例配置
 * @method Models\UpgradeInstanceVersionResponse UpgradeInstanceVersion(Models\UpgradeInstanceVersionRequest $req) 将原本实例升级到高版本实例，或者将主从版实例升级到集群版实例
 * @method Models\UpgradeProxyVersionResponse UpgradeProxyVersion(Models\UpgradeProxyVersionRequest $req) 实例proxy版本升级
 * @method Models\UpgradeSmallVersionResponse UpgradeSmallVersion(Models\UpgradeSmallVersionRequest $req) 实例小版本升级
 * @method Models\UpgradeVersionToMultiAvailabilityZonesResponse UpgradeVersionToMultiAvailabilityZones(Models\UpgradeVersionToMultiAvailabilityZonesRequest $req) 升级实例支持多AZ
 */

class RedisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "redis.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "redis";

    /**
     * @var string
     */
    protected $version = "2018-04-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("redis")."\\"."V20180412\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
