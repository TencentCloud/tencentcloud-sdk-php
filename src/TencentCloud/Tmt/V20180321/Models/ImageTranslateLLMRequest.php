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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageTranslateLLM请求参数结构体
 *
 * @method string getData() 获取图片数据的Base64字符串，经Base64编码后不超过 9M，分辨率建议600*800以上，支持PNG、JPG、JPEG格式。
 * @method void setData(string $Data) 设置图片数据的Base64字符串，经Base64编码后不超过 9M，分辨率建议600*800以上，支持PNG、JPG、JPEG格式。
 * @method string getTarget() 获取目标语言，支持语言列表：

- 中文：zh
- 繁体（中国台湾）：zh-TW
- 繁体（中国香港）：zh-HK
- 英文：en
- 日语：ja
- 韩语：ko
- 泰语：th
- 越南语：vi
- 俄语：ru
- 德语：de
- 法语：fr
- 阿拉伯语：ar
- 西班牙语：es
- 意大利语：it
- 印度尼西亚语：id
- 马来西亚语：ms
- 葡萄牙语：pt
- 土耳其语：tr
- 
 * @method void setTarget(string $Target) 设置目标语言，支持语言列表：

- 中文：zh
- 繁体（中国台湾）：zh-TW
- 繁体（中国香港）：zh-HK
- 英文：en
- 日语：ja
- 韩语：ko
- 泰语：th
- 越南语：vi
- 俄语：ru
- 德语：de
- 法语：fr
- 阿拉伯语：ar
- 西班牙语：es
- 意大利语：it
- 印度尼西亚语：id
- 马来西亚语：ms
- 葡萄牙语：pt
- 土耳其语：tr
- 
 * @method string getUrl() 获取输入图 Url。 使用Url的时候，Data参数需要传入""。 图片限制：小于 10MB，分辨率建议600*800以上，格式支持 jpg、jpeg、png。

 * @method void setUrl(string $Url) 设置输入图 Url。 使用Url的时候，Data参数需要传入""。 图片限制：小于 10MB，分辨率建议600*800以上，格式支持 jpg、jpeg、png。
 */
class ImageTranslateLLMRequest extends AbstractModel
{
    /**
     * @var string 图片数据的Base64字符串，经Base64编码后不超过 9M，分辨率建议600*800以上，支持PNG、JPG、JPEG格式。
     */
    public $Data;

    /**
     * @var string 目标语言，支持语言列表：

- 中文：zh
- 繁体（中国台湾）：zh-TW
- 繁体（中国香港）：zh-HK
- 英文：en
- 日语：ja
- 韩语：ko
- 泰语：th
- 越南语：vi
- 俄语：ru
- 德语：de
- 法语：fr
- 阿拉伯语：ar
- 西班牙语：es
- 意大利语：it
- 印度尼西亚语：id
- 马来西亚语：ms
- 葡萄牙语：pt
- 土耳其语：tr
- 
     */
    public $Target;

    /**
     * @var string 输入图 Url。 使用Url的时候，Data参数需要传入""。 图片限制：小于 10MB，分辨率建议600*800以上，格式支持 jpg、jpeg、png。

     */
    public $Url;

    /**
     * @param string $Data 图片数据的Base64字符串，经Base64编码后不超过 9M，分辨率建议600*800以上，支持PNG、JPG、JPEG格式。
     * @param string $Target 目标语言，支持语言列表：

- 中文：zh
- 繁体（中国台湾）：zh-TW
- 繁体（中国香港）：zh-HK
- 英文：en
- 日语：ja
- 韩语：ko
- 泰语：th
- 越南语：vi
- 俄语：ru
- 德语：de
- 法语：fr
- 阿拉伯语：ar
- 西班牙语：es
- 意大利语：it
- 印度尼西亚语：id
- 马来西亚语：ms
- 葡萄牙语：pt
- 土耳其语：tr
- 
     * @param string $Url 输入图 Url。 使用Url的时候，Data参数需要传入""。 图片限制：小于 10MB，分辨率建议600*800以上，格式支持 jpg、jpeg、png。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
