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
 * 容器运行时安全，访问控制系统策略的子策略信息
 *
 * @method string getRuleId() 获取子策略Id
 * @method void setRuleId(string $RuleId) 设置子策略Id
 * @method string getRuleMode() 获取策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method void setRuleMode(string $RuleMode) 设置策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
 * @method boolean getIsEnable() 获取子策略状态，true为开启，false为关闭
 * @method void setIsEnable(boolean $IsEnable) 设置子策略状态，true为开启，false为关闭
 * @method string getRuleType() 获取子策略检测的入侵行为类型
CHANGE_CRONTAB：篡改计划任务
CHANGE_SYS_BIN：篡改系统程序
CHANGE_USRCFG：篡改用户配置
 * @method void setRuleType(string $RuleType) 设置子策略检测的入侵行为类型
CHANGE_CRONTAB：篡改计划任务
CHANGE_SYS_BIN：篡改系统程序
CHANGE_USRCFG：篡改用户配置
 */
class AccessControlSystemChildRuleInfo extends AbstractModel
{
    /**
     * @var string 子策略Id
     */
    public $RuleId;

    /**
     * @var string 策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     */
    public $RuleMode;

    /**
     * @var boolean 子策略状态，true为开启，false为关闭
     */
    public $IsEnable;

    /**
     * @var string 子策略检测的入侵行为类型
CHANGE_CRONTAB：篡改计划任务
CHANGE_SYS_BIN：篡改系统程序
CHANGE_USRCFG：篡改用户配置
     */
    public $RuleType;

    /**
     * @param string $RuleId 子策略Id
     * @param string $RuleMode 策略模式,  RULE_MODE_RELEASE: 放行
   RULE_MODE_ALERT: 告警
   RULE_MODE_HOLDUP:拦截
     * @param boolean $IsEnable 子策略状态，true为开启，false为关闭
     * @param string $RuleType 子策略检测的入侵行为类型
CHANGE_CRONTAB：篡改计划任务
CHANGE_SYS_BIN：篡改系统程序
CHANGE_USRCFG：篡改用户配置
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

        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
