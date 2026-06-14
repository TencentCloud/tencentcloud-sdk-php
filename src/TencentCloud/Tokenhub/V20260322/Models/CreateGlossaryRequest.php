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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlossary请求参数结构体
 *
 * @method string getName() 获取术语库名称。最大 50 字符。
 * @method void setName(string $Name) 设置术语库名称。最大 50 字符。
 * @method string getSource() 获取源语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
 * @method void setSource(string $Source) 设置源语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
 * @method string getTarget() 获取目标语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
 * @method void setTarget(string $Target) 设置目标语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
 * @method string getDescription() 获取术语库描述。最大 255 字符。
 * @method void setDescription(string $Description) 设置术语库描述。最大 255 字符。
 */
class CreateGlossaryRequest extends AbstractModel
{
    /**
     * @var string 术语库名称。最大 50 字符。
     */
    public $Name;

    /**
     * @var string 源语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
     */
    public $Source;

    /**
     * @var string 目标语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
     */
    public $Target;

    /**
     * @var string 术语库描述。最大 255 字符。
     */
    public $Description;

    /**
     * @param string $Name 术语库名称。最大 50 字符。
     * @param string $Source 源语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
     * @param string $Target 目标语言代码。最大 16 字符。例如：zh（中文）、en（英文）。
     * @param string $Description 术语库描述。最大 255 字符。
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
