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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nat实例卡片详细信息
 *
 * @method string getNatinsId() 获取nat实例id
 * @method void setNatinsId(string $NatinsId) 设置nat实例id
 * @method string getNatinsName() 获取nat实例名称
 * @method void setNatinsName(string $NatinsName) 设置nat实例名称
 * @method string getRegion() 获取实例所在地域
 * @method void setRegion(string $Region) 设置实例所在地域
 * @method integer getFwMode() 获取0: 新增模式，1:接入模式
 * @method void setFwMode(integer $FwMode) 设置0: 新增模式，1:接入模式
 * @method integer getBandWidth() 获取实例带宽大小 Mbps
 * @method void setBandWidth(integer $BandWidth) 设置实例带宽大小 Mbps
 * @method integer getInFlowMax() 获取入向带宽峰值 bps
 * @method void setInFlowMax(integer $InFlowMax) 设置入向带宽峰值 bps
 * @method integer getOutFlowMax() 获取出向带宽峰值 bps
 * @method void setOutFlowMax(integer $OutFlowMax) 设置出向带宽峰值 bps
 * @method string getRegionZh() 获取地域中文信息
 * @method void setRegionZh(string $RegionZh) 设置地域中文信息
 * @method array getEipAddress() 获取公网ip数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipAddress(array $EipAddress) 设置公网ip数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcIp() 获取内外使用ip数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcIp(array $VpcIp) 设置内外使用ip数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnets() 获取实例关联子网数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnets(array $Subnets) 设置实例关联子网数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取0 :正常 1：正在初始化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置0 :正常 1：正在初始化
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionDetail() 获取地域区域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionDetail(string $RegionDetail) 设置地域区域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneZh() 获取实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneZh(string $ZoneZh) 设置实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneZhBak() 获取实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneZhBak(string $ZoneZhBak) 设置实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleUsed() 获取已使用规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleUsed(integer $RuleUsed) 设置已使用规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleMax() 获取实例的规则限制最大规格数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleMax(integer $RuleMax) 设置实例的规则限制最大规格数
注意：此字段可能返回 null，表示取不到有效值。
 */
class NatInstanceInfo extends AbstractModel
{
    /**
     * @var string nat实例id
     */
    public $NatinsId;

    /**
     * @var string nat实例名称
     */
    public $NatinsName;

    /**
     * @var string 实例所在地域
     */
    public $Region;

    /**
     * @var integer 0: 新增模式，1:接入模式
     */
    public $FwMode;

    /**
     * @var integer 实例带宽大小 Mbps
     */
    public $BandWidth;

    /**
     * @var integer 入向带宽峰值 bps
     */
    public $InFlowMax;

    /**
     * @var integer 出向带宽峰值 bps
     */
    public $OutFlowMax;

    /**
     * @var string 地域中文信息
     */
    public $RegionZh;

    /**
     * @var array 公网ip数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipAddress;

    /**
     * @var array 内外使用ip数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcIp;

    /**
     * @var array 实例关联子网数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subnets;

    /**
     * @var integer 0 :正常 1：正在初始化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 地域区域信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionDetail;

    /**
     * @var string 实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneZh;

    /**
     * @var string 实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneZhBak;

    /**
     * @var integer 已使用规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleUsed;

    /**
     * @var integer 实例的规则限制最大规格数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleMax;

    /**
     * @param string $NatinsId nat实例id
     * @param string $NatinsName nat实例名称
     * @param string $Region 实例所在地域
     * @param integer $FwMode 0: 新增模式，1:接入模式
     * @param integer $BandWidth 实例带宽大小 Mbps
     * @param integer $InFlowMax 入向带宽峰值 bps
     * @param integer $OutFlowMax 出向带宽峰值 bps
     * @param string $RegionZh 地域中文信息
     * @param array $EipAddress 公网ip数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VpcIp 内外使用ip数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Subnets 实例关联子网数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 0 :正常 1：正在初始化
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionDetail 地域区域信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneZh 实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneZhBak 实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleUsed 已使用规则数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleMax 实例的规则限制最大规格数
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
        if (array_key_exists("NatinsId",$param) and $param["NatinsId"] !== null) {
            $this->NatinsId = $param["NatinsId"];
        }

        if (array_key_exists("NatinsName",$param) and $param["NatinsName"] !== null) {
            $this->NatinsName = $param["NatinsName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("InFlowMax",$param) and $param["InFlowMax"] !== null) {
            $this->InFlowMax = $param["InFlowMax"];
        }

        if (array_key_exists("OutFlowMax",$param) and $param["OutFlowMax"] !== null) {
            $this->OutFlowMax = $param["OutFlowMax"];
        }

        if (array_key_exists("RegionZh",$param) and $param["RegionZh"] !== null) {
            $this->RegionZh = $param["RegionZh"];
        }

        if (array_key_exists("EipAddress",$param) and $param["EipAddress"] !== null) {
            $this->EipAddress = $param["EipAddress"];
        }

        if (array_key_exists("VpcIp",$param) and $param["VpcIp"] !== null) {
            $this->VpcIp = $param["VpcIp"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = $param["Subnets"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RegionDetail",$param) and $param["RegionDetail"] !== null) {
            $this->RegionDetail = $param["RegionDetail"];
        }

        if (array_key_exists("ZoneZh",$param) and $param["ZoneZh"] !== null) {
            $this->ZoneZh = $param["ZoneZh"];
        }

        if (array_key_exists("ZoneZhBak",$param) and $param["ZoneZhBak"] !== null) {
            $this->ZoneZhBak = $param["ZoneZhBak"];
        }

        if (array_key_exists("RuleUsed",$param) and $param["RuleUsed"] !== null) {
            $this->RuleUsed = $param["RuleUsed"];
        }

        if (array_key_exists("RuleMax",$param) and $param["RuleMax"] !== null) {
            $this->RuleMax = $param["RuleMax"];
        }
    }
}
