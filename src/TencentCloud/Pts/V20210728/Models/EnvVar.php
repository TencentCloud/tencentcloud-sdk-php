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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境变量
 *
 * @method string getName() 获取变量引用键，建议为 C_IDENTIFIER 全大写风格
 * @method void setName(string $Name) 设置变量引用键，建议为 C_IDENTIFIER 全大写风格
 * @method string getType() 获取默认 NORMAL，支持 NORMAL、PASSWORD 类型
 * @method void setType(string $Type) 设置默认 NORMAL，支持 NORMAL、PASSWORD 类型
 * @method string getValue() 获取变量引用值
 * @method void setValue(string $Value) 设置变量引用值
 * @method string getDescription() 获取描述内容
 * @method void setDescription(string $Description) 设置描述内容
 */
class EnvVar extends AbstractModel
{
    /**
     * @var string 变量引用键，建议为 C_IDENTIFIER 全大写风格
     */
    public $Name;

    /**
     * @var string 默认 NORMAL，支持 NORMAL、PASSWORD 类型
     */
    public $Type;

    /**
     * @var string 变量引用值
     */
    public $Value;

    /**
     * @var string 描述内容
     */
    public $Description;

    /**
     * @param string $Name 变量引用键，建议为 C_IDENTIFIER 全大写风格
     * @param string $Type 默认 NORMAL，支持 NORMAL、PASSWORD 类型
     * @param string $Value 变量引用值
     * @param string $Description 描述内容
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
