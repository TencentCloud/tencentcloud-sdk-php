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
 * 站点对信息
 *
 * @method integer getAppId() 获取用户AppId
 * @method void setAppId(integer $AppId) 设置用户AppId
 * @method string getSitePairId() 获取容灾策略ID
 * @method void setSitePairId(string $SitePairId) 设置容灾策略ID
 * @method string getSitePairName() 获取容灾策略名称
 * @method void setSitePairName(string $SitePairName) 设置容灾策略名称
 * @method string getSitePairType() 获取容灾策略类型（产品类型，如 DISK/CFS/INSTANCE 等）
 * @method void setSitePairType(string $SitePairType) 设置容灾策略类型（产品类型，如 DISK/CFS/INSTANCE 等）
 * @method string getSitePairState() 获取容灾策略状态
 * @method void setSitePairState(string $SitePairState) 设置容灾策略状态
 * @method string getSourceRegion() 获取生产地域
 * @method void setSourceRegion(string $SourceRegion) 设置生产地域
 * @method string getSourceZone() 获取生产可用区
 * @method void setSourceZone(string $SourceZone) 设置生产可用区
 * @method string getTargetRegion() 获取容灾地域
 * @method void setTargetRegion(string $TargetRegion) 设置容灾地域
 * @method string getTargetZone() 获取容灾可用区
 * @method void setTargetZone(string $TargetZone) 设置容灾可用区
 * @method string getSourceVpc() 获取生产端VPC
 * @method void setSourceVpc(string $SourceVpc) 设置生产端VPC
 * @method string getTargetVpc() 获取容灾端VPC
 * @method void setTargetVpc(string $TargetVpc) 设置容灾端VPC
 * @method string getCopyType() 获取复制技术（SYN 同步 / ASY 异步）
 * @method void setCopyType(string $CopyType) 设置复制技术（SYN 同步 / ASY 异步）
 * @method string getDisasterRecoveryType() 获取容灾类型（CROSS_ZONE 跨可用区 / CROSS_REGION 跨地域 / CROSS_CLOUD 跨云）
 * @method void setDisasterRecoveryType(string $DisasterRecoveryType) 设置容灾类型（CROSS_ZONE 跨可用区 / CROSS_REGION 跨地域 / CROSS_CLOUD 跨云）
 * @method string getCreateFrom() 获取创建来源（LOCAL 本端创建 / PEER 对端创建）
 * @method void setCreateFrom(string $CreateFrom) 设置创建来源（LOCAL 本端创建 / PEER 对端创建）
 * @method string getAccountUin() 获取创建容灾策略的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置创建容灾策略的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取创建容灾策略的子账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置创建容灾策略的子账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getBindProtectGroupCount() 获取已绑定的保护组数量
 * @method void setBindProtectGroupCount(integer $BindProtectGroupCount) 设置已绑定的保护组数量
 * @method array getErrorRecoveryPointObjectiveCopyPairSet() 获取RPO 异常的复制对ID列表（最近一次保护点距今超过15分钟的复制对）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorRecoveryPointObjectiveCopyPairSet(array $ErrorRecoveryPointObjectiveCopyPairSet) 设置RPO 异常的复制对ID列表（最近一次保护点距今超过15分钟的复制对）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtectedResourceSet() 获取已保护的资源列表（按资源类型分组）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectedResourceSet(array $ProtectedResourceSet) 设置已保护的资源列表（按资源类型分组）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtectedResourceStatusSet() 获取已保护资源的状态统计，key 为复制对状态，value 为该状态下的资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectedResourceStatusSet(array $ProtectedResourceStatusSet) 设置已保护资源的状态统计，key 为复制对状态，value 为该状态下的资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method CrossCloudDetails getCrossCloudDetails() 获取跨云场景下的额外信息（仅 IsCrossCloud=true 时返回，非跨云为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossCloudDetails(CrossCloudDetails $CrossCloudDetails) 设置跨云场景下的额外信息（仅 IsCrossCloud=true 时返回，非跨云为 null）
注意：此字段可能返回 null，表示取不到有效值。
 */
class SitePair extends AbstractModel
{
    /**
     * @var integer 用户AppId
     */
    public $AppId;

    /**
     * @var string 容灾策略ID
     */
    public $SitePairId;

    /**
     * @var string 容灾策略名称
     */
    public $SitePairName;

    /**
     * @var string 容灾策略类型（产品类型，如 DISK/CFS/INSTANCE 等）
     */
    public $SitePairType;

    /**
     * @var string 容灾策略状态
     */
    public $SitePairState;

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
     * @var string 生产端VPC
     */
    public $SourceVpc;

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
     * @var string 创建来源（LOCAL 本端创建 / PEER 对端创建）
     */
    public $CreateFrom;

