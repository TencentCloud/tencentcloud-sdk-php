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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Server模板环境变量
 *
 * @method string getKey() 获取MCP Server模板的环境变量键
 * @method void setKey(string $Key) 设置MCP Server模板的环境变量键
 * @method string getValue() 获取MCP Server模板的环境变量值
 * @method void setValue(string $Value) 设置MCP Server模板的环境变量值
 */
class McpServerTemplateEnv extends AbstractModel
{
    /**
     * @var string MCP Server模板的环境变量键
     */
    public $Key;

    /**
     * @var string MCP Server模板的环境变量值
     */
    public $Value;

    /**
     * @param string $Key MCP Server模板的环境变量键
     * @param string $Value MCP Server模板的环境变量值
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
