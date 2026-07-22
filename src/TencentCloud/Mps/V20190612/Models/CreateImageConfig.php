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
 * 生图任务。
 *
 * @method string getModel() 获取<p>生图模型</p><p>枚举值：</p><ul><li>WAND-create-1.0-lite： 轻量生图模型</li><li>WAND-create-1.0-flash： 质量-速度平衡生图模型</li><li>WAND-create-1.0-pro： 高质量生图模型</li></ul>
 * @method void setModel(string $Model) 设置<p>生图模型</p><p>枚举值：</p><ul><li>WAND-create-1.0-lite： 轻量生图模型</li><li>WAND-create-1.0-flash： 质量-速度平衡生图模型</li><li>WAND-create-1.0-pro： 高质量生图模型</li></ul>
 * @method string getPrompt() 获取<p>生图指令</p>
 * @method void setPrompt(string $Prompt) 设置<p>生图指令</p>
 * @method string getResolution() 获取<p>输出图片的分辨率</p><p>枚举值：</p><ul><li>1K： 短边分辨率 1080</li><li>2K： 短边分辨率 1440</li><li>4K： 短边分辨率 2160</li></ul><p>默认值：1K</p>
 * @method void setResolution(string $Resolution) 设置<p>输出图片的分辨率</p><p>枚举值：</p><ul><li>1K： 短边分辨率 1080</li><li>2K： 短边分辨率 1440</li><li>4K： 短边分辨率 2160</li></ul><p>默认值：1K</p>
 * @method string getAspectRatio() 获取<p>输出图片的宽高比</p><p>枚举值：</p><ul><li>1:1： 宽高比 1:1</li><li>2:3： 宽高比 2:3</li><li>3:2： 宽高比 3:2</li><li>3:4： 宽高比 3:4</li><li>4:3： 宽高比 4:3</li><li>9:16： 宽高比 9:16</li><li>16:9： 宽高比 16:9</li></ul><p>默认值：1:1</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>输出图片的宽高比</p><p>枚举值：</p><ul><li>1:1： 宽高比 1:1</li><li>2:3： 宽高比 2:3</li><li>3:2： 宽高比 3:2</li><li>3:4： 宽高比 3:4</li><li>4:3： 宽高比 4:3</li><li>9:16： 宽高比 9:16</li><li>16:9： 宽高比 16:9</li></ul><p>默认值：1:1</p>
 */
class CreateImageConfig extends AbstractModel
{
    /**
     * @var string <p>生图模型</p><p>枚举值：</p><ul><li>WAND-create-1.0-lite： 轻量生图模型</li><li>WAND-create-1.0-flash： 质量-速度平衡生图模型</li><li>WAND-create-1.0-pro： 高质量生图模型</li></ul>
     */
    public $Model;

    /**
     * @var string <p>生图指令</p>
     */
    public $Prompt;

    /**
     * @var string <p>输出图片的分辨率</p><p>枚举值：</p><ul><li>1K： 短边分辨率 1080</li><li>2K： 短边分辨率 1440</li><li>4K： 短边分辨率 2160</li></ul><p>默认值：1K</p>
     */
    public $Resolution;

    /**
     * @var string <p>输出图片的宽高比</p><p>枚举值：</p><ul><li>1:1： 宽高比 1:1</li><li>2:3： 宽高比 2:3</li><li>3:2： 宽高比 3:2</li><li>3:4： 宽高比 3:4</li><li>4:3： 宽高比 4:3</li><li>9:16： 宽高比 9:16</li><li>16:9： 宽高比 16:9</li></ul><p>默认值：1:1</p>
     */
    public $AspectRatio;

    /**
     * @param string $Model <p>生图模型</p><p>枚举值：</p><ul><li>WAND-create-1.0-lite： 轻量生图模型</li><li>WAND-create-1.0-flash： 质量-速度平衡生图模型</li><li>WAND-create-1.0-pro： 高质量生图模型</li></ul>
     * @param string $Prompt <p>生图指令</p>
     * @param string $Resolution <p>输出图片的分辨率</p><p>枚举值：</p><ul><li>1K： 短边分辨率 1080</li><li>2K： 短边分辨率 1440</li><li>4K： 短边分辨率 2160</li></ul><p>默认值：1K</p>
     * @param string $AspectRatio <p>输出图片的宽高比</p><p>枚举值：</p><ul><li>1:1： 宽高比 1:1</li><li>2:3： 宽高比 2:3</li><li>3:2： 宽高比 3:2</li><li>3:4： 宽高比 3:4</li><li>4:3： 宽高比 4:3</li><li>9:16： 宽高比 9:16</li><li>16:9： 宽高比 16:9</li></ul><p>默认值：1:1</p>
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

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }
    }
}