    /**
     * @var string 创建容灾策略的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string 创建容灾策略的子账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 已绑定的保护组数量
     */
    public $BindProtectGroupCount;

    /**
     * @var array RPO 异常的复制对ID列表（最近一次保护点距今超过15分钟的复制对）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorRecoveryPointObjectiveCopyPairSet;

    /**
     * @var array 已保护的资源列表（按资源类型分组）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectedResourceSet;

    /**
     * @var array 已保护资源的状态统计，key 为复制对状态，value 为该状态下的资源数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectedResourceStatusSet;

    /**
     * @var CrossCloudDetails 跨云场景下的额外信息（仅 IsCrossCloud=true 时返回，非跨云为 null）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossCloudDetails;

    /**
     * @param integer $AppId 用户AppId
     * @param string $SitePairId 容灾策略ID
     * @param string $SitePairName 容灾策略名称
     * @param string $SitePairType 容灾策略类型（产品类型，如 DISK/CFS/INSTANCE 等）
     * @param string $SitePairState 容灾策略状态
     * @param string $SourceRegion 生产地域
     * @param string $SourceZone 生产可用区
     * @param string $TargetRegion 容灾地域
     * @param string $TargetZone 容灾可用区
     * @param string $SourceVpc 生产端VPC
     * @param string $TargetVpc 容灾端VPC
     * @param string $CopyType 复制技术（SYN 同步 / ASY 异步）
     * @param string $DisasterRecoveryType 容灾类型（CROSS_ZONE 跨可用区 / CROSS_REGION 跨地域 / CROSS_CLOUD 跨云）
     * @param string $CreateFrom 创建来源（LOCAL 本端创建 / PEER 对端创建）
     * @param string $AccountUin 创建容灾策略的账户主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 创建容灾策略的子账户 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param integer $BindProtectGroupCount 已绑定的保护组数量
     * @param array $ErrorRecoveryPointObjectiveCopyPairSet RPO 异常的复制对ID列表（最近一次保护点距今超过15分钟的复制对）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProtectedResourceSet 已保护的资源列表（按资源类型分组）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProtectedResourceStatusSet 已保护资源的状态统计，key 为复制对状态，value 为该状态下的资源数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param CrossCloudDetails $CrossCloudDetails 跨云场景下的额外信息（仅 IsCrossCloud=true 时返回，非跨云为 null）
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

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("SitePairName",$param) and $param["SitePairName"] !== null) {
            $this->SitePairName = $param["SitePairName"];
        }

        if (array_key_exists("SitePairType",$param) and $param["SitePairType"] !== null) {
            $this->SitePairType = $param["SitePairType"];
        }

        if (array_key_exists("SitePairState",$param) and $param["SitePairState"] !== null) {
            $this->SitePairState = $param["SitePairState"];
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

        if (array_key_exists("SourceVpc",$param) and $param["SourceVpc"] !== null) {
            $this->SourceVpc = $param["SourceVpc"];
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

        if (array_key_exists("CreateFrom",$param) and $param["CreateFrom"] !== null) {
            $this->CreateFrom = $param["CreateFrom"];
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

        if (array_key_exists("BindProtectGroupCount",$param) and $param["BindProtectGroupCount"] !== null) {
            $this->BindProtectGroupCount = $param["BindProtectGroupCount"];
        }

        if (array_key_exists("ErrorRecoveryPointObjectiveCopyPairSet",$param) and $param["ErrorRecoveryPointObjectiveCopyPairSet"] !== null) {
            $this->ErrorRecoveryPointObjectiveCopyPairSet = $param["ErrorRecoveryPointObjectiveCopyPairSet"];
        }

        if (array_key_exists("ProtectedResourceSet",$param) and $param["ProtectedResourceSet"] !== null) {
            $this->ProtectedResourceSet = [];
            foreach ($param["ProtectedResourceSet"] as $key => $value){
                $obj = new ProtectedResource();
                $obj->deserialize($value);
                array_push($this->ProtectedResourceSet, $obj);
            }
        }

        if (array_key_exists("ProtectedResourceStatusSet",$param) and $param["ProtectedResourceStatusSet"] !== null) {
            $this->ProtectedResourceStatusSet = [];
            foreach ($param["ProtectedResourceStatusSet"] as $key => $value){
                $obj = new ProtectedResourceStatus();
                $obj->deserialize($value);
                array_push($this->ProtectedResourceStatusSet, $obj);
            }
        }

        if (array_key_exists("CrossCloudDetails",$param) and $param["CrossCloudDetails"] !== null) {
            $this->CrossCloudDetails = new CrossCloudDetails();
            $this->CrossCloudDetails->deserialize($param["CrossCloudDetails"]);
        }
    }
}
