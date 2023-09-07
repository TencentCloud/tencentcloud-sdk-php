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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩容队列配置概览。
 *
 * @method string getQueueName() 获取队列名称。
 * @method void setQueueName(string $QueueName) 设置队列名称。
 * @method integer getMinSize() 获取队列中弹性节点数量最小值。取值范围0～200。
 * @method void setMinSize(integer $MinSize) 设置队列中弹性节点数量最小值。取值范围0～200。
 * @method integer getMaxSize() 获取队列中弹性节点数量最大值。取值范围0～200。
 * @method void setMaxSize(integer $MaxSize) 设置队列中弹性节点数量最大值。取值范围0～200。
 * @method boolean getEnableAutoExpansion() 获取是否开启自动扩容。
 * @method void setEnableAutoExpansion(boolean $EnableAutoExpansion) 设置是否开启自动扩容。
 * @method boolean getEnableAutoShrink() 获取是否开启自动缩容。
 * @method void setEnableAutoShrink(boolean $EnableAutoShrink) 设置是否开启自动缩容。
 * @method array getExpansionNodeConfigs() 获取扩容节点配置信息。
 * @method void setExpansionNodeConfigs(array $ExpansionNodeConfigs) 设置扩容节点配置信息。
 * @method integer getDesiredIdleNodeCapacity() 获取队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredIdleNodeCapacity(integer $DesiredIdleNodeCapacity) 设置队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleOutRatio() 获取扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleOutRatio(integer $ScaleOutRatio) 设置扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleOutNodeThreshold() 获取比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleOutNodeThreshold(integer $ScaleOutNodeThreshold) 设置比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxNodesPerCycle() 获取每轮扩容最大节点个数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNodesPerCycle(integer $MaxNodesPerCycle) 设置每轮扩容最大节点个数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleUpMemRatio() 获取扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleUpMemRatio(integer $ScaleUpMemRatio) 设置扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueueConfigOverview extends AbstractModel
{
    /**
     * @var string 队列名称。
     */
    public $QueueName;

    /**
     * @var integer 队列中弹性节点数量最小值。取值范围0～200。
     */
    public $MinSize;

    /**
     * @var integer 队列中弹性节点数量最大值。取值范围0～200。
     */
    public $MaxSize;

    /**
     * @var boolean 是否开启自动扩容。
     */
    public $EnableAutoExpansion;

    /**
     * @var boolean 是否开启自动缩容。
     */
    public $EnableAutoShrink;

    /**
     * @var array 扩容节点配置信息。
     */
    public $ExpansionNodeConfigs;

    /**
     * @var integer 队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredIdleNodeCapacity;

    /**
     * @var integer 扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleOutRatio;

    /**
     * @var integer 比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleOutNodeThreshold;

    /**
     * @var integer 每轮扩容最大节点个数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNodesPerCycle;

    /**
     * @var integer 扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleUpMemRatio;

    /**
     * @param string $QueueName 队列名称。
     * @param integer $MinSize 队列中弹性节点数量最小值。取值范围0～200。
     * @param integer $MaxSize 队列中弹性节点数量最大值。取值范围0～200。
     * @param boolean $EnableAutoExpansion 是否开启自动扩容。
     * @param boolean $EnableAutoShrink 是否开启自动缩容。
     * @param array $ExpansionNodeConfigs 扩容节点配置信息。
     * @param integer $DesiredIdleNodeCapacity 队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleOutRatio 扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleOutNodeThreshold 比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxNodesPerCycle 每轮扩容最大节点个数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleUpMemRatio 扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("EnableAutoExpansion",$param) and $param["EnableAutoExpansion"] !== null) {
            $this->EnableAutoExpansion = $param["EnableAutoExpansion"];
        }

        if (array_key_exists("EnableAutoShrink",$param) and $param["EnableAutoShrink"] !== null) {
            $this->EnableAutoShrink = $param["EnableAutoShrink"];
        }

        if (array_key_exists("ExpansionNodeConfigs",$param) and $param["ExpansionNodeConfigs"] !== null) {
            $this->ExpansionNodeConfigs = [];
            foreach ($param["ExpansionNodeConfigs"] as $key => $value){
                $obj = new ExpansionNodeConfigOverview();
                $obj->deserialize($value);
                array_push($this->ExpansionNodeConfigs, $obj);
            }
        }

        if (array_key_exists("DesiredIdleNodeCapacity",$param) and $param["DesiredIdleNodeCapacity"] !== null) {
            $this->DesiredIdleNodeCapacity = $param["DesiredIdleNodeCapacity"];
        }

        if (array_key_exists("ScaleOutRatio",$param) and $param["ScaleOutRatio"] !== null) {
            $this->ScaleOutRatio = $param["ScaleOutRatio"];
        }

        if (array_key_exists("ScaleOutNodeThreshold",$param) and $param["ScaleOutNodeThreshold"] !== null) {
            $this->ScaleOutNodeThreshold = $param["ScaleOutNodeThreshold"];
        }

        if (array_key_exists("MaxNodesPerCycle",$param) and $param["MaxNodesPerCycle"] !== null) {
            $this->MaxNodesPerCycle = $param["MaxNodesPerCycle"];
        }

        if (array_key_exists("ScaleUpMemRatio",$param) and $param["ScaleUpMemRatio"] !== null) {
            $this->ScaleUpMemRatio = $param["ScaleUpMemRatio"];
        }
    }
}
