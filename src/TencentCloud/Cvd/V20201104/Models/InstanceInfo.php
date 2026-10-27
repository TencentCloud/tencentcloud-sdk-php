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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云桌面实例详细信息
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getName() 获取<p>实例名称</p>
 * @method void setName(string $Name) 设置<p>实例名称</p>
 * @method string getStatus() 获取<p>实例状态<br>PENDING：表示创建中<br>LAUNCH_FAILED：表示创建失败<br>RUNNING：表示运行中<br>STOPPED：表示关机<br>STARTING：表示开机中<br>STOPPING：表示关机中<br>REBOOTING：表示重启中<br>SHUTDOWN：表示停止待销毁<br>TERMINATING：表示销毁中<br>DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm侧资源已经不存在了<br>FAILED：表示资源创建失败.这个是业务层面的状态<br>ROLLBACKING：表示回滚中<br>USING：表示使用中<br>RESETTING：表示重置中.</p>
 * @method void setStatus(string $Status) 设置<p>实例状态<br>PENDING：表示创建中<br>LAUNCH_FAILED：表示创建失败<br>RUNNING：表示运行中<br>STOPPED：表示关机<br>STARTING：表示开机中<br>STOPPING：表示关机中<br>REBOOTING：表示重启中<br>SHUTDOWN：表示停止待销毁<br>TERMINATING：表示销毁中<br>DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm侧资源已经不存在了<br>FAILED：表示资源创建失败.这个是业务层面的状态<br>ROLLBACKING：表示回滚中<br>USING：表示使用中<br>RESETTING：表示重置中.</p>
 * @method string getUserName() 获取<p>实例拥有者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>实例拥有者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取<p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置<p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>实例规格<br>S1.LARGE8：4VCPU 2.5GHZ主频 8G内存 无显卡<br>S1.LARGE16：4VCPU 2.5GHZ主频 16G内存 无显卡<br>S2.2XLARGE16：8VCPU 3.2GHZ主频 16G内存 无显卡<br>G1.LARGE16：4VCPU 2.5GHZ主频 16G内存 1/4 NVIDIA T4<br>G1.2XLARGE32：8VCPU 2.5GHZ主频 32G内存 1/2 NVIDIA T4<br>G1.4XLARGE64：16VCPU 2.5GHZ主频 64G内存 1 NVIDIA T4</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例规格<br>S1.LARGE8：4VCPU 2.5GHZ主频 8G内存 无显卡<br>S1.LARGE16：4VCPU 2.5GHZ主频 16G内存 无显卡<br>S2.2XLARGE16：8VCPU 3.2GHZ主频 16G内存 无显卡<br>G1.LARGE16：4VCPU 2.5GHZ主频 16G内存 1/4 NVIDIA T4<br>G1.2XLARGE32：8VCPU 2.5GHZ主频 32G内存 1/2 NVIDIA T4<br>G1.4XLARGE64：16VCPU 2.5GHZ主频 64G内存 1 NVIDIA T4</p>
 * @method Disk getSysDisk() 获取<p>系统盘信息</p>
 * @method void setSysDisk(Disk $SysDisk) 设置<p>系统盘信息</p>
 * @method array getDataDiskList() 获取<p>挂载的数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDiskList(array $DataDiskList) 设置<p>挂载的数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>桌面实例所在的区域</p>
 * @method void setRegion(string $Region) 设置<p>桌面实例所在的区域</p>
 * @method string getChargeType() 获取<p>桌面计费类型</p>
 * @method void setChargeType(string $ChargeType) 设置<p>桌面计费类型</p>
 * @method string getAutoRenewFlag() 获取<p>自动续费标识。取值范围：<br>NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费<br>NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：表示不通知即将过期，也不自动续费。</p><p>注意：后付费模式本项为null</p>
 * @method void setAutoRenewFlag(string $AutoRenewFlag) 设置<p>自动续费标识。取值范围：<br>NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费<br>NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：表示不通知即将过期，也不自动续费。</p><p>注意：后付费模式本项为null</p>
 * @method string getCreateTime() 获取<p>桌面创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>桌面创建时间</p>
 * @method string getExpiredTime() 获取<p>桌面过期时间</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>桌面过期时间</p>
 * @method string getDescription() 获取<p>桌面描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>桌面描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostName() 获取<p>桌面hostname</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置<p>桌面hostname</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取<p>桌面拥有者显示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置<p>桌面拥有者显示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindStatus() 获取<p>桌面绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindStatus(string $BindStatus) 设置<p>桌面绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取<p>创建桌面的镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置<p>创建桌面的镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVpcId() 获取<p>用户桌面vpc id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVpcId(string $UserVpcId) 设置<p>用户桌面vpc id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserSubnetId() 获取<p>用户桌面子网 id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserSubnetId(string $UserSubnetId) 设置<p>用户桌面子网 id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserPrivateIp() 获取<p>用户桌面ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserPrivateIp(string $UserPrivateIp) 设置<p>用户桌面ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取<p>机器回收站到期时间，只有机器状态为SHUTDOWN该值才有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置<p>机器回收站到期时间，只有机器状态为SHUTDOWN该值才有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastStatusChangeReason() 获取<p>最近一次状态变更原因, AUTO:被动变更,如欠费,如包月实例到期, MANUAL:主动变更,如主动退还实例，当前只有机器处于ISOLATING、SHUTDOWN、TERMINATING、DELETED该字段有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastStatusChangeReason(string $LastStatusChangeReason) 设置<p>最近一次状态变更原因, AUTO:被动变更,如欠费,如包月实例到期, MANUAL:主动变更,如主动退还实例，当前只有机器处于ISOLATING、SHUTDOWN、TERMINATING、DELETED该字段有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperation() 获取<p>机器最近一次操作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置<p>机器最近一次操作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取<p>机器最近一次操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置<p>机器最近一次操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationRequestID() 获取<p>机器最近一次操作请求ReqId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationRequestID(string $LatestOperationRequestID) 设置<p>机器最近一次操作请求ReqId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsName() 获取<p>机器操作系统名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsName(string $OsName) 设置<p>机器操作系统名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSetId() 获取<p>实例逻辑set</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetId(string $SetId) 设置<p>实例逻辑set</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroups() 获取<p>关联的安全组ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroups(array $SecurityGroups) 设置<p>关联的安全组ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDownGradeTimes() 获取<p>预付费实例降配次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownGradeTimes(integer $DownGradeTimes) 设置<p>预付费实例降配次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDomainControlPolicies() 获取<p>桌面绑定的域名策略ID列表，最多五个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainControlPolicies(array $DomainControlPolicies) 设置<p>桌面绑定的域名策略ID列表，最多五个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaterMarkPolicy() 获取<p>桌面绑定的水印策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaterMarkPolicy(string $WaterMarkPolicy) 设置<p>桌面绑定的水印策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScreenRecordingPolicy() 获取<p>桌面绑定的录屏策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScreenRecordingPolicy(string $ScreenRecordingPolicy) 设置<p>桌面绑定的录屏策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainControlPolicyType() 获取<p>WHITE --- 白名单策略<br>BLACK --- 黑名单策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainControlPolicyType(string $DomainControlPolicyType) 设置<p>WHITE --- 白名单策略<br>BLACK --- 黑名单策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunControlPolicy() 获取<p>桌面绑定的运行管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunControlPolicy(string $RunControlPolicy) 设置<p>桌面绑定的运行管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstallControlPolicy() 获取<p>桌面绑定的安装管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstallControlPolicy(string $InstallControlPolicy) 设置<p>桌面绑定的安装管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAnonymousAccess() 获取<p>桌面是否绑定匿名用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnonymousAccess(boolean $AnonymousAccess) 设置<p>桌面是否绑定匿名用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>实例绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>实例绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $Name;

    /**
     * @var string <p>实例状态<br>PENDING：表示创建中<br>LAUNCH_FAILED：表示创建失败<br>RUNNING：表示运行中<br>STOPPED：表示关机<br>STARTING：表示开机中<br>STOPPING：表示关机中<br>REBOOTING：表示重启中<br>SHUTDOWN：表示停止待销毁<br>TERMINATING：表示销毁中<br>DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm侧资源已经不存在了<br>FAILED：表示资源创建失败.这个是业务层面的状态<br>ROLLBACKING：表示回滚中<br>USING：表示使用中<br>RESETTING：表示重置中.</p>
     */
    public $Status;

    /**
     * @var string <p>实例拥有者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string <p>实例规格<br>S1.LARGE8：4VCPU 2.5GHZ主频 8G内存 无显卡<br>S1.LARGE16：4VCPU 2.5GHZ主频 16G内存 无显卡<br>S2.2XLARGE16：8VCPU 3.2GHZ主频 16G内存 无显卡<br>G1.LARGE16：4VCPU 2.5GHZ主频 16G内存 1/4 NVIDIA T4<br>G1.2XLARGE32：8VCPU 2.5GHZ主频 32G内存 1/2 NVIDIA T4<br>G1.4XLARGE64：16VCPU 2.5GHZ主频 64G内存 1 NVIDIA T4</p>
     */
    public $InstanceType;

    /**
     * @var Disk <p>系统盘信息</p>
     */
    public $SysDisk;

    /**
     * @var array <p>挂载的数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDiskList;

    /**
     * @var string <p>桌面实例所在的区域</p>
     */
    public $Region;

    /**
     * @var string <p>桌面计费类型</p>
     */
    public $ChargeType;

    /**
     * @var string <p>自动续费标识。取值范围：<br>NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费<br>NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：表示不通知即将过期，也不自动续费。</p><p>注意：后付费模式本项为null</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>桌面创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>桌面过期时间</p>
     */
    public $ExpiredTime;

    /**
     * @var string <p>桌面描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>桌面hostname</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string <p>桌面拥有者显示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string <p>桌面绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindStatus;

    /**
     * @var string <p>创建桌面的镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string <p>用户桌面vpc id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVpcId;

    /**
     * @var string <p>用户桌面子网 id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserSubnetId;

    /**
     * @var string <p>用户桌面ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserPrivateIp;

    /**
     * @var string <p>机器回收站到期时间，只有机器状态为SHUTDOWN该值才有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var string <p>最近一次状态变更原因, AUTO:被动变更,如欠费,如包月实例到期, MANUAL:主动变更,如主动退还实例，当前只有机器处于ISOLATING、SHUTDOWN、TERMINATING、DELETED该字段有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastStatusChangeReason;

    /**
     * @var string <p>机器最近一次操作</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string <p>机器最近一次操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var string <p>机器最近一次操作请求ReqId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationRequestID;

    /**
     * @var string <p>机器操作系统名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsName;

    /**
     * @var string <p>实例逻辑set</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetId;

    /**
     * @var integer <p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var array <p>关联的安全组ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroups;

    /**
     * @var integer <p>预付费实例降配次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownGradeTimes;

    /**
     * @var array <p>桌面绑定的域名策略ID列表，最多五个</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainControlPolicies;

    /**
     * @var string <p>桌面绑定的水印策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaterMarkPolicy;

    /**
     * @var string <p>桌面绑定的录屏策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScreenRecordingPolicy;

    /**
     * @var string <p>WHITE --- 白名单策略<br>BLACK --- 黑名单策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainControlPolicyType;

    /**
     * @var string <p>桌面绑定的运行管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunControlPolicy;

    /**
     * @var string <p>桌面绑定的安装管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstallControlPolicy;

    /**
     * @var boolean <p>桌面是否绑定匿名用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnonymousAccess;

    /**
     * @var array <p>实例绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $Name <p>实例名称</p>
     * @param string $Status <p>实例状态<br>PENDING：表示创建中<br>LAUNCH_FAILED：表示创建失败<br>RUNNING：表示运行中<br>STOPPED：表示关机<br>STARTING：表示开机中<br>STOPPING：表示关机中<br>REBOOTING：表示重启中<br>SHUTDOWN：表示停止待销毁<br>TERMINATING：表示销毁中<br>DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm侧资源已经不存在了<br>FAILED：表示资源创建失败.这个是业务层面的状态<br>ROLLBACKING：表示回滚中<br>USING：表示使用中<br>RESETTING：表示重置中.</p>
     * @param string $UserName <p>实例拥有者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId <p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>实例规格<br>S1.LARGE8：4VCPU 2.5GHZ主频 8G内存 无显卡<br>S1.LARGE16：4VCPU 2.5GHZ主频 16G内存 无显卡<br>S2.2XLARGE16：8VCPU 3.2GHZ主频 16G内存 无显卡<br>G1.LARGE16：4VCPU 2.5GHZ主频 16G内存 1/4 NVIDIA T4<br>G1.2XLARGE32：8VCPU 2.5GHZ主频 32G内存 1/2 NVIDIA T4<br>G1.4XLARGE64：16VCPU 2.5GHZ主频 64G内存 1 NVIDIA T4</p>
     * @param Disk $SysDisk <p>系统盘信息</p>
     * @param array $DataDiskList <p>挂载的数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>桌面实例所在的区域</p>
     * @param string $ChargeType <p>桌面计费类型</p>
     * @param string $AutoRenewFlag <p>自动续费标识。取值范围：<br>NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费<br>NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：表示不通知即将过期，也不自动续费。</p><p>注意：后付费模式本项为null</p>
     * @param string $CreateTime <p>桌面创建时间</p>
     * @param string $ExpiredTime <p>桌面过期时间</p>
     * @param string $Description <p>桌面描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostName <p>桌面hostname</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName <p>桌面拥有者显示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindStatus <p>桌面绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId <p>创建桌面的镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVpcId <p>用户桌面vpc id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserSubnetId <p>用户桌面子网 id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserPrivateIp <p>用户桌面ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime <p>机器回收站到期时间，只有机器状态为SHUTDOWN该值才有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastStatusChangeReason <p>最近一次状态变更原因, AUTO:被动变更,如欠费,如包月实例到期, MANUAL:主动变更,如主动退还实例，当前只有机器处于ISOLATING、SHUTDOWN、TERMINATING、DELETED该字段有意义</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperation <p>机器最近一次操作</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState <p>机器最近一次操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationRequestID <p>机器最近一次操作请求ReqId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsName <p>机器操作系统名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SetId <p>实例逻辑set</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroups <p>关联的安全组ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DownGradeTimes <p>预付费实例降配次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DomainControlPolicies <p>桌面绑定的域名策略ID列表，最多五个</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaterMarkPolicy <p>桌面绑定的水印策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScreenRecordingPolicy <p>桌面绑定的录屏策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainControlPolicyType <p>WHITE --- 白名单策略<br>BLACK --- 黑名单策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunControlPolicy <p>桌面绑定的运行管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstallControlPolicy <p>桌面绑定的安装管控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AnonymousAccess <p>桌面是否绑定匿名用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>实例绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SysDisk",$param) and $param["SysDisk"] !== null) {
            $this->SysDisk = new Disk();
            $this->SysDisk->deserialize($param["SysDisk"]);
        }

        if (array_key_exists("DataDiskList",$param) and $param["DataDiskList"] !== null) {
            $this->DataDiskList = [];
            foreach ($param["DataDiskList"] as $key => $value){
                $obj = new Disk();
                $obj->deserialize($value);
                array_push($this->DataDiskList, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("UserVpcId",$param) and $param["UserVpcId"] !== null) {
            $this->UserVpcId = $param["UserVpcId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("UserPrivateIp",$param) and $param["UserPrivateIp"] !== null) {
            $this->UserPrivateIp = $param["UserPrivateIp"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("LastStatusChangeReason",$param) and $param["LastStatusChangeReason"] !== null) {
            $this->LastStatusChangeReason = $param["LastStatusChangeReason"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestID",$param) and $param["LatestOperationRequestID"] !== null) {
            $this->LatestOperationRequestID = $param["LatestOperationRequestID"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("DownGradeTimes",$param) and $param["DownGradeTimes"] !== null) {
            $this->DownGradeTimes = $param["DownGradeTimes"];
        }

        if (array_key_exists("DomainControlPolicies",$param) and $param["DomainControlPolicies"] !== null) {
            $this->DomainControlPolicies = $param["DomainControlPolicies"];
        }

        if (array_key_exists("WaterMarkPolicy",$param) and $param["WaterMarkPolicy"] !== null) {
            $this->WaterMarkPolicy = $param["WaterMarkPolicy"];
        }

        if (array_key_exists("ScreenRecordingPolicy",$param) and $param["ScreenRecordingPolicy"] !== null) {
            $this->ScreenRecordingPolicy = $param["ScreenRecordingPolicy"];
        }

        if (array_key_exists("DomainControlPolicyType",$param) and $param["DomainControlPolicyType"] !== null) {
            $this->DomainControlPolicyType = $param["DomainControlPolicyType"];
        }

        if (array_key_exists("RunControlPolicy",$param) and $param["RunControlPolicy"] !== null) {
            $this->RunControlPolicy = $param["RunControlPolicy"];
        }

        if (array_key_exists("InstallControlPolicy",$param) and $param["InstallControlPolicy"] !== null) {
            $this->InstallControlPolicy = $param["InstallControlPolicy"];
        }

        if (array_key_exists("AnonymousAccess",$param) and $param["AnonymousAccess"] !== null) {
            $this->AnonymousAccess = $param["AnonymousAccess"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
