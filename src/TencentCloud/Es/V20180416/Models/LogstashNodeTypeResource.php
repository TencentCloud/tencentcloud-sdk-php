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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash节点规格资源描述
 *
 * @method string getNodeTypeName() 获取<p>规格名称</p>
 * @method void setNodeTypeName(string $NodeTypeName) 设置<p>规格名称</p>
 * @method boolean getAvailable() 获取<p>是否可售</p>
 * @method void setAvailable(boolean $Available) 设置<p>是否可售</p>
 * @method NodeTypeInfo getNodeTypeInfo() 获取<p>规格信息</p>
 * @method void setNodeTypeInfo(NodeTypeInfo $NodeTypeInfo) 设置<p>规格信息</p>
 * @method boolean getSsdAvailable() 获取<p>SSD盘是否可售</p>
 * @method void setSsdAvailable(boolean $SsdAvailable) 设置<p>SSD盘是否可售</p>
 * @method DiskSizeRange getSsdDiskSizeRange() 获取<p>SSD磁盘取值范围</p>
 * @method void setSsdDiskSizeRange(DiskSizeRange $SsdDiskSizeRange) 设置<p>SSD磁盘取值范围</p>
 * @method array getSsdSoldOutDetail() 获取<p>SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsdSoldOutDetail(array $SsdSoldOutDetail) 设置<p>SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSataAvailable() 获取<p>SATA盘是否可售</p>
 * @method void setSataAvailable(boolean $SataAvailable) 设置<p>SATA盘是否可售</p>
 * @method DiskSizeRange getSataDiskSizeRange() 获取<p>SATA磁盘取值范围</p>
 * @method void setSataDiskSizeRange(DiskSizeRange $SataDiskSizeRange) 设置<p>SATA磁盘取值范围</p>
 * @method string getSsdSoldOutReason() 获取<p>SSD机型售罄原因</p>
 * @method void setSsdSoldOutReason(string $SsdSoldOutReason) 设置<p>SSD机型售罄原因</p>
 * @method string getSataSoldOutReason() 获取<p>SATA机型售罄原因</p>
 * @method void setSataSoldOutReason(string $SataSoldOutReason) 设置<p>SATA机型售罄原因</p>
 * @method array getSataSoldOutDetail() 获取<p>高性能云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSataSoldOutDetail(array $SataSoldOutDetail) 设置<p>高性能云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LocalDiskInfo getLocalDiskInfo() 获取<p>本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDiskInfo(LocalDiskInfo $LocalDiskInfo) 设置<p>本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskCountRange getDiskCountRange() 获取<p>云盘块数取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskCountRange(DiskCountRange $DiskCountRange) 设置<p>云盘块数取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHSsdAvailable() 获取<p>增强型SSD是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHSsdAvailable(boolean $HSsdAvailable) 设置<p>增强型SSD是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHSsdSoldOutReason() 获取<p>增强型SSD机型售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHSsdSoldOutReason(string $HSsdSoldOutReason) 设置<p>增强型SSD机型售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHSsdSoldOutDetail() 获取<p>增强型SSD售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHSsdSoldOutDetail(array $HSsdSoldOutDetail) 设置<p>增强型SSD售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskSizeRange getHSsdDiskSizeRange() 获取<p>增强型SSD磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHSsdDiskSizeRange(DiskSizeRange $HSsdDiskSizeRange) 设置<p>增强型SSD磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getThroughputAvailable() 获取<p>吞吐型云盘是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputAvailable(boolean $ThroughputAvailable) 设置<p>吞吐型云盘是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThroughputSoldOutReason() 获取<p>吞吐型云盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputSoldOutReason(string $ThroughputSoldOutReason) 设置<p>吞吐型云盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getThroughputSoldOutDetail() 获取<p>吞吐型云硬盘售罄</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputSoldOutDetail(array $ThroughputSoldOutDetail) 设置<p>吞吐型云硬盘售罄</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskSizeRange getThroughputDiskSizeRange() 获取<p>吞吐型云盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputDiskSizeRange(DiskSizeRange $ThroughputDiskSizeRange) 设置<p>吞吐型云盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBigDataAvailable() 获取<p>BigData盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDataAvailable(boolean $BigDataAvailable) 设置<p>BigData盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBigDataSoldOutReason() 获取<p>BigData盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDataSoldOutReason(string $BigDataSoldOutReason) 设置<p>BigData盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBigDataSoldOutDetail() 获取<p>大数据型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDataSoldOutDetail(array $BigDataSoldOutDetail) 设置<p>大数据型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskSizeRange getBigDataDiskSizeRange() 获取<p>BigData磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDataDiskSizeRange(DiskSizeRange $BigDataDiskSizeRange) 设置<p>BigData磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHighIOAvailable() 获取<p>HighIO盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighIOAvailable(boolean $HighIOAvailable) 设置<p>HighIO盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHighIOSoldOutReason() 获取<p>HighIO盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighIOSoldOutReason(string $HighIOSoldOutReason) 设置<p>HighIO盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHighIOSoldOutDetail() 获取<p>高IO型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighIOSoldOutDetail(array $HighIOSoldOutDetail) 设置<p>高IO型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskSizeRange getHighIODiskSizeRange() 获取<p>HighIO磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighIODiskSizeRange(DiskSizeRange $HighIODiskSizeRange) 设置<p>HighIO磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBssdAvailable() 获取<p>Bssd盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBssdAvailable(boolean $BssdAvailable) 设置<p>Bssd盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBssdSoldOutReason() 获取<p>Bssd盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBssdSoldOutReason(string $BssdSoldOutReason) 设置<p>Bssd盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskSizeRange getBssdDiskSizeRange() 获取<p>Bssd盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBssdDiskSizeRange(DiskSizeRange $BssdDiskSizeRange) 设置<p>Bssd盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBssdSoldOutDetail() 获取<p>通用型SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBssdSoldOutDetail(array $BssdSoldOutDetail) 设置<p>通用型SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GpuInfo getGpuInfo() 获取<p>GpuInfo</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuInfo(GpuInfo $GpuInfo) 设置<p>GpuInfo</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogstashNodeTypeResource extends AbstractModel
{
    /**
     * @var string <p>规格名称</p>
     */
    public $NodeTypeName;

    /**
     * @var boolean <p>是否可售</p>
     */
    public $Available;

    /**
     * @var NodeTypeInfo <p>规格信息</p>
     */
    public $NodeTypeInfo;

    /**
     * @var boolean <p>SSD盘是否可售</p>
     */
    public $SsdAvailable;

    /**
     * @var DiskSizeRange <p>SSD磁盘取值范围</p>
     */
    public $SsdDiskSizeRange;

    /**
     * @var array <p>SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsdSoldOutDetail;

    /**
     * @var boolean <p>SATA盘是否可售</p>
     */
    public $SataAvailable;

    /**
     * @var DiskSizeRange <p>SATA磁盘取值范围</p>
     */
    public $SataDiskSizeRange;

    /**
     * @var string <p>SSD机型售罄原因</p>
     */
    public $SsdSoldOutReason;

    /**
     * @var string <p>SATA机型售罄原因</p>
     */
    public $SataSoldOutReason;

    /**
     * @var array <p>高性能云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SataSoldOutDetail;

    /**
     * @var LocalDiskInfo <p>本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDiskInfo;

    /**
     * @var DiskCountRange <p>云盘块数取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskCountRange;

    /**
     * @var boolean <p>增强型SSD是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HSsdAvailable;

    /**
     * @var string <p>增强型SSD机型售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HSsdSoldOutReason;

    /**
     * @var array <p>增强型SSD售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HSsdSoldOutDetail;

    /**
     * @var DiskSizeRange <p>增强型SSD磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HSsdDiskSizeRange;

    /**
     * @var boolean <p>吞吐型云盘是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputAvailable;

    /**
     * @var string <p>吞吐型云盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputSoldOutReason;

    /**
     * @var array <p>吞吐型云硬盘售罄</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputSoldOutDetail;

    /**
     * @var DiskSizeRange <p>吞吐型云盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputDiskSizeRange;

    /**
     * @var boolean <p>BigData盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDataAvailable;

    /**
     * @var string <p>BigData盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDataSoldOutReason;

    /**
     * @var array <p>大数据型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDataSoldOutDetail;

    /**
     * @var DiskSizeRange <p>BigData磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDataDiskSizeRange;

    /**
     * @var boolean <p>HighIO盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighIOAvailable;

    /**
     * @var string <p>HighIO盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighIOSoldOutReason;

    /**
     * @var array <p>高IO型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighIOSoldOutDetail;

    /**
     * @var DiskSizeRange <p>HighIO磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighIODiskSizeRange;

    /**
     * @var boolean <p>Bssd盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BssdAvailable;

    /**
     * @var string <p>Bssd盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BssdSoldOutReason;

    /**
     * @var DiskSizeRange <p>Bssd盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BssdDiskSizeRange;

    /**
     * @var array <p>通用型SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BssdSoldOutDetail;

    /**
     * @var GpuInfo <p>GpuInfo</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuInfo;

    /**
     * @param string $NodeTypeName <p>规格名称</p>
     * @param boolean $Available <p>是否可售</p>
     * @param NodeTypeInfo $NodeTypeInfo <p>规格信息</p>
     * @param boolean $SsdAvailable <p>SSD盘是否可售</p>
     * @param DiskSizeRange $SsdDiskSizeRange <p>SSD磁盘取值范围</p>
     * @param array $SsdSoldOutDetail <p>SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SataAvailable <p>SATA盘是否可售</p>
     * @param DiskSizeRange $SataDiskSizeRange <p>SATA磁盘取值范围</p>
     * @param string $SsdSoldOutReason <p>SSD机型售罄原因</p>
     * @param string $SataSoldOutReason <p>SATA机型售罄原因</p>
     * @param array $SataSoldOutDetail <p>高性能云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LocalDiskInfo $LocalDiskInfo <p>本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskCountRange $DiskCountRange <p>云盘块数取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HSsdAvailable <p>增强型SSD是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HSsdSoldOutReason <p>增强型SSD机型售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HSsdSoldOutDetail <p>增强型SSD售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskSizeRange $HSsdDiskSizeRange <p>增强型SSD磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ThroughputAvailable <p>吞吐型云盘是否可用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThroughputSoldOutReason <p>吞吐型云盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ThroughputSoldOutDetail <p>吞吐型云硬盘售罄</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskSizeRange $ThroughputDiskSizeRange <p>吞吐型云盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BigDataAvailable <p>BigData盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BigDataSoldOutReason <p>BigData盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BigDataSoldOutDetail <p>大数据型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskSizeRange $BigDataDiskSizeRange <p>BigData磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HighIOAvailable <p>HighIO盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HighIOSoldOutReason <p>HighIO盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HighIOSoldOutDetail <p>高IO型云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskSizeRange $HighIODiskSizeRange <p>HighIO磁盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BssdAvailable <p>Bssd盘是否可售</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BssdSoldOutReason <p>Bssd盘售罄原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskSizeRange $BssdDiskSizeRange <p>Bssd盘取值范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BssdSoldOutDetail <p>通用型SSD云硬盘售罄明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GpuInfo $GpuInfo <p>GpuInfo</p>
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
        if (array_key_exists("NodeTypeName",$param) and $param["NodeTypeName"] !== null) {
            $this->NodeTypeName = $param["NodeTypeName"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("NodeTypeInfo",$param) and $param["NodeTypeInfo"] !== null) {
            $this->NodeTypeInfo = new NodeTypeInfo();
            $this->NodeTypeInfo->deserialize($param["NodeTypeInfo"]);
        }

        if (array_key_exists("SsdAvailable",$param) and $param["SsdAvailable"] !== null) {
            $this->SsdAvailable = $param["SsdAvailable"];
        }

        if (array_key_exists("SsdDiskSizeRange",$param) and $param["SsdDiskSizeRange"] !== null) {
            $this->SsdDiskSizeRange = new DiskSizeRange();
            $this->SsdDiskSizeRange->deserialize($param["SsdDiskSizeRange"]);
        }

        if (array_key_exists("SsdSoldOutDetail",$param) and $param["SsdSoldOutDetail"] !== null) {
            $this->SsdSoldOutDetail = [];
            foreach ($param["SsdSoldOutDetail"] as $key => $value){
                $obj = new FamilyResourceStat();
                $obj->deserialize($value);
                array_push($this->SsdSoldOutDetail, $obj);
            }
        }

        if (array_key_exists("SataAvailable",$param) and $param["SataAvailable"] !== null) {
            $this->SataAvailable = $param["SataAvailable"];
        }

        if (array_key_exists("SataDiskSizeRange",$param) and $param["SataDiskSizeRange"] !== null) {
            $this->SataDiskSizeRange = new DiskSizeRange();
            $this->SataDiskSizeRange->deserialize($param["SataDiskSizeRange"]);
        }

        if (array_key_exists("SsdSoldOutReason",$param) and $param["SsdSoldOutReason"] !== null) {
            $this->SsdSoldOutReason = $param["SsdSoldOutReason"];
        }

        if (array_key_exists("SataSoldOutReason",$param) and $param["SataSoldOutReason"] !== null) {
            $this->SataSoldOutReason = $param["SataSoldOutReason"];
        }

        if (array_key_exists("SataSoldOutDetail",$param) and $param["SataSoldOutDetail"] !== null) {
            $this->SataSoldOutDetail = [];
            foreach ($param["SataSoldOutDetail"] as $key => $value){
                $obj = new FamilyResourceStat();
                $obj->deserialize($value);
                array_push($this->SataSoldOutDetail, $obj);
            }
        }

        if (array_key_exists("LocalDiskInfo",$param) and $param["LocalDiskInfo"] !== null) {
            $this->LocalDiskInfo = new LocalDiskInfo();
            $this->LocalDiskInfo->deserialize($param["LocalDiskInfo"]);
        }

        if (array_key_exists("DiskCountRange",$param) and $param["DiskCountRange"] !== null) {
            $this->DiskCountRange = new DiskCountRange();
            $this->DiskCountRange->deserialize($param["DiskCountRange"]);
        }

        if (array_key_exists("HSsdAvailable",$param) and $param["HSsdAvailable"] !== null) {
            $this->HSsdAvailable = $param["HSsdAvailable"];
        }

        if (array_key_exists("HSsdSoldOutReason",$param) and $param["HSsdSoldOutReason"] !== null) {
            $this->HSsdSoldOutReason = $param["HSsdSoldOutReason"];
        }

        if (array_key_exists("HSsdSoldOutDetail",$param) and $param["HSsdSoldOutDetail"] !== null) {
            $this->HSsdSoldOutDetail = [];
            foreach ($param["HSsdSoldOutDetail"] as $key => $value){
                $obj = new FamilyResourceStat();
                $obj->deserialize($value);
                array_push($this->HSsdSoldOutDetail, $obj);
            }
        }

        if (array_key_exists("HSsdDiskSizeRange",$param) and $param["HSsdDiskSizeRange"] !== null) {
            $this->HSsdDiskSizeRange = new DiskSizeRange();
            $this->HSsdDiskSizeRange->deserialize($param["HSsdDiskSizeRange"]);
        }

        if (array_key_exists("ThroughputAvailable",$param) and $param["ThroughputAvailable"] !== null) {
            $this->ThroughputAvailable = $param["ThroughputAvailable"];
        }

        if (array_key_exists("ThroughputSoldOutReason",$param) and $param["ThroughputSoldOutReason"] !== null) {
            $this->ThroughputSoldOutReason = $param["ThroughputSoldOutReason"];
        }

        if (array_key_exists("ThroughputSoldOutDetail",$param) and $param["ThroughputSoldOutDetail"] !== null) {
            $this->ThroughputSoldOutDetail = [];
            foreach ($param["ThroughputSoldOutDetail"] as $key => $value){
                $obj = new FamilyResourceStat();
                $obj->deserialize($value);
                array_push($this->ThroughputSoldOutDetail, $obj);
            }
        }

        if (array_key_exists("ThroughputDiskSizeRange",$param) and $param["ThroughputDiskSizeRange"] !== null) {
            $this->ThroughputDiskSizeRange = new DiskSizeRange();
            $this->ThroughputDiskSizeRange->deserialize($param["ThroughputDiskSizeRange"]);
        }

        if (array_key_exists("BigDataAvailable",$param) and $param["BigDataAvailable"] !== null) {
            $this->BigDataAvailable = $param["BigDataAvailable"];
        }

        if (array_key_exists("BigDataSoldOutReason",$param) and $param["BigDataSoldOutReason"] !== null) {
            $this->BigDataSoldOutReason = $param["BigDataSoldOutReason"];
        }

        if (array_key_exists("BigDataSoldOutDetail",$param) and $param["BigDataSoldOutDetail"] !== null) {
            $this->BigDataSoldOutDetail = [];
            foreach ($param["BigDataSoldOutDetail"] as $key => $value){
                $obj = new FamilyResourceStat();
                $obj->deserialize($value);
                array_push($this->BigDataSoldOutDetail, $obj);
            }
        }

        if (array_key_exists("BigDataDiskSizeRange",$param) and $param["BigDataDiskSizeRange"] !== null) {
            $this->BigDataDiskSizeRange = new DiskSizeRange();
            $this->BigDataDiskSizeRange->deserialize($param["BigDataDiskSizeRange"]);
        }

        if (array_key_exists("HighIOAvailable",$param) and $param["HighIOAvailable"] !== null) {
            $this->HighIOAvailable = $param["HighIOAvailable"];
        }

        if (array_key_exists("HighIOSoldOutReason",$param) and $param["HighIOSoldOutReason"] !== null) {
            $this->HighIOSoldOutReason = $param["HighIOSoldOutReason"];
        }

        if (array_key_exists("HighIOSoldOutDetail",$param) and $param["HighIOSoldOutDetail"] !== null) {
            $this->HighIOSoldOutDetail = [];
            foreach ($param["HighIOSoldOutDetail"] as $key => $value){
                $obj = new FamilyResourceStat();
                $obj->deserialize($value);
                array_push($this->HighIOSoldOutDetail, $obj);
            }
        }

        if (array_key_exists("HighIODiskSizeRange",$param) and $param["HighIODiskSizeRange"] !== null) {
            $this->HighIODiskSizeRange = new DiskSizeRange();
            $this->HighIODiskSizeRange->deserialize($param["HighIODiskSizeRange"]);
        }

        if (array_key_exists("BssdAvailable",$param) and $param["BssdAvailable"] !== null) {
            $this->BssdAvailable = $param["BssdAvailable"];
        }

        if (array_key_exists("BssdSoldOutReason",$param) and $param["BssdSoldOutReason"] !== null) {
            $this->BssdSoldOutReason = $param["BssdSoldOutReason"];
        }

        if (array_key_exists("BssdDiskSizeRange",$param) and $param["BssdDiskSizeRange"] !== null) {
            $this->BssdDiskSizeRange = new DiskSizeRange();
            $this->BssdDiskSizeRange->deserialize($param["BssdDiskSizeRange"]);
        }

        if (array_key_exists("BssdSoldOutDetail",$param) and $param["BssdSoldOutDetail"] !== null) {
            $this->BssdSoldOutDetail = [];
            foreach ($param["BssdSoldOutDetail"] as $key => $value){
                $obj = new FamilyResourceStat();
                $obj->deserialize($value);
                array_push($this->BssdSoldOutDetail, $obj);
            }
        }

        if (array_key_exists("GpuInfo",$param) and $param["GpuInfo"] !== null) {
            $this->GpuInfo = new GpuInfo();
            $this->GpuInfo->deserialize($param["GpuInfo"]);
        }
    }
}
