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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高精度融合参数
 *
 * @method float getWarpRadio() 获取拉脸强度。主要用于调整生成结果人脸脸型更像素材模板还是用户人脸。取值越大越像用户人脸。
取值范围：0-1之间。默认取值0.7。

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method void setWarpRadio(float $WarpRadio) 设置拉脸强度。主要用于调整生成结果人脸脸型更像素材模板还是用户人脸。取值越大越像用户人脸。
取值范围：0-1之间。默认取值0.7。

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method float getEnhanceRadio() 获取人脸增强强度。对整个人脸进行增强，增加清晰度，改善质量。当生成的人脸不够清晰，质感不够好的时候可以设置。取值越大增强强度越大。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method void setEnhanceRadio(float $EnhanceRadio) 设置人脸增强强度。对整个人脸进行增强，增加清晰度，改善质量。当生成的人脸不够清晰，质感不够好的时候可以设置。取值越大增强强度越大。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method float getMpRadio() 获取磨皮强度。当生成脸的图像面部显脏时，可进行设置。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method void setMpRadio(float $MpRadio) 设置磨皮强度。当生成脸的图像面部显脏时，可进行设置。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method float getBlurRadio() 获取人脸模糊开关（暂不支持）
当生成人脸比较清晰时，将人脸模糊到接近模板的清晰度的程度

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method void setBlurRadio(float $BlurRadio) 设置人脸模糊开关（暂不支持）
当生成人脸比较清晰时，将人脸模糊到接近模板的清晰度的程度

该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method float getTeethEnhanceRadio() 获取牙齿增强开关，默认取值为1
牙齿增强，修复牙齿。当生成牙齿不好（如牙齿裂开）可以打开此开关
0：牙齿增强关闭
1：牙齿增强打开
该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method void setTeethEnhanceRadio(float $TeethEnhanceRadio) 设置牙齿增强开关，默认取值为1
牙齿增强，修复牙齿。当生成牙齿不好（如牙齿裂开）可以打开此开关
0：牙齿增强关闭
1：牙齿增强打开
该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method float getMakeupTransferRadio() 获取妆容迁移开关，默认取值为0。
将素材模板的妆容迁移到融合结果上。即：如果希望妆容效果与模板图保持一致，可以打开此开关。
0：妆容迁移关闭
1：妆容迁移打开
该参数仅对SwapModelType（模型类型）取值1-5生效
 * @method void setMakeupTransferRadio(float $MakeupTransferRadio) 设置妆容迁移开关，默认取值为0。
将素材模板的妆容迁移到融合结果上。即：如果希望妆容效果与模板图保持一致，可以打开此开关。
0：妆容迁移关闭
1：妆容迁移打开
该参数仅对SwapModelType（模型类型）取值1-5生效
 */
class FusionUltraParam extends AbstractModel
{
    /**
     * @var float 拉脸强度。主要用于调整生成结果人脸脸型更像素材模板还是用户人脸。取值越大越像用户人脸。
取值范围：0-1之间。默认取值0.7。

该参数仅对SwapModelType（模型类型）取值1-5生效
     */
    public $WarpRadio;

    /**
     * @var float 人脸增强强度。对整个人脸进行增强，增加清晰度，改善质量。当生成的人脸不够清晰，质感不够好的时候可以设置。取值越大增强强度越大。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
     */
    public $EnhanceRadio;

    /**
     * @var float 磨皮强度。当生成脸的图像面部显脏时，可进行设置。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
     */
    public $MpRadio;

    /**
     * @var float 人脸模糊开关（暂不支持）
当生成人脸比较清晰时，将人脸模糊到接近模板的清晰度的程度

该参数仅对SwapModelType（模型类型）取值1-5生效
     */
    public $BlurRadio;

    /**
     * @var float 牙齿增强开关，默认取值为1
牙齿增强，修复牙齿。当生成牙齿不好（如牙齿裂开）可以打开此开关
0：牙齿增强关闭
1：牙齿增强打开
该参数仅对SwapModelType（模型类型）取值1-5生效
     */
    public $TeethEnhanceRadio;

    /**
     * @var float 妆容迁移开关，默认取值为0。
将素材模板的妆容迁移到融合结果上。即：如果希望妆容效果与模板图保持一致，可以打开此开关。
0：妆容迁移关闭
1：妆容迁移打开
该参数仅对SwapModelType（模型类型）取值1-5生效
     */
    public $MakeupTransferRadio;

    /**
     * @param float $WarpRadio 拉脸强度。主要用于调整生成结果人脸脸型更像素材模板还是用户人脸。取值越大越像用户人脸。
取值范围：0-1之间。默认取值0.7。

该参数仅对SwapModelType（模型类型）取值1-5生效
     * @param float $EnhanceRadio 人脸增强强度。对整个人脸进行增强，增加清晰度，改善质量。当生成的人脸不够清晰，质感不够好的时候可以设置。取值越大增强强度越大。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
     * @param float $MpRadio 磨皮强度。当生成脸的图像面部显脏时，可进行设置。
取值范围：0-1之间。默认取值0.5。

该参数仅对SwapModelType（模型类型）取值1-5生效
     * @param float $BlurRadio 人脸模糊开关（暂不支持）
当生成人脸比较清晰时，将人脸模糊到接近模板的清晰度的程度

该参数仅对SwapModelType（模型类型）取值1-5生效
     * @param float $TeethEnhanceRadio 牙齿增强开关，默认取值为1
牙齿增强，修复牙齿。当生成牙齿不好（如牙齿裂开）可以打开此开关
0：牙齿增强关闭
1：牙齿增强打开
该参数仅对SwapModelType（模型类型）取值1-5生效
     * @param float $MakeupTransferRadio 妆容迁移开关，默认取值为0。
将素材模板的妆容迁移到融合结果上。即：如果希望妆容效果与模板图保持一致，可以打开此开关。
0：妆容迁移关闭
1：妆容迁移打开
该参数仅对SwapModelType（模型类型）取值1-5生效
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
        if (array_key_exists("WarpRadio",$param) and $param["WarpRadio"] !== null) {
            $this->WarpRadio = $param["WarpRadio"];
        }

        if (array_key_exists("EnhanceRadio",$param) and $param["EnhanceRadio"] !== null) {
            $this->EnhanceRadio = $param["EnhanceRadio"];
        }

        if (array_key_exists("MpRadio",$param) and $param["MpRadio"] !== null) {
            $this->MpRadio = $param["MpRadio"];
        }

        if (array_key_exists("BlurRadio",$param) and $param["BlurRadio"] !== null) {
            $this->BlurRadio = $param["BlurRadio"];
        }

        if (array_key_exists("TeethEnhanceRadio",$param) and $param["TeethEnhanceRadio"] !== null) {
            $this->TeethEnhanceRadio = $param["TeethEnhanceRadio"];
        }

        if (array_key_exists("MakeupTransferRadio",$param) and $param["MakeupTransferRadio"] !== null) {
            $this->MakeupTransferRadio = $param["MakeupTransferRadio"];
        }
    }
}
