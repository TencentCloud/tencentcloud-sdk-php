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
 * 图片任务输入参数
 *
 * @method ImageEncodeConfig getEncodeConfig() 获取<p>图片编码配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncodeConfig(ImageEncodeConfig $EncodeConfig) 设置<p>图片编码配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageEnhanceConfig getEnhanceConfig() 获取<p>图片增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnhanceConfig(ImageEnhanceConfig $EnhanceConfig) 设置<p>图片增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageEraseConfig getEraseConfig() 获取<p>图片擦除配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEraseConfig(ImageEraseConfig $EraseConfig) 设置<p>图片擦除配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlindWatermarkConfig getBlindWatermarkConfig() 获取<p>盲水印配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlindWatermarkConfig(BlindWatermarkConfig $BlindWatermarkConfig) 设置<p>盲水印配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BeautyConfig getBeautyConfig() 获取<p>美颜配置。</p>
 * @method void setBeautyConfig(BeautyConfig $BeautyConfig) 设置<p>美颜配置。</p>
 * @method ImageTransformConfig getTransformConfig() 获取<p>图片基础转换能力。</p>
 * @method void setTransformConfig(ImageTransformConfig $TransformConfig) 设置<p>图片基础转换能力。</p>
 * @method AiTryOnConfig getAiTryOnConfig() 获取<p>Ai 换装配置。</p>
 * @method void setAiTryOnConfig(AiTryOnConfig $AiTryOnConfig) 设置<p>Ai 换装配置。</p>
 */
class ImageTaskInput extends AbstractModel
{
    /**
     * @var ImageEncodeConfig <p>图片编码配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncodeConfig;

    /**
     * @var ImageEnhanceConfig <p>图片增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnhanceConfig;

    /**
     * @var ImageEraseConfig <p>图片擦除配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EraseConfig;

    /**
     * @var BlindWatermarkConfig <p>盲水印配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlindWatermarkConfig;

    /**
     * @var BeautyConfig <p>美颜配置。</p>
     */
    public $BeautyConfig;

    /**
     * @var ImageTransformConfig <p>图片基础转换能力。</p>
     */
    public $TransformConfig;

    /**
     * @var AiTryOnConfig <p>Ai 换装配置。</p>
     */
    public $AiTryOnConfig;

    /**
     * @param ImageEncodeConfig $EncodeConfig <p>图片编码配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageEnhanceConfig $EnhanceConfig <p>图片增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageEraseConfig $EraseConfig <p>图片擦除配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlindWatermarkConfig $BlindWatermarkConfig <p>盲水印配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BeautyConfig $BeautyConfig <p>美颜配置。</p>
     * @param ImageTransformConfig $TransformConfig <p>图片基础转换能力。</p>
     * @param AiTryOnConfig $AiTryOnConfig <p>Ai 换装配置。</p>
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
        if (array_key_exists("EncodeConfig",$param) and $param["EncodeConfig"] !== null) {
            $this->EncodeConfig = new ImageEncodeConfig();
            $this->EncodeConfig->deserialize($param["EncodeConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new ImageEnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }

        if (array_key_exists("EraseConfig",$param) and $param["EraseConfig"] !== null) {
            $this->EraseConfig = new ImageEraseConfig();
            $this->EraseConfig->deserialize($param["EraseConfig"]);
        }

        if (array_key_exists("BlindWatermarkConfig",$param) and $param["BlindWatermarkConfig"] !== null) {
            $this->BlindWatermarkConfig = new BlindWatermarkConfig();
            $this->BlindWatermarkConfig->deserialize($param["BlindWatermarkConfig"]);
        }

        if (array_key_exists("BeautyConfig",$param) and $param["BeautyConfig"] !== null) {
            $this->BeautyConfig = new BeautyConfig();
            $this->BeautyConfig->deserialize($param["BeautyConfig"]);
        }

        if (array_key_exists("TransformConfig",$param) and $param["TransformConfig"] !== null) {
            $this->TransformConfig = new ImageTransformConfig();
            $this->TransformConfig->deserialize($param["TransformConfig"]);
        }

        if (array_key_exists("AiTryOnConfig",$param) and $param["AiTryOnConfig"] !== null) {
            $this->AiTryOnConfig = new AiTryOnConfig();
            $this->AiTryOnConfig->deserialize($param["AiTryOnConfig"]);
        }
    }
}
