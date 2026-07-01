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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理相关提示词。
 *
 * @method string getPrompt() 获取<p>图片处理相关的prompt。</p>
 * @method void setPrompt(string $Prompt) 设置<p>图片处理相关的prompt。</p>
 * @method string getRole() 获取<p>prompt 对应的 role。</p>
 * @method void setRole(string $Role) 设置<p>prompt 对应的 role。</p>
 */
class ImageProcessPrompt extends AbstractModel
{
    /**
     * @var string <p>图片处理相关的prompt。</p>
     */
    public $Prompt;

    /**
     * @var string <p>prompt 对应的 role。</p>
     */
    public $Role;

    /**
     * @param string $Prompt <p>图片处理相关的prompt。</p>
     * @param string $Role <p>prompt 对应的 role。</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
