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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复制对信息
 *
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getCopyPairId() 获取复制对ID（CVM 类型为 cvmcopypair-xxxxxxxx，DISK/CFS 类型为 copypair-xxxxxxxx）
 * @method void setCopyPairId(string $CopyPairId) 设置复制对ID（CVM 类型为 cvmcopypair-xxxxxxxx，DISK/CFS 类型为 copypair-xxxxxxxx）
 * @method string getCopyPairName() 获取复制对名称
 * @method void setCopyPairName(string $CopyPairName) 设置复制对名称
 * @method string getSitePairId() 获取所属容灾站点对ID
 * @method void setSitePairId(string $SitePairId) 设置所属容灾站点对ID
 * @method string getSitePairName() 获取所属容灾站点对名称
 * @method void setSitePairName(string $SitePairName) 设置所属容灾站点对名称
 * @method string getProtectGroupId() 获取保护组ID
 * @method void setProtectGroupId(string $ProtectGroupId) 设置保护组ID
 * @method string getProtectGroupName() 获取保护组名称
 * @method void setProtectGroupName(string $ProtectGroupName) 设置保护组名称
 * @method string getCopyPairState() 获取复制对状态。可选值：INIT、RUNNING、FULL_COPYING、INC_COPYING、NORMAL、DOWN、DEGRADE 等
 * @method void setCopyPairState(string $CopyPairState) 设置复制对状态。可选值：INIT、RUNNING、FULL_COPYING、INC_COPYING、NORMAL、DOWN、DEGRADE 等
 * @method string getCopyPairType() 获取复制对类型。可选值：DISK、INSTANCE、CFS
 * @method void setCopyPairType(string $CopyPairType) 设置复制对类型。可选值：DISK、INSTANCE、CFS
 * @method string getSourceRegion() 获取生产地域
 * @method void setSourceRegion(string $SourceRegion) 设置生产地域
 * @method string getSourceZone() 获取生产可用区
 * @method void setSourceZone(string $SourceZone) 设置生产可用区
 * @method string getSourceVpc() 获取生产端VPC
 * @method void setSourceVpc(string $SourceVpc) 设置生产端VPC
 * @method string getTargetRegion() 获取容灾地域
 * @method void setTargetRegion(string $TargetRegion) 设置容灾地域
 * @method string getTargetZone() 获取容灾可用区
 * @method void setTargetZone(string $TargetZone) 设置容灾可用区
 * @method string getTargetVpc() 获取容灾端VPC
 * @method void setTargetVpc(string $TargetVpc) 设置容灾端VPC
 * @method string getSourceResourceId() 获取生产资源ID。CVM 类型为源 InstanceId（ins-xxx）；DISK 类型为源 DiskId（disk-xxx）；CFS 类型为源 FilesystemId（cfs-xxx）
 * @method void setSourceResourceId(string $SourceResourceId) 设置生产资源ID。CVM 类型为源 InstanceId（ins-xxx）；DISK 类型为源 DiskId（disk-xxx）；CFS 类型为源 FilesystemId（cfs-xxx）
 * @method string getTargetResourceId() 获取容灾资源ID。语义同 SourceResourceId（CVM/DISK/CFS）。延迟创建模式且 CVM 未真实创建时为占位符 drp-xxx，CVM 创建后为真实 ins-xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetResourceId(string $TargetResourceId) 设置容灾资源ID。语义同 SourceResourceId（CVM/DISK/CFS）。延迟创建模式且 CVM 未真实创建时为占位符 drp-xxx，CVM 创建后为真实 ins-xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取生产站点盘挂载的实例ID（DISK 类型时为挂载的 CVM ins-xxx；INSTANCE 类型时与 SourceResourceId 一致）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置生产站点盘挂载的实例ID（DISK 类型时为挂载的 CVM ins-xxx；INSTANCE 类型时与 SourceResourceId 一致）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceCopyPairId() 获取所属CVM复制对ID（仅 DISK 类型且其 CVM 复制对存在时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCopyPairId(string $InstanceCopyPairId) 设置所属CVM复制对ID（仅 DISK 类型且其 CVM 复制对存在时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPercent() 获取复制进度。CVM 类型为所有挂载磁盘进度的平均值；DISK/CFS 类型为本盘进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置复制进度。CVM 类型为所有挂载磁盘进度的平均值；DISK/CFS 类型为本盘进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestProtectionTime() 获取最新保护时间点。当 CopyPairState=FULL_COPYING 时为 null（首次全量未完成）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestProtectionTime(string $LatestProtectionTime) 设置最新保护时间点。当 CopyPairState=FULL_COPYING 时为 null（首次全量未完成）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecoveryPointObjective() 获取RPO（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoveryPointObjective(integer $RecoveryPointObjective) 设置RPO（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataDirection() 获取数据方向。可选值：POSITIVE（正向）、REVERSE（反向，failover 后）。后端在 REVERSE 时已自动轮转 src/target 字段
 * @method void setDataDirection(string $DataDirection) 设置数据方向。可选值：POSITIVE（正向）、REVERSE（反向，failover 后）。后端在 REVERSE 时已自动轮转 src/target 字段
 * @method string getCreateFrom() 获取创建来源。可选值：LOCAL（本地侧创建）、PEER（对端创建）
 * @method void setCreateFrom(string $CreateFrom) 设置创建来源。可选值：LOCAL（本地侧创建）、PEER（对端创建）
 * @method string getDisasterRecoveryType() 获取容灾类型。可选值：CROSS_ZONE（跨可用区）、CROSS_REGION（跨地域）、CROSS_CLOUD（跨云）
 * @method void setDisasterRecoveryType(string $DisasterRecoveryType) 设置容灾类型。可选值：CROSS_ZONE（跨可用区）、CROSS_REGION（跨地域）、CROSS_CLOUD（跨云）
 * @method string getPeerCloudName() 获取对端云名称（仅跨云场景）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerCloudName(string $PeerCloudName) 设置对端云名称（仅跨云场景）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRollbacking() 获取是否在回滚中（0/1）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollbacking(integer $Rollbacking) 设置是否在回滚中（0/1）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRollbackPercent() 获取回滚进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollbackPercent(integer $RollbackPercent) 设置回滚进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getAccountUin() 获取创建账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置创建账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取创建协作者 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置创建协作者 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDrillGroupId() 获取演练组ID（用于演练组内过滤存量复制对，无演练时为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrillGroupId(string $DrillGroupId) 设置演练组ID（用于演练组内过滤存量复制对，无演练时为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtectionTimeSet() 获取保护时间点列表（仅当 QueryProtectionTime=true 时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectionTimeSet(array $ProtectionTimeSet) 设置保护时间点列表（仅当 QueryProtectionTime=true 时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiskCopyPairSet() 获取CVM下挂载磁盘的复制对列表（仅 CopyPairType=INSTANCE 时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskCopyPairSet(array $DiskCopyPairSet) 设置CVM下挂载磁盘的复制对列表（仅 CopyPairType=INSTANCE 时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeferredCreate() 获取是否为延迟创建模式（创建后固定不变）。仅 CVM 复制对返回
 * @method void setDeferredCreate(boolean $DeferredCreate) 设置是否为延迟创建模式（创建后固定不变）。仅 CVM 复制对返回
 * @method boolean getTargetCvmCreated() 获取目标 CVM 是否已真实创建（首次 failover 完成后置 true）。仅 CVM 复制对返回
 * @method void setTargetCvmCreated(boolean $TargetCvmCreated) 设置目标 CVM 是否已真实创建（首次 failover 完成后置 true）。仅 CVM 复制对返回
 * @method string getCvmCreateParams() 获取CVM 创建参数（JSON 字符串）。仅当请求传 QueryCvmCreateParams=true 且复制对处于 deferred_create=1 AND target_cvm_created=0 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmCreateParams(string $CvmCreateParams) 设置CVM 创建参数（JSON 字符串）。仅当请求传 QueryCvmCreateParams=true 且复制对处于 deferred_create=1 AND target_cvm_created=0 时返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class CopyPair extends AbstractModel
{
    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 复制对ID（CVM 类型为 cvmcopypair-xxxxxxxx，DISK/CFS 类型为 copypair-xxxxxxxx）
     */
    public $CopyPairId;

    /**
     * @var string 复制对名称
     */
    public $CopyPairName;

    /**
     * @var string 所属容灾站点对ID
     */
    public $SitePairId;

    /**
     * @var string 所属容灾站点对名称
     */
    public $SitePairName;

    /**
     * @var string 保护组ID
     */
    public $ProtectGroupId;

    /**
     * @var string 保护组名称
     */
    public $ProtectGroupName;

    /**
     * @var string 复制对状态。可选值：INIT、RUNNING、FULL_COPYING、INC_COPYING、NORMAL、DOWN、DEGRADE 等
     */
    public $CopyPairState;

    /**
     * @var string 复制对类型。可选值：DISK、INSTANCE、CFS
     */
    public $CopyPairType;

    /**
     * @var string 生产地域
     */
    public $SourceRegion;

    /**
     * @var string 生产可用区
     */
    public $SourceZone;

    /**
     * @var string 生产端VPC
     */
    public $SourceVpc;

    /**
     * @var string 容灾地域
     */
    public $TargetRegion;

    /**
     * @var string 容灾可用区
     */
    public $TargetZone;

    /**
     * @var string 容灾端VPC
     */
    public $TargetVpc;

    /**
     * @var string 生产资源ID。CVM 类型为源 InstanceId（ins-xxx）；DISK 类型为源 DiskId（disk-xxx）；CFS 类型为源 FilesystemId（cfs-xxx）
     */
    public $SourceResourceId;

    /**
     * @var string 容灾资源ID。语义同 SourceResourceId（CVM/DISK/CFS）。延迟创建模式且 CVM 未真实创建时为占位符 drp-xxx，CVM 创建后为真实 ins-xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetResourceId;

    /**
     * @var string 生产站点盘挂载的实例ID（DISK 类型时为挂载的 CVM ins-xxx；INSTANCE 类型时与 SourceResourceId 一致）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 所属CVM复制对ID（仅 DISK 类型且其 CVM 复制对存在时返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCopyPairId;

    /**
     * @var integer 复制进度。CVM 类型为所有挂载磁盘进度的平均值；DISK/CFS 类型为本盘进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var string 最新保护时间点。当 CopyPairState=FULL_COPYING 时为 null（首次全量未完成）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestProtectionTime;

    /**
     * @var integer RPO（秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoveryPointObjective;

    /**
     * @var string 数据方向。可选值：POSITIVE（正向）、REVERSE（反向，failover 后）。后端在 REVERSE 时已自动轮转 src/target 字段
     */
    public $DataDirection;

    /**
     * @var string 创建来源。可选值：LOCAL（本地侧创建）、PEER（对端创建）
     */
    public $CreateFrom;

    /**
     * @var string 容灾类型。可选值：CROSS_ZONE（跨可用区）、CROSS_REGION（跨地域）、CROSS_CLOUD（跨云）
     */
    public $DisasterRecoveryType;

    /**
     * @var string 对端云名称（仅跨云场景）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerCloudName;

    /**
     * @var integer 是否在回滚中（0/1）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rollbacking;

    /**
     * @var integer 回滚进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RollbackPercent;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 创建账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string 创建协作者 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 演练组ID（用于演练组内过滤存量复制对，无演练时为 null）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrillGroupId;

    /**
     * @var array 保护时间点列表（仅当 QueryProtectionTime=true 时返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectionTimeSet;

    /**
     * @var array CVM下挂载磁盘的复制对列表（仅 CopyPairType=INSTANCE 时返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskCopyPairSet;

    /**
     * @var boolean 是否为延迟创建模式（创建后固定不变）。仅 CVM 复制对返回
     */
    public $DeferredCreate;

    /**
     * @var boolean 目标 CVM 是否已真实创建（首次 failover 完成后置 true）。仅 CVM 复制对返回
     */
    public $TargetCvmCreated;

    /**
     * @var string CVM 创建参数（JSON 字符串）。仅当请求传 QueryCvmCreateParams=true 且复制对处于 deferred_create=1 AND target_cvm_created=0 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmCreateParams;

    /**
     * @param integer $AppId 用户ID
     * @param string $CopyPairId 复制对ID（CVM 类型为 cvmcopypair-xxxxxxxx，DISK/CFS 类型为 copypair-xxxxxxxx）
     * @param string $CopyPairName 复制对名称
     * @param string $SitePairId 所属容灾站点对ID
     * @param string $SitePairName 所属容灾站点对名称
     * @param string $ProtectGroupId 保护组ID
     * @param string $ProtectGroupName 保护组名称
     * @param string $CopyPairState 复制对状态。可选值：INIT、RUNNING、FULL_COPYING、INC_COPYING、NORMAL、DOWN、DEGRADE 等
     * @param string $CopyPairType 复制对类型。可选值：DISK、INSTANCE、CFS
     * @param string $SourceRegion 生产地域
     * @param string $SourceZone 生产可用区
     * @param string $SourceVpc 生产端VPC
     * @param string $TargetRegion 容灾地域
     * @param string $TargetZone 容灾可用区
     * @param string $TargetVpc 容灾端VPC
     * @param string $SourceResourceId 生产资源ID。CVM 类型为源 InstanceId（ins-xxx）；DISK 类型为源 DiskId（disk-xxx）；CFS 类型为源 FilesystemId（cfs-xxx）
     * @param string $TargetResourceId 容灾资源ID。语义同 SourceResourceId（CVM/DISK/CFS）。延迟创建模式且 CVM 未真实创建时为占位符 drp-xxx，CVM 创建后为真实 ins-xxx
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 生产站点盘挂载的实例ID（DISK 类型时为挂载的 CVM ins-xxx；INSTANCE 类型时与 SourceResourceId 一致）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceCopyPairId 所属CVM复制对ID（仅 DISK 类型且其 CVM 复制对存在时返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Percent 复制进度。CVM 类型为所有挂载磁盘进度的平均值；DISK/CFS 类型为本盘进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestProtectionTime 最新保护时间点。当 CopyPairState=FULL_COPYING 时为 null（首次全量未完成）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecoveryPointObjective RPO（秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataDirection 数据方向。可选值：POSITIVE（正向）、REVERSE（反向，failover 后）。后端在 REVERSE 时已自动轮转 src/target 字段
     * @param string $CreateFrom 创建来源。可选值：LOCAL（本地侧创建）、PEER（对端创建）
     * @param string $DisasterRecoveryType 容灾类型。可选值：CROSS_ZONE（跨可用区）、CROSS_REGION（跨地域）、CROSS_CLOUD（跨云）
     * @param string $PeerCloudName 对端云名称（仅跨云场景）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rollbacking 是否在回滚中（0/1）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RollbackPercent 回滚进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $AccountUin 创建账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 创建协作者 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DrillGroupId 演练组ID（用于演练组内过滤存量复制对，无演练时为 null）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProtectionTimeSet 保护时间点列表（仅当 QueryProtectionTime=true 时返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DiskCopyPairSet CVM下挂载磁盘的复制对列表（仅 CopyPairType=INSTANCE 时返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeferredCreate 是否为延迟创建模式（创建后固定不变）。仅 CVM 复制对返回
     * @param boolean $TargetCvmCreated 目标 CVM 是否已真实创建（首次 failover 完成后置 true）。仅 CVM 复制对返回
     * @param string $CvmCreateParams CVM 创建参数（JSON 字符串）。仅当请求传 QueryCvmCreateParams=true 且复制对处于 deferred_create=1 AND target_cvm_created=0 时返回
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CopyPairId",$param) and $param["CopyPairId"] !== null) {
            $this->CopyPairId = $param["CopyPairId"];
        }

        if (array_key_exists("CopyPairName",$param) and $param["CopyPairName"] !== null) {
            $this->CopyPairName = $param["CopyPairName"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("SitePairName",$param) and $param["SitePairName"] !== null) {
            $this->SitePairName = $param["SitePairName"];
        }

        if (array_key_exists("ProtectGroupId",$param) and $param["ProtectGroupId"] !== null) {
            $this->ProtectGroupId = $param["ProtectGroupId"];
        }

        if (array_key_exists("ProtectGroupName",$param) and $param["ProtectGroupName"] !== null) {
            $this->ProtectGroupName = $param["ProtectGroupName"];
        }

        if (array_key_exists("CopyPairState",$param) and $param["CopyPairState"] !== null) {
            $this->CopyPairState = $param["CopyPairState"];
        }

        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("SourceZone",$param) and $param["SourceZone"] !== null) {
            $this->SourceZone = $param["SourceZone"];
        }

        if (array_key_exists("SourceVpc",$param) and $param["SourceVpc"] !== null) {
            $this->SourceVpc = $param["SourceVpc"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("TargetZone",$param) and $param["TargetZone"] !== null) {
            $this->TargetZone = $param["TargetZone"];
        }

        if (array_key_exists("TargetVpc",$param) and $param["TargetVpc"] !== null) {
            $this->TargetVpc = $param["TargetVpc"];
        }

        if (array_key_exists("SourceResourceId",$param) and $param["SourceResourceId"] !== null) {
            $this->SourceResourceId = $param["SourceResourceId"];
        }

        if (array_key_exists("TargetResourceId",$param) and $param["TargetResourceId"] !== null) {
            $this->TargetResourceId = $param["TargetResourceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceCopyPairId",$param) and $param["InstanceCopyPairId"] !== null) {
            $this->InstanceCopyPairId = $param["InstanceCopyPairId"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("LatestProtectionTime",$param) and $param["LatestProtectionTime"] !== null) {
            $this->LatestProtectionTime = $param["LatestProtectionTime"];
        }

        if (array_key_exists("RecoveryPointObjective",$param) and $param["RecoveryPointObjective"] !== null) {
            $this->RecoveryPointObjective = $param["RecoveryPointObjective"];
        }

        if (array_key_exists("DataDirection",$param) and $param["DataDirection"] !== null) {
            $this->DataDirection = $param["DataDirection"];
        }

        if (array_key_exists("CreateFrom",$param) and $param["CreateFrom"] !== null) {
            $this->CreateFrom = $param["CreateFrom"];
        }

        if (array_key_exists("DisasterRecoveryType",$param) and $param["DisasterRecoveryType"] !== null) {
            $this->DisasterRecoveryType = $param["DisasterRecoveryType"];
        }

        if (array_key_exists("PeerCloudName",$param) and $param["PeerCloudName"] !== null) {
            $this->PeerCloudName = $param["PeerCloudName"];
        }

        if (array_key_exists("Rollbacking",$param) and $param["Rollbacking"] !== null) {
            $this->Rollbacking = $param["Rollbacking"];
        }

        if (array_key_exists("RollbackPercent",$param) and $param["RollbackPercent"] !== null) {
            $this->RollbackPercent = $param["RollbackPercent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("DrillGroupId",$param) and $param["DrillGroupId"] !== null) {
            $this->DrillGroupId = $param["DrillGroupId"];
        }

        if (array_key_exists("ProtectionTimeSet",$param) and $param["ProtectionTimeSet"] !== null) {
            $this->ProtectionTimeSet = $param["ProtectionTimeSet"];
        }

        if (array_key_exists("DiskCopyPairSet",$param) and $param["DiskCopyPairSet"] !== null) {
            $this->DiskCopyPairSet = [];
            foreach ($param["DiskCopyPairSet"] as $key => $value){
                $obj = new DiskCopyPairForCvm();
                $obj->deserialize($value);
                array_push($this->DiskCopyPairSet, $obj);
            }
        }

        if (array_key_exists("DeferredCreate",$param) and $param["DeferredCreate"] !== null) {
            $this->DeferredCreate = $param["DeferredCreate"];
        }

        if (array_key_exists("TargetCvmCreated",$param) and $param["TargetCvmCreated"] !== null) {
            $this->TargetCvmCreated = $param["TargetCvmCreated"];
        }

        if (array_key_exists("CvmCreateParams",$param) and $param["CvmCreateParams"] !== null) {
            $this->CvmCreateParams = $param["CvmCreateParams"];
        }
    }
}
