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
 * 智能扩图配置。
 *
 * @method string getSwitch() 获取<p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
 * @method string getAspectRatio() 获取<p>目标比例，如 &quot;16:9&quot;</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>目标比例，如 &quot;16:9&quot;</p>
 * @method integer getWidth() 获取<p>目标宽度（像素）</p><p>取值范围：[0, 2048]</p>
 * @method void setWidth(integer $Width) 设置<p>目标宽度（像素）</p><p>取值范围：[0, 2048]</p>
 * @method integer getHeight() 获取<p>目标高度（像素）</p><p>取值范围：[0, 2048]</p>
 * @method void setHeight(integer $Height) 设置<p>目标高度（像素）</p><p>取值范围：[0, 2048]</p>
 */
class AiExpansionConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
     */
    public $Switch;

    /**
     * @var string <p>目标比例，如 &quot;16:9&quot;</p>
     */
    public $AspectRatio;

    /**
     * @var integer <p>目标宽度（像素）</p><p>取值范围：[0, 2048]</p>
     */
    public $Width;

    /**
     * @var integer <p>目标高度（像素）</p><p>取值范围：[0, 2048]</p>
     */
    public $Height;

    /**
     * @param string $Switch <p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
     * @param string $AspectRatio <p>目标比例，如 &quot;16:9&quot;</p>
     * @param integer $Width <p>目标宽度（像素）</p><p>取值范围：[0, 2048]</p>
     * @param integer $Height <p>目标高度（像素）</p><p>取值范围：[0, 2048]</p>
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

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
