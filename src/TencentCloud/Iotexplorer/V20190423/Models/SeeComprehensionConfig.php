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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 视觉理解配置
 *
 * @method array getDetectTypes() 获取拓展的目标及事件检测类别
 * @method void setDetectTypes(array $DetectTypes) 设置拓展的目标及事件检测类别
 * @method boolean getEnableSearch() 获取使该视频 / 图片录入搜索库，后续可进行搜索
 * @method void setEnableSearch(boolean $EnableSearch) 设置使该视频 / 图片录入搜索库，后续可进行搜索
 * @method string getOutputLang() 获取主输出语言，可选值包括：
- `zh` 中文（默认值）
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语
 * @method void setOutputLang(string $OutputLang) 设置主输出语言，可选值包括：
- `zh` 中文（默认值）
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语
 * @method string getAlternativeOutputLang() 获取次选输出语言，可选值包括：
- `zh` 中文
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语

 * @method void setAlternativeOutputLang(string $AlternativeOutputLang) 设置次选输出语言，可选值包括：
- `zh` 中文
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语

 * @method string getMultiCameraLayout() 获取多摄像头布局定义。可选值包括：

- 单摄（默认值）：`Single`

- 双摄（纵向排列）- 全部画面：`Vertical,Num=2,Index=0;1`
- 双摄（纵向排列）- 画面1：`Vertical,Num=2,Index=0`
- 双摄（纵向排列）- 画面2：`Vertical,Num=2,Index=1`

- 三摄（纵向排列）- 全部画面：`Vertical,Num=3,Index=0;1;2`
- 三摄（纵向排列）- 画面1：`Vertical,Num=3,Index=0`
- 三摄（纵向排列）- 画面2：`Vertical,Num=3,Index=1`
- 三摄（纵向排列）- 画面3：`Vertical,Num=3,Index=2`
- 三摄（纵向排列）- 画面1+2：`Vertical,Num=3,Index=0;1`
- 三摄（纵向排列）- 画面1+3：`Vertical,Num=3,Index=0;2`
- 三摄（纵向排列）- 画面2+3：`Vertical,Num=3,Index=1;2`
 * @method void setMultiCameraLayout(string $MultiCameraLayout) 设置多摄像头布局定义。可选值包括：

- 单摄（默认值）：`Single`

- 双摄（纵向排列）- 全部画面：`Vertical,Num=2,Index=0;1`
- 双摄（纵向排列）- 画面1：`Vertical,Num=2,Index=0`
- 双摄（纵向排列）- 画面2：`Vertical,Num=2,Index=1`

- 三摄（纵向排列）- 全部画面：`Vertical,Num=3,Index=0;1;2`
- 三摄（纵向排列）- 画面1：`Vertical,Num=3,Index=0`
- 三摄（纵向排列）- 画面2：`Vertical,Num=3,Index=1`
- 三摄（纵向排列）- 画面3：`Vertical,Num=3,Index=2`
- 三摄（纵向排列）- 画面1+2：`Vertical,Num=3,Index=0;1`
- 三摄（纵向排列）- 画面1+3：`Vertical,Num=3,Index=0;2`
- 三摄（纵向排列）- 画面2+3：`Vertical,Num=3,Index=1;2`
 * @method integer getMaxDuration() 获取最大处理的输入视频时长，单位：秒（仅对视频输入生效）
 * @method void setMaxDuration(integer $MaxDuration) 设置最大处理的输入视频时长，单位：秒（仅对视频输入生效）
 */
class SeeComprehensionConfig extends AbstractModel
{
    /**
     * @var array 拓展的目标及事件检测类别
     */
    public $DetectTypes;

    /**
     * @var boolean 使该视频 / 图片录入搜索库，后续可进行搜索
     */
    public $EnableSearch;

    /**
     * @var string 主输出语言，可选值包括：
- `zh` 中文（默认值）
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语
     */
    public $OutputLang;

