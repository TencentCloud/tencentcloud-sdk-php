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

namespace TencentCloud\Redis\V20180412;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Redis\V20180412\Models as Models;

/**
 * @method Models\AddReplicationInstanceResponse AddReplicationInstance(Models\AddReplicationInstanceRequest $req) 本接口（AddReplicationInstance）用于为全球复制组添加实例成员。
 * @method Models\AllocateWanAddressResponse AllocateWanAddress(Models\AllocateWanAddressRequest $req) 本接口（AllocateWanAddress）用于开通实例外网访问。
 * @method Models\ApplyParamsTemplateResponse ApplyParamsTemplate(Models\ApplyParamsTemplateRequest $req) 本接口（ApplyParamsTemplate）用于应用参数模板到实例。
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口 (AssociateSecurityGroups) 用于将一个安全组绑定于一个或多个数据库实例。创建实例时，未配置安全组，建议通过该接口，绑定安全组。
 * @method Models\ChangeInstanceRoleResponse ChangeInstanceRole(Models\ChangeInstanceRoleRequest $req) 本接口（ChangeInstanceRole）用于更换复制组内实例的角色。
 * @method Models\ChangeMasterInstanceResponse ChangeMasterInstance(Models\ChangeMasterInstanceRequest $req) 该接口（ChangeMasterInstance）用于将复制组内只读实例设置为主实例。
 * @method Models\ChangeReplicaToMasterResponse ChangeReplicaToMaster(Models\ChangeReplicaToMasterRequest $req) 本接口（ChangeReplicaToMaster）适用于实例副本组提主或副本提主。
 * @method Models\CleanUpInstanceResponse CleanUpInstance(Models\CleanUpInstanceRequest $req) 本接口（CleanUpInstance）用于立即下线回收站的实例。
 * @method Models\ClearInstanceResponse ClearInstance(Models\ClearInstanceRequest $req) 本接口（ClearInstance）用于清空实例数据。
 * @method Models\CloneInstancesResponse CloneInstances(Models\CloneInstancesRequest $req) 本接口（CloneInstances）用于基于当前实例的备份文件克隆一个完整的新实例。
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) 本接口（CloseSSL）用于关闭SSL加密认证。
 * @method Models\CreateInstanceAccountResponse CreateInstanceAccount(Models\CreateInstanceAccountRequest $req) 本接口（CreateInstanceAccount）用于自定义访问实例的账号。
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 本接口（CreateInstances）用于创建 Redis 实例。
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) 该接口（CreateParamTemplate）用于创建参数模板。
 * @method Models\CreateReplicationGroupResponse CreateReplicationGroup(Models\CreateReplicationGroupRequest $req) 本接口（CreateReplicationGroup）用于创建复制组。
 * @method Models\DeleteInstanceAccountResponse DeleteInstanceAccount(Models\DeleteInstanceAccountRequest $req) 本接口（DeleteInstanceAccount）用于删除实例子账号。
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) 本接口（DeleteParamTemplate）用于删除参数模板。
 * @method Models\DeleteReplicationInstanceResponse DeleteReplicationInstance(Models\DeleteReplicationInstanceRequest $req) 本接口（DeleteReplicationInstance）移除复制组成员。注：该接口下线中，请使用 [RemoveReplicationInstance](https://cloud.tencent.com/document/product/239/90099)。
 * @method Models\DescribeAutoBackupConfigResponse DescribeAutoBackupConfig(Models\DescribeAutoBackupConfigRequest $req) 本接口（DescribeAutoBackupConfig）用于获取自动备份配置规则。
 * @method Models\DescribeBackupDetailResponse DescribeBackupDetail(Models\DescribeBackupDetailRequest $req) 本接口（DescribeBackupDetail）用于查询实例的备份信息详情。
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) 本接口（DescribeBackupDownloadRestriction）用于查询当前地域数据库备份文件的下载地址。
 * @method Models\DescribeBackupUrlResponse DescribeBackupUrl(Models\DescribeBackupUrlRequest $req) 本接口（DescribeBackupUrl）用于查询备份 Rdb 文件的下载地址。
 * @method Models\DescribeBandwidthRangeResponse DescribeBandwidthRange(Models\DescribeBandwidthRangeRequest $req) 本接口（DescribeBandwidthRange）用于查询实例带宽信息。
 * @method Models\DescribeCommonDBInstancesResponse DescribeCommonDBInstances(Models\DescribeCommonDBInstancesRequest $req) 本接口（DescribeCommonDBInstances）用于查询Redis实例列表信息。当前该接口已废弃。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口（DescribeDBSecurityGroups）用于查询实例的安全组详情。
 * @method Models\DescribeGlobalReplicationAreaResponse DescribeGlobalReplicationArea(Models\DescribeGlobalReplicationAreaRequest $req) 本接口（DescribeGlobalReplicationArea）用于查询全球复制支持地域信息。
 * @method Models\DescribeInstanceAccountResponse DescribeInstanceAccount(Models\DescribeInstanceAccountRequest $req) 本接口（DescribeInstanceAccount）用于查看实例账号信息。
 * @method Models\DescribeInstanceBackupsResponse DescribeInstanceBackups(Models\DescribeInstanceBackupsRequest $req) 本接口（DescribeInstanceBackups）用于查询实例备份列表。
 * @method Models\DescribeInstanceDTSInfoResponse DescribeInstanceDTSInfo(Models\DescribeInstanceDTSInfoRequest $req) 本接口（DescribeInstanceDTSInfo）用于查询实例 DTS 信息。
 * @method Models\DescribeInstanceDealDetailResponse DescribeInstanceDealDetail(Models\DescribeInstanceDealDetailRequest $req) 本接口（DescribeInstanceDealDetail）用于查询订单信息。
 * @method Models\DescribeInstanceEventsResponse DescribeInstanceEvents(Models\DescribeInstanceEventsRequest $req) 本接口（DescribeInstanceEvents）用于查询 Redis 实例事件信息。
 * @method Models\DescribeInstanceLogDeliveryResponse DescribeInstanceLogDelivery(Models\DescribeInstanceLogDeliveryRequest $req) 本接口（DescribeInstanceLogDelivery）用于查询实例的日志投递配置。
 * @method Models\DescribeInstanceMonitorBigKeyResponse DescribeInstanceMonitorBigKey(Models\DescribeInstanceMonitorBigKeyRequest $req) 腾讯云数据库 Redis 已经于2022年10月31日下线查询实例大 Key 接口。具体公告，请参见[查询实例大 Key 接口下线公告](https://cloud.tencent.com/document/product/239/81005)。
 * @method Models\DescribeInstanceMonitorBigKeySizeDistResponse DescribeInstanceMonitorBigKeySizeDist(Models\DescribeInstanceMonitorBigKeySizeDistRequest $req) 腾讯云数据库 Redis 已经于2022年10月31日下线查询实例大 Key 接口。具体公告，请参见 [查询实例大 Key 接口下线公告](https://cloud.tencent.com/document/product/239/81005)。
 * @method Models\DescribeInstanceMonitorBigKeyTypeDistResponse DescribeInstanceMonitorBigKeyTypeDist(Models\DescribeInstanceMonitorBigKeyTypeDistRequest $req) 腾讯云数据库 Redis 已经于2022年10月31日下线查询实例大 Key 接口。具体公告，请参见 [查询实例大 Key 接口下线公告](https://cloud.tencent.com/document/product/239/81005)。
 * @method Models\DescribeInstanceMonitorHotKeyResponse DescribeInstanceMonitorHotKey(Models\DescribeInstanceMonitorHotKeyRequest $req) 本接口（DescribeInstanceMonitorHotKey）用于查询实例热Key。
 * @method Models\DescribeInstanceMonitorSIPResponse DescribeInstanceMonitorSIP(Models\DescribeInstanceMonitorSIPRequest $req) 该接口已下线，请使用数据库智能管家 DBbrain 接口 [DescribeProxyProcessStatistics](https://cloud.tencent.com/document/product/1130/84544) 获取实例访问来源。
 * @method Models\DescribeInstanceMonitorTookDistResponse DescribeInstanceMonitorTookDist(Models\DescribeInstanceMonitorTookDistRequest $req) 本接口（DescribeInstanceMonitorTookDist）用于查询实例访问的耗时分布。
 * @method Models\DescribeInstanceMonitorTopNCmdResponse DescribeInstanceMonitorTopNCmd(Models\DescribeInstanceMonitorTopNCmdRequest $req) 本接口（DescribeInstanceMonitorTopNCmd）用于查询实例访问命令。
 * @method Models\DescribeInstanceMonitorTopNCmdTookResponse DescribeInstanceMonitorTopNCmdTook(Models\DescribeInstanceMonitorTopNCmdTookRequest $req) 本接口（DescribeInstanceMonitorTopNCmdTook）用于查询实例 CPU 耗时。
 * @method Models\DescribeInstanceNodeInfoResponse DescribeInstanceNodeInfo(Models\DescribeInstanceNodeInfoRequest $req) 本接口（DescribeInstanceNodeInfo）用于查询实例节点信息。
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) 本接口（DescribeInstanceParamRecords）用于查询参数修改历史列表。
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 本接口（DescribeInstanceParams）用于查询实例参数列表。
 * @method Models\DescribeInstanceSecurityGroupResponse DescribeInstanceSecurityGroup(Models\DescribeInstanceSecurityGroupRequest $req) 本接口（DescribeInstanceSecurityGroup）用于查询实例安全组信息。
 * @method Models\DescribeInstanceShardsResponse DescribeInstanceShards(Models\DescribeInstanceShardsRequest $req) 本接口（DescribeInstanceShards）用于获取集群架构实例的分片信息。
 * @method Models\DescribeInstanceSpecBandwidthResponse DescribeInstanceSpecBandwidth(Models\DescribeInstanceSpecBandwidthRequest $req) 本接口（DescribeInstanceSpecBandwidth）用于查询或计算带宽规格。
 * @method Models\DescribeInstanceSupportFeatureResponse DescribeInstanceSupportFeature(Models\DescribeInstanceSupportFeatureRequest $req) 本接口（DescribeInstanceSupportFeature）用于查询实例支持的功能特性。
 * @method Models\DescribeInstanceZoneInfoResponse DescribeInstanceZoneInfo(Models\DescribeInstanceZoneInfoRequest $req) 本接口（DescribeInstanceZoneInfo）用于查询 Redis 节点详细信息。
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口（DescribeInstances）用于查询Redis实例列表。
 * @method Models\DescribeMaintenanceWindowResponse DescribeMaintenanceWindow(Models\DescribeMaintenanceWindowRequest $req) 本接口（DescribeMaintenanceWindow）用于查询实例维护时间窗。在实例需要进行版本升级或者架构升级的时候，会在维护时间窗时间内进行切换
 * @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) 本接口（DescribeParamTemplateInfo）用于查询参数模板详情。
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) 本接口（DescribeParamTemplates）用于查询参数模板列表。
 * @method Models\DescribeProductInfoResponse DescribeProductInfo(Models\DescribeProductInfoRequest $req) 本接口（DescribeProductInfo）用于查询全地域 Redis 的售卖规格。
 * @method Models\DescribeProjectSecurityGroupResponse DescribeProjectSecurityGroup(Models\DescribeProjectSecurityGroupRequest $req) 本接口（DescribeProjectSecurityGroup）用于查询项目安全组信息。
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口（DescribeProjectSecurityGroups）用于查询项目的安全组详情。
 * @method Models\DescribeProxySlowLogResponse DescribeProxySlowLog(Models\DescribeProxySlowLogRequest $req) 本接口（DescribeProxySlowLog）用于查询代理慢查询。
 * @method Models\DescribeRedisClusterOverviewResponse DescribeRedisClusterOverview(Models\DescribeRedisClusterOverviewRequest $req) 本接口（DescribeRedisClusterOverview）用于查询 Redis 独享集群概览信息。
 * @method Models\DescribeRedisClustersResponse DescribeRedisClusters(Models\DescribeRedisClustersRequest $req) 本接口（DescribeRedisClusters）用于查询Redis独享集群列表。
 * @method Models\DescribeReplicationGroupResponse DescribeReplicationGroup(Models\DescribeReplicationGroupRequest $req) 本接口（DescribeReplicationGroup）用于查询复制组。
 * @method Models\DescribeReplicationGroupInstanceResponse DescribeReplicationGroupInstance(Models\DescribeReplicationGroupInstanceRequest $req) 本接口（DescribeReplicationGroupInstance）用于查询复制组信息。
 * @method Models\DescribeSSLStatusResponse DescribeSSLStatus(Models\DescribeSSLStatusRequest $req) 本接口（DescribeSSLStatus）用于查询实例 SSL 认证相关信息，包括开启状态、配置状态、证书地址等。
 * @method Models\DescribeSecondLevelBackupInfoResponse DescribeSecondLevelBackupInfo(Models\DescribeSecondLevelBackupInfoRequest $req) 本接口（DescribeSecondLevelBackupInfo）用于查询实例秒级备份信息。
 * @method Models\DescribeSlowLogResponse DescribeSlowLog(Models\DescribeSlowLogRequest $req) 本接口（DescribeSlowLog）查询实例慢查询记录。
 * @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) 本接口（DescribeTaskInfo）用于获取指定任务的执行情况。
 * @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) 本接口（DescribeTaskList）用于查询指定实例的任务列表信息。

- 可查询近30天内任务列表数据。
 * @method Models\DescribeTendisSlowLogResponse DescribeTendisSlowLog(Models\DescribeTendisSlowLogRequest $req) 本接口（DescribeTendisSlowLog）用于查询 Tendis 实例慢查询。
 * @method Models\DestroyPostpaidInstanceResponse DestroyPostpaidInstance(Models\DestroyPostpaidInstanceRequest $req) 本接口（DestroyPostpaidInstance）用于销毁按量计费实例。
 * @method Models\DestroyPrepaidInstanceResponse DestroyPrepaidInstance(Models\DestroyPrepaidInstanceRequest $req) 本接口（DestroyPrepaidInstance）用于退还包年包月计费的 Redis 实例。
 * @method Models\DisableReplicaReadonlyResponse DisableReplicaReadonly(Models\DisableReplicaReadonlyRequest $req) 本接口（DisableReplicaReadonly）用于禁用读写分离功能。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口（DisassociateSecurityGroups）用于安全组批量解绑实例。
 * @method Models\EnableReplicaReadonlyResponse EnableReplicaReadonly(Models\EnableReplicaReadonlyRequest $req) 本接口（EnableReplicaReadonly）用于启用读写分离功能。
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) 本接口（InquiryPriceCreateInstance）用于查询新购实例价格。
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) 本接口（InquiryPriceRenewInstance）用于查询包年包月计费实例的续费价格。
 * @method Models\InquiryPriceUpgradeInstanceResponse InquiryPriceUpgradeInstance(Models\InquiryPriceUpgradeInstanceRequest $req) 本接口（InquiryPriceUpgradeInstance）用于查询实例扩容价格。
 * @method Models\KillMasterGroupResponse KillMasterGroup(Models\KillMasterGroupRequest $req) 本接口（KillMasterGroup）用于模拟故障。
 * @method Models\ManualBackupInstanceResponse ManualBackupInstance(Models\ManualBackupInstanceRequest $req) 本接口（ManualBackupInstance）用于手动备份Redis实例。
 * @method Models\ModfiyInstancePasswordResponse ModfiyInstancePassword(Models\ModfiyInstancePasswordRequest $req) 本接口（ModfiyInstancePassword）用于修改实例访问密码。鉴于该接口名存在拼写错误，现已更正为（[ModifyInstancePassword](https://cloud.tencent.com/document/product/239/111555)）接口，推荐使用更正后的接口。
 * @method Models\ModifyAutoBackupConfigResponse ModifyAutoBackupConfig(Models\ModifyAutoBackupConfigRequest $req) 本接口（ModifyAutoBackupConfig）用于设置自动备份的配置。
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) 本接口（ModifyBackupDownloadRestriction）用于修改备份文件下载的网络信息与地址。
 * @method Models\ModifyConnectionConfigResponse ModifyConnectionConfig(Models\ModifyConnectionConfigRequest $req) 本接口（ModifyConnectionConfig）用于修改实例的连接配置，包括带宽和最大连接数。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口（ModifyDBInstanceSecurityGroups）用于对实例原有的安全组列表进行修改。
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 本接口（ModifyInstance）用于修改实例相关信息。
 * @method Models\ModifyInstanceAccountResponse ModifyInstanceAccount(Models\ModifyInstanceAccountRequest $req) 本接口（ModifyInstanceAccount）用于修改实例账号。
 * @method Models\ModifyInstanceAvailabilityZonesResponse ModifyInstanceAvailabilityZones(Models\ModifyInstanceAvailabilityZonesRequest $req) 本接口（ModifyInstanceAvailabilityZones）用于变更实例可用区
 * @method Models\ModifyInstanceBackupModeResponse ModifyInstanceBackupMode(Models\ModifyInstanceBackupModeRequest $req) 本接口（ModifyInstanceBackupMode）用于修改实例的备份模式。
 * @method Models\ModifyInstanceEventResponse ModifyInstanceEvent(Models\ModifyInstanceEventRequest $req) 本接口（ModifyInstanceEvent）用于修改实例的运维事件的执行计划。
 * @method Models\ModifyInstanceLogDeliveryResponse ModifyInstanceLogDelivery(Models\ModifyInstanceLogDeliveryRequest $req) 本接口（ModifyInstanceLogDelivery）用于开启或关闭投递实例日志到CLS。
 * @method Models\ModifyInstanceParamsResponse ModifyInstanceParams(Models\ModifyInstanceParamsRequest $req) 本接口（ModifyInstanceParams）用于修改 Redis 实例的参数配置。
 * @method Models\ModifyInstancePasswordResponse ModifyInstancePassword(Models\ModifyInstancePasswordRequest $req) 本接口（ModifyInstancePassword）用于修改实例访问密码。
 * @method Models\ModifyInstanceReadOnlyResponse ModifyInstanceReadOnly(Models\ModifyInstanceReadOnlyRequest $req) 本接口（ModifyInstanceReadOnly）用于设置实例输入模式。
 * @method Models\ModifyMaintenanceWindowResponse ModifyMaintenanceWindow(Models\ModifyMaintenanceWindowRequest $req) 本接口（ModifyMaintenanceWindow）用于修改实例维护时间窗时间，需要进行版本升级或者架构升级的实例，会在维护时间窗内进行时间切换。注意：已经发起版本升级或者架构升级的实例，无法修改维护时间窗。
 * @method Models\ModifyNetworkConfigResponse ModifyNetworkConfig(Models\ModifyNetworkConfigRequest $req) 本接口（ModifyNetworkConfig）用于修改实例网络配置。
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) 本接口（ModifyParamTemplate）用于修改参数模板。
 * @method Models\ModifyReplicationGroupResponse ModifyReplicationGroup(Models\ModifyReplicationGroupRequest $req) 本接口（ModifyReplicationGroup）用于修改复制组信息。
 * @method Models\OpenSSLResponse OpenSSL(Models\OpenSSLRequest $req) 本接口（OpenSSL）用于开启 SSL 加密认证功能。
 * @method Models\ReleaseWanAddressResponse ReleaseWanAddress(Models\ReleaseWanAddressRequest $req) 本接口（ReleaseWanAddress）用于关闭外网访问。
 * @method Models\RemoveReplicationGroupResponse RemoveReplicationGroup(Models\RemoveReplicationGroupRequest $req) 本接口（RemoveReplicationGroup）用于删除复制组。
 * @method Models\RemoveReplicationInstanceResponse RemoveReplicationInstance(Models\RemoveReplicationInstanceRequest $req) 本接口（RemoveReplicationInstance）用于移除复制组中的实例。
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) 本接口（RenewInstance）可用于为实例续费。
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) 本接口（ResetPassword）用于重置实例访问密码。
 * @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) 本接口（RestoreInstance）用于恢复实例。
 * @method Models\StartupInstanceResponse StartupInstance(Models\StartupInstanceRequest $req) 本接口（StartupInstance）用于实例解隔离。
 * @method Models\SwitchAccessNewInstanceResponse SwitchAccessNewInstance(Models\SwitchAccessNewInstanceRequest $req) 本接口（SwitchAccessNewInstance）针对处于时间窗口中待切换操作的实例，用户可主动发起该操作。
 * @method Models\SwitchInstanceVipResponse SwitchInstanceVip(Models\SwitchInstanceVipRequest $req) 在通过 DTS 支持跨可用区灾备的场景中，通过该接口（SwitchInstanceVip）交换实例 VIP 完成实例灾备切换。交换 VIP 后目标实例可写，源和目标实例VIP互换，同时源与目标实例间 DTS 同步任务断开。
 * @method Models\SwitchProxyResponse SwitchProxy(Models\SwitchProxyRequest $req) 本接口（SwitchProxy）为 Proxy 模拟故障接口。
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) 本接口（UpgradeInstance）用于变更实例的配置规格。
 * @method Models\UpgradeInstanceVersionResponse UpgradeInstanceVersion(Models\UpgradeInstanceVersionRequest $req) 本接口（UpgradeInstanceVersion）用于将当前实例升级到更高版本，或者将当前标准架构升级至集群架构。
 * @method Models\UpgradeProxyVersionResponse UpgradeProxyVersion(Models\UpgradeProxyVersionRequest $req) 本接口（UpgradeProxyVersion）用于升级实例 Proxy 版本。
 * @method Models\UpgradeSmallVersionResponse UpgradeSmallVersion(Models\UpgradeSmallVersionRequest $req) 本接口（UpgradeSmallVersion）用于实例小版本升级。
 * @method Models\UpgradeVersionToMultiAvailabilityZonesResponse UpgradeVersionToMultiAvailabilityZones(Models\UpgradeVersionToMultiAvailabilityZonesRequest $req) 本接口（UpgradeVersionToMultiAvailabilityZones）用于升级实例支持多AZ。
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
