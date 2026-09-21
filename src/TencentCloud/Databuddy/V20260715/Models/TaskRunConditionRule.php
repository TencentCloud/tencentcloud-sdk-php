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
 * 任务运行条件规则
 *
 * @method string getUpstreamTaskId() 获取<p>上游任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamTaskId(string $UpstreamTaskId) 设置<p>上游任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamTaskName() 获取<p>上游任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamTaskName(string $UpstreamTaskName) 设置<p>上游任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowedStates() 获取<p>任务可运行条件<br>支持的状态值： - SUCCESS: 成功 - FAILED: 失败 - UPSTREAM_FAILED: 上游失败 - EXCLUDED: 排除运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowedStates(array $AllowedStates) 设置<p>任务可运行条件<br>支持的状态值： - SUCCESS: 成功 - FAILED: 失败 - UPSTREAM_FAILED: 上游失败 - EXCLUDED: 排除运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskRunConditionRule extends AbstractModel
{
    /**
     * @var string <p>上游任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamTaskId;

    /**
     * @var string <p>上游任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamTaskName;

    /**
     * @var array <p>任务可运行条件<br>支持的状态值： - SUCCESS: 成功 - FAILED: 失败 - UPSTREAM_FAILED: 上游失败 - EXCLUDED: 排除运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowedStates;

    /**
     * @param string $UpstreamTaskId <p>上游任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamTaskName <p>上游任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowedStates <p>任务可运行条件<br>支持的状态值： - SUCCESS: 成功 - FAILED: 失败 - UPSTREAM_FAILED: 上游失败 - EXCLUDED: 排除运行</p>
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
        if (array_key_exists("UpstreamTaskId",$param) and $param["UpstreamTaskId"] !== null) {
            $this->UpstreamTaskId = $param["UpstreamTaskId"];
        }

        if (array_key_exists("UpstreamTaskName",$param) and $param["UpstreamTaskName"] !== null) {
            $this->UpstreamTaskName = $param["UpstreamTaskName"];
        }

        if (array_key_exists("AllowedStates",$param) and $param["AllowedStates"] !== null) {
            $this->AllowedStates = $param["AllowedStates"];
        }
    }
}
