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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能路由资源规格（整个智能路由实例共享，Gateway/Scheduler 两个组件使用同一套资源池）。对应推理服务 CreateModelServiceRequest 顶层的 ChargeType/Zone/QueueId 等字段语义。
 *
 * @method string getChargeType() 获取<p>付费模式：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）。不传则默认 POSTPAID_BY_HOUR</p>
 * @method void setChargeType(string $ChargeType) 设置<p>付费模式：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）。不传则默认 POSTPAID_BY_HOUR</p>
 * @method string getResourceGroupId() 获取<p>预付费资源组 ID（ChargeType=PREPAID 时必填）</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>预付费资源组 ID（ChargeType=PREPAID 时必填）</p>
 * @method string getResourceGroupName() 获取<p>预付费资源组名称（output only，ChargeType=PREPAID 时有值，查询时回显）</p>
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>预付费资源组名称（output only，ChargeType=PREPAID 时有值，查询时回显）</p>
 * @method string getZone() 获取<p>可用区（如 ap-guangzhou-3），公有云场景用于指定机器来源</p>
 * @method void setZone(string $Zone) 设置<p>可用区（如 ap-guangzhou-3），公有云场景用于指定机器来源</p>
 * @method string getQueueId() 获取<p>资源队列 ID（内网版使用，标识任务所属的调度队列）</p>
 * @method void setQueueId(string $QueueId) 设置<p>资源队列 ID（内网版使用，标识任务所属的调度队列）</p>
 * @method integer getPriority() 获取<p>服务的优先级，可选范围 [0,9]，默认 0（内网版/私有化使用）</p>
 * @method void setPriority(integer $Priority) 设置<p>服务的优先级，可选范围 [0,9]，默认 0（内网版/私有化使用）</p>
 * @method ResourceSupplyAttribute getResourceSupplyAttribute() 获取<p>资源供应属性（潮汐/竞价等供应模式），公有云场景用于指定机器来源类型。仅区分供应来源，计费/部署/伸缩仍按后付费处理（ChargeType 恒为 POSTPAID_BY_HOUR）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceSupplyAttribute(ResourceSupplyAttribute $ResourceSupplyAttribute) 设置<p>资源供应属性（潮汐/竞价等供应模式），公有云场景用于指定机器来源类型。仅区分供应来源，计费/部署/伸缩仍按后付费处理（ChargeType 恒为 POSTPAID_BY_HOUR）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartRouterResourceSpec extends AbstractModel
{
    /**
     * @var string <p>付费模式：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）。不传则默认 POSTPAID_BY_HOUR</p>
     */
    public $ChargeType;

    /**
     * @var string <p>预付费资源组 ID（ChargeType=PREPAID 时必填）</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>预付费资源组名称（output only，ChargeType=PREPAID 时有值，查询时回显）</p>
     */
    public $ResourceGroupName;

    /**
     * @var string <p>可用区（如 ap-guangzhou-3），公有云场景用于指定机器来源</p>
     */
    public $Zone;

    /**
     * @var string <p>资源队列 ID（内网版使用，标识任务所属的调度队列）</p>
     */
    public $QueueId;

    /**
     * @var integer <p>服务的优先级，可选范围 [0,9]，默认 0（内网版/私有化使用）</p>
     */
    public $Priority;

    /**
     * @var ResourceSupplyAttribute <p>资源供应属性（潮汐/竞价等供应模式），公有云场景用于指定机器来源类型。仅区分供应来源，计费/部署/伸缩仍按后付费处理（ChargeType 恒为 POSTPAID_BY_HOUR）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceSupplyAttribute;

    /**
     * @param string $ChargeType <p>付费模式：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）。不传则默认 POSTPAID_BY_HOUR</p>
     * @param string $ResourceGroupId <p>预付费资源组 ID（ChargeType=PREPAID 时必填）</p>
     * @param string $ResourceGroupName <p>预付费资源组名称（output only，ChargeType=PREPAID 时有值，查询时回显）</p>
     * @param string $Zone <p>可用区（如 ap-guangzhou-3），公有云场景用于指定机器来源</p>
     * @param string $QueueId <p>资源队列 ID（内网版使用，标识任务所属的调度队列）</p>
     * @param integer $Priority <p>服务的优先级，可选范围 [0,9]，默认 0（内网版/私有化使用）</p>
     * @param ResourceSupplyAttribute $ResourceSupplyAttribute <p>资源供应属性（潮汐/竞价等供应模式），公有云场景用于指定机器来源类型。仅区分供应来源，计费/部署/伸缩仍按后付费处理（ChargeType 恒为 POSTPAID_BY_HOUR）</p>
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("ResourceSupplyAttribute",$param) and $param["ResourceSupplyAttribute"] !== null) {
            $this->ResourceSupplyAttribute = new ResourceSupplyAttribute();
            $this->ResourceSupplyAttribute->deserialize($param["ResourceSupplyAttribute"]);
        }
    }
}
