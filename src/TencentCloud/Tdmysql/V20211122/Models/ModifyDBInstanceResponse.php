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
 * ModifyDBInstance返回参数结构体
 *
 * @method integer getFlowId() 获取<p>异步任务ID，DryRun=false时返回。根据此ID可以调用查询任务接口获取任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(integer $FlowId) 设置<p>异步任务ID，DryRun=false时返回。根据此ID可以调用查询任务接口获取任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDealName() 获取<p>订单号，预付费场景下返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置<p>订单号，预付费场景下返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsInPlaceModification() 获取<p>是否原地变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInPlaceModification(boolean $IsInPlaceModification) 设置<p>是否原地变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMigrateModification() 获取<p>是否迁移变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMigrateModification(boolean $IsMigrateModification) 设置<p>是否迁移变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyPlan() 获取<p>变配计划描述，DryRun=true时返回，描述将执行的变配子流程编排</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyPlan(string $ModifyPlan) 设置<p>变配计划描述，DryRun=true时返回，描述将执行的变配子流程编排</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyDBInstanceResponse extends AbstractModel
{
    /**
     * @var integer <p>异步任务ID，DryRun=false时返回。根据此ID可以调用查询任务接口获取任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var string <p>订单号，预付费场景下返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @var boolean <p>是否原地变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInPlaceModification;

    /**
     * @var boolean <p>是否迁移变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMigrateModification;

    /**
     * @var string <p>变配计划描述，DryRun=true时返回，描述将执行的变配子流程编排</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyPlan;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $FlowId <p>异步任务ID，DryRun=false时返回。根据此ID可以调用查询任务接口获取任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DealName <p>订单号，预付费场景下返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsInPlaceModification <p>是否原地变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMigrateModification <p>是否迁移变配，DryRun=true时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyPlan <p>变配计划描述，DryRun=true时返回，描述将执行的变配子流程编排</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("IsInPlaceModification",$param) and $param["IsInPlaceModification"] !== null) {
            $this->IsInPlaceModification = $param["IsInPlaceModification"];
        }

        if (array_key_exists("IsMigrateModification",$param) and $param["IsMigrateModification"] !== null) {
            $this->IsMigrateModification = $param["IsMigrateModification"];
        }

        if (array_key_exists("ModifyPlan",$param) and $param["ModifyPlan"] !== null) {
            $this->ModifyPlan = $param["ModifyPlan"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
