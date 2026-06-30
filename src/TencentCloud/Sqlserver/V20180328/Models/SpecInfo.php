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
 * 实例可售卖的规格信息
 *
 * @method integer getSpecId() 获取<p>实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例</p>
 * @method void setSpecId(integer $SpecId) 设置<p>实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例</p>
 * @method string getMachineType() 获取<p>机型ID</p>
 * @method void setMachineType(string $MachineType) 设置<p>机型ID</p>
 * @method string getMachineTypeName() 获取<p>机型中文名称</p>
 * @method void setMachineTypeName(string $MachineTypeName) 设置<p>机型中文名称</p>
 * @method string getVersion() 获取<p>数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）</p>
 * @method void setVersion(string $Version) 设置<p>数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）</p>
 * @method string getVersionName() 获取<p>Version字段对应的版本名称</p>
 * @method void setVersionName(string $VersionName) 设置<p>Version字段对应的版本名称</p>
 * @method integer getMemory() 获取<p>内存大小，单位GB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小，单位GB</p>
 * @method integer getCPU() 获取<p>CPU核数</p>
 * @method void setCPU(integer $CPU) 设置<p>CPU核数</p>
 * @method integer getMinStorage() 获取<p>此规格下最小的磁盘大小，单位GB</p>
 * @method void setMinStorage(integer $MinStorage) 设置<p>此规格下最小的磁盘大小，单位GB</p>
 * @method integer getMaxStorage() 获取<p>此规格下最大的磁盘大小，单位GB</p>
 * @method void setMaxStorage(integer $MaxStorage) 设置<p>此规格下最大的磁盘大小，单位GB</p>
 * @method integer getQPS() 获取<p>此规格对应的QPS大小</p>
 * @method void setQPS(integer $QPS) 设置<p>此规格对应的QPS大小</p>
 * @method string getSuitInfo() 获取<p>此规格的中文描述信息</p>
 * @method void setSuitInfo(string $SuitInfo) 设置<p>此规格的中文描述信息</p>
 * @method integer getPid() 获取<p>此规格对应的包年包月Pid</p>
 * @method void setPid(integer $Pid) 设置<p>此规格对应的包年包月Pid</p>
 * @method array getPostPid() 获取<p>此规格对应的按量计费Pid列表</p>
 * @method void setPostPid(array $PostPid) 设置<p>此规格对应的按量计费Pid列表</p>
 * @method string getPayModeStatus() 获取<p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
 * @method void setPayModeStatus(string $PayModeStatus) 设置<p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
 * @method string getInstanceType() 获取<p>购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点<br>示例值：HA</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点<br>示例值：HA</p>
 * @method string getMultiZonesStatus() 获取<p>跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
 * @method void setMultiZonesStatus(string $MultiZonesStatus) 设置<p>跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
 * @method integer getMinBaselineIOPS() 获取<p>最小磁盘容量时的基准</p><p>单位：IOPS</p>
 * @method void setMinBaselineIOPS(integer $MinBaselineIOPS) 设置<p>最小磁盘容量时的基准</p><p>单位：IOPS</p>
 * @method integer getMaxBaselineIOPS() 获取<p>最大磁盘容量时的基准</p><p>单位：IOPS</p>
 * @method void setMaxBaselineIOPS(integer $MaxBaselineIOPS) 设置<p>最大磁盘容量时的基准</p><p>单位：IOPS</p>
 * @method integer getMinBaselineThroughput() 获取<p>最小磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
 * @method void setMinBaselineThroughput(integer $MinBaselineThroughput) 设置<p>最小磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
 * @method integer getMaxBaselineThroughput() 获取<p>最大磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
 * @method void setMaxBaselineThroughput(integer $MaxBaselineThroughput) 设置<p>最大磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
 * @method boolean getExtraIOSupported() 获取<p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
 * @method void setExtraIOSupported(boolean $ExtraIOSupported) 设置<p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
 * @method integer getMaxExtraThroughput() 获取<p>额外 IO 最大吞吐量</p><p>单位：MB/s</p>
 * @method void setMaxExtraThroughput(integer $MaxExtraThroughput) 设置<p>额外 IO 最大吞吐量</p><p>单位：MB/s</p>
 * @method integer getMinDiskSizeForExtraIO() 获取<p>支持额外 IO 的最小磁盘容量</p><p>单位： GB</p><p>默认值：460</p>
 * @method void setMinDiskSizeForExtraIO(integer $MinDiskSizeForExtraIO) 设置<p>支持额外 IO 的最小磁盘容量</p><p>单位： GB</p><p>默认值：460</p>
 */
class SpecInfo extends AbstractModel
{
    /**
     * @var integer <p>实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例</p>
     */
    public $SpecId;

    /**
     * @var string <p>机型ID</p>
     */
    public $MachineType;

    /**
     * @var string <p>机型中文名称</p>
     */
    public $MachineTypeName;

