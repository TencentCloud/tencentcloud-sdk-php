<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 质检异常项。
 *
 * @method string getType() 获取异常类型，取值范围：
Jitter：抖动，
Blur：模糊，
LowLighting：低光照，
HighLighting：过曝，
CrashScreen：花屏，
BlackWhiteEdge：黑白边，
SolidColorScreen：纯色屏，
Noise：噪点，
Mosaic：马赛克，
QRCode：二维码，
AppletCode：小程序码，
BarCode：条形码，
LowVoice：低音，
HighVoice：爆音，
NoVoice：静音，
LowEvaluation：无参考打分低于阈值。
 * @method void setType(string $Type) 设置异常类型，取值范围：
Jitter：抖动，
Blur：模糊，
LowLighting：低光照，
HighLighting：过曝，
CrashScreen：花屏，
BlackWhiteEdge：黑白边，
SolidColorScreen：纯色屏，
Noise：噪点，
Mosaic：马赛克，
QRCode：二维码，
AppletCode：小程序码，
BarCode：条形码，
LowVoice：低音，
HighVoice：爆音，
NoVoice：静音，
LowEvaluation：无参考打分低于阈值。
 * @method array getQualityControlItems() 获取质检结果项。
 * @method void setQualityControlItems(array $QualityControlItems) 设置质检结果项。
 */
class QualityControlResult extends AbstractModel
{
    /**
     * @var string 异常类型，取值范围：
Jitter：抖动，
Blur：模糊，
LowLighting：低光照，
HighLighting：过曝，
CrashScreen：花屏，
BlackWhiteEdge：黑白边，
SolidColorScreen：纯色屏，
Noise：噪点，
Mosaic：马赛克，
QRCode：二维码，
AppletCode：小程序码，
BarCode：条形码，
LowVoice：低音，
HighVoice：爆音，
NoVoice：静音，
LowEvaluation：无参考打分低于阈值。
     */
    public $Type;

    /**
     * @var array 质检结果项。
     */
    public $QualityControlItems;

    /**
     * @param string $Type 异常类型，取值范围：
Jitter：抖动，
Blur：模糊，
LowLighting：低光照，
HighLighting：过曝，
CrashScreen：花屏，
BlackWhiteEdge：黑白边，
SolidColorScreen：纯色屏，
Noise：噪点，
Mosaic：马赛克，
QRCode：二维码，
AppletCode：小程序码，
BarCode：条形码，
LowVoice：低音，
HighVoice：爆音，
NoVoice：静音，
LowEvaluation：无参考打分低于阈值。
     * @param array $QualityControlItems 质检结果项。
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

        if (array_key_exists("QualityControlItems",$param) and $param["QualityControlItems"] !== null) {
            $this->QualityControlItems = [];
            foreach ($param["QualityControlItems"] as $key => $value){
                $obj = new QualityControlItem();
                $obj->deserialize($value);
                array_push($this->QualityControlItems, $obj);
            }
        }
    }
}
