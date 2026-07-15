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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IoT工具配置列表
 *
 * @method string getName() 获取工具名称，同时作为IoT ActionId
 * @method void setName(string $Name) 设置工具名称，同时作为IoT ActionId
 * @method string getDescription() 获取工具描述，用于模型判断何时调用
 * @method void setDescription(string $Description) 设置工具描述，用于模型判断何时调用
 * @method string getParameters() 获取工具参数JSON Schema，JSON对象字符串，必须为type=object
 * @method void setParameters(string $Parameters) 设置工具参数JSON Schema，JSON对象字符串，必须为type=object
 * @method array getRequired() 获取必填参数名列表，必须存在于Parameters.properties中
 * @method void setRequired(array $Required) 设置必填参数名列表，必须存在于Parameters.properties中
 */
class TalkIOTTool extends AbstractModel
{
    /**
     * @var string 工具名称，同时作为IoT ActionId
     */
    public $Name;

    /**
     * @var string 工具描述，用于模型判断何时调用
     */
    public $Description;

    /**
     * @var string 工具参数JSON Schema，JSON对象字符串，必须为type=object
     */
    public $Parameters;

    /**
     * @var array 必填参数名列表，必须存在于Parameters.properties中
     */
    public $Required;

    /**
     * @param string $Name 工具名称，同时作为IoT ActionId
     * @param string $Description 工具描述，用于模型判断何时调用
     * @param string $Parameters 工具参数JSON Schema，JSON对象字符串，必须为type=object
     * @param array $Required 必填参数名列表，必须存在于Parameters.properties中
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }
    }
}
