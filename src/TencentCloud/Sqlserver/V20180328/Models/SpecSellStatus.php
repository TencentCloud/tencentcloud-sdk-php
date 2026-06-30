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
 * @method string getId() 获取<p>可售卖的规格唯一ID</p>
 * @method void setId(string $Id) 设置<p>可售卖的规格唯一ID</p>
 * @method integer getSpecId() 获取<p>实例规格ID</p>
 * @method void setSpecId(integer $SpecId) 设置<p>实例规格ID</p>
 * @method string getPayModeStatus() 获取<p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
 * @method void setPayModeStatus(string $PayModeStatus) 设置<p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
 * @method string getInstanceType() 获取<p>产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
 * @method string getMultiZonesStatus() 获取<p>该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
 * @method void setMultiZonesStatus(string $MultiZonesStatus) 设置<p>该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
 * @method string getArchitecture() 获取<p>架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点<br>示例值：SINGLE</p>
 * @method void setArchitecture(string $Architecture) 设置<p>架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点<br>示例值：SINGLE</p>
 * @method string getStyle() 获取<p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
 * @method void setStyle(string $Style) 设置<p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
 * @method string getVersion() 获取<p>数据库版本信息</p>
 * @method void setVersion(string $Version) 设置<p>数据库版本信息</p>
 * @method array getZoneStatusSet() 获取<p>每个可用区的售卖状态集合</p>
 * @method void setZoneStatusSet(array $ZoneStatusSet) 设置<p>每个可用区的售卖状态集合</p>
 * @method Price getPrice() 获取<p>规格的参考价格，实际价格以询价接口为准</p>
 * @method void setPrice(Price $Price) 设置<p>规格的参考价格，实际价格以询价接口为准</p>
 * @method integer getStatus() 获取<p>规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖</p>
 * @method void setStatus(integer $Status) 设置<p>规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖</p>
 * @method integer getMinBaselineIOPS() 获取<p>最小磁盘容量时的基准 </p><p>单位：IOPS</p>
 * @method void setMinBaselineIOPS(integer $MinBaselineIOPS) 设置<p>最小磁盘容量时的基准 </p><p>单位：IOPS</p>
 * @method integer getMaxBaselineIOPS() 获取<p>最大磁盘容量时的基准 </p><p>单位：IOPS</p>
 * @method void setMaxBaselineIOPS(integer $MaxBaselineIOPS) 设置<p>最大磁盘容量时的基准 </p><p>单位：IOPS</p>
 * @method integer getMinBaselineThroughput() 获取<p>最小磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
 * @method void setMinBaselineThroughput(integer $MinBaselineThroughput) 设置<p>最小磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
 * @method integer getMaxBaselineThroughput() 获取<p>最大磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
 * @method void setMaxBaselineThroughput(integer $MaxBaselineThroughput) 设置<p>最大磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
 * @method boolean getExtraIOSupported() 获取<p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
 * @method void setExtraIOSupported(boolean $ExtraIOSupported) 设置<p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
 * @method integer getMaxExtraThroughput() 获取<p>额外 IO 最大吞吐量 </p><p>单位：MB/s</p>
 * @method void setMaxExtraThroughput(integer $MaxExtraThroughput) 设置<p>额外 IO 最大吞吐量 </p><p>单位：MB/s</p>
 * @method integer getMinDiskSizeForExtraIO() 获取<p>支持额外 IO 的最小磁盘容量</p><p>单位：GB</p><p>默认值：460</p>
 * @method void setMinDiskSizeForExtraIO(integer $MinDiskSizeForExtraIO) 设置<p>支持额外 IO 的最小磁盘容量</p><p>单位：GB</p><p>默认值：460</p>
 */
class SpecSellStatus extends AbstractModel
{
    /**
     * @var string <p>可售卖的规格唯一ID</p>
     */
    public $Id;

    /**
     * @var integer <p>实例规格ID</p>
     */
    public $SpecId;

    /**
     * @var string <p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
     */
    public $PayModeStatus;

    /**
     * @var string <p>产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
     */
    public $InstanceType;

    /**
     * @var string <p>该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
     */
    public $MultiZonesStatus;

    /**
     * @var string <p>架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点<br>示例值：SINGLE</p>
     */
    public $Architecture;

    /**
     * @var string <p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
     */
    public $Style;

    /**
     * @var string <p>数据库版本信息</p>
     */
    public $Version;

