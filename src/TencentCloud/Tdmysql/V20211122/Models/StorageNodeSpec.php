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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储节点规格
 *
 * @method string getSpecCode() 获取<p>规格码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecCode(string $SpecCode) 设置<p>规格码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageNodeCpu() 获取<p>存储节点CPU核数</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) 设置<p>存储节点CPU核数</p>
 * @method integer getStorageNodeMem() 获取<p>存储节点内存大小</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) 设置<p>存储节点内存大小</p>
 * @method integer getStorageNodeMaxNum() 获取<p>存储节点最大数量</p>
 * @method void setStorageNodeMaxNum(integer $StorageNodeMaxNum) 设置<p>存储节点最大数量</p>
 * @method integer getStorageNodeMaxDisk() 获取<p>存储节点磁盘大小上限</p>
 * @method void setStorageNodeMaxDisk(integer $StorageNodeMaxDisk) 设置<p>存储节点磁盘大小上限</p>
 * @method integer getStorageNodeMinNum() 获取<p>存储节点最小数量</p>
 * @method void setStorageNodeMinNum(integer $StorageNodeMinNum) 设置<p>存储节点最小数量</p>
 * @method integer getStorageNodeMinDisk() 获取<p>存储节点磁盘大小下限</p>
 * @method void setStorageNodeMinDisk(integer $StorageNodeMinDisk) 设置<p>存储节点磁盘大小下限</p>
 * @method string getStorageType() 获取<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageNodeDefaultDisk() 获取<p>存储节点默认磁盘大小，用于前端展示</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageNodeDefaultDisk(integer $StorageNodeDefaultDisk) 设置<p>存储节点默认磁盘大小，用于前端展示</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceMode() 获取<p>规格支持计费模式列表</p>
 * @method void setInstanceMode(array $InstanceMode) 设置<p>规格支持计费模式列表</p>
 * @method string getDiskTypeCategory() 获取<p>磁盘类型CLOUD_DISK：云盘LOCAL_DISK：本地盘</p>
 * @method void setDiskTypeCategory(string $DiskTypeCategory) 设置<p>磁盘类型CLOUD_DISK：云盘LOCAL_DISK：本地盘</p>
 */
class StorageNodeSpec extends AbstractModel
{
    /**
     * @var string <p>规格码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecCode;

    /**
     * @var integer <p>存储节点CPU核数</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>存储节点内存大小</p>
     */
    public $StorageNodeMem;

    /**
     * @var integer <p>存储节点最大数量</p>
     */
    public $StorageNodeMaxNum;

    /**
     * @var integer <p>存储节点磁盘大小上限</p>
     */
    public $StorageNodeMaxDisk;

    /**
     * @var integer <p>存储节点最小数量</p>
     */
    public $StorageNodeMinNum;

    /**
     * @var integer <p>存储节点磁盘大小下限</p>
     */
    public $StorageNodeMinDisk;

    /**
     * @var string <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var integer <p>存储节点默认磁盘大小，用于前端展示</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageNodeDefaultDisk;

    /**
     * @var array <p>规格支持计费模式列表</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>磁盘类型CLOUD_DISK：云盘LOCAL_DISK：本地盘</p>
     */
    public $DiskTypeCategory;

    /**
     * @param string $SpecCode <p>规格码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageNodeCpu <p>存储节点CPU核数</p>
     * @param integer $StorageNodeMem <p>存储节点内存大小</p>
     * @param integer $StorageNodeMaxNum <p>存储节点最大数量</p>
     * @param integer $StorageNodeMaxDisk <p>存储节点磁盘大小上限</p>
     * @param integer $StorageNodeMinNum <p>存储节点最小数量</p>
     * @param integer $StorageNodeMinDisk <p>存储节点磁盘大小下限</p>
     * @param string $StorageType <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageNodeDefaultDisk <p>存储节点默认磁盘大小，用于前端展示</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceMode <p>规格支持计费模式列表</p>
     * @param string $DiskTypeCategory <p>磁盘类型CLOUD_DISK：云盘LOCAL_DISK：本地盘</p>
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("StorageNodeMaxNum",$param) and $param["StorageNodeMaxNum"] !== null) {
            $this->StorageNodeMaxNum = $param["StorageNodeMaxNum"];
        }

        if (array_key_exists("StorageNodeMaxDisk",$param) and $param["StorageNodeMaxDisk"] !== null) {
            $this->StorageNodeMaxDisk = $param["StorageNodeMaxDisk"];
        }

        if (array_key_exists("StorageNodeMinNum",$param) and $param["StorageNodeMinNum"] !== null) {
            $this->StorageNodeMinNum = $param["StorageNodeMinNum"];
        }

        if (array_key_exists("StorageNodeMinDisk",$param) and $param["StorageNodeMinDisk"] !== null) {
            $this->StorageNodeMinDisk = $param["StorageNodeMinDisk"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageNodeDefaultDisk",$param) and $param["StorageNodeDefaultDisk"] !== null) {
            $this->StorageNodeDefaultDisk = $param["StorageNodeDefaultDisk"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("DiskTypeCategory",$param) and $param["DiskTypeCategory"] !== null) {
            $this->DiskTypeCategory = $param["DiskTypeCategory"];
        }
    }
}
