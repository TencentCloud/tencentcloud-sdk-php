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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务规则
 *
 * @method string getRuleType() 获取触发规则类型, Cron/Repeat
 * @method void setRuleType(string $RuleType) 设置触发规则类型, Cron/Repeat
 * @method string getExpression() 获取Cron类型规则，cron表达式。
 * @method void setExpression(string $Expression) 设置Cron类型规则，cron表达式。
 * @method integer getRepeatInterval() 获取时间间隔， 单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepeatInterval(integer $RepeatInterval) 设置时间间隔， 单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskRule extends AbstractModel
{
    /**
     * @var string 触发规则类型, Cron/Repeat
     */
    public $RuleType;

    /**
     * @var string Cron类型规则，cron表达式。
     */
    public $Expression;

    /**
     * @var integer 时间间隔， 单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepeatInterval;

    /**
     * @param string $RuleType 触发规则类型, Cron/Repeat
     * @param string $Expression Cron类型规则，cron表达式。
     * @param integer $RepeatInterval 时间间隔， 单位毫秒
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }

        if (array_key_exists("RepeatInterval",$param) and $param["RepeatInterval"] !== null) {
            $this->RepeatInterval = $param["RepeatInterval"];
        }
    }
}
