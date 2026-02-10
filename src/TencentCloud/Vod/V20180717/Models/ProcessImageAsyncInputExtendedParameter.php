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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片异步处理扩展参数。
 *
 * @method array getPrompts() 获取输入模型的提示词。
 * @method void setPrompts(array $Prompts) 设置输入模型的提示词。
 */
class ProcessImageAsyncInputExtendedParameter extends AbstractModel
{
    /**
     * @var array 输入模型的提示词。
     */
    public $Prompts;

    /**
     * @param array $Prompts 输入模型的提示词。
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
        if (array_key_exists("Prompts",$param) and $param["Prompts"] !== null) {
            $this->Prompts = $param["Prompts"];
        }
    }
}
