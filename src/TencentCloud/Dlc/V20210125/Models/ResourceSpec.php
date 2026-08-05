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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源规格
 *
 * @method string getResourceType() 获取<p>资源包类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源包类型</p>
 * @method string getInstanceType() 获取<p>机型，例如X40/T20，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置<p>机型，例如X40/T20，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingItem() 获取<p>四层计费项</p><p>枚举值：</p><ul><li>sv_dlc_standard_cu_standard_cu： 标准型cpu，最小单位32</li><li>sv_dlc_high_memory_cu_high_memory_cu： 高内存型cpu，最小单位32</li><li>sv_dlc_gn7_gn75xlarge80： T4，最小单位1</li><li>sv_dlc_gn10xp_gn10xp2xlarge40： V100，最小单位1</li></ul><p>若您想要了解更多的计费规格和产品细节，欢迎联系我们。</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>四层计费项</p><p>枚举值：</p><ul><li>sv_dlc_standard_cu_standard_cu： 标准型cpu，最小单位32</li><li>sv_dlc_high_memory_cu_high_memory_cu： 高内存型cpu，最小单位32</li><li>sv_dlc_gn7_gn75xlarge80： T4，最小单位1</li><li>sv_dlc_gn10xp_gn10xp2xlarge40： V100，最小单位1</li></ul><p>若您想要了解更多的计费规格和产品细节，欢迎联系我们。</p>
 * @method string getSpecDesc() 获取<p>规格描述</p>
 * @method void setSpecDesc(string $SpecDesc) 设置<p>规格描述</p>
 * @method string getSpec() 获取<p>规格，格式为 {gpu}:{cpu}:{mem}:{vram}</p>
 * @method void setSpec(string $Spec) 设置<p>规格，格式为 {gpu}:{cpu}:{mem}:{vram}</p>
 * @method string getGpuType() 获取<p>GPU类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置<p>GPU类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxCardPerNode() 获取<p>单个物理节点上该计费项对应的最大 GPU 卡数，CPU / HM_CPU 恒为 0</p>
 * @method void setMaxCardPerNode(integer $MaxCardPerNode) 设置<p>单个物理节点上该计费项对应的最大 GPU 卡数，CPU / HM_CPU 恒为 0</p>
 */
class ResourceSpec extends AbstractModel
{
    /**
     * @var string <p>资源包类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>机型，例如X40/T20，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string <p>四层计费项</p><p>枚举值：</p><ul><li>sv_dlc_standard_cu_standard_cu： 标准型cpu，最小单位32</li><li>sv_dlc_high_memory_cu_high_memory_cu： 高内存型cpu，最小单位32</li><li>sv_dlc_gn7_gn75xlarge80： T4，最小单位1</li><li>sv_dlc_gn10xp_gn10xp2xlarge40： V100，最小单位1</li></ul><p>若您想要了解更多的计费规格和产品细节，欢迎联系我们。</p>
     */
    public $BillingItem;

    /**
     * @var string <p>规格描述</p>
     */
    public $SpecDesc;

    /**
     * @var string <p>规格，格式为 {gpu}:{cpu}:{mem}:{vram}</p>
     */
    public $Spec;

    /**
     * @var string <p>GPU类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var integer <p>单个物理节点上该计费项对应的最大 GPU 卡数，CPU / HM_CPU 恒为 0</p>
     */
    public $MaxCardPerNode;

    /**
     * @param string $ResourceType <p>资源包类型</p>
     * @param string $InstanceType <p>机型，例如X40/T20，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingItem <p>四层计费项</p><p>枚举值：</p><ul><li>sv_dlc_standard_cu_standard_cu： 标准型cpu，最小单位32</li><li>sv_dlc_high_memory_cu_high_memory_cu： 高内存型cpu，最小单位32</li><li>sv_dlc_gn7_gn75xlarge80： T4，最小单位1</li><li>sv_dlc_gn10xp_gn10xp2xlarge40： V100，最小单位1</li></ul><p>若您想要了解更多的计费规格和产品细节，欢迎联系我们。</p>
     * @param string $SpecDesc <p>规格描述</p>
     * @param string $Spec <p>规格，格式为 {gpu}:{cpu}:{mem}:{vram}</p>
     * @param string $GpuType <p>GPU类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxCardPerNode <p>单个物理节点上该计费项对应的最大 GPU 卡数，CPU / HM_CPU 恒为 0</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("SpecDesc",$param) and $param["SpecDesc"] !== null) {
            $this->SpecDesc = $param["SpecDesc"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("MaxCardPerNode",$param) and $param["MaxCardPerNode"] !== null) {
            $this->MaxCardPerNode = $param["MaxCardPerNode"];
        }
    }
}
