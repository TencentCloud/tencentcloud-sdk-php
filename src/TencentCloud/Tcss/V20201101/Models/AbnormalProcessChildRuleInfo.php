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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器运行时安全，子策略信息
 *
 * @method string getRuleMode() 获取<p>策略模式，   RULE_MODE_RELEASE: 放行<br>   RULE_MODE_ALERT: 告警<br>   RULE_MODE_HOLDUP:拦截</p>
 * @method void setRuleMode(string $RuleMode) 设置<p>策略模式，   RULE_MODE_RELEASE: 放行<br>   RULE_MODE_ALERT: 告警<br>   RULE_MODE_HOLDUP:拦截</p>
 * @method string getProcessPath() 获取<p>进程路径</p>
 * @method void setProcessPath(string $ProcessPath) 设置<p>进程路径</p>
 * @method string getRuleId() 获取<p>子策略id</p>
 * @method void setRuleId(string $RuleId) 设置<p>子策略id</p>
 * @method string getRuleLevel() 获取<p>威胁等级，HIGH:高，MIDDLE:中，LOW:低</p>
 * @method void setRuleLevel(string $RuleLevel) 设置<p>威胁等级，HIGH:高，MIDDLE:中，LOW:低</p>
 * @method string getCmdLine() 获取<p>命令行参数</p>
 * @method void setCmdLine(string $CmdLine) 设置<p>命令行参数</p>
 */
class AbnormalProcessChildRuleInfo extends AbstractModel
{
    /**
     * @var string <p>策略模式，   RULE_MODE_RELEASE: 放行<br>   RULE_MODE_ALERT: 告警<br>   RULE_MODE_HOLDUP:拦截</p>
     */
    public $RuleMode;

    /**
     * @var string <p>进程路径</p>
     */
    public $ProcessPath;

    /**
     * @var string <p>子策略id</p>
     */
    public $RuleId;

    /**
     * @var string <p>威胁等级，HIGH:高，MIDDLE:中，LOW:低</p>
     */
    public $RuleLevel;

    /**
     * @var string <p>命令行参数</p>
     */
    public $CmdLine;

    /**
     * @param string $RuleMode <p>策略模式，   RULE_MODE_RELEASE: 放行<br>   RULE_MODE_ALERT: 告警<br>   RULE_MODE_HOLDUP:拦截</p>
     * @param string $ProcessPath <p>进程路径</p>
     * @param string $RuleId <p>子策略id</p>
     * @param string $RuleLevel <p>威胁等级，HIGH:高，MIDDLE:中，LOW:低</p>
     * @param string $CmdLine <p>命令行参数</p>
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

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }
    }
}
