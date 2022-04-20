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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器运行时安全，子策略信息
 *
 * @method string getRuleMode() 获取策略模式，   RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method void setRuleMode(string $RuleMode) 设置策略模式，   RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getRuleId() 获取子策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置子策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleLevel() 获取威胁等级，HIGH:高，MIDDLE:中，LOW:低
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleLevel(string $RuleLevel) 设置威胁等级，HIGH:高，MIDDLE:中，LOW:低
注意：此字段可能返回 null，表示取不到有效值。
 */
class AbnormalProcessChildRuleInfo extends AbstractModel
{
    /**
     * @var string 策略模式，   RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     */
    public $RuleMode;

    /**
     * @var string 进程路径
     */
    public $ProcessPath;

    /**
     * @var string 子策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 威胁等级，HIGH:高，MIDDLE:中，LOW:低
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleLevel;

    /**
     * @param string $RuleMode 策略模式，   RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     * @param string $ProcessPath 进程路径
     * @param string $RuleId 子策略id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleLevel 威胁等级，HIGH:高，MIDDLE:中，LOW:低
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
        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }
    }
}
