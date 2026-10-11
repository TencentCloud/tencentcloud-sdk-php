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
 * 智能图层拆分配置。
 *
 * @method string getSwitch() 获取<p>能力配置开关。</p><p>枚举值：</p><ul><li>ON： 开启图层分离功能。</li><li>OFF： 关闭图层分离功能。</li></ul><p>默认值：ON</p>
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关。</p><p>枚举值：</p><ul><li>ON： 开启图层分离功能。</li><li>OFF： 关闭图层分离功能。</li></ul><p>默认值：ON</p>
 * @method integer getLayers() 获取<p>预期拆层数量。</p><p>取值范围：[2, 17]</p>
 * @method void setLayers(integer $Layers) 设置<p>预期拆层数量。</p><p>取值范围：[2, 17]</p>
 * @method string getPrompt() 获取<p>提示词。</p>
 * @method void setPrompt(string $Prompt) 设置<p>提示词。</p>
 * @method string getModel() 获取<p>模型名称。</p><p>枚举值：</p><ul><li>decompose-1.0-flash： 1.0版本 flash模型</li></ul>
 * @method void setModel(string $Model) 设置<p>模型名称。</p><p>枚举值：</p><ul><li>decompose-1.0-flash： 1.0版本 flash模型</li></ul>
 */
class AiDecomposeConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关。</p><p>枚举值：</p><ul><li>ON： 开启图层分离功能。</li><li>OFF： 关闭图层分离功能。</li></ul><p>默认值：ON</p>
     */
    public $Switch;

    /**
     * @var integer <p>预期拆层数量。</p><p>取值范围：[2, 17]</p>
     */
    public $Layers;

    /**
     * @var string <p>提示词。</p>
     */
    public $Prompt;

    /**
     * @var string <p>模型名称。</p><p>枚举值：</p><ul><li>decompose-1.0-flash： 1.0版本 flash模型</li></ul>
     */
    public $Model;

    /**
     * @param string $Switch <p>能力配置开关。</p><p>枚举值：</p><ul><li>ON： 开启图层分离功能。</li><li>OFF： 关闭图层分离功能。</li></ul><p>默认值：ON</p>
     * @param integer $Layers <p>预期拆层数量。</p><p>取值范围：[2, 17]</p>
     * @param string $Prompt <p>提示词。</p>
     * @param string $Model <p>模型名称。</p><p>枚举值：</p><ul><li>decompose-1.0-flash： 1.0版本 flash模型</li></ul>
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

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = $param["Layers"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
