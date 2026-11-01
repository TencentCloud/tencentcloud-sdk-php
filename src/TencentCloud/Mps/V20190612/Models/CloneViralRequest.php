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
 * CloneViral请求参数结构体
 *
 * @method string getVideoUrl() 获取<p>爆款视频Url</p>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>爆款视频Url</p>
 * @method string getMode() 获取<p>处理类型</p><p>枚举值：</p><ul><li>script ： 脚本级爆款复刻</li><li>motion： 动作级爆款复刻</li><li>depth： 深度估计</li></ul>
 * @method void setMode(string $Mode) 设置<p>处理类型</p><p>枚举值：</p><ul><li>script ： 脚本级爆款复刻</li><li>motion： 动作级爆款复刻</li><li>depth： 深度估计</li></ul>
 * @method CloneViralProduct getProduct() 获取<p>产品信息。除深度提取外，其他模式必填</p>
 * @method void setProduct(CloneViralProduct $Product) 设置<p>产品信息。除深度提取外，其他模式必填</p>
 * @method CloneViralAIGC getAIGCParam() 获取<p>AIGC生视频相关参数</p>
 * @method void setAIGCParam(CloneViralAIGC $AIGCParam) 设置<p>AIGC生视频相关参数</p>
 * @method CloneViralContent getContentParam() 获取<p>内容/风格相关参数</p>
 * @method void setContentParam(CloneViralContent $ContentParam) 设置<p>内容/风格相关参数</p>
 * @method CloneViralPersona getPersona() 获取<p>模特形象</p>
 * @method void setPersona(CloneViralPersona $Persona) 设置<p>模特形象</p>
 * @method CloneViralOutputOption getOutput() 获取<p>输出相关参数</p>
 * @method void setOutput(CloneViralOutputOption $Output) 设置<p>输出相关参数</p>
 * @method CloneViralReference getReference() 获取<p>其他参考素材（如背景、服装）</p>
 * @method void setReference(CloneViralReference $Reference) 设置<p>其他参考素材（如背景、服装）</p>
 */
class CloneViralRequest extends AbstractModel
{
    /**
     * @var string <p>爆款视频Url</p>
     */
    public $VideoUrl;

    /**
     * @var string <p>处理类型</p><p>枚举值：</p><ul><li>script ： 脚本级爆款复刻</li><li>motion： 动作级爆款复刻</li><li>depth： 深度估计</li></ul>
     */
    public $Mode;

    /**
     * @var CloneViralProduct <p>产品信息。除深度提取外，其他模式必填</p>
     */
    public $Product;

    /**
     * @var CloneViralAIGC <p>AIGC生视频相关参数</p>
     */
    public $AIGCParam;

    /**
     * @var CloneViralContent <p>内容/风格相关参数</p>
     */
    public $ContentParam;

    /**
     * @var CloneViralPersona <p>模特形象</p>
     */
    public $Persona;

    /**
     * @var CloneViralOutputOption <p>输出相关参数</p>
     */
    public $Output;

    /**
     * @var CloneViralReference <p>其他参考素材（如背景、服装）</p>
     */
    public $Reference;

    /**
     * @param string $VideoUrl <p>爆款视频Url</p>
     * @param string $Mode <p>处理类型</p><p>枚举值：</p><ul><li>script ： 脚本级爆款复刻</li><li>motion： 动作级爆款复刻</li><li>depth： 深度估计</li></ul>
     * @param CloneViralProduct $Product <p>产品信息。除深度提取外，其他模式必填</p>
     * @param CloneViralAIGC $AIGCParam <p>AIGC生视频相关参数</p>
     * @param CloneViralContent $ContentParam <p>内容/风格相关参数</p>
     * @param CloneViralPersona $Persona <p>模特形象</p>
     * @param CloneViralOutputOption $Output <p>输出相关参数</p>
     * @param CloneViralReference $Reference <p>其他参考素材（如背景、服装）</p>
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = new CloneViralProduct();
            $this->Product->deserialize($param["Product"]);
        }

        if (array_key_exists("AIGCParam",$param) and $param["AIGCParam"] !== null) {
            $this->AIGCParam = new CloneViralAIGC();
            $this->AIGCParam->deserialize($param["AIGCParam"]);
        }

        if (array_key_exists("ContentParam",$param) and $param["ContentParam"] !== null) {
            $this->ContentParam = new CloneViralContent();
            $this->ContentParam->deserialize($param["ContentParam"]);
        }

        if (array_key_exists("Persona",$param) and $param["Persona"] !== null) {
            $this->Persona = new CloneViralPersona();
            $this->Persona->deserialize($param["Persona"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new CloneViralOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = new CloneViralReference();
            $this->Reference->deserialize($param["Reference"]);
        }
    }
}
