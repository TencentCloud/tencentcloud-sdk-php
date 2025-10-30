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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练图像质量过滤开关配置。
支持开启或关闭对训练图像分辨率下限、脸部区域大小、脸部遮挡、脸部角度的过滤，默认开启以上过滤。
如果训练图像内包含多人脸或无人脸、和 Base 人像不为同一人也将被过滤，不可关闭该过滤条件。
建议：关闭以上过滤可能导致写真生成效果受损，建议使用单人、正脸、脸部清晰、无遮挡、无夸张表情、脸部区域占比较大的图像进行训练。
 *
 * @method integer getResolution() 获取过滤不满足分辨率下限的训练图像，默认开启过滤
开启后将过滤横边<512或竖边<720的图片，横、竖边上限均为2000，不支持调整

1：开启过滤
0：关闭过滤
 * @method void setResolution(integer $Resolution) 设置过滤不满足分辨率下限的训练图像，默认开启过滤
开启后将过滤横边<512或竖边<720的图片，横、竖边上限均为2000，不支持调整

1：开启过滤
0：关闭过滤
 * @method integer getSize() 获取过滤脸部区域过小的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
 * @method void setSize(integer $Size) 设置过滤脸部区域过小的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
 * @method integer getOcclusion() 获取过滤脸部存在明显遮挡、偏转角度过大等质量较差的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
 * @method void setOcclusion(integer $Occlusion) 设置过滤脸部存在明显遮挡、偏转角度过大等质量较差的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
 */
class Filter extends AbstractModel
{
    /**
     * @var integer 过滤不满足分辨率下限的训练图像，默认开启过滤
开启后将过滤横边<512或竖边<720的图片，横、竖边上限均为2000，不支持调整

1：开启过滤
0：关闭过滤
     */
    public $Resolution;

    /**
     * @var integer 过滤脸部区域过小的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
     */
    public $Size;

    /**
     * @var integer 过滤脸部存在明显遮挡、偏转角度过大等质量较差的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
     */
    public $Occlusion;

    /**
     * @param integer $Resolution 过滤不满足分辨率下限的训练图像，默认开启过滤
开启后将过滤横边<512或竖边<720的图片，横、竖边上限均为2000，不支持调整

1：开启过滤
0：关闭过滤
     * @param integer $Size 过滤脸部区域过小的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
     * @param integer $Occlusion 过滤脸部存在明显遮挡、偏转角度过大等质量较差的训练图像，默认开启过滤

1：开启过滤
0：关闭过滤
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
        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Occlusion",$param) and $param["Occlusion"] !== null) {
            $this->Occlusion = $param["Occlusion"];
        }
    }
}