    /**
     * @var string <p>数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）</p>
     */
    public $Version;

    /**
     * @var string <p>Version字段对应的版本名称</p>
     */
    public $VersionName;

    /**
     * @var integer <p>内存大小，单位GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>CPU核数</p>
     */
    public $CPU;

    /**
     * @var integer <p>此规格下最小的磁盘大小，单位GB</p>
     */
    public $MinStorage;

    /**
     * @var integer <p>此规格下最大的磁盘大小，单位GB</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>此规格对应的QPS大小</p>
     */
    public $QPS;

    /**
     * @var string <p>此规格的中文描述信息</p>
     */
    public $SuitInfo;

    /**
     * @var integer <p>此规格对应的包年包月Pid</p>
     */
    public $Pid;

    /**
     * @var array <p>此规格对应的按量计费Pid列表</p>
     */
    public $PostPid;

    /**
     * @var string <p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
     */
    public $PayModeStatus;

    /**
     * @var string <p>购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点<br>示例值：HA</p>
     */
    public $InstanceType;

    /**
     * @var string <p>跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
     */
    public $MultiZonesStatus;

    /**
     * @var integer <p>最小磁盘容量时的基准</p><p>单位：IOPS</p>
     */
    public $MinBaselineIOPS;

    /**
     * @var integer <p>最大磁盘容量时的基准</p><p>单位：IOPS</p>
     */
    public $MaxBaselineIOPS;

    /**
     * @var integer <p>最小磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
     */
    public $MinBaselineThroughput;

    /**
     * @var integer <p>最大磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
     */
    public $MaxBaselineThroughput;

    /**
     * @var boolean <p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
     */
    public $ExtraIOSupported;

    /**
     * @var integer <p>额外 IO 最大吞吐量</p><p>单位：MB/s</p>
     */
    public $MaxExtraThroughput;

    /**
     * @var integer <p>支持额外 IO 的最小磁盘容量</p><p>单位： GB</p><p>默认值：460</p>
     */
    public $MinDiskSizeForExtraIO;

    /**
     * @param integer $SpecId <p>实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例</p>
     * @param string $MachineType <p>机型ID</p>
     * @param string $MachineTypeName <p>机型中文名称</p>
     * @param string $Version <p>数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）</p>
     * @param string $VersionName <p>Version字段对应的版本名称</p>
     * @param integer $Memory <p>内存大小，单位GB</p>
     * @param integer $CPU <p>CPU核数</p>
     * @param integer $MinStorage <p>此规格下最小的磁盘大小，单位GB</p>
     * @param integer $MaxStorage <p>此规格下最大的磁盘大小，单位GB</p>
     * @param integer $QPS <p>此规格对应的QPS大小</p>
     * @param string $SuitInfo <p>此规格的中文描述信息</p>
     * @param integer $Pid <p>此规格对应的包年包月Pid</p>
     * @param array $PostPid <p>此规格对应的按量计费Pid列表</p>
     * @param string $PayModeStatus <p>此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有</p>
     * @param string $InstanceType <p>购买实例的类型 HA-本地盘高可用(包括双机高可用，alwaysOn集群)，RO-本地盘只读副本，SI-云盘版单节点,BI-商业智能服务，cvmHA-云盘版高可用，cvmRO-云盘版只读副本，MultiHA-多节点，cvmMultiHA-云盘多节点<br>示例值：HA</p>
     * @param string $MultiZonesStatus <p>跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有</p>
     * @param integer $MinBaselineIOPS <p>最小磁盘容量时的基准</p><p>单位：IOPS</p>
     * @param integer $MaxBaselineIOPS <p>最大磁盘容量时的基准</p><p>单位：IOPS</p>
     * @param integer $MinBaselineThroughput <p>最小磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
     * @param integer $MaxBaselineThroughput <p>最大磁盘容量时的基准吞吐量</p><p>单位：MB/s</p>
     * @param boolean $ExtraIOSupported <p>是否支持额外 IO 性能</p><p>枚举值：</p><ul><li>TRUE： 支持额外 IO 性能</li><li>FALSE： 不支持额外 IO 性能</li></ul>
     * @param integer $MaxExtraThroughput <p>额外 IO 最大吞吐量</p><p>单位：MB/s</p>
     * @param integer $MinDiskSizeForExtraIO <p>支持额外 IO 的最小磁盘容量</p><p>单位： GB</p><p>默认值：460</p>
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
        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineTypeName",$param) and $param["MachineTypeName"] !== null) {
            $this->MachineTypeName = $param["MachineTypeName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = $param["QPS"];
        }

        if (array_key_exists("SuitInfo",$param) and $param["SuitInfo"] !== null) {
            $this->SuitInfo = $param["SuitInfo"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PostPid",$param) and $param["PostPid"] !== null) {
            $this->PostPid = $param["PostPid"];
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
