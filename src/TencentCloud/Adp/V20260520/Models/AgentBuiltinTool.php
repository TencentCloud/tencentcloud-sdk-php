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
 * Agent 内置工具详情
 *
 * @method AgentBuiltinToolConfig getConfig() 获取<p>内置工具基础配置</p>
 * @method void setConfig(AgentBuiltinToolConfig $Config) 设置<p>内置工具基础配置</p>
 * @method string getDisplayName() 获取<p>工具展示名称</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>工具展示名称</p>
 * @method string getDescription() 获取<p>工具描述</p>
 * @method void setDescription(string $Description) 设置<p>工具描述</p>
 * @method integer getBillingType() 获取<p>计费标识</p><p>枚举值：</p><ul><li>0： 免费</li><li>1： 限时免费</li><li>2： 官方收费</li></ul>
 * @method void setBillingType(integer $BillingType) 设置<p>计费标识</p><p>枚举值：</p><ul><li>0： 免费</li><li>1： 限时免费</li><li>2： 官方收费</li></ul>
 */
class AgentBuiltinTool extends AbstractModel
{
    /**
     * @var AgentBuiltinToolConfig <p>内置工具基础配置</p>
     */
    public $Config;

    /**
     * @var string <p>工具展示名称</p>
     */
    public $DisplayName;

    /**
     * @var string <p>工具描述</p>
     */
    public $Description;

    /**
     * @var integer <p>计费标识</p><p>枚举值：</p><ul><li>0： 免费</li><li>1： 限时免费</li><li>2： 官方收费</li></ul>
     */
    public $BillingType;

    /**
     * @param AgentBuiltinToolConfig $Config <p>内置工具基础配置</p>
     * @param string $DisplayName <p>工具展示名称</p>
     * @param string $Description <p>工具描述</p>
     * @param integer $BillingType <p>计费标识</p><p>枚举值：</p><ul><li>0： 免费</li><li>1： 限时免费</li><li>2： 官方收费</li></ul>
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
            $this->Config = new AgentBuiltinToolConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }
    }
}
