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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述在线服务
 *
 * @method string getServiceGroupId() 获取<p>服务组id</p>
 * @method void setServiceGroupId(string $ServiceGroupId) 设置<p>服务组id</p>
 * @method string getServiceId() 获取<p>服务id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务id</p>
 * @method string getServiceGroupName() 获取<p>服务组名</p>
 * @method void setServiceGroupName(string $ServiceGroupName) 设置<p>服务组名</p>
 * @method string getServiceDescription() 获取<p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDescription(string $ServiceDescription) 设置<p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceInfo getServiceInfo() 获取<p>服务的详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceInfo(ServiceInfo $ServiceInfo) 设置<p>服务的详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取<p>付费类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置<p>付费类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取<p>包年包月服务的资源组id，按量计费的服务为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>包年包月服务的资源组id，按量计费的服务为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取<p>包年包月服务对应的资源组名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>包年包月服务对应的资源组名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>服务的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>服务的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIngressName() 获取<p>服务所在的 ingress 的 name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIngressName(string $IngressName) 设置<p>服务所在的 ingress 的 name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedBy() 获取<p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedBy(string $CreatedBy) 设置<p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取<p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUin(string $SubUin) 设置<p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>app_id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>app_id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessStatus() 获取<p>服务的业务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>CREATE_SUCCEED 创建成功<br>ARREARS_STOP 因欠费停止<br>WHITELIST_STOP 白名单额度不足<br>RELEASE_FAILED 资源释放失败<br>WHITELIST_RELEASE_FAILED 白名单资源释放失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>BILLING 计费中<br>WHITELIST_USING 白名单试用中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessStatus(string $BusinessStatus) 设置<p>服务的业务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>CREATE_SUCCEED 创建成功<br>ARREARS_STOP 因欠费停止<br>WHITELIST_STOP 白名单额度不足<br>RELEASE_FAILED 资源释放失败<br>WHITELIST_RELEASE_FAILED 白名单资源释放失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>BILLING 计费中<br>WHITELIST_USING 白名单试用中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceLimit getServiceLimit() 获取<p>已废弃,以ServiceInfo中的对应为准</p>
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) 设置<p>已废弃,以ServiceInfo中的对应为准</p>
 * @method ScheduledAction getScheduledAction() 获取<p>已废弃,以ServiceInfo中的对应为准</p>
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) 设置<p>已废弃,以ServiceInfo中的对应为准</p>
 * @method string getCreateFailedReason() 获取<p>服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateFailedReason(string $CreateFailedReason) 设置<p>服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>服务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>Normal 正常运行中<br>Stopped 已停止<br>Stopping 停止中<br>Abnormal 异常<br>Pending 启动中<br>Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>服务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>Normal 正常运行中<br>Stopped 已停止<br>Stopping 停止中<br>Abnormal 异常<br>Pending 启动中<br>Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingInfo() 获取<p>费用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfo(string $BillingInfo) 设置<p>费用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取<p>模型权重</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置<p>模型权重</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateSource() 获取<p>服务的创建来源<br>AUTO_ML: 来自自动学习的一键发布<br>DEFAULT: 其他来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateSource(string $CreateSource) 设置<p>服务的创建来源<br>AUTO_ML: 来自自动学习的一键发布<br>DEFAULT: 其他来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersion() 获取<p>服务组下服务的最高版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersion(string $LatestVersion) 设置<p>服务组下服务的最高版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupSWType() 获取<p>资源组类别 托管 NORMAL，纳管 SW</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupSWType(string $ResourceGroupSWType) 设置<p>资源组类别 托管 NORMAL，纳管 SW</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArchiveStatus() 获取<p>服务的归档状态  Waiting 等待归档中，Archived 已归档</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchiveStatus(string $ArchiveStatus) 设置<p>服务的归档状态  Waiting 等待归档中，Archived 已归档</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployType() 获取<p>服务的部署类型 [STANDARD 标准部署，DIST 分布式多机部署] 默认STANDARD</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployType(string $DeployType) 设置<p>服务的部署类型 [STANDARD 标准部署，DIST 分布式多机部署] 默认STANDARD</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstancePerReplicas() 获取<p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstancePerReplicas(string $InstancePerReplicas) 设置<p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorSource() 获取<p>用于监控查询的Source<br>枚举值，部分情况下与CreateSource不同，通过该字段兼容</p>
 * @method void setMonitorSource(string $MonitorSource) 设置<p>用于监控查询的Source<br>枚举值，部分情况下与CreateSource不同，通过该字段兼容</p>
 * @method string getSubUinName() 获取<p>服务创建者的子账号名称</p>
 * @method void setSubUinName(string $SubUinName) 设置<p>服务创建者的子账号名称</p>
 * @method SchedulingPolicy getSchedulingPolicy() 获取<p>服务的调度策略</p>
 * @method void setSchedulingPolicy(SchedulingPolicy $SchedulingPolicy) 设置<p>服务的调度策略</p>
 * @method array getExternalResourceGroups() 获取<p>外部的资源组信息，表示借调了哪些资源组的资源</p>
 * @method void setExternalResourceGroups(array $ExternalResourceGroups) 设置<p>外部的资源组信息，表示借调了哪些资源组的资源</p>
 * @method string getChanger() 获取<p>变更服务的子账户</p>
 * @method void setChanger(string $Changer) 设置<p>变更服务的子账户</p>
 * @method string getChangerName() 获取<p>变更服务的子账户名称</p>
 * @method void setChangerName(string $ChangerName) 设置<p>变更服务的子账户名称</p>
 */
