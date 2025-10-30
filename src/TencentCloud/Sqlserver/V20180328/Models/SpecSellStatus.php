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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 售卖配置状态
 *
 * @method string getId() 获取可售卖的规格唯一ID
 * @method void setId(string $Id) 设置可售卖的规格唯一ID
 * @method integer getSpecId() 获取实例规格ID
 * @method void setSpecId(integer $SpecId) 设置实例规格ID
 * @method string getPayModeStatus() 获取此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
 * @method void setPayModeStatus(string $PayModeStatus) 设置此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
 * @method string getInstanceType() 获取产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点
 * @method void setInstanceType(string $InstanceType) 设置产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点
 * @method string getMultiZonesStatus() 获取该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
 * @method void setMultiZonesStatus(string $MultiZonesStatus) 设置该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
 * @method string getArchitecture() 获取架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点
示例值：SINGLE
 * @method void setArchitecture(string $Architecture) 设置架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点
示例值：SINGLE
 * @method string getStyle() 获取类型标识，EXCLUSIVE-独享型，SHARED-共享型
 * @method void setStyle(string $Style) 设置类型标识，EXCLUSIVE-独享型，SHARED-共享型
 * @method string getVersion() 获取数据库版本信息
 * @method void setVersion(string $Version) 设置数据库版本信息
 * @method array getZoneStatusSet() 获取每个可用区的售卖状态集合
 * @method void setZoneStatusSet(array $ZoneStatusSet) 设置每个可用区的售卖状态集合
 * @method Price getPrice() 获取规格的参考价格，实际价格以询价接口为准
 * @method void setPrice(Price $Price) 设置规格的参考价格，实际价格以询价接口为准
 * @method integer getStatus() 获取规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖
 * @method void setStatus(integer $Status) 设置规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖
 */
class SpecSellStatus extends AbstractModel
{
    /**
     * @var string 可售卖的规格唯一ID
     */
    public $Id;

    /**
     * @var integer 实例规格ID
     */
    public $SpecId;

    /**
     * @var string 此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
     */
    public $PayModeStatus;

    /**
     * @var string 产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点
     */
    public $InstanceType;

    /**
     * @var string 该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
     */
    public $MultiZonesStatus;

    /**
     * @var string 架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点
示例值：SINGLE
     */
    public $Architecture;

    /**
     * @var string 类型标识，EXCLUSIVE-独享型，SHARED-共享型
     */
    public $Style;

    /**
     * @var string 数据库版本信息
     */
    public $Version;

    /**
     * @var array 每个可用区的售卖状态集合
     */
    public $ZoneStatusSet;

    /**
     * @var Price 规格的参考价格，实际价格以询价接口为准
     */
    public $Price;

    /**
     * @var integer 规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖
     */
    public $Status;

    /**
     * @param string $Id 可售卖的规格唯一ID
     * @param integer $SpecId 实例规格ID
     * @param string $PayModeStatus 此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
     * @param string $InstanceType 产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点
     * @param string $MultiZonesStatus 该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
     * @param string $Architecture 架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点
示例值：SINGLE
     * @param string $Style 类型标识，EXCLUSIVE-独享型，SHARED-共享型
     * @param string $Version 数据库版本信息
     * @param array $ZoneStatusSet 每个可用区的售卖状态集合
     * @param Price $Price 规格的参考价格，实际价格以询价接口为准
     * @param integer $Status 规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖
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

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("PayModeStatus",$param) and $param["PayModeStatus"] !== null) {
            $this->PayModeStatus = $param["PayModeStatus"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MultiZonesStatus",$param) and $param["MultiZonesStatus"] !== null) {
            $this->MultiZonesStatus = $param["MultiZonesStatus"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ZoneStatusSet",$param) and $param["ZoneStatusSet"] !== null) {
            $this->ZoneStatusSet = [];
            foreach ($param["ZoneStatusSet"] as $key => $value){
                $obj = new ZoneStatus();
                $obj->deserialize($value);
                array_push($this->ZoneStatusSet, $obj);
            }
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
