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
 * 演练对
 *
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getDrillPairId() 获取演练对ID
 * @method void setDrillPairId(string $DrillPairId) 设置演练对ID
 * @method string getDrillPairName() 获取演练对名称
 * @method void setDrillPairName(string $DrillPairName) 设置演练对名称
 * @method string getDrillPairState() 获取演练对状态。枚举值：RUNNING / SUCCESS / FAILED 等。
 * @method void setDrillPairState(string $DrillPairState) 设置演练对状态。枚举值：RUNNING / SUCCESS / FAILED 等。
 * @method string getSitePairId() 获取容灾站点对ID
 * @method void setSitePairId(string $SitePairId) 设置容灾站点对ID
 * @method string getCopyPairId() 获取云硬盘复制对ID
 * @method void setCopyPairId(string $CopyPairId) 设置云硬盘复制对ID
 * @method string getSourceRegion() 获取生产地域
 * @method void setSourceRegion(string $SourceRegion) 设置生产地域
 * @method string getSourceZone() 获取生产可用区
 * @method void setSourceZone(string $SourceZone) 设置生产可用区
 * @method string getTargetRegion() 获取容灾地域
 * @method void setTargetRegion(string $TargetRegion) 设置容灾地域
 * @method string getTargetZone() 获取容灾可用区
 * @method void setTargetZone(string $TargetZone) 设置容灾可用区
 * @method string getSourceResourceId() 获取生产站点盘ID
 * @method void setSourceResourceId(string $SourceResourceId) 设置生产站点盘ID
 * @method string getTargetResourceId() 获取演练资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetResourceId(string $TargetResourceId) 设置演练资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDrillPairType() 获取演练对的类型。枚举值：DISK / INSTANCE / CFS。
 * @method void setDrillPairType(string $DrillPairType) 设置演练对的类型。枚举值：DISK / INSTANCE / CFS。
 * @method integer getSize() 获取演练资源容量（GB）。
 * @method void setSize(integer $Size) 设置演练资源容量（GB）。
 * @method string getRecoveryTime() 获取演练的容灾点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoveryTime(string $RecoveryTime) 设置演练的容灾点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getEndTime() 获取演练结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置演练结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRollbacking() 获取是否正在回滚。0 - 未回滚，1 - 回滚中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollbacking(integer $Rollbacking) 设置是否正在回滚。0 - 未回滚，1 - 回滚中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRollbackPercent() 获取回滚进度百分比（0-100）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollbackPercent(integer $RollbackPercent) 设置回滚进度百分比（0-100）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountUin() 获取创建定期备份策略的账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置创建定期备份策略的账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取创建定期备份策略的子账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置创建定期备份策略的子账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtectGroupId() 获取保护组ID
 * @method void setProtectGroupId(string $ProtectGroupId) 设置保护组ID
 * @method string getDrillGroupId() 获取演练组ID
 * @method void setDrillGroupId(string $DrillGroupId) 设置演练组ID
 * @method string getCopyPairName() 获取复制对名称。
 * @method void setCopyPairName(string $CopyPairName) 设置复制对名称。
 * @method string getDrillGroupName() 获取演练组名称。
 * @method void setDrillGroupName(string $DrillGroupName) 设置演练组名称。
 */
class DrillPair extends AbstractModel
{
    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 演练对ID
     */
    public $DrillPairId;

    /**
     * @var string 演练对名称
     */
    public $DrillPairName;

    /**
     * @var string 演练对状态。枚举值：RUNNING / SUCCESS / FAILED 等。
     */
    public $DrillPairState;

    /**
     * @var string 容灾站点对ID
     */
    public $SitePairId;

    /**
     * @var string 云硬盘复制对ID
     */
    public $CopyPairId;

    /**
     * @var string 生产地域
     */
    public $SourceRegion;

    /**
     * @var string 生产可用区
     */
    public $SourceZone;

    /**
     * @var string 容灾地域
     */
    public $TargetRegion;

    /**
     * @var string 容灾可用区
     */
    public $TargetZone;

    /**
     * @var string 生产站点盘ID
     */
    public $SourceResourceId;

    /**
     * @var string 演练资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetResourceId;

    /**
     * @var string 演练对的类型。枚举值：DISK / INSTANCE / CFS。
     */
    public $DrillPairType;

    /**
     * @var integer 演练资源容量（GB）。
     */
    public $Size;

