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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源规格描述信息
 *
 * @method string getName() 获取规格名称，例如“SCH1"
 * @method void setName(string $Name) 设置规格名称，例如“SCH1"
 * @method integer getCpu() 获取cpu核数
 * @method void setCpu(integer $Cpu) 设置cpu核数
 * @method integer getMem() 获取内存大小，单位G
 * @method void setMem(integer $Mem) 设置内存大小，单位G
 * @method string getType() 获取分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO
 * @method void setType(string $Type) 设置分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO
 * @method DiskSpec getSystemDisk() 获取系统盘描述信息
 * @method void setSystemDisk(DiskSpec $SystemDisk) 设置系统盘描述信息
 * @method DiskSpec getDataDisk() 获取数据盘描述信息
 * @method void setDataDisk(DiskSpec $DataDisk) 设置数据盘描述信息
 * @method integer getMaxNodeSize() 获取最大节点数目限制
 * @method void setMaxNodeSize(integer $MaxNodeSize) 设置最大节点数目限制
 * @method boolean getAvailable() 获取是否可用，false代表售罄
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailable(boolean $Available) 设置是否可用，false代表售罄
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComputeSpecDesc() 获取规格描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeSpecDesc(string $ComputeSpecDesc) 设置规格描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取规格名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置规格名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceQuota() 获取库存数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceQuota(integer $InstanceQuota) 设置库存数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceSpec extends AbstractModel
{
    /**
     * @var string 规格名称，例如“SCH1"
     */
    public $Name;

    /**
     * @var integer cpu核数
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位G
     */
    public $Mem;

    /**
     * @var string 分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO
     */
    public $Type;

    /**
     * @var DiskSpec 系统盘描述信息
     */
    public $SystemDisk;

    /**
     * @var DiskSpec 数据盘描述信息
     */
    public $DataDisk;

    /**
     * @var integer 最大节点数目限制
     */
    public $MaxNodeSize;

    /**
     * @var boolean 是否可用，false代表售罄
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Available;

    /**
     * @var string 规格描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeSpecDesc;

    /**
     * @var string 规格名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var integer 库存数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceQuota;

    /**
     * @param string $Name 规格名称，例如“SCH1"
     * @param integer $Cpu cpu核数
     * @param integer $Mem 内存大小，单位G
     * @param string $Type 分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO
     * @param DiskSpec $SystemDisk 系统盘描述信息
     * @param DiskSpec $DataDisk 数据盘描述信息
     * @param integer $MaxNodeSize 最大节点数目限制
     * @param boolean $Available 是否可用，false代表售罄
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComputeSpecDesc 规格描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 规格名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceQuota 库存数
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new DiskSpec();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = new DiskSpec();
            $this->DataDisk->deserialize($param["DataDisk"]);
        }

        if (array_key_exists("MaxNodeSize",$param) and $param["MaxNodeSize"] !== null) {
            $this->MaxNodeSize = $param["MaxNodeSize"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("ComputeSpecDesc",$param) and $param["ComputeSpecDesc"] !== null) {
            $this->ComputeSpecDesc = $param["ComputeSpecDesc"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("InstanceQuota",$param) and $param["InstanceQuota"] !== null) {
            $this->InstanceQuota = $param["InstanceQuota"];
        }
    }
}
