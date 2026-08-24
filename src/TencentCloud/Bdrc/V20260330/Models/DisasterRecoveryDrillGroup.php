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
 * 容灾演练组
 *
 * @method integer getId() 获取资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getAccountUin() 获取账户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置账户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取子账户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置子账户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSitePairId() 获取容灾站点对ID
 * @method void setSitePairId(string $SitePairId) 设置容灾站点对ID
 * @method string getProtectGroupId() 获取保护组ID
 * @method void setProtectGroupId(string $ProtectGroupId) 设置保护组ID
 * @method string getDrillGroupId() 获取演练组ID
 * @method void setDrillGroupId(string $DrillGroupId) 设置演练组ID
 * @method string getDrillGroupName() 获取演练组名称
 * @method void setDrillGroupName(string $DrillGroupName) 设置演练组名称
 * @method string getDrillGroupType() 获取演练组类型。枚举值：DISK / INSTANCE / CFS。
 * @method void setDrillGroupType(string $DrillGroupType) 设置演练组类型。枚举值：DISK / INSTANCE / CFS。
 * @method string getRecoveryTime() 获取恢复时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoveryTime(string $RecoveryTime) 设置恢复时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDrillVpc() 获取演练VPC
 * @method void setDrillVpc(string $DrillVpc) 设置演练VPC
 * @method string getDrillSecurityGroup() 获取演练安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrillSecurityGroup(string $DrillSecurityGroup) 设置演练安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getLifeState() 获取生命周期状态。枚举值：NORMAL / DELETED。
 * @method void setLifeState(string $LifeState) 设置生命周期状态。枚举值：NORMAL / DELETED。
 * @method string getDisasterRecoveryType() 获取容灾类型。枚举值：CROSS_ZONE / CROSS_REGION 等。
 * @method void setDisasterRecoveryType(string $DisasterRecoveryType) 设置容灾类型。枚举值：CROSS_ZONE / CROSS_REGION 等。
 * @method string getCopyType() 获取复制技术。枚举值：SYN（同步）/ ASYN（异步）。
 * @method void setCopyType(string $CopyType) 设置复制技术。枚举值：SYN（同步）/ ASYN（异步）。
 * @method string getPeerCloudName() 获取对端云名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerCloudName(string $PeerCloudName) 设置对端云名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalCloudName() 获取本地云名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalCloudName(string $LocalCloudName) 设置本地云名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceRegion() 获取生产地域
 * @method void setSourceRegion(string $SourceRegion) 设置生产地域
 * @method string getSourceZone() 获取生产可用区
 * @method void setSourceZone(string $SourceZone) 设置生产可用区
 * @method string getSourceVpc() 获取生产端VPC
 * @method void setSourceVpc(string $SourceVpc) 设置生产端VPC
 * @method string getDrillRegion() 获取演练地域
 * @method void setDrillRegion(string $DrillRegion) 设置演练地域
 * @method string getDrillZone() 获取演练可用区
 * @method void setDrillZone(string $DrillZone) 设置演练可用区
 * @method string getDataDirection() 获取数据方向。枚举值：POSITIVE（正向）/ REVERSE（反向）。
 * @method void setDataDirection(string $DataDirection) 设置数据方向。枚举值：POSITIVE（正向）/ REVERSE（反向）。
 * @method integer getBindDrilledResourceCount() 获取绑定的演练资源数量。
 * @method void setBindDrilledResourceCount(integer $BindDrilledResourceCount) 设置绑定的演练资源数量。
 * @method array getDrilledResourceStatusSet() 获取演练资源状态分布（key 为状态名如 FAILED / SUCCESS，value 为该状态数量）。
 * @method void setDrilledResourceStatusSet(array $DrilledResourceStatusSet) 设置演练资源状态分布（key 为状态名如 FAILED / SUCCESS，value 为该状态数量）。
 */
class DisasterRecoveryDrillGroup extends AbstractModel
{
    /**
     * @var integer 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 账户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string 子账户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 容灾站点对ID
     */
    public $SitePairId;

    /**
     * @var string 保护组ID
     */
    public $ProtectGroupId;

    /**
     * @var string 演练组ID
     */
    public $DrillGroupId;

    /**
     * @var string 演练组名称
     */
    public $DrillGroupName;

    /**
     * @var string 演练组类型。枚举值：DISK / INSTANCE / CFS。
     */
    public $DrillGroupType;

    /**
     * @var string 恢复时间点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoveryTime;

    /**
     * @var string 演练VPC
     */
    public $DrillVpc;

    /**
     * @var string 演练安全组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrillSecurityGroup;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 生命周期状态。枚举值：NORMAL / DELETED。
     */
    public $LifeState;

    /**
     * @var string 容灾类型。枚举值：CROSS_ZONE / CROSS_REGION 等。
     */
    public $DisasterRecoveryType;

    /**
     * @var string 复制技术。枚举值：SYN（同步）/ ASYN（异步）。
     */
    public $CopyType;

