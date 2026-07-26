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
 * @method CloneViralProduct getProduct() 获取<p>产品信息</p>
 * @method void setProduct(CloneViralProduct $Product) 设置<p>产品信息</p>
 * @method CloneViralAIGC getAIGCParam() 获取<p>AIGC生视频相关参数</p>
 * @method void setAIGCParam(CloneViralAIGC $AIGCParam) 设置<p>AIGC生视频相关参数</p>
 * @method CloneViralContent getContentParam() 获取<p>内容/风格相关参数</p>
 * @method void setContentParam(CloneViralContent $ContentParam) 设置<p>内容/风格相关参数</p>
 * @method CloneViralPersona getPersona() 获取<p>模特形象</p>
 * @method void setPersona(CloneViralPersona $Persona) 设置<p>模特形象</p>
 */
class CloneViralRequest extends AbstractModel
{
    /**
     * @var string <p>爆款视频Url</p>
     */
    public $VideoUrl;

    /**
     * @var CloneViralProduct <p>产品信息</p>
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
     * @param string $VideoUrl <p>爆款视频Url</p>
     * @param CloneViralProduct $Product <p>产品信息</p>
     * @param CloneViralAIGC $AIGCParam <p>AIGC生视频相关参数</p>
     * @param CloneViralContent $ContentParam <p>内容/风格相关参数</p>
     * @param CloneViralPersona $Persona <p>模特形象</p>
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
    }
}
