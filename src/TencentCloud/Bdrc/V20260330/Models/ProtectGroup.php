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
 * 容灾保护组信息
 *
 * @method integer getAppId() 获取用户AppId
 * @method void setAppId(integer $AppId) 设置用户AppId
 * @method string getProtectGroupId() 获取保护组ID
 * @method void setProtectGroupId(string $ProtectGroupId) 设置保护组ID
 * @method string getProtectGroupName() 获取保护组名称
 * @method void setProtectGroupName(string $ProtectGroupName) 设置保护组名称
 * @method string getProtectGroupType() 获取保护组类型（产品类型，如 DISK/CFS/INSTANCE）
 * @method void setProtectGroupType(string $ProtectGroupType) 设置保护组类型（产品类型，如 DISK/CFS/INSTANCE）
 * @method string getSitePairId() 获取所属容灾策略ID
 * @method void setSitePairId(string $SitePairId) 设置所属容灾策略ID
 * @method string getSitePairName() 获取所属容灾策略名称
 * @method void setSitePairName(string $SitePairName) 设置所属容灾策略名称
 * @method integer getRecoveryPointObjective() 获取RPO时间（单位秒）
 * @method void setRecoveryPointObjective(integer $RecoveryPointObjective) 设置RPO时间（单位秒）
 * @method string getSourceRegion() 获取生产地域（当 DataDirection=REVERSE 时会与 TargetRegion 自动轮转，保持用户视角一致）
 * @method void setSourceRegion(string $SourceRegion) 设置生产地域（当 DataDirection=REVERSE 时会与 TargetRegion 自动轮转，保持用户视角一致）
 * @method string getSourceZone() 获取生产可用区（REVERSE 时与 TargetZone 自动轮转）
 * @method void setSourceZone(string $SourceZone) 设置生产可用区（REVERSE 时与 TargetZone 自动轮转）
 * @method string getSourceVpc() 获取生产端VPC（REVERSE 时与 TargetVpc 自动轮转）
 * @method void setSourceVpc(string $SourceVpc) 设置生产端VPC（REVERSE 时与 TargetVpc 自动轮转）
 * @method string getTargetRegion() 获取容灾地域（REVERSE 时与 SourceRegion 自动轮转）
 * @method void setTargetRegion(string $TargetRegion) 设置容灾地域（REVERSE 时与 SourceRegion 自动轮转）
 * @method string getTargetZone() 获取容灾可用区
 * @method void setTargetZone(string $TargetZone) 设置容灾可用区
 * @method string getTargetVpc() 获取容灾端VPC
 * @method void setTargetVpc(string $TargetVpc) 设置容灾端VPC
 * @method string getCopyType() 获取复制技术（SYN 同步 / ASY 异步）
 * @method void setCopyType(string $CopyType) 设置复制技术（SYN 同步 / ASY 异步）
 * @method string getDisasterRecoveryType() 获取容灾类型（CROSS_ZONE 跨可用区 / CROSS_REGION 跨地域 / CROSS_CLOUD 跨云）
 * @method void setDisasterRecoveryType(string $DisasterRecoveryType) 设置容灾类型（CROSS_ZONE 跨可用区 / CROSS_REGION 跨地域 / CROSS_CLOUD 跨云）
 * @method string getDataDirection() 获取数据复制方向（POSITIVE 正向 / REVERSE 反向）
 * @method void setDataDirection(string $DataDirection) 设置数据复制方向（POSITIVE 正向 / REVERSE 反向）
 * @method string getPeerCloudName() 获取跨云场景对端云名称（仅 DisasterRecoveryType=CROSS_CLOUD 时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerCloudName(string $PeerCloudName) 设置跨云场景对端云名称（仅 DisasterRecoveryType=CROSS_CLOUD 时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateFrom() 获取创建来源（LOCAL 本端创建 / PEER 对端创建）
 * @method void setCreateFrom(string $CreateFrom) 设置创建来源（LOCAL 本端创建 / PEER 对端创建）
 * @method string getLifeState() 获取生命周期状态
 * @method void setLifeState(string $LifeState) 设置生命周期状态
 * @method string getAccountUin() 获取创建保护组的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置创建保护组的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取创建保护组的子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置创建保护组的子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getBindProtectedResourceCount() 获取绑定的已保护资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindProtectedResourceCount(integer $BindProtectedResourceCount) 设置绑定的已保护资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorRecoveryPointObjectiveCount() 获取RPO 异常（超过 15 分钟未同步）的复制对数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorRecoveryPointObjectiveCount(integer $ErrorRecoveryPointObjectiveCount) 设置RPO 异常（超过 15 分钟未同步）的复制对数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtectedResourceStatusSet() 获取已保护资源状态统计，key 为复制对状态，value 为该状态下的资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectedResourceStatusSet(array $ProtectedResourceStatusSet) 设置已保护资源状态统计，key 为复制对状态，value 为该状态下的资源数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtectGroup extends AbstractModel
{
    /**
     * @var integer 用户AppId
     */
    public $AppId;

    /**
     * @var string 保护组ID
     */
    public $ProtectGroupId;

    /**
     * @var string 保护组名称
     */
    public $ProtectGroupName;

    /**
     * @var string 保护组类型（产品类型，如 DISK/CFS/INSTANCE）
     */
    public $ProtectGroupType;

    /**
     * @var string 所属容灾策略ID
     */
    public $SitePairId;

    /**
     * @var string 所属容灾策略名称
     */
    public $SitePairName;

    /**
     * @var integer RPO时间（单位秒）
     */
    public $RecoveryPointObjective;

    /**
     * @var string 生产地域（当 DataDirection=REVERSE 时会与 TargetRegion 自动轮转，保持用户视角一致）
     */
    public $SourceRegion;

    /**
     * @var string 生产可用区（REVERSE 时与 TargetZone 自动轮转）
     */
    public $SourceZone;

    /**
     * @var string 生产端VPC（REVERSE 时与 TargetVpc 自动轮转）
     */
    public $SourceVpc;

    /**
     * @var string 容灾地域（REVERSE 时与 SourceRegion 自动轮转）
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
     * @var string 复制技术（SYN 同步 / ASY 异步）
     */
    public $CopyType;

    /**
     * @var string 容灾类型（CROSS_ZONE 跨可用区 / CROSS_REGION 跨地域 / CROSS_CLOUD 跨云）
     */
    public $DisasterRecoveryType;

    /**
     * @var string 数据复制方向（POSITIVE 正向 / REVERSE 反向）
     */
    public $DataDirection;

    /**
     * @var string 跨云场景对端云名称（仅 DisasterRecoveryType=CROSS_CLOUD 时返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerCloudName;

    /**
     * @var string 创建来源（LOCAL 本端创建 / PEER 对端创建）
     */
    public $CreateFrom;

    /**
     * @var string 生命周期状态
     */
    public $LifeState;

    /**
     * @var string 创建保护组的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string 创建保护组的子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 绑定的已保护资源数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindProtectedResourceCount;

    /**
     * @var integer RPO 异常（超过 15 分钟未同步）的复制对数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorRecoveryPointObjectiveCount;

    /**
     * @var array 已保护资源状态统计，key 为复制对状态，value 为该状态下的资源数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectedResourceStatusSet;

    /**
     * @param integer $AppId 用户AppId
     * @param string $ProtectGroupId 保护组ID
     * @param string $ProtectGroupName 保护组名称
     * @param string $ProtectGroupType 保护组类型（产品类型，如 DISK/CFS/INSTANCE）
     * @param string $SitePairId 所属容灾策略ID
     * @param string $SitePairName 所属容灾策略名称
     * @param integer $RecoveryPointObjective RPO时间（单位秒）
     * @param string $SourceRegion 生产地域（当 DataDirection=REVERSE 时会与 TargetRegion 自动轮转，保持用户视角一致）
     * @param string $SourceZone 生产可用区（REVERSE 时与 TargetZone 自动轮转）
     * @param string $SourceVpc 生产端VPC（REVERSE 时与 TargetVpc 自动轮转）
     * @param string $TargetRegion 容灾地域（REVERSE 时与 SourceRegion 自动轮转）
     * @param string $TargetZone 容灾可用区
     * @param string $TargetVpc 容灾端VPC
     * @param string $CopyType 复制技术（SYN 同步 / ASY 异步）
     * @param string $DisasterRecoveryType 容灾类型（CROSS_ZONE 跨可用区 / CROSS_REGION 跨地域 / CROSS_CLOUD 跨云）
     * @param string $DataDirection 数据复制方向（POSITIVE 正向 / REVERSE 反向）
     * @param string $PeerCloudName 跨云场景对端云名称（仅 DisasterRecoveryType=CROSS_CLOUD 时返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateFrom 创建来源（LOCAL 本端创建 / PEER 对端创建）
     * @param string $LifeState 生命周期状态
     * @param string $AccountUin 创建保护组的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 创建保护组的子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param integer $BindProtectedResourceCount 绑定的已保护资源数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorRecoveryPointObjectiveCount RPO 异常（超过 15 分钟未同步）的复制对数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProtectedResourceStatusSet 已保护资源状态统计，key 为复制对状态，value 为该状态下的资源数量
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

        if (array_key_exists("ProtectGroupId",$param) and $param["ProtectGroupId"] !== null) {
            $this->ProtectGroupId = $param["ProtectGroupId"];
        }

        if (array_key_exists("ProtectGroupName",$param) and $param["ProtectGroupName"] !== null) {
            $this->ProtectGroupName = $param["ProtectGroupName"];
        }

        if (array_key_exists("ProtectGroupType",$param) and $param["ProtectGroupType"] !== null) {
            $this->ProtectGroupType = $param["ProtectGroupType"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("SitePairName",$param) and $param["SitePairName"] !== null) {
            $this->SitePairName = $param["SitePairName"];
        }

        if (array_key_exists("RecoveryPointObjective",$param) and $param["RecoveryPointObjective"] !== null) {
            $this->RecoveryPointObjective = $param["RecoveryPointObjective"];
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

        if (array_key_exists("CopyType",$param) and $param["CopyType"] !== null) {
            $this->CopyType = $param["CopyType"];
        }

        if (array_key_exists("DisasterRecoveryType",$param) and $param["DisasterRecoveryType"] !== null) {
            $this->DisasterRecoveryType = $param["DisasterRecoveryType"];
        }

        if (array_key_exists("DataDirection",$param) and $param["DataDirection"] !== null) {
            $this->DataDirection = $param["DataDirection"];
        }

        if (array_key_exists("PeerCloudName",$param) and $param["PeerCloudName"] !== null) {
            $this->PeerCloudName = $param["PeerCloudName"];
        }

        if (array_key_exists("CreateFrom",$param) and $param["CreateFrom"] !== null) {
            $this->CreateFrom = $param["CreateFrom"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("BindProtectedResourceCount",$param) and $param["BindProtectedResourceCount"] !== null) {
            $this->BindProtectedResourceCount = $param["BindProtectedResourceCount"];
        }

        if (array_key_exists("ErrorRecoveryPointObjectiveCount",$param) and $param["ErrorRecoveryPointObjectiveCount"] !== null) {
            $this->ErrorRecoveryPointObjectiveCount = $param["ErrorRecoveryPointObjectiveCount"];
        }

        if (array_key_exists("ProtectedResourceStatusSet",$param) and $param["ProtectedResourceStatusSet"] !== null) {
            $this->ProtectedResourceStatusSet = [];
            foreach ($param["ProtectedResourceStatusSet"] as $key => $value){
                $obj = new ProtectedResourceStatus();
                $obj->deserialize($value);
                array_push($this->ProtectedResourceStatusSet, $obj);
            }
        }
    }
}
