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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警策略触发任务
 *
 * @method string getType() 获取<p>触发任务类型 AS=弹性伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>触发任务类型 AS=弹性伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskConfig() 获取<p>用 json 表示配置信息 {&quot;Key1&quot;:&quot;Value1&quot;,&quot;Key2&quot;:&quot;Value2&quot;}</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskConfig(string $TaskConfig) 设置<p>用 json 表示配置信息 {&quot;Key1&quot;:&quot;Value1&quot;,&quot;Key2&quot;:&quot;Value2&quot;}</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmPolicyTriggerTask extends AbstractModel
{
    /**
     * @var string <p>触发任务类型 AS=弹性伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>用 json 表示配置信息 {&quot;Key1&quot;:&quot;Value1&quot;,&quot;Key2&quot;:&quot;Value2&quot;}</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskConfig;

    /**
     * @param string $Type <p>触发任务类型 AS=弹性伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskConfig <p>用 json 表示配置信息 {&quot;Key1&quot;:&quot;Value1&quot;,&quot;Key2&quot;:&quot;Value2&quot;}</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskConfig",$param) and $param["TaskConfig"] !== null) {
            $this->TaskConfig = $param["TaskConfig"];
        }
    }
}