    /**
     * @var array <p>每个可用区的售卖状态集合</p>
     */
    public $ZoneStatusSet;

    /**
     * @var Price <p>规格的参考价格，实际价格以询价接口为准</p>
     */
    public $Price;

    /**
     * @var integer <p>规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖</p>
     */
    public $Status;

    /**
     * @var integer <p>最小磁盘容量时的基准 </p><p>单位：IOPS</p>
     */
    public $MinBaselineIOPS;

    /**
     * @var integer <p>最大磁盘容量时的基准 </p><p>单位：IOPS</p>
     */
    public $MaxBaselineIOPS;

    /**
     * @var integer <p>最小磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
     */
    public $MinBaselineThroughput;

    /**
     * @var integer <p>最大磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
     */
    public $MaxBaselineThroughput;

    /**
     * @var boolean <p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
     */
    public $ExtraIOSupported;

    /**
     * @var integer <p>额外 IO 最大吞吐量 </p><p>单位：MB/s</p>
     */
    public $MaxExtraThroughput;

    /**
     * @var integer <p>支持额外 IO 的最小磁盘容量</p><p>单位：GB</p><p>默认值：460</p>
     */
    public $MinDiskSizeForExtraIO;

    /**
     * @param string $Id <p>可售卖的规格唯一ID</p>
     * @param integer $SpecId <p>实例规格ID</p>
     * @param string $PayModeStatus <p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
     * @param string $InstanceType <p>产品类型，购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
     * @param string $MultiZonesStatus <p>该规格支持的是否跨可用去，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
     * @param string $Architecture <p>架构标识，SINGLE-单节点 DOUBLE-双节点 TRIPLE-三节点 MULTI-多节点<br>示例值：SINGLE</p>
     * @param string $Style <p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
     * @param string $Version <p>数据库版本信息</p>
     * @param array $ZoneStatusSet <p>每个可用区的售卖状态集合</p>
     * @param Price $Price <p>规格的参考价格，实际价格以询价接口为准</p>
     * @param integer $Status <p>规格售卖状态 1-正常 2-关闭售卖但是可以升级 3-完全关闭售卖</p>
     * @param integer $MinBaselineIOPS <p>最小磁盘容量时的基准 </p><p>单位：IOPS</p>
     * @param integer $MaxBaselineIOPS <p>最大磁盘容量时的基准 </p><p>单位：IOPS</p>
     * @param integer $MinBaselineThroughput <p>最小磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
     * @param integer $MaxBaselineThroughput <p>最大磁盘容量时的基准吞吐量 </p><p>单位：MB/s</p>
     * @param boolean $ExtraIOSupported <p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
     * @param integer $MaxExtraThroughput <p>额外 IO 最大吞吐量 </p><p>单位：MB/s</p>
     * @param integer $MinDiskSizeForExtraIO <p>支持额外 IO 的最小磁盘容量</p><p>单位：GB</p><p>默认值：460</p>
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

        if (array_key_exists("MinBaselineIOPS",$param) and $param["MinBaselineIOPS"] !== null) {
            $this->MinBaselineIOPS = $param["MinBaselineIOPS"];
        }

        if (array_key_exists("MaxBaselineIOPS",$param) and $param["MaxBaselineIOPS"] !== null) {
            $this->MaxBaselineIOPS = $param["MaxBaselineIOPS"];
        }

        if (array_key_exists("MinBaselineThroughput",$param) and $param["MinBaselineThroughput"] !== null) {
            $this->MinBaselineThroughput = $param["MinBaselineThroughput"];
        }

        if (array_key_exists("MaxBaselineThroughput",$param) and $param["MaxBaselineThroughput"] !== null) {
            $this->MaxBaselineThroughput = $param["MaxBaselineThroughput"];
        }

        if (array_key_exists("ExtraIOSupported",$param) and $param["ExtraIOSupported"] !== null) {
            $this->ExtraIOSupported = $param["ExtraIOSupported"];
        }

        if (array_key_exists("MaxExtraThroughput",$param) and $param["MaxExtraThroughput"] !== null) {
            $this->MaxExtraThroughput = $param["MaxExtraThroughput"];
        }

        if (array_key_exists("MinDiskSizeForExtraIO",$param) and $param["MinDiskSizeForExtraIO"] !== null) {
            $this->MinDiskSizeForExtraIO = $param["MinDiskSizeForExtraIO"];
        }
    }
}
