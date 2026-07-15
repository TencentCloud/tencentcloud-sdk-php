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
 * 节点规格资源描述
 *
 * @method string getNodeTypeName() 获取规格名称
 * @method void setNodeTypeName(string $NodeTypeName) 设置规格名称
 * @method boolean getAvailable() 获取是否可售
 * @method void setAvailable(boolean $Available) 设置是否可售
 * @method NodeTypeInfo getNodeTypeInfo() 获取规格信息
 * @method void setNodeTypeInfo(NodeTypeInfo $NodeTypeInfo) 设置规格信息
 * @method boolean getSsdAvailable() 获取SSD盘是否可售
 * @method void setSsdAvailable(boolean $SsdAvailable) 设置SSD盘是否可售
 * @method DiskSizeRange getSsdDiskSizeRange() 获取SSD磁盘取值范围
 * @method void setSsdDiskSizeRange(DiskSizeRange $SsdDiskSizeRange) 设置SSD磁盘取值范围
 * @method boolean getSataAvailable() 获取SATA盘是否可售
 * @method void setSataAvailable(boolean $SataAvailable) 设置SATA盘是否可售
 * @method DiskSizeRange getSataDiskSizeRange() 获取SATA磁盘取值范围
 * @method void setSataDiskSizeRange(DiskSizeRange $SataDiskSizeRange) 设置SATA磁盘取值范围
 * @method string getSsdSoldOutReason() 获取SSD机型售罄原因
 * @method void setSsdSoldOutReason(string $SsdSoldOutReason) 设置SSD机型售罄原因
 * @method string getSataSoldOutReason() 获取SATA机型售罄原因
 * @method void setSataSoldOutReason(string $SataSoldOutReason) 设置SATA机型售罄原因
 * @method LocalDiskInfo getLocalDiskInfo() 获取本地盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDiskInfo(LocalDiskInfo $LocalDiskInfo) 设置本地盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskCountRange getDiskCountRange() 获取云盘块数取值范围
 * @method void setDiskCountRange(DiskCountRange $DiskCountRange) 设置云盘块数取值范围
 * @method boolean getHSsdAvailable() 获取HSSD盘是否可售
 * @method void setHSsdAvailable(boolean $HSsdAvailable) 设置HSSD盘是否可售
 * @method string getHSsdSoldOutReason() 获取HSSD机型售罄原因
 * @method void setHSsdSoldOutReason(string $HSsdSoldOutReason) 设置HSSD机型售罄原因
 * @method DiskSizeRange getHSsdDiskSizeRange() 获取HSSD磁盘取值范围
 * @method void setHSsdDiskSizeRange(DiskSizeRange $HSsdDiskSizeRange) 设置HSSD磁盘取值范围
 * @method boolean getThroughputAvailable() 获取Throughput盘是否可售
 * @method void setThroughputAvailable(boolean $ThroughputAvailable) 设置Throughput盘是否可售
 * @method string getThroughputSoldOutReason() 获取Throughput机型售罄原因
 * @method void setThroughputSoldOutReason(string $ThroughputSoldOutReason) 设置Throughput机型售罄原因
 * @method DiskSizeRange getThroughputDiskSizeRange() 获取Throughput磁盘取值范围
 * @method void setThroughputDiskSizeRange(DiskSizeRange $ThroughputDiskSizeRange) 设置Throughput磁盘取值范围
 * @method boolean getBigDataAvailable() 获取BigData盘是否可售
 * @method void setBigDataAvailable(boolean $BigDataAvailable) 设置BigData盘是否可售
 * @method string getBigDataSoldOutReason() 获取BigData盘售罄原因
 * @method void setBigDataSoldOutReason(string $BigDataSoldOutReason) 设置BigData盘售罄原因
 * @method DiskSizeRange getBigDataDiskSizeRange() 获取BigData磁盘取值范围
 * @method void setBigDataDiskSizeRange(DiskSizeRange $BigDataDiskSizeRange) 设置BigData磁盘取值范围
 * @method boolean getHighIOAvailable() 获取HighIO盘是否可售
 * @method void setHighIOAvailable(boolean $HighIOAvailable) 设置HighIO盘是否可售
 * @method string getHighIOSoldOutReason() 获取HighIO盘售罄原因
 * @method void setHighIOSoldOutReason(string $HighIOSoldOutReason) 设置HighIO盘售罄原因
 * @method DiskSizeRange getHighIODiskSizeRange() 获取HighIO磁盘取值范围
 * @method void setHighIODiskSizeRange(DiskSizeRange $HighIODiskSizeRange) 设置HighIO磁盘取值范围
 * @method boolean getBssdAvailable() 获取Bssd盘是否可售
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBssdAvailable(boolean $BssdAvailable) 设置Bssd盘是否可售
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBssdSoldOutReason() 获取Bssd盘售罄原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBssdSoldOutReason(string $BssdSoldOutReason) 设置Bssd盘售罄原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskSizeRange getBssdDiskSizeRange() 获取Bssd盘取值范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBssdDiskSizeRange(DiskSizeRange $BssdDiskSizeRange) 设置Bssd盘取值范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method GpuInfo getGpuInfo() 获取节点Gpu信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuInfo(GpuInfo $GpuInfo) 设置节点Gpu信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeTypeResource extends AbstractModel
{
    /**
     * @var string 规格名称
     */
    public $NodeTypeName;

    /**
     * @var boolean 是否可售
     */
    public $Available;

    /**
     * @var NodeTypeInfo 规格信息
     */
    public $NodeTypeInfo;

    /**
     * @var boolean SSD盘是否可售
     */
    public $SsdAvailable;

    /**
     * @var DiskSizeRange SSD磁盘取值范围
     */
    public $SsdDiskSizeRange;

    /**
     * @var boolean SATA盘是否可售
     */
    public $SataAvailable;

    /**
     * @var DiskSizeRange SATA磁盘取值范围
     */
    public $SataDiskSizeRange;

    /**
     * @var string SSD机型售罄原因
     */
    public $SsdSoldOutReason;

    /**
     * @var string SATA机型售罄原因
     */
    public $SataSoldOutReason;

    /**
     * @var LocalDiskInfo 本地盘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDiskInfo;

    /**
     * @var DiskCountRange 云盘块数取值范围
     */
    public $DiskCountRange;

    /**
     * @var boolean HSSD盘是否可售
     */
    public $HSsdAvailable;

    /**
     * @var string HSSD机型售罄原因
     */
    public $HSsdSoldOutReason;

    /**
     * @var DiskSizeRange HSSD磁盘取值范围
     */
    public $HSsdDiskSizeRange;

    /**
     * @var boolean Throughput盘是否可售
     */
    public $ThroughputAvailable;

    /**
     * @var string Throughput机型售罄原因
     */
    public $ThroughputSoldOutReason;

    /**
     * @var DiskSizeRange Throughput磁盘取值范围
     */
    public $ThroughputDiskSizeRange;

    /**
     * @var boolean BigData盘是否可售
     */
    public $BigDataAvailable;

    /**
     * @var string BigData盘售罄原因
     */
    public $BigDataSoldOutReason;

    /**
     * @var DiskSizeRange BigData磁盘取值范围
     */
    public $BigDataDiskSizeRange;

    /**
     * @var boolean HighIO盘是否可售
     */
    public $HighIOAvailable;

    /**
     * @var string HighIO盘售罄原因
     */
    public $HighIOSoldOutReason;

    /**
     * @var DiskSizeRange HighIO磁盘取值范围
     */
    public $HighIODiskSizeRange;

    /**
     * @var boolean Bssd盘是否可售
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BssdAvailable;

    /**
     * @var string Bssd盘售罄原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BssdSoldOutReason;

    /**
     * @var DiskSizeRange Bssd盘取值范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BssdDiskSizeRange;

    /**
     * @var GpuInfo 节点Gpu信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuInfo;

    /**
     * @param string $NodeTypeName 规格名称
     * @param boolean $Available 是否可售
     * @param NodeTypeInfo $NodeTypeInfo 规格信息
     * @param boolean $SsdAvailable SSD盘是否可售
     * @param DiskSizeRange $SsdDiskSizeRange SSD磁盘取值范围
     * @param boolean $SataAvailable SATA盘是否可售
     * @param DiskSizeRange $SataDiskSizeRange SATA磁盘取值范围
     * @param string $SsdSoldOutReason SSD机型售罄原因
     * @param string $SataSoldOutReason SATA机型售罄原因
     * @param LocalDiskInfo $LocalDiskInfo 本地盘信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskCountRange $DiskCountRange 云盘块数取值范围
     * @param boolean $HSsdAvailable HSSD盘是否可售
     * @param string $HSsdSoldOutReason HSSD机型售罄原因
     * @param DiskSizeRange $HSsdDiskSizeRange HSSD磁盘取值范围
     * @param boolean $ThroughputAvailable Throughput盘是否可售
     * @param string $ThroughputSoldOutReason Throughput机型售罄原因
     * @param DiskSizeRange $ThroughputDiskSizeRange Throughput磁盘取值范围
     * @param boolean $BigDataAvailable BigData盘是否可售
     * @param string $BigDataSoldOutReason BigData盘售罄原因
     * @param DiskSizeRange $BigDataDiskSizeRange BigData磁盘取值范围
     * @param boolean $HighIOAvailable HighIO盘是否可售
     * @param string $HighIOSoldOutReason HighIO盘售罄原因
     * @param DiskSizeRange $HighIODiskSizeRange HighIO磁盘取值范围
     * @param boolean $BssdAvailable Bssd盘是否可售
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BssdSoldOutReason Bssd盘售罄原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskSizeRange $BssdDiskSizeRange Bssd盘取值范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param GpuInfo $GpuInfo 节点Gpu信息
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

        if (array_key_exists("GpuInfo",$param) and $param["GpuInfo"] !== null) {
            $this->GpuInfo = new GpuInfo();
            $this->GpuInfo->deserialize($param["GpuInfo"]);
        }
    }
}
