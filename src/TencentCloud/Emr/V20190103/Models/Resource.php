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
 * @method string getSpec() 获取<p>节点规格描述，如CVM.SA2。</p>
 * @method void setSpec(string $Spec) 设置<p>节点规格描述，如CVM.SA2。</p>
 * @method integer getStorageType() 获取<p>取值范围:<br>&quot;LOCAL_SSD&quot;   3     //本地SSD<br>&quot;CLOUD_SSD&quot;   4     //云SSD<br>&quot;CLOUD_PREMIUM&quot;  5  //高效云盘<br>&quot;CLOUD_HSSD&quot;   6    //增强型SSD云硬盘<br>&quot;CLOUD_THROUGHPUT&quot; 11//吞吐型云硬盘<br>&quot;CLOUD_TSSD&quot;  12     //极速型SSD云硬盘<br>&quot;CLOUD_BSSD&quot;    13   //通用型SSD云硬盘<br>&quot;CLOUD_BIGDATA&quot; 14   //大数据型云硬盘<br>&quot;CLOUD_HIGHIO&quot;  15   //高IO型云硬盘 </p><p>该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口</p>
 * @method void setStorageType(integer $StorageType) 设置<p>取值范围:<br>&quot;LOCAL_SSD&quot;   3     //本地SSD<br>&quot;CLOUD_SSD&quot;   4     //云SSD<br>&quot;CLOUD_PREMIUM&quot;  5  //高效云盘<br>&quot;CLOUD_HSSD&quot;   6    //增强型SSD云硬盘<br>&quot;CLOUD_THROUGHPUT&quot; 11//吞吐型云硬盘<br>&quot;CLOUD_TSSD&quot;  12     //极速型SSD云硬盘<br>&quot;CLOUD_BSSD&quot;    13   //通用型SSD云硬盘<br>&quot;CLOUD_BIGDATA&quot; 14   //大数据型云硬盘<br>&quot;CLOUD_HIGHIO&quot;  15   //高IO型云硬盘 </p><p>该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口</p>
 * @method string getDiskType() 获取<p>数据盘类型 取值范围：</p><p>CLOUD_SSD：表示云SSD。</p><p>CLOUD_PREMIUM：表示高效云盘。</p><p>CLOUD_BASIC：表示云硬盘。</p><p>LOCAL_BASIC：表示本地盘。</p><p>LOCAL_SSD：表示本地SSD。</p><p>CLOUD_HSSD：表示增强型SSD云硬盘。</p><p>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</p><p>CLOUD_TSSD：表示极速型SSD云硬盘。</p><p>CLOUD_BIGDATA：表示大数据型云硬盘。</p><p>CLOUD_HIGHIO：表示高IO型云硬盘。</p><p>CLOUD_BSSD：表示通用型SSD云硬盘。</p><p>REMOTE_SSD：表示远端SSD盘。</p>
 * @method void setDiskType(string $DiskType) 设置<p>数据盘类型 取值范围：</p><p>CLOUD_SSD：表示云SSD。</p><p>CLOUD_PREMIUM：表示高效云盘。</p><p>CLOUD_BASIC：表示云硬盘。</p><p>LOCAL_BASIC：表示本地盘。</p><p>LOCAL_SSD：表示本地SSD。</p><p>CLOUD_HSSD：表示增强型SSD云硬盘。</p><p>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</p><p>CLOUD_TSSD：表示极速型SSD云硬盘。</p><p>CLOUD_BIGDATA：表示大数据型云硬盘。</p><p>CLOUD_HIGHIO：表示高IO型云硬盘。</p><p>CLOUD_BSSD：表示通用型SSD云硬盘。</p><p>REMOTE_SSD：表示远端SSD盘。</p>
 * @method integer getMemSize() 获取<p>内存容量,单位为M</p>
 * @method void setMemSize(integer $MemSize) 设置<p>内存容量,单位为M</p>
 * @method integer getCpu() 获取<p>CPU核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>CPU核数</p>
 * @method integer getDiskSize() 获取<p>数据盘容量</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>数据盘容量</p>
 * @method integer getRootSize() 获取<p>系统盘容量</p>
 * @method void setRootSize(integer $RootSize) 设置<p>系统盘容量</p>
 * @method array getMultiDisks() 获取<p>云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiDisks(array $MultiDisks) 设置<p>云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>需要绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>需要绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>规格类型，如S2.MEDIUM8</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>规格类型，如S2.MEDIUM8</p>
 * @method integer getLocalDiskNum() 获取<p>本地盘数量，该字段已废弃</p>
 * @method void setLocalDiskNum(integer $LocalDiskNum) 设置<p>本地盘数量，该字段已废弃</p>
 * @method integer getDiskNum() 获取<p>本地盘数量，如2</p>
 * @method void setDiskNum(integer $DiskNum) 设置<p>本地盘数量，如2</p>
 * @method string getGpuDesc() 获取<p>GPU信息</p>
 * @method void setGpuDesc(string $GpuDesc) 设置<p>GPU信息</p>
 * @method integer getPartitionNumber() 获取<p>分区置放群组分区数</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>分区置放群组分区数</p>
 */
