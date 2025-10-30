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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * function定义
 *
 * @method string getName() 获取function名称，只能包含a-z，A-Z，0-9，\_或-
 * @method void setName(string $Name) 设置function名称，只能包含a-z，A-Z，0-9，\_或-
 * @method string getParameters() 获取function参数，一般为json字符串
 * @method void setParameters(string $Parameters) 设置function参数，一般为json字符串
 * @method string getDescription() 获取function的简单描述
 * @method void setDescription(string $Description) 设置function的简单描述
 */
class ToolFunction extends AbstractModel
{
    /**
     * @var string function名称，只能包含a-z，A-Z，0-9，\_或-
     */
    public $Name;

    /**
     * @var string function参数，一般为json字符串
     */
    public $Parameters;

    /**
     * @var string function的简单描述
     */
    public $Description;

    /**
     * @param string $Name function名称，只能包含a-z，A-Z，0-9，\_或-
     * @param string $Parameters function参数，一般为json字符串
     * @param string $Description function的简单描述
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

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
