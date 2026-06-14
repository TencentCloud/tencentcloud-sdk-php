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
 * @method array getDetectTypes() 获取<p>拓展的目标及事件检测类别</p>
 * @method void setDetectTypes(array $DetectTypes) 设置<p>拓展的目标及事件检测类别</p>
 * @method boolean getEnableSearch() 获取<p>使该视频 / 图片录入搜索库，后续可进行搜索</p>
 * @method void setEnableSearch(boolean $EnableSearch) 设置<p>使该视频 / 图片录入搜索库，后续可进行搜索</p>
 * @method string getOutputLang() 获取<p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method void setOutputLang(string $OutputLang) 设置<p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method string getAlternativeOutputLang() 获取<p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method void setAlternativeOutputLang(string $AlternativeOutputLang) 设置<p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method string getMultiCameraLayout() 获取<p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
 * @method void setMultiCameraLayout(string $MultiCameraLayout) 设置<p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
 * @method integer getMaxDuration() 获取<p>最大处理的输入视频时长，单位：秒（仅对视频输入生效）</p>
 * @method void setMaxDuration(integer $MaxDuration) 设置<p>最大处理的输入视频时长，单位：秒（仅对视频输入生效）</p>
 */
class SeeComprehensionConfig extends AbstractModel
{
    /**
     * @var array <p>拓展的目标及事件检测类别</p>
     */
    public $DetectTypes;

    /**
     * @var boolean <p>使该视频 / 图片录入搜索库，后续可进行搜索</p>
     */
    public $EnableSearch;

    /**
     * @var string <p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     */
    public $OutputLang;

    /**
     * @var string <p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     */
    public $AlternativeOutputLang;

    /**
     * @var string <p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
     */
    public $MultiCameraLayout;

    /**
     * @var integer <p>最大处理的输入视频时长，单位：秒（仅对视频输入生效）</p>
     */
    public $MaxDuration;

    /**
     * @param array $DetectTypes <p>拓展的目标及事件检测类别</p>
     * @param boolean $EnableSearch <p>使该视频 / 图片录入搜索库，后续可进行搜索</p>
     * @param string $OutputLang <p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     * @param string $AlternativeOutputLang <p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     * @param string $MultiCameraLayout <p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
     * @param integer $MaxDuration <p>最大处理的输入视频时长，单位：秒（仅对视频输入生效）</p>
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
