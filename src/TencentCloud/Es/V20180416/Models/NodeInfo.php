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
 * 集群中一种节点类型（如热数据节点，冷数据节点，专用主节点等）的规格描述信息，包括节点类型，节点个数，节点规格，磁盘类型，磁盘大小等, Type不指定时默认为热数据节点；如果节点为master节点，则DiskType和DiskSize参数会被忽略（主节点无数据盘）
 *
 * @method integer getNodeNum() 获取<p>节点数量</p>
 * @method void setNodeNum(integer $NodeNum) 设置<p>节点数量</p>
 * @method string getNodeType() 获取<p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method void setNodeType(string $NodeType) 设置<p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method string getType() 获取<p>节点类型<li>hotData: 热数据节点</li></p><li>warmData: 冷数据节点</li><li>dedicatedMaster: 专用主节点</li>默认值为hotData
 * @method void setType(string $Type) 设置<p>节点类型<li>hotData: 热数据节点</li></p><li>warmData: 冷数据节点</li><li>dedicatedMaster: 专用主节点</li>默认值为hotData
 * @method string getDiskType() 获取<p>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD</p>
 * @method void setDiskType(string $DiskType) 设置<p>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD</p>
 * @method integer getDiskSize() 获取<p>节点磁盘容量（单位GB）</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>节点磁盘容量（单位GB）</p>
 * @method LocalDiskInfo getLocalDiskInfo() 获取<p>节点本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDiskInfo(LocalDiskInfo $LocalDiskInfo) 设置<p>节点本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskCount() 获取<p>节点磁盘块数</p>
 * @method void setDiskCount(integer $DiskCount) 设置<p>节点磁盘块数</p>
 * @method integer getDiskEncrypt() 获取<p>节点磁盘是否加密 0: 不加密，1: 加密；默认不加密</p>
 * @method void setDiskEncrypt(integer $DiskEncrypt) 设置<p>节点磁盘是否加密 0: 不加密，1: 加密；默认不加密</p>
 * @method string getKmsKeyId() 获取<p>自定义加密密钥id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>自定义加密密钥id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyName() 获取<p>自定义加密密钥name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyName(string $KmsKeyName) 设置<p>自定义加密密钥name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuNum() 获取<p>cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuNum(integer $CpuNum) 设置<p>cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取<p>内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置<p>内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskEnhance() 获取<p>硬盘额外性能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskEnhance(integer $DiskEnhance) 设置<p>硬盘额外性能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GpuInfo getGpuInfo() 获取<p>节点Gpu信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuInfo(GpuInfo $GpuInfo) 设置<p>节点Gpu信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var integer <p>节点数量</p>
     */
    public $NodeNum;

    /**
     * @var string <p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     */
    public $NodeType;

    /**
     * @var string <p>节点类型<li>hotData: 热数据节点</li></p><li>warmData: 冷数据节点</li><li>dedicatedMaster: 专用主节点</li>默认值为hotData
     */
    public $Type;

    /**
     * @var string <p>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD</p>
     */
    public $DiskType;

    /**
     * @var integer <p>节点磁盘容量（单位GB）</p>
     */
    public $DiskSize;

    /**
     * @var LocalDiskInfo <p>节点本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDiskInfo;

    /**
     * @var integer <p>节点磁盘块数</p>
     */
    public $DiskCount;

    /**
     * @var integer <p>节点磁盘是否加密 0: 不加密，1: 加密；默认不加密</p>
     */
    public $DiskEncrypt;

    /**
     * @var string <p>自定义加密密钥id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyId;

    /**
     * @var string <p>自定义加密密钥name</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyName;

    /**
     * @var integer <p>cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuNum;

    /**
     * @var integer <p>内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var integer <p>硬盘额外性能</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskEnhance;

    /**
     * @var GpuInfo <p>节点Gpu信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuInfo;

    /**
     * @param integer $NodeNum <p>节点数量</p>
     * @param string $NodeType <p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     * @param string $Type <p>节点类型<li>hotData: 热数据节点</li></p><li>warmData: 冷数据节点</li><li>dedicatedMaster: 专用主节点</li>默认值为hotData
     * @param string $DiskType <p>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD</p>
     * @param integer $DiskSize <p>节点磁盘容量（单位GB）</p>
     * @param LocalDiskInfo $LocalDiskInfo <p>节点本地盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskCount <p>节点磁盘块数</p>
     * @param integer $DiskEncrypt <p>节点磁盘是否加密 0: 不加密，1: 加密；默认不加密</p>
     * @param string $KmsKeyId <p>自定义加密密钥id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyName <p>自定义加密密钥name</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuNum <p>cpu数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize <p>内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskEnhance <p>硬盘额外性能</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GpuInfo $GpuInfo <p>节点Gpu信息</p>
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
        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("LocalDiskInfo",$param) and $param["LocalDiskInfo"] !== null) {
            $this->LocalDiskInfo = new LocalDiskInfo();
            $this->LocalDiskInfo->deserialize($param["LocalDiskInfo"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskEncrypt",$param) and $param["DiskEncrypt"] !== null) {
            $this->DiskEncrypt = $param["DiskEncrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("KmsKeyName",$param) and $param["KmsKeyName"] !== null) {
            $this->KmsKeyName = $param["KmsKeyName"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskEnhance",$param) and $param["DiskEnhance"] !== null) {
            $this->DiskEnhance = $param["DiskEnhance"];
        }

        if (array_key_exists("GpuInfo",$param) and $param["GpuInfo"] !== null) {
            $this->GpuInfo = new GpuInfo();
            $this->GpuInfo->deserialize($param["GpuInfo"]);
        }
    }
}
