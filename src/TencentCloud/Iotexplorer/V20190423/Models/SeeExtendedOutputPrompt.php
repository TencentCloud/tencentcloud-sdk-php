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
 * TWeSee 扩展输出提示词
 *
 * @method string getKey() 获取<p>提示词标识符</p><p>枚举值：</p><ul><li>custom： 自定义</li></ul>
 * @method void setKey(string $Key) 设置<p>提示词标识符</p><p>枚举值：</p><ul><li>custom： 自定义</li></ul>
 * @method string getPrompt() 获取<p>提示词内容</p>
 * @method void setPrompt(string $Prompt) 设置<p>提示词内容</p>
 */
class SeeExtendedOutputPrompt extends AbstractModel
{
    /**
     * @var string <p>提示词标识符</p><p>枚举值：</p><ul><li>custom： 自定义</li></ul>
     */
    public $Key;

    /**
     * @var string <p>提示词内容</p>
     */
    public $Prompt;

    /**
     * @param string $Key <p>提示词标识符</p><p>枚举值：</p><ul><li>custom： 自定义</li></ul>
     * @param string $Prompt <p>提示词内容</p>
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

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }
    }
}
