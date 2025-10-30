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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源详情
 *
 * @method string getSpec() 获取节点规格描述，如CVM.SA2。
 * @method void setSpec(string $Spec) 设置节点规格描述，如CVM.SA2。
 * @method integer getStorageType() 获取取值范围:
"LOCAL_SSD"   3     //本地SSD 
"CLOUD_SSD"   4     //云SSD 
"CLOUD_PREMIUM"  5  //高效云盘
"CLOUD_HSSD"   6    //增强型SSD云硬盘 
"CLOUD_THROUGHPUT" 11//吞吐型云硬盘 
"CLOUD_TSSD"  12     //极速型SSD云硬盘 
"CLOUD_BSSD"    13   //通用型SSD云硬盘 
"CLOUD_BIGDATA" 14   //大数据型云硬盘
"CLOUD_HIGHIO"  15   //高IO型云硬盘 

该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口
 * @method void setStorageType(integer $StorageType) 设置取值范围:
"LOCAL_SSD"   3     //本地SSD 
"CLOUD_SSD"   4     //云SSD 
"CLOUD_PREMIUM"  5  //高效云盘
"CLOUD_HSSD"   6    //增强型SSD云硬盘 
"CLOUD_THROUGHPUT" 11//吞吐型云硬盘 
"CLOUD_TSSD"  12     //极速型SSD云硬盘 
"CLOUD_BSSD"    13   //通用型SSD云硬盘 
"CLOUD_BIGDATA" 14   //大数据型云硬盘
"CLOUD_HIGHIO"  15   //高IO型云硬盘 

该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口
 * @method string getDiskType() 获取数据盘类型 取值范围：

CLOUD_SSD：表示云SSD。

CLOUD_PREMIUM：表示高效云盘。

CLOUD_BASIC：表示云硬盘。

LOCAL_BASIC：表示本地盘。

LOCAL_SSD：表示本地SSD。

CLOUD_HSSD：表示增强型SSD云硬盘。

CLOUD_THROUGHPUT：表示吞吐型云硬盘。

CLOUD_TSSD：表示极速型SSD云硬盘。

CLOUD_BIGDATA：表示大数据型云硬盘。

CLOUD_HIGHIO：表示高IO型云硬盘。

CLOUD_BSSD：表示通用型SSD云硬盘。

REMOTE_SSD：表示远端SSD盘。
 * @method void setDiskType(string $DiskType) 设置数据盘类型 取值范围：

CLOUD_SSD：表示云SSD。

CLOUD_PREMIUM：表示高效云盘。

CLOUD_BASIC：表示云硬盘。

LOCAL_BASIC：表示本地盘。

LOCAL_SSD：表示本地SSD。

CLOUD_HSSD：表示增强型SSD云硬盘。

CLOUD_THROUGHPUT：表示吞吐型云硬盘。

CLOUD_TSSD：表示极速型SSD云硬盘。

CLOUD_BIGDATA：表示大数据型云硬盘。

CLOUD_HIGHIO：表示高IO型云硬盘。

CLOUD_BSSD：表示通用型SSD云硬盘。

REMOTE_SSD：表示远端SSD盘。
 * @method integer getMemSize() 获取内存容量,单位为M
 * @method void setMemSize(integer $MemSize) 设置内存容量,单位为M
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method integer getDiskSize() 获取数据盘容量
 * @method void setDiskSize(integer $DiskSize) 设置数据盘容量
 * @method integer getRootSize() 获取系统盘容量
 * @method void setRootSize(integer $RootSize) 设置系统盘容量
 * @method array getMultiDisks() 获取云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiDisks(array $MultiDisks) 设置云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取规格类型，如S2.MEDIUM8
 * @method void setInstanceType(string $InstanceType) 设置规格类型，如S2.MEDIUM8
 * @method integer getLocalDiskNum() 获取本地盘数量，该字段已废弃
 * @method void setLocalDiskNum(integer $LocalDiskNum) 设置本地盘数量，该字段已废弃
 * @method integer getDiskNum() 获取本地盘数量，如2
 * @method void setDiskNum(integer $DiskNum) 设置本地盘数量，如2
 * @method string getGpuDesc() 获取GPU信息
 * @method void setGpuDesc(string $GpuDesc) 设置GPU信息
 */
class Resource extends AbstractModel
{
    /**
     * @var string 节点规格描述，如CVM.SA2。
     */
    public $Spec;

