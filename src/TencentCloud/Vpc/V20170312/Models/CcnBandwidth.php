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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述云联网地域间限速带宽实例的信息。
 *
 * @method string getCcnId() 获取带宽所属的云联网ID。
 * @method void setCcnId(string $CcnId) 设置带宽所属的云联网ID。
 * @method string getCreatedTime() 获取实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredTime() 获取实例的过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置实例的过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionFlowControlId() 获取带宽实例的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionFlowControlId(string $RegionFlowControlId) 设置带宽实例的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewFlag() 获取带宽是否自动续费的标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(string $RenewFlag) 设置带宽是否自动续费的标记。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CcnRegionBandwidthLimitInfo getCcnRegionBandwidthLimit() 获取描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnRegionBandwidthLimit(CcnRegionBandwidthLimitInfo $CcnRegionBandwidthLimit) 设置描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMarketId() 获取云市场实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarketId(string $MarketId) 设置云市场实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAccountID() 获取实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAccountID(string $UserAccountID) 设置实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCrossBorder() 获取是否跨境，`true`表示跨境，反之不跨境。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCrossBorder(boolean $IsCrossBorder) 设置是否跨境，`true`表示跨境，反之不跨境。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSecurityLock() 获取`true`表示封禁，地域间流量不通，`false`解禁，地域间流量正常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSecurityLock(boolean $IsSecurityLock) 设置`true`表示封禁，地域间流量不通，`false`解禁，地域间流量正常
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceChargeType() 获取`POSTPAID`表示后付费，`PREPAID`表示预付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置`POSTPAID`表示后付费，`PREPAID`表示预付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取实例更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置实例更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class CcnBandwidth extends AbstractModel
{
    /**
     * @var string 带宽所属的云联网ID。
     */
    public $CcnId;

    /**
     * @var string 实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 实例的过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 带宽实例的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionFlowControlId;

    /**
     * @var string 带宽是否自动续费的标记。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var CcnRegionBandwidthLimitInfo 描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnRegionBandwidthLimit;

    /**
     * @var string 云市场实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarketId;

    /**
     * @var string 实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAccountID;

    /**
     * @var boolean 是否跨境，`true`表示跨境，反之不跨境。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCrossBorder;

    /**
     * @var boolean `true`表示封禁，地域间流量不通，`false`解禁，地域间流量正常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSecurityLock;

    /**
     * @var string `POSTPAID`表示后付费，`PREPAID`表示预付费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargeType;

    /**
     * @var string 实例更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $CcnId 带宽所属的云联网ID。
     * @param string $CreatedTime 实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredTime 实例的过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionFlowControlId 带宽实例的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewFlag 带宽是否自动续费的标记。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CcnRegionBandwidthLimitInfo $CcnRegionBandwidthLimit 描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MarketId 云市场实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAccountID 实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCrossBorder 是否跨境，`true`表示跨境，反之不跨境。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSecurityLock `true`表示封禁，地域间流量不通，`false`解禁，地域间流量正常
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceChargeType `POSTPAID`表示后付费，`PREPAID`表示预付费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 实例更新时间
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RegionFlowControlId",$param) and $param["RegionFlowControlId"] !== null) {
            $this->RegionFlowControlId = $param["RegionFlowControlId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CcnRegionBandwidthLimit",$param) and $param["CcnRegionBandwidthLimit"] !== null) {
            $this->CcnRegionBandwidthLimit = new CcnRegionBandwidthLimitInfo();
            $this->CcnRegionBandwidthLimit->deserialize($param["CcnRegionBandwidthLimit"]);
        }

        if (array_key_exists("MarketId",$param) and $param["MarketId"] !== null) {
            $this->MarketId = $param["MarketId"];
        }

        if (array_key_exists("UserAccountID",$param) and $param["UserAccountID"] !== null) {
            $this->UserAccountID = $param["UserAccountID"];
        }

        if (array_key_exists("IsCrossBorder",$param) and $param["IsCrossBorder"] !== null) {
            $this->IsCrossBorder = $param["IsCrossBorder"];
        }

        if (array_key_exists("IsSecurityLock",$param) and $param["IsSecurityLock"] !== null) {
            $this->IsSecurityLock = $param["IsSecurityLock"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
