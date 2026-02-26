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
 * CreateGlossary请求参数结构体
 *
 * @method string getName() 获取术语库名称，限制50个字符
 * @method void setName(string $Name) 设置术语库名称，限制50个字符
 * @method string getSource() 获取源语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
 * @method void setSource(string $Source) 设置源语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
 * @method string getTarget() 获取目标语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
 * @method void setTarget(string $Target) 设置目标语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
 * @method string getDescription() 获取术语库描述，限制255个字符
 * @method void setDescription(string $Description) 设置术语库描述，限制255个字符
 */
class CreateGlossaryRequest extends AbstractModel
{
    /**
     * @var string 术语库名称，限制50个字符
     */
    public $Name;

    /**
     * @var string 源语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
     */
    public $Source;

    /**
     * @var string 目标语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
     */
    public $Target;

    /**
     * @var string 术语库描述，限制255个字符
     */
    public $Description;

    /**
     * @param string $Name 术语库名称，限制50个字符
     * @param string $Source 源语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
     * @param string $Target 目标语言代码，取值范围：zh(中文)、en(英语)、fr(法语)、pt(葡萄牙语)、es(西班牙语)、ja(日语)、tr(土耳其语)、ru(俄语)、ar(阿拉伯语)、ko(韩语)、th(泰语)、it(意大利语)、de(德语)、vi(越南语)、ms(马来语)、id(印尼语)、yue(粤语)、zh-TR(繁体中文)、hi(印地语)、fil(菲律宾语)、pl(波兰语)、cs(捷克语)、nl(荷兰语)、km(高棉语)、my(缅甸语)、fa(波斯语)、gu(古吉拉特语)、ur(乌尔都语)、te(泰卢固语)、mr(马拉地语)、he(希伯来语)、bn(孟加拉语)、ta(泰米尔语)、uk(乌克兰语)、bo(藏语)、kk(哈萨克语)、mn(蒙古语)、ug(维吾尔语)
     * @param string $Description 术语库描述，限制255个字符
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
