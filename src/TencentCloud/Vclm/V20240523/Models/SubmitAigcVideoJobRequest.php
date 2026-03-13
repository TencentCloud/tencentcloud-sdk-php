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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitAigcVideoJob请求参数结构体
 *
 * @method string getVendor() 获取<p>模型名称。</p><p>枚举值：</p><p>● Vidu；</p><p>● Kling：可灵；</p><p>● HY：混元；</p><p>● YT：优图；</p><p>示例值：Vidu</p>
 * @method void setVendor(string $Vendor) 设置<p>模型名称。</p><p>枚举值：</p><p>● Vidu；</p><p>● Kling：可灵；</p><p>● HY：混元；</p><p>● YT：优图；</p><p>示例值：Vidu</p>
 * @method string getModel() 获取<p>模型版本。</p><p>枚举值：</p><p>● 当Vendor为Vidu时，可选值[q2, q2-pro, q2-turbo, q3-pro, q3-turbo]</p><p>● 当Vendor为Kling时，可选值[v1.6, v2.0, v2.1, v2.5, v2.6]</p><p>● 当Vendor为HY时，默认值：[v1.5]</p><p>● 当Vendor为YT时，默认值：[v2.0]</p>
 * @method void setModel(string $Model) 设置<p>模型版本。</p><p>枚举值：</p><p>● 当Vendor为Vidu时，可选值[q2, q2-pro, q2-turbo, q3-pro, q3-turbo]</p><p>● 当Vendor为Kling时，可选值[v1.6, v2.0, v2.1, v2.5, v2.6]</p><p>● 当Vendor为HY时，默认值：[v1.5]</p><p>● 当Vendor为YT时，默认值：[v2.0]</p>
 * @method string getModelParam() 获取<p>模型参数Json-Format字符串<br> <a href="https://cloud.tencent.com/document/product/1616/128996">模型参数列表</a></p>
 * @method void setModelParam(string $ModelParam) 设置<p>模型参数Json-Format字符串<br> <a href="https://cloud.tencent.com/document/product/1616/128996">模型参数列表</a></p>
 * @method string getPrompt() 获取<p>正向文本提示词。不能超过2000个字符</p><p>示例值：一只小猫在草地奔跑</p>
 * @method void setPrompt(string $Prompt) 设置<p>正向文本提示词。不能超过2000个字符</p><p>示例值：一只小猫在草地奔跑</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加显式水印标识的开关，默认为1。<br>1：添加。<br>0：不添加。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。<br>示例值：1</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加显式水印标识的开关，默认为1。<br>1：添加。<br>0：不添加。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。<br>示例值：1</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 */
class SubmitAigcVideoJobRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称。</p><p>枚举值：</p><p>● Vidu；</p><p>● Kling：可灵；</p><p>● HY：混元；</p><p>● YT：优图；</p><p>示例值：Vidu</p>
     */
    public $Vendor;

    /**
     * @var string <p>模型版本。</p><p>枚举值：</p><p>● 当Vendor为Vidu时，可选值[q2, q2-pro, q2-turbo, q3-pro, q3-turbo]</p><p>● 当Vendor为Kling时，可选值[v1.6, v2.0, v2.1, v2.5, v2.6]</p><p>● 当Vendor为HY时，默认值：[v1.5]</p><p>● 当Vendor为YT时，默认值：[v2.0]</p>
     */
    public $Model;

    /**
     * @var string <p>模型参数Json-Format字符串<br> <a href="https://cloud.tencent.com/document/product/1616/128996">模型参数列表</a></p>
     */
    public $ModelParam;

    /**
     * @var string <p>正向文本提示词。不能超过2000个字符</p><p>示例值：一只小猫在草地奔跑</p>
     */
    public $Prompt;

    /**
     * @var integer <p>为生成结果图添加显式水印标识的开关，默认为1。<br>1：添加。<br>0：不添加。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。<br>示例值：1</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @param string $Vendor <p>模型名称。</p><p>枚举值：</p><p>● Vidu；</p><p>● Kling：可灵；</p><p>● HY：混元；</p><p>● YT：优图；</p><p>示例值：Vidu</p>
     * @param string $Model <p>模型版本。</p><p>枚举值：</p><p>● 当Vendor为Vidu时，可选值[q2, q2-pro, q2-turbo, q3-pro, q3-turbo]</p><p>● 当Vendor为Kling时，可选值[v1.6, v2.0, v2.1, v2.5, v2.6]</p><p>● 当Vendor为HY时，默认值：[v1.5]</p><p>● 当Vendor为YT时，默认值：[v2.0]</p>
     * @param string $ModelParam <p>模型参数Json-Format字符串<br> <a href="https://cloud.tencent.com/document/product/1616/128996">模型参数列表</a></p>
     * @param string $Prompt <p>正向文本提示词。不能超过2000个字符</p><p>示例值：一只小猫在草地奔跑</p>
     * @param integer $LogoAdd <p>为生成结果图添加显式水印标识的开关，默认为1。<br>1：添加。<br>0：不添加。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。<br>示例值：1</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("ModelParam",$param) and $param["ModelParam"] !== null) {
            $this->ModelParam = $param["ModelParam"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
