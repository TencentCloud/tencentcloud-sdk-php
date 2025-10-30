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
 * 视频编辑/合成任务画布信息。
 *
 * @method string getColor() 获取背景颜色对应的 RGB 参考值，取值格式： #RRGGBB，如 #F0F0F0 。 
默认值：#000000（黑色）。
 * @method void setColor(string $Color) 设置背景颜色对应的 RGB 参考值，取值格式： #RRGGBB，如 #F0F0F0 。 
默认值：#000000（黑色）。
 * @method integer getWidth() 获取画布宽度，即输出视频的宽度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频宽度一致。
 * @method void setWidth(integer $Width) 设置画布宽度，即输出视频的宽度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频宽度一致。
 * @method integer getHeight() 获取画布高度，即输出视频的高度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频高度一致。
 * @method void setHeight(integer $Height) 设置画布高度，即输出视频的高度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频高度一致。
 */
class ComposeCanvas extends AbstractModel
{
    /**
     * @var string 背景颜色对应的 RGB 参考值，取值格式： #RRGGBB，如 #F0F0F0 。 
默认值：#000000（黑色）。
     */
    public $Color;

    /**
     * @var integer 画布宽度，即输出视频的宽度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频宽度一致。
     */
    public $Width;

    /**
     * @var integer 画布高度，即输出视频的高度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频高度一致。
     */
    public $Height;

    /**
     * @param string $Color 背景颜色对应的 RGB 参考值，取值格式： #RRGGBB，如 #F0F0F0 。 
默认值：#000000（黑色）。
     * @param integer $Width 画布宽度，即输出视频的宽度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频宽度一致。
     * @param integer $Height 画布高度，即输出视频的高度，取值范围：0~ 3840，单位：px。  
默认值：0，表示和第一个视频高度一致。
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
        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
