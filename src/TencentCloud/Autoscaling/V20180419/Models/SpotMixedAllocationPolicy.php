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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 竞价混合模式下，各计费类型实例的分配策略。包括按量计费实例和竞价计费实例。
 *
 * @method integer getBaseCapacity() 获取混合模式下，基础容量的大小，基础容量部分固定为按量计费实例。默认值 0，最大不可超过伸缩组的最大实例数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseCapacity(integer $BaseCapacity) 设置混合模式下，基础容量的大小，基础容量部分固定为按量计费实例。默认值 0，最大不可超过伸缩组的最大实例数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnDemandPercentageAboveBaseCapacity() 获取超出基础容量部分，按量计费实例所占的比例。取值范围 [0, 100]，0 代表超出基础容量的部分仅生产竞价实例，100 代表仅生产按量实例，默认值为 70。按百分比计算按量实例数时，向上取整。
比如，总期望实例数取 3，基础容量取 1，超基础部分按量百分比取 1，则最终按量 2 台（1 台来自基础容量，1 台按百分比向上取整得到），竞价 1台。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnDemandPercentageAboveBaseCapacity(integer $OnDemandPercentageAboveBaseCapacity) 设置超出基础容量部分，按量计费实例所占的比例。取值范围 [0, 100]，0 代表超出基础容量的部分仅生产竞价实例，100 代表仅生产按量实例，默认值为 70。按百分比计算按量实例数时，向上取整。
比如，总期望实例数取 3，基础容量取 1，超基础部分按量百分比取 1，则最终按量 2 台（1 台来自基础容量，1 台按百分比向上取整得到），竞价 1台。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpotAllocationStrategy() 获取混合模式下，竞价实例的分配策略。取值包括 COST_OPTIMIZED 和 CAPACITY_OPTIMIZED，默认取 COST_OPTIMIZED。
<br><li> COST_OPTIMIZED，成本优化策略。对于启动配置内的所有机型，按照各机型在各可用区的每核单价由小到大依次尝试。优先尝试购买每核单价最便宜的，如果购买失败则尝试购买次便宜的，以此类推。
<br><li> CAPACITY_OPTIMIZED，容量优化策略。对于启动配置内的所有机型，按照各机型在各可用区的库存情况由大到小依次尝试。优先尝试购买剩余库存最大的机型，这样可尽量降低竞价实例被动回收的发生概率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpotAllocationStrategy(string $SpotAllocationStrategy) 设置混合模式下，竞价实例的分配策略。取值包括 COST_OPTIMIZED 和 CAPACITY_OPTIMIZED，默认取 COST_OPTIMIZED。
<br><li> COST_OPTIMIZED，成本优化策略。对于启动配置内的所有机型，按照各机型在各可用区的每核单价由小到大依次尝试。优先尝试购买每核单价最便宜的，如果购买失败则尝试购买次便宜的，以此类推。
<br><li> CAPACITY_OPTIMIZED，容量优化策略。对于启动配置内的所有机型，按照各机型在各可用区的库存情况由大到小依次尝试。优先尝试购买剩余库存最大的机型，这样可尽量降低竞价实例被动回收的发生概率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCompensateWithBaseInstance() 获取按量实例替补功能。取值范围：
<br><li> TRUE，开启该功能，当所有竞价机型因库存不足等原因全部购买失败后，尝试购买按量实例。
<br><li> FALSE，不开启该功能，伸缩组在需要扩容竞价实例时仅尝试所配置的竞价机型。

默认取值： TRUE。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompensateWithBaseInstance(boolean $CompensateWithBaseInstance) 设置按量实例替补功能。取值范围：
<br><li> TRUE，开启该功能，当所有竞价机型因库存不足等原因全部购买失败后，尝试购买按量实例。
<br><li> FALSE，不开启该功能，伸缩组在需要扩容竞价实例时仅尝试所配置的竞价机型。

