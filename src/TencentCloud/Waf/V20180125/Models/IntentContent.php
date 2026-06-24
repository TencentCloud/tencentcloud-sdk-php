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
 * 大模型意图检测的请求内容
 *
 * @method string getAgentTrace() 获取<p>agent的轨迹内容，参考用例</p>
 * @method void setAgentTrace(string $AgentTrace) 设置<p>agent的轨迹内容，参考用例</p>
 */
class IntentContent extends AbstractModel
{
    /**
     * @var string <p>agent的轨迹内容，参考用例</p>
     */
    public $AgentTrace;

    /**
     * @param string $AgentTrace <p>agent的轨迹内容，参考用例</p>
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
        if (array_key_exists("AgentTrace",$param) and $param["AgentTrace"] !== null) {
            $this->AgentTrace = $param["AgentTrace"];
        }
    }
}
