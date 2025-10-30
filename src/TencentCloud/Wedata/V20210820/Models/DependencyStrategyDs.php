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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 依赖配置策略
 *
 * @method string getPollingNullStrategy() 获取等待上游任务实例策略：EXECUTING（执行）；WAITING（等待）

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPollingNullStrategy(string $PollingNullStrategy) 设置等待上游任务实例策略：EXECUTING（执行）；WAITING（等待）

注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskDependencyExecutingStrategies() 获取仅当PollingNullStrategy为EXECUTING时才需要填本字段，List类型：NOT_EXIST（默认，在分钟依赖分钟/小时依赖小时的情况下，父实例不在下游实例调度时间范围内）；PARENT_EXPIRED（父实例失败）；PARENT_TIMEOUT（父实例超时）。以上场景满足任一条件即可通过该父任务实例依赖判断，除以上场景外均需等待父实例。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskDependencyExecutingStrategies(array $TaskDependencyExecutingStrategies) 设置仅当PollingNullStrategy为EXECUTING时才需要填本字段，List类型：NOT_EXIST（默认，在分钟依赖分钟/小时依赖小时的情况下，父实例不在下游实例调度时间范围内）；PARENT_EXPIRED（父实例失败）；PARENT_TIMEOUT（父实例超时）。以上场景满足任一条件即可通过该父任务实例依赖判断，除以上场景外均需等待父实例。

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskDependencyExecutingTimeoutValue() 获取仅当TaskDependencyExecutingStrategies中包含PARENT_TIMEOUT时才需要填本字段，下游任务依赖父实例执行超时时间，单位：分钟。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskDependencyExecutingTimeoutValue(integer $TaskDependencyExecutingTimeoutValue) 设置仅当TaskDependencyExecutingStrategies中包含PARENT_TIMEOUT时才需要填本字段，下游任务依赖父实例执行超时时间，单位：分钟。

注意：此字段可能返回 null，表示取不到有效值。
 */
class DependencyStrategyDs extends AbstractModel
{
    /**
     * @var string 等待上游任务实例策略：EXECUTING（执行）；WAITING（等待）

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PollingNullStrategy;

    /**
     * @var array 仅当PollingNullStrategy为EXECUTING时才需要填本字段，List类型：NOT_EXIST（默认，在分钟依赖分钟/小时依赖小时的情况下，父实例不在下游实例调度时间范围内）；PARENT_EXPIRED（父实例失败）；PARENT_TIMEOUT（父实例超时）。以上场景满足任一条件即可通过该父任务实例依赖判断，除以上场景外均需等待父实例。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskDependencyExecutingStrategies;

    /**
     * @var integer 仅当TaskDependencyExecutingStrategies中包含PARENT_TIMEOUT时才需要填本字段，下游任务依赖父实例执行超时时间，单位：分钟。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskDependencyExecutingTimeoutValue;

    /**
     * @param string $PollingNullStrategy 等待上游任务实例策略：EXECUTING（执行）；WAITING（等待）

注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskDependencyExecutingStrategies 仅当PollingNullStrategy为EXECUTING时才需要填本字段，List类型：NOT_EXIST（默认，在分钟依赖分钟/小时依赖小时的情况下，父实例不在下游实例调度时间范围内）；PARENT_EXPIRED（父实例失败）；PARENT_TIMEOUT（父实例超时）。以上场景满足任一条件即可通过该父任务实例依赖判断，除以上场景外均需等待父实例。

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskDependencyExecutingTimeoutValue 仅当TaskDependencyExecutingStrategies中包含PARENT_TIMEOUT时才需要填本字段，下游任务依赖父实例执行超时时间，单位：分钟。

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
        if (array_key_exists("PollingNullStrategy",$param) and $param["PollingNullStrategy"] !== null) {
            $this->PollingNullStrategy = $param["PollingNullStrategy"];
        }

        if (array_key_exists("TaskDependencyExecutingStrategies",$param) and $param["TaskDependencyExecutingStrategies"] !== null) {
            $this->TaskDependencyExecutingStrategies = $param["TaskDependencyExecutingStrategies"];
        }

        if (array_key_exists("TaskDependencyExecutingTimeoutValue",$param) and $param["TaskDependencyExecutingTimeoutValue"] !== null) {
            $this->TaskDependencyExecutingTimeoutValue = $param["TaskDependencyExecutingTimeoutValue"];
        }
    }
}
