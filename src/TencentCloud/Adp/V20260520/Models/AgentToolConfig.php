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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 工具入参
 *
 * @method AgentToolBasicConfig getConfig() 获取<p>工具配置</p>
 * @method void setConfig(AgentToolBasicConfig $Config) 设置<p>工具配置</p>
 */
class AgentToolConfig extends AbstractModel
{
    /**
     * @var AgentToolBasicConfig <p>工具配置</p>
     */
    public $Config;

    /**
     * @param AgentToolBasicConfig $Config <p>工具配置</p>
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AgentToolBasicConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