    /**
     * @var integer 取值范围:
"LOCAL_SSD"   3     //本地SSD 
"CLOUD_SSD"   4     //云SSD 
"CLOUD_PREMIUM"  5  //高效云盘
"CLOUD_HSSD"   6    //增强型SSD云硬盘 
"CLOUD_THROUGHPUT" 11//吞吐型云硬盘 
"CLOUD_TSSD"  12     //极速型SSD云硬盘 
"CLOUD_BSSD"    13   //通用型SSD云硬盘 
"CLOUD_BIGDATA" 14   //大数据型云硬盘
"CLOUD_HIGHIO"  15   //高IO型云硬盘 

该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口
     */
    public $StorageType;

    /**
     * @var string 数据盘类型 取值范围：

CLOUD_SSD：表示云SSD。

CLOUD_PREMIUM：表示高效云盘。

CLOUD_BASIC：表示云硬盘。

LOCAL_BASIC：表示本地盘。

LOCAL_SSD：表示本地SSD。

CLOUD_HSSD：表示增强型SSD云硬盘。

CLOUD_THROUGHPUT：表示吞吐型云硬盘。

CLOUD_TSSD：表示极速型SSD云硬盘。

CLOUD_BIGDATA：表示大数据型云硬盘。

CLOUD_HIGHIO：表示高IO型云硬盘。

CLOUD_BSSD：表示通用型SSD云硬盘。

REMOTE_SSD：表示远端SSD盘。
     */
    public $DiskType;

    /**
     * @var integer 内存容量,单位为M
     */
    public $MemSize;

    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var integer 数据盘容量
     */
    public $DiskSize;

    /**
     * @var integer 系统盘容量
     */
    public $RootSize;

    /**
     * @var array 云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiDisks;

    /**
     * @var array 需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 规格类型，如S2.MEDIUM8
     */
    public $InstanceType;

    /**
     * @var integer 本地盘数量，该字段已废弃
     */
    public $LocalDiskNum;

    /**
     * @var integer 本地盘数量，如2
     */
    public $DiskNum;

    /**
     * @var string GPU信息
     */
    public $GpuDesc;

    /**
     * @param string $Spec 节点规格描述，如CVM.SA2。
     * @param integer $StorageType 取值范围:
"LOCAL_SSD"   3     //本地SSD 
"CLOUD_SSD"   4     //云SSD 
"CLOUD_PREMIUM"  5  //高效云盘
"CLOUD_HSSD"   6    //增强型SSD云硬盘 
"CLOUD_THROUGHPUT" 11//吞吐型云硬盘 
"CLOUD_TSSD"  12     //极速型SSD云硬盘 
"CLOUD_BSSD"    13   //通用型SSD云硬盘 
"CLOUD_BIGDATA" 14   //大数据型云硬盘
"CLOUD_HIGHIO"  15   //高IO型云硬盘 

该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口
     * @param string $DiskType 数据盘类型 取值范围：

CLOUD_SSD：表示云SSD。

CLOUD_PREMIUM：表示高效云盘。

CLOUD_BASIC：表示云硬盘。

LOCAL_BASIC：表示本地盘。

LOCAL_SSD：表示本地SSD。

CLOUD_HSSD：表示增强型SSD云硬盘。

CLOUD_THROUGHPUT：表示吞吐型云硬盘。

CLOUD_TSSD：表示极速型SSD云硬盘。

CLOUD_BIGDATA：表示大数据型云硬盘。

CLOUD_HIGHIO：表示高IO型云硬盘。

CLOUD_BSSD：表示通用型SSD云硬盘。

REMOTE_SSD：表示远端SSD盘。
     * @param integer $MemSize 内存容量,单位为M
     * @param integer $Cpu CPU核数
     * @param integer $DiskSize 数据盘容量
     * @param integer $RootSize 系统盘容量
     * @param array $MultiDisks 云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 规格类型，如S2.MEDIUM8
     * @param integer $LocalDiskNum 本地盘数量，该字段已废弃
     * @param integer $DiskNum 本地盘数量，如2
     * @param string $GpuDesc GPU信息
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("MultiDisks",$param) and $param["MultiDisks"] !== null) {
            $this->MultiDisks = [];
            foreach ($param["MultiDisks"] as $key => $value){
                $obj = new MultiDisk();
                $obj->deserialize($value);
                array_push($this->MultiDisks, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LocalDiskNum",$param) and $param["LocalDiskNum"] !== null) {
            $this->LocalDiskNum = $param["LocalDiskNum"];
        }

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }

        if (array_key_exists("GpuDesc",$param) and $param["GpuDesc"] !== null) {
            $this->GpuDesc = $param["GpuDesc"];
        }
    }
}