    /**
     * @var string 对端云名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerCloudName;

    /**
     * @var string 本地云名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalCloudName;

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
     * @var string 演练地域
     */
    public $DrillRegion;

    /**
     * @var string 演练可用区
     */
    public $DrillZone;

    /**
     * @var string 数据方向。枚举值：POSITIVE（正向）/ REVERSE（反向）。
     */
    public $DataDirection;

    /**
     * @var integer 绑定的演练资源数量。
     */
    public $BindDrilledResourceCount;

    /**
     * @var array 演练资源状态分布（key 为状态名如 FAILED / SUCCESS，value 为该状态数量）。
     */
    public $DrilledResourceStatusSet;

    /**
     * @param integer $Id 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户ID
     * @param string $AccountUin 账户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 子账户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SitePairId 容灾站点对ID
     * @param string $ProtectGroupId 保护组ID
     * @param string $DrillGroupId 演练组ID
     * @param string $DrillGroupName 演练组名称
     * @param string $DrillGroupType 演练组类型。枚举值：DISK / INSTANCE / CFS。
     * @param string $RecoveryTime 恢复时间点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DrillVpc 演练VPC
     * @param string $DrillSecurityGroup 演练安全组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $LifeState 生命周期状态。枚举值：NORMAL / DELETED。
     * @param string $DisasterRecoveryType 容灾类型。枚举值：CROSS_ZONE / CROSS_REGION 等。
     * @param string $CopyType 复制技术。枚举值：SYN（同步）/ ASYN（异步）。
     * @param string $PeerCloudName 对端云名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalCloudName 本地云名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceRegion 生产地域
     * @param string $SourceZone 生产可用区
     * @param string $SourceVpc 生产端VPC
     * @param string $DrillRegion 演练地域
     * @param string $DrillZone 演练可用区
     * @param string $DataDirection 数据方向。枚举值：POSITIVE（正向）/ REVERSE（反向）。
     * @param integer $BindDrilledResourceCount 绑定的演练资源数量。
     * @param array $DrilledResourceStatusSet 演练资源状态分布（key 为状态名如 FAILED / SUCCESS，value 为该状态数量）。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("ProtectGroupId",$param) and $param["ProtectGroupId"] !== null) {
            $this->ProtectGroupId = $param["ProtectGroupId"];
        }

        if (array_key_exists("DrillGroupId",$param) and $param["DrillGroupId"] !== null) {
            $this->DrillGroupId = $param["DrillGroupId"];
        }

        if (array_key_exists("DrillGroupName",$param) and $param["DrillGroupName"] !== null) {
            $this->DrillGroupName = $param["DrillGroupName"];
        }

        if (array_key_exists("DrillGroupType",$param) and $param["DrillGroupType"] !== null) {
            $this->DrillGroupType = $param["DrillGroupType"];
        }

        if (array_key_exists("RecoveryTime",$param) and $param["RecoveryTime"] !== null) {
            $this->RecoveryTime = $param["RecoveryTime"];
        }

        if (array_key_exists("DrillVpc",$param) and $param["DrillVpc"] !== null) {
            $this->DrillVpc = $param["DrillVpc"];
        }

        if (array_key_exists("DrillSecurityGroup",$param) and $param["DrillSecurityGroup"] !== null) {
            $this->DrillSecurityGroup = $param["DrillSecurityGroup"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("DisasterRecoveryType",$param) and $param["DisasterRecoveryType"] !== null) {
            $this->DisasterRecoveryType = $param["DisasterRecoveryType"];
        }

        if (array_key_exists("CopyType",$param) and $param["CopyType"] !== null) {
            $this->CopyType = $param["CopyType"];
        }

        if (array_key_exists("PeerCloudName",$param) and $param["PeerCloudName"] !== null) {
            $this->PeerCloudName = $param["PeerCloudName"];
        }

        if (array_key_exists("LocalCloudName",$param) and $param["LocalCloudName"] !== null) {
            $this->LocalCloudName = $param["LocalCloudName"];
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

        if (array_key_exists("DrillRegion",$param) and $param["DrillRegion"] !== null) {
            $this->DrillRegion = $param["DrillRegion"];
        }

        if (array_key_exists("DrillZone",$param) and $param["DrillZone"] !== null) {
            $this->DrillZone = $param["DrillZone"];
        }

        if (array_key_exists("DataDirection",$param) and $param["DataDirection"] !== null) {
            $this->DataDirection = $param["DataDirection"];
        }

        if (array_key_exists("BindDrilledResourceCount",$param) and $param["BindDrilledResourceCount"] !== null) {
            $this->BindDrilledResourceCount = $param["BindDrilledResourceCount"];
        }

        if (array_key_exists("DrilledResourceStatusSet",$param) and $param["DrilledResourceStatusSet"] !== null) {
            $this->DrilledResourceStatusSet = [];
            foreach ($param["DrilledResourceStatusSet"] as $key => $value){
                $obj = new DrilledResourceStatus();
                $obj->deserialize($value);
                array_push($this->DrilledResourceStatusSet, $obj);
            }
        }
    }
}
