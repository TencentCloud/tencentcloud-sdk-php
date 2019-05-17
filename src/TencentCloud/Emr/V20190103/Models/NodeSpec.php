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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getMemory() 获取内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCPUCores() 获取CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPUCores(integer $CPUCores) 设置CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolume() 获取数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolume(integer $Volume) 设置数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskType() 获取磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpec() 获取节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(string $Spec) 设置节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRootDiskVolume() 获取系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootDiskVolume(integer $RootDiskVolume) 设置系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageType() 获取存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(integer $StorageType) 设置存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultiDisks() 获取多云盘参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiDisks(array $MultiDisks) 设置多云盘参数
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *节点描述
 */
class NodeSpec extends AbstractModel
{
    /**
     * @var integer 内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPUCores;

    /**
     * @var integer 数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Volume;

    /**
     * @var string 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var string 节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @var integer 系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootDiskVolume;

    /**
     * @var integer 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var string 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var array 多云盘参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiDisks;
    /**
     * @param integer $Memory 内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CPUCores CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Volume 数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Spec 节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RootDiskVolume 系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageType 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultiDisks 多云盘参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CPUCores",$param) and $param["CPUCores"] !== null) {
            $this->CPUCores = $param["CPUCores"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("RootDiskVolume",$param) and $param["RootDiskVolume"] !== null) {
            $this->RootDiskVolume = $param["RootDiskVolume"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("MultiDisks",$param) and $param["MultiDisks"] !== null) {
            $this->MultiDisks = [];
            foreach ($param["MultiDisks"] as $key => $value){
                $obj = new MultiDisk();
                $obj->deserialize($value);
                array_push($this->MultiDisks, $obj);
            }
        }
    }
}
