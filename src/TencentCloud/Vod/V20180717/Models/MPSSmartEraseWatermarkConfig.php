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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能擦除模板去水印配置
 *
 * @method string getWatermarkEraseMethod() 获取<p>水印擦除方式。 <strong>自动擦除：</strong>通过A模型自动识别视频中的水印，擦除后生成新的视频。适用于动态水印。 当使用自动擦除时，若您不指定AutoAreas，将对视频全屏进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。 <strong>指定区域擦除：</strong>针对位置较固定的静态水印，建议您直接指定擦除区域。 当您选择指定区域擦除时，请至少传入一个指定区域。 - auto 自动擦除 - custom 指定区域擦除</p>
 * @method void setWatermarkEraseMethod(string $WatermarkEraseMethod) 设置<p>水印擦除方式。 <strong>自动擦除：</strong>通过A模型自动识别视频中的水印，擦除后生成新的视频。适用于动态水印。 当使用自动擦除时，若您不指定AutoAreas，将对视频全屏进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。 <strong>指定区域擦除：</strong>针对位置较固定的静态水印，建议您直接指定擦除区域。 当您选择指定区域擦除时，请至少传入一个指定区域。 - auto 自动擦除 - custom 指定区域擦除</p>
 * @method string getWatermarkModel() 获取<p>水印擦除模型。 基础版：效果一般，性价比高，适合动画或背景较干净的视频。 高级版：效果更好，适合短剧等现实风格视频。 - basic 基础版 - advanced 高级版</p>
 * @method void setWatermarkModel(string $WatermarkModel) 设置<p>水印擦除模型。 基础版：效果一般，性价比高，适合动画或背景较干净的视频。 高级版：效果更好，适合短剧等现实风格视频。 - basic 基础版 - advanced 高级版</p>
 * @method array getAutoAreas() 获取<p>自动擦除自定义区域。 对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。 注意，当擦除方式为custom时，此参数将不会生效。清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 * @method void setAutoAreas(array $AutoAreas) 设置<p>自动擦除自定义区域。 对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。 注意，当擦除方式为custom时，此参数将不会生效。清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 * @method array getCustomAreas() 获取<p>指定擦除自定义区域。 对选定区域，在选定时间段内不进行检测识别直接进行擦除。 注意：清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 * @method void setCustomAreas(array $CustomAreas) 设置<p>指定擦除自定义区域。 对选定区域，在选定时间段内不进行检测识别直接进行擦除。 注意：清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 */
class MPSSmartEraseWatermarkConfig extends AbstractModel
{
    /**
     * @var string <p>水印擦除方式。 <strong>自动擦除：</strong>通过A模型自动识别视频中的水印，擦除后生成新的视频。适用于动态水印。 当使用自动擦除时，若您不指定AutoAreas，将对视频全屏进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。 <strong>指定区域擦除：</strong>针对位置较固定的静态水印，建议您直接指定擦除区域。 当您选择指定区域擦除时，请至少传入一个指定区域。 - auto 自动擦除 - custom 指定区域擦除</p>
     */
    public $WatermarkEraseMethod;

    /**
     * @var string <p>水印擦除模型。 基础版：效果一般，性价比高，适合动画或背景较干净的视频。 高级版：效果更好，适合短剧等现实风格视频。 - basic 基础版 - advanced 高级版</p>
     */
    public $WatermarkModel;

    /**
     * @var array <p>自动擦除自定义区域。 对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。 注意，当擦除方式为custom时，此参数将不会生效。清除区域请传入[]，不传时将保持模板区域信息不变。</p>
     */
    public $AutoAreas;

    /**
     * @var array <p>指定擦除自定义区域。 对选定区域，在选定时间段内不进行检测识别直接进行擦除。 注意：清除区域请传入[]，不传时将保持模板区域信息不变。</p>
     */
    public $CustomAreas;

    /**
     * @param string $WatermarkEraseMethod <p>水印擦除方式。 <strong>自动擦除：</strong>通过A模型自动识别视频中的水印，擦除后生成新的视频。适用于动态水印。 当使用自动擦除时，若您不指定AutoAreas，将对视频全屏进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。 <strong>指定区域擦除：</strong>针对位置较固定的静态水印，建议您直接指定擦除区域。 当您选择指定区域擦除时，请至少传入一个指定区域。 - auto 自动擦除 - custom 指定区域擦除</p>
     * @param string $WatermarkModel <p>水印擦除模型。 基础版：效果一般，性价比高，适合动画或背景较干净的视频。 高级版：效果更好，适合短剧等现实风格视频。 - basic 基础版 - advanced 高级版</p>
     * @param array $AutoAreas <p>自动擦除自定义区域。 对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。 注意，当擦除方式为custom时，此参数将不会生效。清除区域请传入[]，不传时将保持模板区域信息不变。</p>
     * @param array $CustomAreas <p>指定擦除自定义区域。 对选定区域，在选定时间段内不进行检测识别直接进行擦除。 注意：清除区域请传入[]，不传时将保持模板区域信息不变。</p>
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
        if (array_key_exists("WatermarkEraseMethod",$param) and $param["WatermarkEraseMethod"] !== null) {
            $this->WatermarkEraseMethod = $param["WatermarkEraseMethod"];
        }

        if (array_key_exists("WatermarkModel",$param) and $param["WatermarkModel"] !== null) {
            $this->WatermarkModel = $param["WatermarkModel"];
        }

        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new MPSEraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new MPSEraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
        }
    }
}