class Resource extends AbstractModel
{
    /**
     * @var string <p>节点规格描述，如CVM.SA2。</p>
     */
    public $Spec;

    /**
     * @var integer <p>取值范围:<br>&quot;LOCAL_SSD&quot;   3     //本地SSD<br>&quot;CLOUD_SSD&quot;   4     //云SSD<br>&quot;CLOUD_PREMIUM&quot;  5  //高效云盘<br>&quot;CLOUD_HSSD&quot;   6    //增强型SSD云硬盘<br>&quot;CLOUD_THROUGHPUT&quot; 11//吞吐型云硬盘<br>&quot;CLOUD_TSSD&quot;  12     //极速型SSD云硬盘<br>&quot;CLOUD_BSSD&quot;    13   //通用型SSD云硬盘<br>&quot;CLOUD_BIGDATA&quot; 14   //大数据型云硬盘<br>&quot;CLOUD_HIGHIO&quot;  15   //高IO型云硬盘 </p><p>该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口</p>
     */
    public $StorageType;

    /**
     * @var string <p>数据盘类型 取值范围：</p><p>CLOUD_SSD：表示云SSD。</p><p>CLOUD_PREMIUM：表示高效云盘。</p><p>CLOUD_BASIC：表示云硬盘。</p><p>LOCAL_BASIC：表示本地盘。</p><p>LOCAL_SSD：表示本地SSD。</p><p>CLOUD_HSSD：表示增强型SSD云硬盘。</p><p>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</p><p>CLOUD_TSSD：表示极速型SSD云硬盘。</p><p>CLOUD_BIGDATA：表示大数据型云硬盘。</p><p>CLOUD_HIGHIO：表示高IO型云硬盘。</p><p>CLOUD_BSSD：表示通用型SSD云硬盘。</p><p>REMOTE_SSD：表示远端SSD盘。</p>
     */
    public $DiskType;

    /**
     * @var integer <p>内存容量,单位为M</p>
     */
    public $MemSize;

    /**
     * @var integer <p>CPU核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>数据盘容量</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>系统盘容量</p>
     */
    public $RootSize;

    /**
     * @var array <p>云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiDisks;

    /**
     * @var array <p>需要绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>规格类型，如S2.MEDIUM8</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>本地盘数量，该字段已废弃</p>
     */
    public $LocalDiskNum;

    /**
     * @var integer <p>本地盘数量，如2</p>
     */
    public $DiskNum;

    /**
     * @var string <p>GPU信息</p>
     */
    public $GpuDesc;

    /**
     * @var integer <p>分区置放群组分区数</p>
     */
    public $PartitionNumber;

    /**
     * @param string $Spec <p>节点规格描述，如CVM.SA2。</p>
     * @param integer $StorageType <p>取值范围:<br>&quot;LOCAL_SSD&quot;   3     //本地SSD<br>&quot;CLOUD_SSD&quot;   4     //云SSD<br>&quot;CLOUD_PREMIUM&quot;  5  //高效云盘<br>&quot;CLOUD_HSSD&quot;   6    //增强型SSD云硬盘<br>&quot;CLOUD_THROUGHPUT&quot; 11//吞吐型云硬盘<br>&quot;CLOUD_TSSD&quot;  12     //极速型SSD云硬盘<br>&quot;CLOUD_BSSD&quot;    13   //通用型SSD云硬盘<br>&quot;CLOUD_BIGDATA&quot; 14   //大数据型云硬盘<br>&quot;CLOUD_HIGHIO&quot;  15   //高IO型云硬盘 </p><p>该类型字段为无效字段，实际系统盘类型会根据数据盘类型和节点类型判断，如果节点支持所选的数据盘类型，系统盘类型会跟数据盘保持一致，建议使用CreateCluster接口</p>
     * @param string $DiskType <p>数据盘类型 取值范围：</p><p>CLOUD_SSD：表示云SSD。</p><p>CLOUD_PREMIUM：表示高效云盘。</p><p>CLOUD_BASIC：表示云硬盘。</p><p>LOCAL_BASIC：表示本地盘。</p><p>LOCAL_SSD：表示本地SSD。</p><p>CLOUD_HSSD：表示增强型SSD云硬盘。</p><p>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</p><p>CLOUD_TSSD：表示极速型SSD云硬盘。</p><p>CLOUD_BIGDATA：表示大数据型云硬盘。</p><p>CLOUD_HIGHIO：表示高IO型云硬盘。</p><p>CLOUD_BSSD：表示通用型SSD云硬盘。</p><p>REMOTE_SSD：表示远端SSD盘。</p>
     * @param integer $MemSize <p>内存容量,单位为M</p>
     * @param integer $Cpu <p>CPU核数</p>
     * @param integer $DiskSize <p>数据盘容量</p>
     * @param integer $RootSize <p>系统盘容量</p>
     * @param array $MultiDisks <p>云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>需要绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>规格类型，如S2.MEDIUM8</p>
     * @param integer $LocalDiskNum <p>本地盘数量，该字段已废弃</p>
     * @param integer $DiskNum <p>本地盘数量，如2</p>
     * @param string $GpuDesc <p>GPU信息</p>
     * @param integer $PartitionNumber <p>分区置放群组分区数</p>
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

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }
    }
}
