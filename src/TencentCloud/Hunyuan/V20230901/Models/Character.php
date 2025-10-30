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
 * 人物描述
 *
 * @method string getName() 获取人物名称
 * @method void setName(string $Name) 设置人物名称
 * @method string getSystemPrompt() 获取人物对应SystemPrompt
 * @method void setSystemPrompt(string $SystemPrompt) 设置人物对应SystemPrompt
 */
class Character extends AbstractModel
{
    /**
     * @var string 人物名称
     */
    public $Name;

    /**
     * @var string 人物对应SystemPrompt
     */
    public $SystemPrompt;

    /**
     * @param string $Name 人物名称
     * @param string $SystemPrompt 人物对应SystemPrompt
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

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }
    }
}
