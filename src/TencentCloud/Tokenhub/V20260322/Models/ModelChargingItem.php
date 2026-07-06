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
 * @method string getPriceName() 获取价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。
 * @method void setPriceName(string $PriceName) 设置价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。
 * @method string getDisplayName() 获取价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。
 * @method void setDisplayName(string $DisplayName) 设置价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。
 * @method string getPrice() 获取价格数值。
 * @method void setPrice(string $Price) 设置价格数值。
 * @method string getPriceUnit() 获取价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。
 * @method void setPriceUnit(string $PriceUnit) 设置价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。
 */
class ModelChargingItem extends AbstractModel
{
    /**
     * @var string 价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。
     */
    public $PriceName;

    /**
     * @var string 价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。
     */
    public $DisplayName;

    /**
     * @var string 价格数值。
     */
    public $Price;

    /**
     * @var string 价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。
     */
    public $PriceUnit;

    /**
     * @param string $PriceName 价格维度标识。取值：Input（输入）、Output（输出）、Cache（缓存命中）、Thinking（思考）、BatchInput（批量输入）、BatchOutput（批量输出）、BatchCache（批量缓存命中）、ImageInput（输入图片）、ImageOutput（输出图片）、Search（搜索调用）。
     * @param string $DisplayName 价格维度展示名，后端直接提供当前语言文本（如 输入、Input），前端无需翻译。
     * @param string $Price 价格数值。
     * @param string $PriceUnit 价格单位，后端直接提供当前语言文本（如 元/百万tokens、元/张、积分/次）。
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
    }
}
