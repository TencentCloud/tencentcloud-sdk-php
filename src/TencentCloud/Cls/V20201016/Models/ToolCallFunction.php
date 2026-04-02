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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 具体的Tool Call Function调用
 *
 * @method string getName() 获取<p>Function名称</p>
 * @method void setName(string $Name) 设置<p>Function名称</p>
 * @method string getArguments() 获取<p>Function参数，一般为json字符串</p>
 * @method void setArguments(string $Arguments) 设置<p>Function参数，一般为json字符串</p>
 */
class ToolCallFunction extends AbstractModel
{
    /**
     * @var string <p>Function名称</p>
     */
    public $Name;

    /**
     * @var string <p>Function参数，一般为json字符串</p>
     */
    public $Arguments;

    /**
     * @param string $Name <p>Function名称</p>
     * @param string $Arguments <p>Function参数，一般为json字符串</p>
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
