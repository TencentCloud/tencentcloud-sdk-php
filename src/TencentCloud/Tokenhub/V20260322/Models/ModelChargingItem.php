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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费条目
 *
 * @method string getPriceName() 获取<p>价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。</p>
 * @method void setPriceName(string $PriceName) 设置<p>价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。</p>
 * @method string getDisplayName() 获取<p>价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。</p>
 * @method string getPrice() 获取<p>价格数值。</p>
 * @method void setPrice(string $Price) 设置<p>价格数值。</p>
 * @method string getPriceUnit() 获取<p>价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。</p>
 * @method void setPriceUnit(string $PriceUnit) 设置<p>价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。</p>
 * @method string getPeakPrice() 获取<p>高峰价格，为空表示无高峰定价</p>
 * @method void setPeakPrice(string $PeakPrice) 设置<p>高峰价格，为空表示无高峰定价</p>
 * @method string getSpecification() 获取<p>规格描述，例如视觉/语音类模型有值（如 有参考视频 540P、图生视频 首帧 720P、动作控制 1080P、有声-未指定音色），其他模型为空。</p>
 * @method void setSpecification(string $Specification) 设置<p>规格描述，例如视觉/语音类模型有值（如 有参考视频 540P、图生视频 首帧 720P、动作控制 1080P、有声-未指定音色），其他模型为空。</p>
 * @method string getUsage() 获取<p>Token 用量描述，例如视觉/语音类模型有值（如 第1秒 62,500 Tokens，后续每秒 15,625 Tokens），其他模型为空。</p>
 * @method void setUsage(string $Usage) 设置<p>Token 用量描述，例如视觉/语音类模型有值（如 第1秒 62,500 Tokens，后续每秒 15,625 Tokens），其他模型为空。</p>
 * @method string getReferencePrice() 获取<p>参考费用/预估费用描述，例如视觉/语音类模型有值（如 第1秒 0.625 元，后续每秒 0.15625 元），其他模型为空。</p>
 * @method void setReferencePrice(string $ReferencePrice) 设置<p>参考费用/预估费用描述，例如视觉/语音类模型有值（如 第1秒 0.625 元，后续每秒 0.15625 元），其他模型为空。</p>
 */
class ModelChargingItem extends AbstractModel
{
    /**
     * @var string <p>价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。</p>
     */
    public $PriceName;

    /**
     * @var string <p>价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。</p>
     */
    public $DisplayName;

    /**
     * @var string <p>价格数值。</p>
     */
    public $Price;

    /**
     * @var string <p>价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。</p>
     */
    public $PriceUnit;

    /**
     * @var string <p>高峰价格，为空表示无高峰定价</p>
     */
    public $PeakPrice;

    /**
     * @var string <p>规格描述，例如视觉/语音类模型有值（如 有参考视频 540P、图生视频 首帧 720P、动作控制 1080P、有声-未指定音色），其他模型为空。</p>
     */
    public $Specification;

    /**
     * @var string <p>Token 用量描述，例如视觉/语音类模型有值（如 第1秒 62,500 Tokens，后续每秒 15,625 Tokens），其他模型为空。</p>
     */
    public $Usage;

    /**
     * @var string <p>参考费用/预估费用描述，例如视觉/语音类模型有值（如 第1秒 0.625 元，后续每秒 0.15625 元），其他模型为空。</p>
     */
    public $ReferencePrice;

    /**
     * @param string $PriceName <p>价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。</p>
     * @param string $DisplayName <p>价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。</p>
     * @param string $Price <p>价格数值。</p>
     * @param string $PriceUnit <p>价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。</p>
     * @param string $PeakPrice <p>高峰价格，为空表示无高峰定价</p>
     * @param string $Specification <p>规格描述，例如视觉/语音类模型有值（如 有参考视频 540P、图生视频 首帧 720P、动作控制 1080P、有声-未指定音色），其他模型为空。</p>
     * @param string $Usage <p>Token 用量描述，例如视觉/语音类模型有值（如 第1秒 62,500 Tokens，后续每秒 15,625 Tokens），其他模型为空。</p>
     * @param string $ReferencePrice <p>参考费用/预估费用描述，例如视觉/语音类模型有值（如 第1秒 0.625 元，后续每秒 0.15625 元），其他模型为空。</p>
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
        if (array_key_exists("PriceName",$param) and $param["PriceName"] !== null) {
            $this->PriceName = $param["PriceName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("PriceUnit",$param) and $param["PriceUnit"] !== null) {
            $this->PriceUnit = $param["PriceUnit"];
        }

        if (array_key_exists("PeakPrice",$param) and $param["PeakPrice"] !== null) {
            $this->PeakPrice = $param["PeakPrice"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("ReferencePrice",$param) and $param["ReferencePrice"] !== null) {
            $this->ReferencePrice = $param["ReferencePrice"];
        }
    }
}
