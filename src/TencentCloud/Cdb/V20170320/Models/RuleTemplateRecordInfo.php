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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则模板变更记录信息
 *
 * @method integer getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleTemplateInfo getModifyBeforeInfo() 获取修改前规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyBeforeInfo(RuleTemplateInfo $ModifyBeforeInfo) 设置修改前规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleTemplateInfo getModifyAfterInfo() 获取修改后规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyAfterInfo(RuleTemplateInfo $ModifyAfterInfo) 设置修改后规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAffectedInstances() 获取影响的实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedInstances(array $AffectedInstances) 设置影响的实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取操作人，账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置操作人，账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取变更的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置变更的时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleTemplateRecordInfo extends AbstractModel
{
    /**
     * @var integer 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var RuleTemplateInfo 修改前规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyBeforeInfo;

    /**
     * @var RuleTemplateInfo 修改后规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyAfterInfo;

    /**
     * @var array 影响的实例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedInstances;

    /**
     * @var string 操作人，账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 变更的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleTemplateInfo $ModifyBeforeInfo 修改前规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleTemplateInfo $ModifyAfterInfo 修改后规则模板的详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AffectedInstances 影响的实例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 操作人，账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 变更的时间。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ModifyBeforeInfo",$param) and $param["ModifyBeforeInfo"] !== null) {
            $this->ModifyBeforeInfo = new RuleTemplateInfo();
            $this->ModifyBeforeInfo->deserialize($param["ModifyBeforeInfo"]);
        }

        if (array_key_exists("ModifyAfterInfo",$param) and $param["ModifyAfterInfo"] !== null) {
            $this->ModifyAfterInfo = new RuleTemplateInfo();
            $this->ModifyAfterInfo->deserialize($param["ModifyAfterInfo"]);
        }

        if (array_key_exists("AffectedInstances",$param) and $param["AffectedInstances"] !== null) {
            $this->AffectedInstances = $param["AffectedInstances"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
