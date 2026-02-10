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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatTranslations请求参数结构体
 *
 * @method string getModel() 获取模型名称，可选值包括 hunyuan-translation、hunyuan-translation-lite。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
 * @method void setModel(string $Model) 设置模型名称，可选值包括 hunyuan-translation、hunyuan-translation-lite。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
 * @method boolean getStream() 获取流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
 * @method void setStream(boolean $Stream) 设置流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
 * @method string getText() 获取待翻译的文本
 * @method void setText(string $Text) 设置待翻译的文本
 * @method string getSource() 获取源语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
 * @method void setSource(string $Source) 设置源语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
 * @method string getTarget() 获取目标语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
 * @method void setTarget(string $Target) 设置目标语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
 * @method string getField() 获取待翻译文本所属领域，例如游戏剧情等
 * @method void setField(string $Field) 设置待翻译文本所属领域，例如游戏剧情等
 * @method array getReferences() 获取参考示例，最多10个
 * @method void setReferences(array $References) 设置参考示例，最多10个
 * @method array getGlossaryIDs() 获取关联的术语库 ID 列表，用于术语翻译，最大支持5个术语库
 * @method void setGlossaryIDs(array $GlossaryIDs) 设置关联的术语库 ID 列表，用于术语翻译，最大支持5个术语库
 */
class ChatTranslationsRequest extends AbstractModel
{
    /**
     * @var string 模型名称，可选值包括 hunyuan-translation、hunyuan-translation-lite。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
     */
    public $Model;

    /**
     * @var boolean 流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
     */
    public $Stream;

    /**
     * @var string 待翻译的文本
     */
    public $Text;

    /**
     * @var string 源语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
     */
    public $Source;

    /**
     * @var string 目标语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
     */
    public $Target;

    /**
     * @var string 待翻译文本所属领域，例如游戏剧情等
     */
    public $Field;

    /**
     * @var array 参考示例，最多10个
     */
    public $References;

    /**
     * @var array 关联的术语库 ID 列表，用于术语翻译，最大支持5个术语库
     */
    public $GlossaryIDs;

    /**
     * @param string $Model 模型名称，可选值包括 hunyuan-translation、hunyuan-translation-lite。
各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。

注意：
不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
     * @param boolean $Stream 流式调用开关。
说明：
1. 未传值时默认为非流式调用（false）。
2. 流式调用时以 SSE 协议增量返回结果（返回值取 Choices[n].Delta 中的值，需要拼接增量数据才能获得完整结果）。
3. 非流式调用时：
调用方式与普通 HTTP 请求无异。
接口响应耗时较长，**如需更低时延建议设置为 true**。
只返回一次最终结果（返回值取 Choices[n].Message 中的值）。

注意：
通过 SDK 调用时，流式和非流式调用需用**不同的方式**获取返回值，具体参考 SDK 中的注释或示例（在各语言 SDK 代码仓库的 examples/hunyuan/v20230901/ 目录中）。
     * @param string $Text 待翻译的文本
     * @param string $Source 源语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
     * @param string $Target 目标语言。
支持语言列表: 
简体中文：zh，繁体中文：zh-TR，粤语：yue，英语：en，法语：fr，葡萄牙语：pt，西班牙语：es，日语：ja，土耳其语：tr，俄语：ru，阿拉伯语：ar，韩语：ko，泰语：th，意大利语：it，德语：de，越南语：vi，马来语：ms，印尼语：id
以下语种仅 hunyuan-translation 模型支持：
菲律宾语：fil，印地语：hi，波兰语：pl，捷克语：cs，荷兰语：nl，高棉语：km，缅甸语：my，波斯语：fa，古吉拉特语：gu，乌尔都语：ur，泰卢固语：te，马拉地语：mr，希伯来语：he，孟加拉语：bn，泰米尔语：ta，乌克兰语：uk，藏语：bo，哈萨克语：kk，蒙古语：mn，维吾尔语：ug
     * @param string $Field 待翻译文本所属领域，例如游戏剧情等
     * @param array $References 参考示例，最多10个
     * @param array $GlossaryIDs 关联的术语库 ID 列表，用于术语翻译，最大支持5个术语库
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new Reference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("GlossaryIDs",$param) and $param["GlossaryIDs"] !== null) {
            $this->GlossaryIDs = $param["GlossaryIDs"];
        }
    }
}
