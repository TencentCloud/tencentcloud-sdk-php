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
 * 图片处理图层融合功能画布参数
 *
 * @method integer getWidth() 获取<p>画布宽度，取值范围 [1, 10240]，需与 Height 同时设置。</p>
 * @method void setWidth(integer $Width) 设置<p>画布宽度，取值范围 [1, 10240]，需与 Height 同时设置。</p>
 * @method integer getHeight() 获取<p>画布高度，取值范围 [1, 10240]，需与 Width 同时设置。</p>
 * @method void setHeight(integer $Height) 设置<p>画布高度，取值范围 [1, 10240]，需与 Width 同时设置。</p>
 * @method string getBackground() 获取<p>画布底色，统一为 8 位十六进制 #RRGGBBAA（含 alpha），原样作为画布底色。缺省 #00000000（全透明）。示例：#FFFFFFFF 不透明白、#FFFFFF80 半透明白。</p><p>输出格式不支持透明通道时（如 JPEG），透明区域按该底色的 RGB 塌陷；缺省值会得到黑底，需要白底请显式传    #FFFFFFFF。</p>
 * @method void setBackground(string $Background) 设置<p>画布底色，统一为 8 位十六进制 #RRGGBBAA（含 alpha），原样作为画布底色。缺省 #00000000（全透明）。示例：#FFFFFFFF 不透明白、#FFFFFF80 半透明白。</p><p>输出格式不支持透明通道时（如 JPEG），透明区域按该底色的 RGB 塌陷；缺省值会得到黑底，需要白底请显式传    #FFFFFFFF。</p>
 */
class ImageComposeCanvas extends AbstractModel
{
    /**
     * @var integer <p>画布宽度，取值范围 [1, 10240]，需与 Height 同时设置。</p>
     */
    public $Width;

    /**
     * @var integer <p>画布高度，取值范围 [1, 10240]，需与 Width 同时设置。</p>
     */
    public $Height;

    /**
     * @var string <p>画布底色，统一为 8 位十六进制 #RRGGBBAA（含 alpha），原样作为画布底色。缺省 #00000000（全透明）。示例：#FFFFFFFF 不透明白、#FFFFFF80 半透明白。</p><p>输出格式不支持透明通道时（如 JPEG），透明区域按该底色的 RGB 塌陷；缺省值会得到黑底，需要白底请显式传    #FFFFFFFF。</p>
     */
    public $Background;

    /**
     * @param integer $Width <p>画布宽度，取值范围 [1, 10240]，需与 Height 同时设置。</p>
     * @param integer $Height <p>画布高度，取值范围 [1, 10240]，需与 Width 同时设置。</p>
     * @param string $Background <p>画布底色，统一为 8 位十六进制 #RRGGBBAA（含 alpha），原样作为画布底色。缺省 #00000000（全透明）。示例：#FFFFFFFF 不透明白、#FFFFFF80 半透明白。</p><p>输出格式不支持透明通道时（如 JPEG），透明区域按该底色的 RGB 塌陷；缺省值会得到黑底，需要白底请显式传    #FFFFFFFF。</p>
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Background",$param) and $param["Background"] !== null) {
            $this->Background = $param["Background"];
        }
    }
}
