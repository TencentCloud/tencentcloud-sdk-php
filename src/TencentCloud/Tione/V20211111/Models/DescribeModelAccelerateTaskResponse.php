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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelAccelerateTask返回参数结构体
 *
 * @method ModelAccelerateTask getModelAccelerateTask() 获取模型加速任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAccelerateTask(ModelAccelerateTask $ModelAccelerateTask) 设置模型加速任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModelAccRuntimeInSecond() 获取模型加速时长，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAccRuntimeInSecond(integer $ModelAccRuntimeInSecond) 设置模型加速时长，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelAccStartTime() 获取模型加速任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAccStartTime(string $ModelAccStartTime) 设置模型加速任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelAccEndTime() 获取模型加速任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAccEndTime(string $ModelAccEndTime) 设置模型加速任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModelAccelerateTaskResponse extends AbstractModel
{
    /**
     * @var ModelAccelerateTask 模型加速任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAccelerateTask;

    /**
     * @var integer 模型加速时长，单位s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAccRuntimeInSecond;

    /**
     * @var string 模型加速任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAccStartTime;

    /**
     * @var string 模型加速任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAccEndTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ModelAccelerateTask $ModelAccelerateTask 模型加速任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModelAccRuntimeInSecond 模型加速时长，单位s
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelAccStartTime 模型加速任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelAccEndTime 模型加速任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ModelAccelerateTask",$param) and $param["ModelAccelerateTask"] !== null) {
            $this->ModelAccelerateTask = new ModelAccelerateTask();
            $this->ModelAccelerateTask->deserialize($param["ModelAccelerateTask"]);
        }

        if (array_key_exists("ModelAccRuntimeInSecond",$param) and $param["ModelAccRuntimeInSecond"] !== null) {
            $this->ModelAccRuntimeInSecond = $param["ModelAccRuntimeInSecond"];
        }

        if (array_key_exists("ModelAccStartTime",$param) and $param["ModelAccStartTime"] !== null) {
            $this->ModelAccStartTime = $param["ModelAccStartTime"];
        }

        if (array_key_exists("ModelAccEndTime",$param) and $param["ModelAccEndTime"] !== null) {
            $this->ModelAccEndTime = $param["ModelAccEndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
