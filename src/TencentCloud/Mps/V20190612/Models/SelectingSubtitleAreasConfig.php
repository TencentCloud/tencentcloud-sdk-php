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
 * 字幕OCR提取框选区域配置
 *
 * @method array getAutoAreas() 获取自动选择自定义区域。
对选定区域，利用AI模型自动检测其中存在的选择目标并提取。
 * @method void setAutoAreas(array $AutoAreas) 设置自动选择自定义区域。
对选定区域，利用AI模型自动检测其中存在的选择目标并提取。
 * @method integer getSampleWidth() 获取示例视频或图片的宽，单位像素值
 * @method void setSampleWidth(integer $SampleWidth) 设置示例视频或图片的宽，单位像素值
 * @method integer getSampleHeight() 获取示例视频或图片的高，单位像素值
 * @method void setSampleHeight(integer $SampleHeight) 设置示例视频或图片的高，单位像素值
 */
class SelectingSubtitleAreasConfig extends AbstractModel
{
    /**
     * @var array 自动选择自定义区域。
对选定区域，利用AI模型自动检测其中存在的选择目标并提取。
     */
    public $AutoAreas;

    /**
     * @var integer 示例视频或图片的宽，单位像素值
     */
    public $SampleWidth;

    /**
     * @var integer 示例视频或图片的高，单位像素值
     */
    public $SampleHeight;

    /**
     * @param array $AutoAreas 自动选择自定义区域。
对选定区域，利用AI模型自动检测其中存在的选择目标并提取。
     * @param integer $SampleWidth 示例视频或图片的宽，单位像素值
     * @param integer $SampleHeight 示例视频或图片的高，单位像素值
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
        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("SampleWidth",$param) and $param["SampleWidth"] !== null) {
            $this->SampleWidth = $param["SampleWidth"];
        }

        if (array_key_exists("SampleHeight",$param) and $param["SampleHeight"] !== null) {
            $this->SampleHeight = $param["SampleHeight"];
        }
    }
}
