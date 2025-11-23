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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BOT-ID规则信息
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method boolean getStatus() 获取规则开关
 * @method void setStatus(boolean $Status) 设置规则开关
 * @method string getAction() 获取动作配置
 * @method void setAction(string $Action) 设置动作配置
 * @method string getBotId() 获取规则名称
 * @method void setBotId(string $BotId) 设置规则名称
 * @method string getRedirect() 获取重定向路径
 * @method void setRedirect(string $Redirect) 设置重定向路径
 */
class BotIdConfig extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var boolean 规则开关
     */
    public $Status;

    /**
     * @var string 动作配置
     */
    public $Action;

    /**
     * @var string 规则名称
     */
    public $BotId;

    /**
     * @var string 重定向路径
     */
    public $Redirect;

    /**
     * @param string $RuleId 规则ID
     * @param boolean $Status 规则开关
     * @param string $Action 动作配置
     * @param string $BotId 规则名称
     * @param string $Redirect 重定向路径
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }
    }
}
