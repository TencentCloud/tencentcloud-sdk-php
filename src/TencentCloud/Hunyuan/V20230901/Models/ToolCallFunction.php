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
 * 具体的function调用
 *
 * @method string getName() 获取function名称
 * @method void setName(string $Name) 设置function名称
 * @method string getArguments() 获取function参数，一般为json字符串
 * @method void setArguments(string $Arguments) 设置function参数，一般为json字符串
 */
class ToolCallFunction extends AbstractModel
{
    /**
     * @var string function名称
     */
    public $Name;

    /**
     * @var string function参数，一般为json字符串
     */
    public $Arguments;

    /**
     * @param string $Name function名称
     * @param string $Arguments function参数，一般为json字符串
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

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }
    }
}
