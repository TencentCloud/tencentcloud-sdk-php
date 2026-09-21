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
 * 图标擦除配置
 *
 * @method string getSwitch() 获取<p>能力配置开关，可选值：</p><li>ON：开启；</li><li>OFF：关闭。</li>默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关，可选值：</p><li>ON：开启；</li><li>OFF：关闭。</li>默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageAreaBoxes() 获取<p>需要擦除的多个框选区域，最多开启16个区域。<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageAreaBoxes(array $ImageAreaBoxes) 设置<p>需要擦除的多个框选区域，最多开启16个区域。<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetectTypes() 获取<p>图片框选区域类型，可选值：</p><li>logo：图标；</li><li>text：文字；</li><li>watermark：水印；</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectTypes(array $DetectTypes) 设置<p>图片框选区域类型，可选值：</p><li>logo：图标；</li><li>text：文字；</li><li>watermark：水印；</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEraseStrength() 获取<p>水印擦除能力档位，可选值：</p><p>枚举值：</p><ul><li>low： 快速擦除档位</li><li>mid： 擦除效果和速度均衡档位</li><li>high： 进阶擦除效果档位</li></ul><p>注意：根据擦除场景复杂度选择对应擦除档位。</p>
 * @method void setEraseStrength(string $EraseStrength) 设置<p>水印擦除能力档位，可选值：</p><p>枚举值：</p><ul><li>low： 快速擦除档位</li><li>mid： 擦除效果和速度均衡档位</li><li>high： 进阶擦除效果档位</li></ul><p>注意：根据擦除场景复杂度选择对应擦除档位。</p>
 * @method string getWatermarkType() 获取<p>擦除图像水印时，选择特定水印类型，可选值：</p><p>枚举值：</p><ul><li>corner_watermark： 擦除常规定点水印</li><li>tiled_watermark： 擦除全图平铺水印</li><li>auto_detect_type： 自动识别水印类型擦除</li><li>selected_watermark： 跳过自动擦除，按指定位置进行水印擦除</li></ul>
 * @method void setWatermarkType(string $WatermarkType) 设置<p>擦除图像水印时，选择特定水印类型，可选值：</p><p>枚举值：</p><ul><li>corner_watermark： 擦除常规定点水印</li><li>tiled_watermark： 擦除全图平铺水印</li><li>auto_detect_type： 自动识别水印类型擦除</li><li>selected_watermark： 跳过自动擦除，按指定位置进行水印擦除</li></ul>
 */
class ImageEraseLogoConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关，可选值：</p><li>ON：开启；</li><li>OFF：关闭。</li>默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var array <p>需要擦除的多个框选区域，最多开启16个区域。<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageAreaBoxes;

    /**
     * @var array <p>图片框选区域类型，可选值：</p><li>logo：图标；</li><li>text：文字；</li><li>watermark：水印；</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectTypes;

    /**
     * @var string <p>水印擦除能力档位，可选值：</p><p>枚举值：</p><ul><li>low： 快速擦除档位</li><li>mid： 擦除效果和速度均衡档位</li><li>high： 进阶擦除效果档位</li></ul><p>注意：根据擦除场景复杂度选择对应擦除档位。</p>
     */
    public $EraseStrength;

    /**
     * @var string <p>擦除图像水印时，选择特定水印类型，可选值：</p><p>枚举值：</p><ul><li>corner_watermark： 擦除常规定点水印</li><li>tiled_watermark： 擦除全图平铺水印</li><li>auto_detect_type： 自动识别水印类型擦除</li><li>selected_watermark： 跳过自动擦除，按指定位置进行水印擦除</li></ul>
     */
    public $WatermarkType;

    /**
     * @param string $Switch <p>能力配置开关，可选值：</p><li>ON：开启；</li><li>OFF：关闭。</li>默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImageAreaBoxes <p>需要擦除的多个框选区域，最多开启16个区域。<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetectTypes <p>图片框选区域类型，可选值：</p><li>logo：图标；</li><li>text：文字；</li><li>watermark：水印；</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EraseStrength <p>水印擦除能力档位，可选值：</p><p>枚举值：</p><ul><li>low： 快速擦除档位</li><li>mid： 擦除效果和速度均衡档位</li><li>high： 进阶擦除效果档位</li></ul><p>注意：根据擦除场景复杂度选择对应擦除档位。</p>
     * @param string $WatermarkType <p>擦除图像水印时，选择特定水印类型，可选值：</p><p>枚举值：</p><ul><li>corner_watermark： 擦除常规定点水印</li><li>tiled_watermark： 擦除全图平铺水印</li><li>auto_detect_type： 自动识别水印类型擦除</li><li>selected_watermark： 跳过自动擦除，按指定位置进行水印擦除</li></ul>
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

        if (array_key_exists("ImageAreaBoxes",$param) and $param["ImageAreaBoxes"] !== null) {
            $this->ImageAreaBoxes = [];
            foreach ($param["ImageAreaBoxes"] as $key => $value){
                $obj = new ImageAreaBoxInfo();
                $obj->deserialize($value);
                array_push($this->ImageAreaBoxes, $obj);
            }
        }

        if (array_key_exists("DetectTypes",$param) and $param["DetectTypes"] !== null) {
            $this->DetectTypes = $param["DetectTypes"];
        }

        if (array_key_exists("EraseStrength",$param) and $param["EraseStrength"] !== null) {
            $this->EraseStrength = $param["EraseStrength"];
        }

        if (array_key_exists("WatermarkType",$param) and $param["WatermarkType"] !== null) {
            $this->WatermarkType = $param["WatermarkType"];
        }
    }
}
