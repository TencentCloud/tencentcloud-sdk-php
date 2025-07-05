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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务流程信息
 *
 * @method string getTaskFlowId() 获取任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFlowId(string $TaskFlowId) 设置任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFlowName() 获取任务流程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFlowName(string $TaskFlowName) 设置任务流程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryRewrite() 获取Query 重写结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryRewrite(string $QueryRewrite) 设置Query 重写结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHitIntent() 获取命中意图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitIntent(string $HitIntent) 设置命中意图
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取任务流程回复类型
0: 任务流回复
1: 任务流静默
2: 任务流拉回话术
3: 任务流自定义回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置任务流程回复类型
0: 任务流回复
1: 任务流静默
2: 任务流拉回话术
3: 任务流自定义回复
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskFlowInfo extends AbstractModel
{
    /**
     * @var string 任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFlowId;

    /**
     * @var string 任务流程名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFlowName;

    /**
     * @var string Query 重写结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryRewrite;

    /**
     * @var string 命中意图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitIntent;

    /**
     * @var integer 任务流程回复类型
0: 任务流回复
1: 任务流静默
2: 任务流拉回话术
3: 任务流自定义回复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $TaskFlowId 任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFlowName 任务流程名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryRewrite Query 重写结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HitIntent 命中意图
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 任务流程回复类型
0: 任务流回复
1: 任务流静默
2: 任务流拉回话术
3: 任务流自定义回复
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
        if (array_key_exists("TaskFlowId",$param) and $param["TaskFlowId"] !== null) {
            $this->TaskFlowId = $param["TaskFlowId"];
        }

        if (array_key_exists("TaskFlowName",$param) and $param["TaskFlowName"] !== null) {
            $this->TaskFlowName = $param["TaskFlowName"];
        }

        if (array_key_exists("QueryRewrite",$param) and $param["QueryRewrite"] !== null) {
            $this->QueryRewrite = $param["QueryRewrite"];
        }

        if (array_key_exists("HitIntent",$param) and $param["HitIntent"] !== null) {
            $this->HitIntent = $param["HitIntent"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
