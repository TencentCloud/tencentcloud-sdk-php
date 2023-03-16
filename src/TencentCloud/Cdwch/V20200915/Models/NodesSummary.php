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
 * 节点角色描述信息
 *
 * @method string getSpec() 获取机型，如 S1
 * @method void setSpec(string $Spec) 设置机型，如 S1
 * @method integer getNodeSize() 获取节点数目
 * @method void setNodeSize(integer $NodeSize) 设置节点数目
 * @method integer getCore() 获取cpu核数，单位个
 * @method void setCore(integer $Core) 设置cpu核数，单位个
 * @method integer getMemory() 获取内存大小，单位G
 * @method void setMemory(integer $Memory) 设置内存大小，单位G
 * @method integer getDisk() 获取磁盘大小，单位G
 * @method void setDisk(integer $Disk) 设置磁盘大小，单位G
 * @method string getDiskType() 获取磁盘类型
 * @method void setDiskType(string $DiskType) 设置磁盘类型
 * @method string getDiskDesc() 获取磁盘描述
 * @method void setDiskDesc(string $DiskDesc) 设置磁盘描述
 * @method AttachCBSSpec getAttachCBSSpec() 获取挂载云盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachCBSSpec(AttachCBSSpec $AttachCBSSpec) 设置挂载云盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductType() 获取子产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductType(string $SubProductType) 设置子产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpecCore() 获取规格对应的核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecCore(integer $SpecCore) 设置规格对应的核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpecMemory() 获取规格对应的内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecMemory(integer $SpecMemory) 设置规格对应的内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskCount() 获取磁盘的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskCount(integer $DiskCount) 设置磁盘的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDiskSize() 获取磁盘的最大大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置磁盘的最大大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEncrypt() 获取是否为加密云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncrypt(integer $Encrypt) 设置是否为加密云盘
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodesSummary extends AbstractModel
{
    /**
     * @var string 机型，如 S1
     */
    public $Spec;

    /**
     * @var integer 节点数目
     */
    public $NodeSize;

    /**
     * @var integer cpu核数，单位个
     */
    public $Core;

    /**
     * @var integer 内存大小，单位G
     */
    public $Memory;

    /**
     * @var integer 磁盘大小，单位G
     */
    public $Disk;

    /**
     * @var string 磁盘类型
     */
    public $DiskType;

    /**
     * @var string 磁盘描述
     */
    public $DiskDesc;

    /**
     * @var AttachCBSSpec 挂载云盘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachCBSSpec;

    /**
     * @var string 子产品类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductType;

    /**
     * @var integer 规格对应的核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecCore;

    /**
     * @var integer 规格对应的内存大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecMemory;

    /**
     * @var integer 磁盘的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskCount;

    /**
     * @var integer 磁盘的最大大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDiskSize;

    /**
     * @var integer 是否为加密云盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encrypt;

    /**
     * @param string $Spec 机型，如 S1
     * @param integer $NodeSize 节点数目
     * @param integer $Core cpu核数，单位个
     * @param integer $Memory 内存大小，单位G
     * @param integer $Disk 磁盘大小，单位G
     * @param string $DiskType 磁盘类型
     * @param string $DiskDesc 磁盘描述
     * @param AttachCBSSpec $AttachCBSSpec 挂载云盘信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductType 子产品类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpecCore 规格对应的核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpecMemory 规格对应的内存大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskCount 磁盘的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDiskSize 磁盘的最大大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Encrypt 是否为加密云盘
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("NodeSize",$param) and $param["NodeSize"] !== null) {
            $this->NodeSize = $param["NodeSize"];
        }

        if (array_key_exists("Core",$param) and $param["Core"] !== null) {
            $this->Core = $param["Core"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }

        if (array_key_exists("AttachCBSSpec",$param) and $param["AttachCBSSpec"] !== null) {
            $this->AttachCBSSpec = new AttachCBSSpec();
            $this->AttachCBSSpec->deserialize($param["AttachCBSSpec"]);
        }

        if (array_key_exists("SubProductType",$param) and $param["SubProductType"] !== null) {
            $this->SubProductType = $param["SubProductType"];
        }

        if (array_key_exists("SpecCore",$param) and $param["SpecCore"] !== null) {
            $this->SpecCore = $param["SpecCore"];
        }

        if (array_key_exists("SpecMemory",$param) and $param["SpecMemory"] !== null) {
            $this->SpecMemory = $param["SpecMemory"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }
    }
}
