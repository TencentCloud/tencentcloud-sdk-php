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
 * 异常进程系统策略的子策略信息
 *
 * @method string getRuleId() 获取子策略Id
 * @method void setRuleId(string $RuleId) 设置子策略Id
 * @method boolean getIsEnable() 获取子策略状态，true为开启，false为关闭
 * @method void setIsEnable(boolean $IsEnable) 设置子策略状态，true为开启，false为关闭
 * @method string getRuleMode() 获取策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method void setRuleMode(string $RuleMode) 设置策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method string getRuleType() 获取子策略检测的行为类型
PROXY_TOOL： 代理软件
TRANSFER_CONTROL：横向渗透
ATTACK_CMD： 恶意命令
REVERSE_SHELL：反弹shell
FILELESS：无文件程序执行
RISK_CMD：高危命令
ABNORMAL_CHILD_PROC: 敏感服务异常子进程启动
 * @method void setRuleType(string $RuleType) 设置子策略检测的行为类型
PROXY_TOOL： 代理软件
TRANSFER_CONTROL：横向渗透
ATTACK_CMD： 恶意命令
REVERSE_SHELL：反弹shell
FILELESS：无文件程序执行
RISK_CMD：高危命令
ABNORMAL_CHILD_PROC: 敏感服务异常子进程启动
 * @method string getRuleLevel() 获取威胁等级，HIGH:高，MIDDLE:中，LOW:低
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleLevel(string $RuleLevel) 设置威胁等级，HIGH:高，MIDDLE:中，LOW:低
注意：此字段可能返回 null，表示取不到有效值。
 */
class AbnormalProcessSystemChildRuleInfo extends AbstractModel
{
    /**
     * @var string 子策略Id
     */
    public $RuleId;

    /**
     * @var boolean 子策略状态，true为开启，false为关闭
     */
    public $IsEnable;

    /**
     * @var string 策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     */
    public $RuleMode;

    /**
     * @var string 子策略检测的行为类型
PROXY_TOOL： 代理软件
TRANSFER_CONTROL：横向渗透
ATTACK_CMD： 恶意命令
REVERSE_SHELL：反弹shell
FILELESS：无文件程序执行
RISK_CMD：高危命令
ABNORMAL_CHILD_PROC: 敏感服务异常子进程启动
     */
    public $RuleType;

    /**
     * @var string 威胁等级，HIGH:高，MIDDLE:中，LOW:低
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleLevel;

    /**
     * @param string $RuleId 子策略Id
     * @param boolean $IsEnable 子策略状态，true为开启，false为关闭
     * @param string $RuleMode 策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     * @param string $RuleType 子策略检测的行为类型
PROXY_TOOL： 代理软件
TRANSFER_CONTROL：横向渗透
ATTACK_CMD： 恶意命令
REVERSE_SHELL：反弹shell
FILELESS：无文件程序执行
RISK_CMD：高危命令
ABNORMAL_CHILD_PROC: 敏感服务异常子进程启动
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }
    }
}
