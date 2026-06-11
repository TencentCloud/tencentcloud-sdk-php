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
 * 虚拟试穿任务配置。
 *
 * @method string getModel() 获取<p>换装模型，取值：</p><ul><li>WAND-tryon-1.0-lite</li><li>WAND-tryon-1.0-flash</li><li>WAND-tryon-1.0-pro</li></ul>
 * @method void setModel(string $Model) 设置<p>换装模型，取值：</p><ul><li>WAND-tryon-1.0-lite</li><li>WAND-tryon-1.0-flash</li><li>WAND-tryon-1.0-pro</li></ul>
 * @method string getPrompt() 获取<p>换装指令。</p><p>为空时使用内置指令。</p>
 * @method void setPrompt(string $Prompt) 设置<p>换装指令。</p><p>为空时使用内置指令。</p>
 * @method string getResolution() 获取<p>输出图片分辨率，取值：</p><ul><li>1K</li><li>2K</li><li>4K</li></ul><p>默认值：1K</p>
 * @method void setResolution(string $Resolution) 设置<p>输出图片分辨率，取值：</p><ul><li>1K</li><li>2K</li><li>4K</li></ul><p>默认值：1K</p>
 */
class AiTryOnConfig extends AbstractModel
{
    /**
     * @var string <p>换装模型，取值：</p><ul><li>WAND-tryon-1.0-lite</li><li>WAND-tryon-1.0-flash</li><li>WAND-tryon-1.0-pro</li></ul>
     */
    public $Model;

    /**
     * @var string <p>换装指令。</p><p>为空时使用内置指令。</p>
     */
    public $Prompt;

    /**
     * @var string <p>输出图片分辨率，取值：</p><ul><li>1K</li><li>2K</li><li>4K</li></ul><p>默认值：1K</p>
     */
    public $Resolution;

    /**
     * @param string $Model <p>换装模型，取值：</p><ul><li>WAND-tryon-1.0-lite</li><li>WAND-tryon-1.0-flash</li><li>WAND-tryon-1.0-pro</li></ul>
     * @param string $Prompt <p>换装指令。</p><p>为空时使用内置指令。</p>
     * @param string $Resolution <p>输出图片分辨率，取值：</p><ul><li>1K</li><li>2K</li><li>4K</li></ul><p>默认值：1K</p>
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

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