class Service extends AbstractModel
{
    /**
     * @var string <p>服务组id</p>
     */
    public $ServiceGroupId;

    /**
     * @var string <p>服务id</p>
     */
    public $ServiceId;

    /**
     * @var string <p>服务组名</p>
     */
    public $ServiceGroupName;

    /**
     * @var string <p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDescription;

    /**
     * @var ServiceInfo <p>服务的详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceInfo;

    /**
     * @var string <p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string <p>付费类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string <p>包年包月服务的资源组id，按量计费的服务为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string <p>包年包月服务对应的资源组名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var array <p>服务的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>服务所在的 ingress 的 name</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IngressName;

    /**
     * @var string <p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedBy;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string <p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUin;

    /**
     * @var integer <p>app_id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>服务的业务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>CREATE_SUCCEED 创建成功<br>ARREARS_STOP 因欠费停止<br>WHITELIST_STOP 白名单额度不足<br>RELEASE_FAILED 资源释放失败<br>WHITELIST_RELEASE_FAILED 白名单资源释放失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>BILLING 计费中<br>WHITELIST_USING 白名单试用中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessStatus;

    /**
     * @var ServiceLimit <p>已废弃,以ServiceInfo中的对应为准</p>
     * @deprecated
     */
    public $ServiceLimit;

    /**
     * @var ScheduledAction <p>已废弃,以ServiceInfo中的对应为准</p>
     * @deprecated
     */
    public $ScheduledAction;

    /**
     * @var string <p>服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateFailedReason;

    /**
     * @var string <p>服务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>Normal 正常运行中<br>Stopped 已停止<br>Stopping 停止中<br>Abnormal 异常<br>Pending 启动中<br>Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>费用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfo;

    /**
     * @var integer <p>模型权重</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string <p>服务的创建来源<br>AUTO_ML: 来自自动学习的一键发布<br>DEFAULT: 其他来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateSource;

    /**
     * @var string <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>服务组下服务的最高版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersion;

    /**
     * @var string <p>资源组类别 托管 NORMAL，纳管 SW</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupSWType;

    /**
     * @var string <p>服务的归档状态  Waiting 等待归档中，Archived 已归档</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArchiveStatus;

    /**
     * @var string <p>服务的部署类型 [STANDARD 标准部署，DIST 分布式多机部署] 默认STANDARD</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployType;

    /**
     * @var string <p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstancePerReplicas;

    /**
     * @var string <p>用于监控查询的Source<br>枚举值，部分情况下与CreateSource不同，通过该字段兼容</p>
     */
    public $MonitorSource;

    /**
     * @var string <p>服务创建者的子账号名称</p>
     */
    public $SubUinName;

    /**
     * @var SchedulingPolicy <p>服务的调度策略</p>
     */
    public $SchedulingPolicy;

    /**
     * @var array <p>外部的资源组信息，表示借调了哪些资源组的资源</p>
     */
    public $ExternalResourceGroups;

    /**
     * @var string <p>变更服务的子账户</p>
     */
    public $Changer;

    /**
     * @var string <p>变更服务的子账户名称</p>
     */
    public $ChangerName;

