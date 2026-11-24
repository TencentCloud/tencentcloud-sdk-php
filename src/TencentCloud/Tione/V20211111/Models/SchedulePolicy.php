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
 * 任务调度策略
 *
 * @method string getPriorityClass() 获取<p>任务优先级，取值 p0~p9，p0 最高、p9 最低</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriorityClass(string $PriorityClass) 设置<p>任务优先级，取值 p0~p9，p0 最高、p9 最低</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SchedulePolicy extends AbstractModel
{
    /**
     * @var string <p>任务优先级，取值 p0~p9，p0 最高、p9 最低</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriorityClass;

    /**
     * @param string $PriorityClass <p>任务优先级，取值 p0~p9，p0 最高、p9 最低</p>
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
        if (array_key_exists("PriorityClass",$param) and $param["PriorityClass"] !== null) {
            $this->PriorityClass = $param["PriorityClass"];
        }
    }
}
