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
 * tool_call 场景检测结果
 *
 * @method string getRuleName() 获取<p>命中规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>命中规则名称</p>
 * @method string getAction() 获取<p>规则动作</p>
 * @method void setAction(string $Action) 设置<p>规则动作</p>
 * @method string getSeverity() 获取<p>风险等级</p><p>枚举值：</p><ul><li>critical： 严重</li><li>high： 高危    </li><li>medium： 中危    </li><li>low： 低危</li></ul>
 * @method void setSeverity(string $Severity) 设置<p>风险等级</p><p>枚举值：</p><ul><li>critical： 严重</li><li>high： 高危    </li><li>medium： 中危    </li><li>low： 低危</li></ul>
 */
class ToolCallResult extends AbstractModel
{
    /**
     * @var string <p>命中规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>规则动作</p>
     */
    public $Action;

    /**
     * @var string <p>风险等级</p><p>枚举值：</p><ul><li>critical： 严重</li><li>high： 高危    </li><li>medium： 中危    </li><li>low： 低危</li></ul>
     */
    public $Severity;

    /**
     * @param string $RuleName <p>命中规则名称</p>
     * @param string $Action <p>规则动作</p>
     * @param string $Severity <p>风险等级</p><p>枚举值：</p><ul><li>critical： 严重</li><li>high： 高危    </li><li>medium： 中危    </li><li>low： 低危</li></ul>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }
    }
}