默认取值： TRUE。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpotMixedAllocationPolicy extends AbstractModel
{
    /**
     * @var integer 混合模式下，基础容量的大小，基础容量部分固定为按量计费实例。默认值 0，最大不可超过伸缩组的最大实例数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseCapacity;

    /**
     * @var integer 超出基础容量部分，按量计费实例所占的比例。取值范围 [0, 100]，0 代表超出基础容量的部分仅生产竞价实例，100 代表仅生产按量实例，默认值为 70。按百分比计算按量实例数时，向上取整。
比如，总期望实例数取 3，基础容量取 1，超基础部分按量百分比取 1，则最终按量 2 台（1 台来自基础容量，1 台按百分比向上取整得到），竞价 1台。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnDemandPercentageAboveBaseCapacity;

    /**
     * @var string 混合模式下，竞价实例的分配策略。取值包括 COST_OPTIMIZED 和 CAPACITY_OPTIMIZED，默认取 COST_OPTIMIZED。
<br><li> COST_OPTIMIZED，成本优化策略。对于启动配置内的所有机型，按照各机型在各可用区的每核单价由小到大依次尝试。优先尝试购买每核单价最便宜的，如果购买失败则尝试购买次便宜的，以此类推。
<br><li> CAPACITY_OPTIMIZED，容量优化策略。对于启动配置内的所有机型，按照各机型在各可用区的库存情况由大到小依次尝试。优先尝试购买剩余库存最大的机型，这样可尽量降低竞价实例被动回收的发生概率。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpotAllocationStrategy;

    /**
     * @var boolean 按量实例替补功能。取值范围：
<br><li> TRUE，开启该功能，当所有竞价机型因库存不足等原因全部购买失败后，尝试购买按量实例。
<br><li> FALSE，不开启该功能，伸缩组在需要扩容竞价实例时仅尝试所配置的竞价机型。

默认取值： TRUE。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompensateWithBaseInstance;

    /**
     * @param integer $BaseCapacity 混合模式下，基础容量的大小，基础容量部分固定为按量计费实例。默认值 0，最大不可超过伸缩组的最大实例数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OnDemandPercentageAboveBaseCapacity 超出基础容量部分，按量计费实例所占的比例。取值范围 [0, 100]，0 代表超出基础容量的部分仅生产竞价实例，100 代表仅生产按量实例，默认值为 70。按百分比计算按量实例数时，向上取整。
比如，总期望实例数取 3，基础容量取 1，超基础部分按量百分比取 1，则最终按量 2 台（1 台来自基础容量，1 台按百分比向上取整得到），竞价 1台。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpotAllocationStrategy 混合模式下，竞价实例的分配策略。取值包括 COST_OPTIMIZED 和 CAPACITY_OPTIMIZED，默认取 COST_OPTIMIZED。
<br><li> COST_OPTIMIZED，成本优化策略。对于启动配置内的所有机型，按照各机型在各可用区的每核单价由小到大依次尝试。优先尝试购买每核单价最便宜的，如果购买失败则尝试购买次便宜的，以此类推。
<br><li> CAPACITY_OPTIMIZED，容量优化策略。对于启动配置内的所有机型，按照各机型在各可用区的库存情况由大到小依次尝试。优先尝试购买剩余库存最大的机型，这样可尽量降低竞价实例被动回收的发生概率。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CompensateWithBaseInstance 按量实例替补功能。取值范围：
<br><li> TRUE，开启该功能，当所有竞价机型因库存不足等原因全部购买失败后，尝试购买按量实例。
<br><li> FALSE，不开启该功能，伸缩组在需要扩容竞价实例时仅尝试所配置的竞价机型。

默认取值： TRUE。
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
        if (array_key_exists("BaseCapacity",$param) and $param["BaseCapacity"] !== null) {
            $this->BaseCapacity = $param["BaseCapacity"];
        }

        if (array_key_exists("OnDemandPercentageAboveBaseCapacity",$param) and $param["OnDemandPercentageAboveBaseCapacity"] !== null) {
            $this->OnDemandPercentageAboveBaseCapacity = $param["OnDemandPercentageAboveBaseCapacity"];
        }

        if (array_key_exists("SpotAllocationStrategy",$param) and $param["SpotAllocationStrategy"] !== null) {
            $this->SpotAllocationStrategy = $param["SpotAllocationStrategy"];
        }

        if (array_key_exists("CompensateWithBaseInstance",$param) and $param["CompensateWithBaseInstance"] !== null) {
            $this->CompensateWithBaseInstance = $param["CompensateWithBaseInstance"];
        }
    }
}