    /**
     * @var string 演练的容灾点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoveryTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 演练结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 是否正在回滚。0 - 未回滚，1 - 回滚中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rollbacking;

    /**
     * @var integer 回滚进度百分比（0-100）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RollbackPercent;

    /**
     * @var string 创建定期备份策略的账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string 创建定期备份策略的子账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 保护组ID
     */
    public $ProtectGroupId;

    /**
     * @var string 演练组ID
     */
    public $DrillGroupId;

    /**
     * @var string 复制对名称。
     */
    public $CopyPairName;

    /**
     * @var string 演练组名称。
     */
    public $DrillGroupName;

    /**
     * @param integer $AppId 用户ID
     * @param string $DrillPairId 演练对ID
     * @param string $DrillPairName 演练对名称
     * @param string $DrillPairState 演练对状态。枚举值：RUNNING / SUCCESS / FAILED 等。
     * @param string $SitePairId 容灾站点对ID
     * @param string $CopyPairId 云硬盘复制对ID
     * @param string $SourceRegion 生产地域
     * @param string $SourceZone 生产可用区
     * @param string $TargetRegion 容灾地域
     * @param string $TargetZone 容灾可用区
     * @param string $SourceResourceId 生产站点盘ID
     * @param string $TargetResourceId 演练资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DrillPairType 演练对的类型。枚举值：DISK / INSTANCE / CFS。
     * @param integer $Size 演练资源容量（GB）。
     * @param string $RecoveryTime 演练的容灾点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $EndTime 演练结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rollbacking 是否正在回滚。0 - 未回滚，1 - 回滚中。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RollbackPercent 回滚进度百分比（0-100）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountUin 创建定期备份策略的账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 创建定期备份策略的子账户uin ID信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtectGroupId 保护组ID
     * @param string $DrillGroupId 演练组ID
     * @param string $CopyPairName 复制对名称。
     * @param string $DrillGroupName 演练组名称。
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

        if (array_key_exists("DrillPairId",$param) and $param["DrillPairId"] !== null) {
            $this->DrillPairId = $param["DrillPairId"];
        }

        if (array_key_exists("DrillPairName",$param) and $param["DrillPairName"] !== null) {
            $this->DrillPairName = $param["DrillPairName"];
        }

        if (array_key_exists("DrillPairState",$param) and $param["DrillPairState"] !== null) {
            $this->DrillPairState = $param["DrillPairState"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("CopyPairId",$param) and $param["CopyPairId"] !== null) {
            $this->CopyPairId = $param["CopyPairId"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("SourceZone",$param) and $param["SourceZone"] !== null) {
            $this->SourceZone = $param["SourceZone"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("TargetZone",$param) and $param["TargetZone"] !== null) {
            $this->TargetZone = $param["TargetZone"];
        }

        if (array_key_exists("SourceResourceId",$param) and $param["SourceResourceId"] !== null) {
            $this->SourceResourceId = $param["SourceResourceId"];
        }

        if (array_key_exists("TargetResourceId",$param) and $param["TargetResourceId"] !== null) {
            $this->TargetResourceId = $param["TargetResourceId"];
        }

        if (array_key_exists("DrillPairType",$param) and $param["DrillPairType"] !== null) {
            $this->DrillPairType = $param["DrillPairType"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("RecoveryTime",$param) and $param["RecoveryTime"] !== null) {
            $this->RecoveryTime = $param["RecoveryTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Rollbacking",$param) and $param["Rollbacking"] !== null) {
            $this->Rollbacking = $param["Rollbacking"];
        }

        if (array_key_exists("RollbackPercent",$param) and $param["RollbackPercent"] !== null) {
            $this->RollbackPercent = $param["RollbackPercent"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("ProtectGroupId",$param) and $param["ProtectGroupId"] !== null) {
            $this->ProtectGroupId = $param["ProtectGroupId"];
        }

        if (array_key_exists("DrillGroupId",$param) and $param["DrillGroupId"] !== null) {
            $this->DrillGroupId = $param["DrillGroupId"];
        }

        if (array_key_exists("CopyPairName",$param) and $param["CopyPairName"] !== null) {
            $this->CopyPairName = $param["CopyPairName"];
        }

        if (array_key_exists("DrillGroupName",$param) and $param["DrillGroupName"] !== null) {
            $this->DrillGroupName = $param["DrillGroupName"];
        }
    }
}
