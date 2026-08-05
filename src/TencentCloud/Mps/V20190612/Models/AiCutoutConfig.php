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
 * 智能抠图配置。
 *
 * @method string getSwitch() 获取<p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
 * @method string getType() 获取<p>抠图目标类型指定：&quot;foreground&quot;（默认）/ &quot;pattern&quot;</p>
 * @method void setType(string $Type) 设置<p>抠图目标类型指定：&quot;foreground&quot;（默认）/ &quot;pattern&quot;</p>
 * @method PatternConfig getPatternConfig() 获取<p>图案抠图配置。仅在Type为pattern时生效。</p>
 * @method void setPatternConfig(PatternConfig $PatternConfig) 设置<p>图案抠图配置。仅在Type为pattern时生效。</p>
 * @method string getModel() 获取<p>抠图模型选择，可不填。</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>WAND-cutout-1.0-lite： 标准版，速度最快</li><li>WAND-cutout-2.0-lite： 增强版，速度最快</li><li>WAND-cutout-2.0-flash： 增强版，质量-速度平衡</li></ul>
 * @method void setModel(string $Model) 设置<p>抠图模型选择，可不填。</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>WAND-cutout-1.0-lite： 标准版，速度最快</li><li>WAND-cutout-2.0-lite： 增强版，速度最快</li><li>WAND-cutout-2.0-flash： 增强版，质量-速度平衡</li></ul>
 */
class AiCutoutConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
     */
    public $Switch;

    /**
     * @var string <p>抠图目标类型指定：&quot;foreground&quot;（默认）/ &quot;pattern&quot;</p>
     */
    public $Type;

    /**
     * @var PatternConfig <p>图案抠图配置。仅在Type为pattern时生效。</p>
     */
    public $PatternConfig;

    /**
     * @var string <p>抠图模型选择，可不填。</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>WAND-cutout-1.0-lite： 标准版，速度最快</li><li>WAND-cutout-2.0-lite： 增强版，速度最快</li><li>WAND-cutout-2.0-flash： 增强版，质量-速度平衡</li></ul>
     */
    public $Model;

    /**
     * @param string $Switch <p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
     * @param string $Type <p>抠图目标类型指定：&quot;foreground&quot;（默认）/ &quot;pattern&quot;</p>
     * @param PatternConfig $PatternConfig <p>图案抠图配置。仅在Type为pattern时生效。</p>
     * @param string $Model <p>抠图模型选择，可不填。</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>WAND-cutout-1.0-lite： 标准版，速度最快</li><li>WAND-cutout-2.0-lite： 增强版，速度最快</li><li>WAND-cutout-2.0-flash： 增强版，质量-速度平衡</li></ul>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PatternConfig",$param) and $param["PatternConfig"] !== null) {
            $this->PatternConfig = new PatternConfig();
            $this->PatternConfig->deserialize($param["PatternConfig"]);
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
