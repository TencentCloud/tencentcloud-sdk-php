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
 * 视频编辑/合成任务 视频图像转换操作。
 *
 * @method string getType() 获取类型，取值有：
<li>Rotate：图像旋转。</li>
<li>Flip：图像翻转。</li>
 * @method void setType(string $Type) 设置类型，取值有：
<li>Rotate：图像旋转。</li>
<li>Flip：图像翻转。</li>
 * @method float getRotateAngle() 获取当 Type = Rotate 时有效。图像以中心点为原点进行旋转的角度，取值范围0~360。
 * @method void setRotateAngle(float $RotateAngle) 设置当 Type = Rotate 时有效。图像以中心点为原点进行旋转的角度，取值范围0~360。
 * @method string getFlipType() 获取当 Type = Flip 时有效。图像翻转动作，取值有： 
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
 * @method void setFlipType(string $FlipType) 设置当 Type = Flip 时有效。图像翻转动作，取值有： 
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
 */
class ComposeImageOperation extends AbstractModel
{
    /**
     * @var string 类型，取值有：
<li>Rotate：图像旋转。</li>
<li>Flip：图像翻转。</li>
     */
    public $Type;

    /**
     * @var float 当 Type = Rotate 时有效。图像以中心点为原点进行旋转的角度，取值范围0~360。
     */
    public $RotateAngle;

    /**
     * @var string 当 Type = Flip 时有效。图像翻转动作，取值有： 
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
     */
    public $FlipType;

    /**
     * @param string $Type 类型，取值有：
<li>Rotate：图像旋转。</li>
<li>Flip：图像翻转。</li>
     * @param float $RotateAngle 当 Type = Rotate 时有效。图像以中心点为原点进行旋转的角度，取值范围0~360。
     * @param string $FlipType 当 Type = Flip 时有效。图像翻转动作，取值有： 
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RotateAngle",$param) and $param["RotateAngle"] !== null) {
            $this->RotateAngle = $param["RotateAngle"];
        }

        if (array_key_exists("FlipType",$param) and $param["FlipType"] !== null) {
            $this->FlipType = $param["FlipType"];
        }
    }
}
