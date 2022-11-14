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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则执行结果导出结果
 *
 * @method integer getRuleExecId() 获取规则执行id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleExecId(integer $RuleExecId) 设置规则执行id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExportTasks() 获取导出任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExportTasks(array $ExportTasks) 设置导出任务列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleExecExportResult extends AbstractModel
{
    /**
     * @var integer 规则执行id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleExecId;

    /**
     * @var array 导出任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExportTasks;

    /**
     * @param integer $RuleExecId 规则执行id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExportTasks 导出任务列表
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
        if (array_key_exists("RuleExecId",$param) and $param["RuleExecId"] !== null) {
            $this->RuleExecId = $param["RuleExecId"];
        }

        if (array_key_exists("ExportTasks",$param) and $param["ExportTasks"] !== null) {
            $this->ExportTasks = [];
            foreach ($param["ExportTasks"] as $key => $value){
                $obj = new ExportTaskInfo();
                $obj->deserialize($value);
                array_push($this->ExportTasks, $obj);
            }
        }
    }
}
