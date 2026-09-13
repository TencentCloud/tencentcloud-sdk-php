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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内嵌工作流任务运行列表选项（仅限 FOR_EACH 任务使用）
 *
 * @method integer getPageNumber() 获取<p>分页页码，从 1 开始。非必填，默认 1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码，从 1 开始。非必填，默认 1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取<p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRunStates() 获取<p>迭代运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 InnerWorkflowTaskRunIteration.RunState 字段返回值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunStates(array $RunStates) 设置<p>迭代运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 InnerWorkflowTaskRunIteration.RunState 字段返回值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InnerWorkflowTaskRunListOption extends AbstractModel
{
    /**
     * @var integer <p>分页页码，从 1 开始。非必填，默认 1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var array <p>迭代运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 InnerWorkflowTaskRunIteration.RunState 字段返回值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunStates;

    /**
     * @param integer $PageNumber <p>分页页码，从 1 开始。非必填，默认 1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize <p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RunStates <p>迭代运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 InnerWorkflowTaskRunIteration.RunState 字段返回值。</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("RunStates",$param) and $param["RunStates"] !== null) {
            $this->RunStates = $param["RunStates"];
        }
    }
}
