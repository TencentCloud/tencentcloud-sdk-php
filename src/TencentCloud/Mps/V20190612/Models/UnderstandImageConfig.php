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
 * 图片理解任务。
 *
 * @method string getModel() 获取<p>图片理解模型</p><p>枚举值：</p><ul><li>WAND-understand-1.0-lite： 轻量理解模型</li><li>WAND-understand-1.0-flash： 质量-速度平衡理解模型</li><li>WAND-understand-1.0-pro： 高质量理解模型</li></ul>
 * @method void setModel(string $Model) 设置<p>图片理解模型</p><p>枚举值：</p><ul><li>WAND-understand-1.0-lite： 轻量理解模型</li><li>WAND-understand-1.0-flash： 质量-速度平衡理解模型</li><li>WAND-understand-1.0-pro： 高质量理解模型</li></ul>
 * @method string getPrompt() 获取<p>图片理解指令</p>
 * @method void setPrompt(string $Prompt) 设置<p>图片理解指令</p>
 */
class UnderstandImageConfig extends AbstractModel
{
    /**
     * @var string <p>图片理解模型</p><p>枚举值：</p><ul><li>WAND-understand-1.0-lite： 轻量理解模型</li><li>WAND-understand-1.0-flash： 质量-速度平衡理解模型</li><li>WAND-understand-1.0-pro： 高质量理解模型</li></ul>
     */
    public $Model;

    /**
     * @var string <p>图片理解指令</p>
     */
    public $Prompt;

    /**
     * @param string $Model <p>图片理解模型</p><p>枚举值：</p><ul><li>WAND-understand-1.0-lite： 轻量理解模型</li><li>WAND-understand-1.0-flash： 质量-速度平衡理解模型</li><li>WAND-understand-1.0-pro： 高质量理解模型</li></ul>
     * @param string $Prompt <p>图片理解指令</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }
    }
}
