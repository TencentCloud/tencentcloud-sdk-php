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
 * 图片处理图层融合配置
 *
 * @method string getSwitch() 获取<p>能力配置开关。</p><li>ON：开启（默认值）；</li><li>OFF：关闭。</li>
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关。</p><li>ON：开启（默认值）；</li><li>OFF：关闭。</li>
 * @method string getModel() 获取<p>合成模型。可选值：compose-1.0-lite（默认值，可不传）。</p>
 * @method void setModel(string $Model) 设置<p>合成模型。可选值：compose-1.0-lite（默认值，可不传）。</p>
 * @method ImageComposeCanvas getCanvas() 获取<p>画布定义。可省略：省略时取 ZIndex 最小的图层（底层图层）的自然尺寸。</p>
 * @method void setCanvas(ImageComposeCanvas $Canvas) 设置<p>画布定义。可省略：省略时取 ZIndex 最小的图层（底层图层）的自然尺寸。</p>
 * @method array getLayers() 获取<p>图层列表，图层的唯一来源。至少 1 层、最多 20 层。</p>
 * @method void setLayers(array $Layers) 设置<p>图层列表，图层的唯一来源。至少 1 层、最多 20 层。</p>
 */
class AiComposeConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关。</p><li>ON：开启（默认值）；</li><li>OFF：关闭。</li>
     */
    public $Switch;

    /**
     * @var string <p>合成模型。可选值：compose-1.0-lite（默认值，可不传）。</p>
     */
    public $Model;

    /**
     * @var ImageComposeCanvas <p>画布定义。可省略：省略时取 ZIndex 最小的图层（底层图层）的自然尺寸。</p>
     */
    public $Canvas;

    /**
     * @var array <p>图层列表，图层的唯一来源。至少 1 层、最多 20 层。</p>
     */
    public $Layers;

    /**
     * @param string $Switch <p>能力配置开关。</p><li>ON：开启（默认值）；</li><li>OFF：关闭。</li>
     * @param string $Model <p>合成模型。可选值：compose-1.0-lite（默认值，可不传）。</p>
     * @param ImageComposeCanvas $Canvas <p>画布定义。可省略：省略时取 ZIndex 最小的图层（底层图层）的自然尺寸。</p>
     * @param array $Layers <p>图层列表，图层的唯一来源。至少 1 层、最多 20 层。</p>
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

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new ImageComposeCanvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = [];
            foreach ($param["Layers"] as $key => $value){
                $obj = new ImageComposeLayer();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }
    }
}