    /**
     * @var string 次选输出语言，可选值包括：
- `zh` 中文
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语

     */
    public $AlternativeOutputLang;

    /**
     * @var string 多摄像头布局定义。可选值包括：

- 单摄（默认值）：`Single`

- 双摄（纵向排列）- 全部画面：`Vertical,Num=2,Index=0;1`
- 双摄（纵向排列）- 画面1：`Vertical,Num=2,Index=0`
- 双摄（纵向排列）- 画面2：`Vertical,Num=2,Index=1`

- 三摄（纵向排列）- 全部画面：`Vertical,Num=3,Index=0;1;2`
- 三摄（纵向排列）- 画面1：`Vertical,Num=3,Index=0`
- 三摄（纵向排列）- 画面2：`Vertical,Num=3,Index=1`
- 三摄（纵向排列）- 画面3：`Vertical,Num=3,Index=2`
- 三摄（纵向排列）- 画面1+2：`Vertical,Num=3,Index=0;1`
- 三摄（纵向排列）- 画面1+3：`Vertical,Num=3,Index=0;2`
- 三摄（纵向排列）- 画面2+3：`Vertical,Num=3,Index=1;2`
     */
    public $MultiCameraLayout;

    /**
     * @var integer 最大处理的输入视频时长，单位：秒（仅对视频输入生效）
     */
    public $MaxDuration;

    /**
     * @param array $DetectTypes 拓展的目标及事件检测类别
     * @param boolean $EnableSearch 使该视频 / 图片录入搜索库，后续可进行搜索
     * @param string $OutputLang 主输出语言，可选值包括：
- `zh` 中文（默认值）
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语
     * @param string $AlternativeOutputLang 次选输出语言，可选值包括：
- `zh` 中文
- `en` 英语
- `ja` 日语
- `ko` 韩文
- `pt-BR` 葡萄牙语（巴西）
- `th` 泰语
- `ms` 马来语

     * @param string $MultiCameraLayout 多摄像头布局定义。可选值包括：

- 单摄（默认值）：`Single`

- 双摄（纵向排列）- 全部画面：`Vertical,Num=2,Index=0;1`
- 双摄（纵向排列）- 画面1：`Vertical,Num=2,Index=0`
- 双摄（纵向排列）- 画面2：`Vertical,Num=2,Index=1`

- 三摄（纵向排列）- 全部画面：`Vertical,Num=3,Index=0;1;2`
- 三摄（纵向排列）- 画面1：`Vertical,Num=3,Index=0`
- 三摄（纵向排列）- 画面2：`Vertical,Num=3,Index=1`
- 三摄（纵向排列）- 画面3：`Vertical,Num=3,Index=2`
- 三摄（纵向排列）- 画面1+2：`Vertical,Num=3,Index=0;1`
- 三摄（纵向排列）- 画面1+3：`Vertical,Num=3,Index=0;2`
- 三摄（纵向排列）- 画面2+3：`Vertical,Num=3,Index=1;2`
     * @param integer $MaxDuration 最大处理的输入视频时长，单位：秒（仅对视频输入生效）
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
        if (array_key_exists("DetectTypes",$param) and $param["DetectTypes"] !== null) {
            $this->DetectTypes = $param["DetectTypes"];
        }

        if (array_key_exists("EnableSearch",$param) and $param["EnableSearch"] !== null) {
            $this->EnableSearch = $param["EnableSearch"];
        }

        if (array_key_exists("OutputLang",$param) and $param["OutputLang"] !== null) {
            $this->OutputLang = $param["OutputLang"];
        }

        if (array_key_exists("AlternativeOutputLang",$param) and $param["AlternativeOutputLang"] !== null) {
            $this->AlternativeOutputLang = $param["AlternativeOutputLang"];
        }

        if (array_key_exists("MultiCameraLayout",$param) and $param["MultiCameraLayout"] !== null) {
            $this->MultiCameraLayout = $param["MultiCameraLayout"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }
    }
}
