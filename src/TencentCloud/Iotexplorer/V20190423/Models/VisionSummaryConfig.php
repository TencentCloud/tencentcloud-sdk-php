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
 * 视频摘要配置
 *
 * @method string getOutputLang() 获取主输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

 * @method void setOutputLang(string $OutputLang) 设置主输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

 * @method string getAlternativeOutputLang() 获取可选输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

 * @method void setAlternativeOutputLang(string $AlternativeOutputLang) 设置可选输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

 * @method string getMultiCameraLayout() 获取多摄像头布局定义。可能取值：

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
 * @method void setMultiCameraLayout(string $MultiCameraLayout) 设置多摄像头布局定义。可能取值：

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
class VisionSummaryConfig extends AbstractModel
{
    /**
     * @var string 主输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

     */
    public $OutputLang;

    /**
     * @var string 可选输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

     */
    public $AlternativeOutputLang;

    /**
     * @var string 多摄像头布局定义。可能取值：

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
     * @param string $OutputLang 主输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

     * @param string $AlternativeOutputLang 可选输出语言

支持列表如下：
zh 中文
en 英语
ja 日语
ko 韩文
pt-BR 葡萄牙语（巴西）
th 泰语

     * @param string $MultiCameraLayout 多摄像头布局定义。可能取值：

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
        if (array_key_exists("OutputLang",$param) and $param["OutputLang"] !== null) {
            $this->OutputLang = $param["OutputLang"];
        }

        if (array_key_exists("AlternativeOutputLang",$param) and $param["AlternativeOutputLang"] !== null) {
            $this->AlternativeOutputLang = $param["AlternativeOutputLang"];
        }

        if (array_key_exists("MultiCameraLayout",$param) and $param["MultiCameraLayout"] !== null) {
            $this->MultiCameraLayout = $param["MultiCameraLayout"];
        }
    }
}
