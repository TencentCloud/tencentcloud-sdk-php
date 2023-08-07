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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI识别结果
 *
 * @method string getTaskId() 获取AI 任务 ID
 * @method void setTaskId(string $TaskId) 设置AI 任务 ID
 * @method integer getAIResultCount() 获取在 BeginTime 和 EndTime 时间之内，有识别结果的 AI 调用次数（分页依据此数值）
 * @method void setAIResultCount(integer $AIResultCount) 设置在 BeginTime 和 EndTime 时间之内，有识别结果的 AI 调用次数（分页依据此数值）
 * @method AITaskResultInfo getAIResults() 获取AI 任务执行结果详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAIResults(AITaskResultInfo $AIResults) 设置AI 任务执行结果详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class AITaskResultData extends AbstractModel
{
    /**
     * @var string AI 任务 ID
     */
    public $TaskId;

    /**
     * @var integer 在 BeginTime 和 EndTime 时间之内，有识别结果的 AI 调用次数（分页依据此数值）
     */
    public $AIResultCount;

    /**
     * @var AITaskResultInfo AI 任务执行结果详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AIResults;

    /**
     * @param string $TaskId AI 任务 ID
     * @param integer $AIResultCount 在 BeginTime 和 EndTime 时间之内，有识别结果的 AI 调用次数（分页依据此数值）
     * @param AITaskResultInfo $AIResults AI 任务执行结果详情
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

        if (array_key_exists("AIResultCount",$param) and $param["AIResultCount"] !== null) {
            $this->AIResultCount = $param["AIResultCount"];
        }

        if (array_key_exists("AIResults",$param) and $param["AIResults"] !== null) {
            $this->AIResults = new AITaskResultInfo();
            $this->AIResults->deserialize($param["AIResults"]);
        }
    }
}