    /**
     * @param string $ServiceGroupId <p>服务组id</p>
     * @param string $ServiceId <p>服务id</p>
     * @param string $ServiceGroupName <p>服务组名</p>
     * @param string $ServiceDescription <p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceInfo $ServiceInfo <p>服务的详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType <p>付费类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId <p>包年包月服务的资源组id，按量计费的服务为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName <p>包年包月服务对应的资源组名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>服务的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IngressName <p>服务所在的 ingress 的 name</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedBy <p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin <p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>app_id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessStatus <p>服务的业务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>CREATE_SUCCEED 创建成功<br>ARREARS_STOP 因欠费停止<br>WHITELIST_STOP 白名单额度不足<br>RELEASE_FAILED 资源释放失败<br>WHITELIST_RELEASE_FAILED 白名单资源释放失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>BILLING 计费中<br>WHITELIST_USING 白名单试用中</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceLimit $ServiceLimit <p>已废弃,以ServiceInfo中的对应为准</p>
     * @param ScheduledAction $ScheduledAction <p>已废弃,以ServiceInfo中的对应为准</p>
     * @param string $CreateFailedReason <p>服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>服务状态<br>CREATING 创建中<br>CREATE_FAILED 创建失败<br>TIMEOUT_EXCEPTION 创建超时异常<br>Normal 正常运行中<br>Stopped 已停止<br>Stopping 停止中<br>Abnormal 异常<br>Pending 启动中<br>Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingInfo <p>费用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight <p>模型权重</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateSource <p>服务的创建来源<br>AUTO_ML: 来自自动学习的一键发布<br>DEFAULT: 其他来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersion <p>服务组下服务的最高版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupSWType <p>资源组类别 托管 NORMAL，纳管 SW</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ArchiveStatus <p>服务的归档状态  Waiting 等待归档中，Archived 已归档</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployType <p>服务的部署类型 [STANDARD 标准部署，DIST 分布式多机部署] 默认STANDARD</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstancePerReplicas <p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorSource <p>用于监控查询的Source<br>枚举值，部分情况下与CreateSource不同，通过该字段兼容</p>
     * @param string $SubUinName <p>服务创建者的子账号名称</p>
     * @param SchedulingPolicy $SchedulingPolicy <p>服务的调度策略</p>
     * @param array $ExternalResourceGroups <p>外部的资源组信息，表示借调了哪些资源组的资源</p>
     * @param string $Changer <p>变更服务的子账户</p>
     * @param string $ChangerName <p>变更服务的子账户名称</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceGroupName",$param) and $param["ServiceGroupName"] !== null) {
            $this->ServiceGroupName = $param["ServiceGroupName"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("ServiceInfo",$param) and $param["ServiceInfo"] !== null) {
            $this->ServiceInfo = new ServiceInfo();
            $this->ServiceInfo->deserialize($param["ServiceInfo"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IngressName",$param) and $param["IngressName"] !== null) {
            $this->IngressName = $param["IngressName"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BusinessStatus",$param) and $param["BusinessStatus"] !== null) {
            $this->BusinessStatus = $param["BusinessStatus"];
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("CreateFailedReason",$param) and $param["CreateFailedReason"] !== null) {
            $this->CreateFailedReason = $param["CreateFailedReason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("ResourceGroupSWType",$param) and $param["ResourceGroupSWType"] !== null) {
            $this->ResourceGroupSWType = $param["ResourceGroupSWType"];
        }

        if (array_key_exists("ArchiveStatus",$param) and $param["ArchiveStatus"] !== null) {
            $this->ArchiveStatus = $param["ArchiveStatus"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("InstancePerReplicas",$param) and $param["InstancePerReplicas"] !== null) {
            $this->InstancePerReplicas = $param["InstancePerReplicas"];
        }

        if (array_key_exists("MonitorSource",$param) and $param["MonitorSource"] !== null) {
            $this->MonitorSource = $param["MonitorSource"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("SchedulingPolicy",$param) and $param["SchedulingPolicy"] !== null) {
            $this->SchedulingPolicy = new SchedulingPolicy();
            $this->SchedulingPolicy->deserialize($param["SchedulingPolicy"]);
        }

        if (array_key_exists("ExternalResourceGroups",$param) and $param["ExternalResourceGroups"] !== null) {
            $this->ExternalResourceGroups = [];
            foreach ($param["ExternalResourceGroups"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ExternalResourceGroups, $obj);
            }
        }

        if (array_key_exists("Changer",$param) and $param["Changer"] !== null) {
            $this->Changer = $param["Changer"];
        }

        if (array_key_exists("ChangerName",$param) and $param["ChangerName"] !== null) {
            $this->ChangerName = $param["ChangerName"];
        }
    }
}
