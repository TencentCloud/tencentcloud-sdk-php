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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePayType请求参数结构体
 *
 * @method string getArea() 获取指定服务地域查询
mainland：境内计费方式查询
overseas：境外计费方式查询
global：全球计费方式查询
未填充时，默认为 mainland
 * @method void setArea(string $Area) 设置指定服务地域查询
mainland：境内计费方式查询
overseas：境外计费方式查询
global：全球计费方式查询
未填充时，默认为 mainland
 * @method string getProduct() 获取指定查询的产品数据，可选为cdn或者ecdn，默认为cdn
 * @method void setProduct(string $Product) 设置指定查询的产品数据，可选为cdn或者ecdn，默认为cdn
 * @method string getType() 获取指定资源包查询
flux：流量包
https：HTTPS请求包
未填充时，默认为 flux
 * @method void setType(string $Type) 设置指定资源包查询
flux：流量包
https：HTTPS请求包
未填充时，默认为 flux
 */
class DescribePayTypeRequest extends AbstractModel
{
    /**
     * @var string 指定服务地域查询
mainland：境内计费方式查询
overseas：境外计费方式查询
global：全球计费方式查询
未填充时，默认为 mainland
     */
    public $Area;

    /**
     * @var string 指定查询的产品数据，可选为cdn或者ecdn，默认为cdn
     */
    public $Product;

    /**
     * @var string 指定资源包查询
flux：流量包
https：HTTPS请求包
未填充时，默认为 flux
     */
    public $Type;

    /**
     * @param string $Area 指定服务地域查询
mainland：境内计费方式查询
overseas：境外计费方式查询
global：全球计费方式查询
未填充时，默认为 mainland
     * @param string $Product 指定查询的产品数据，可选为cdn或者ecdn，默认为cdn
     * @param string $Type 指定资源包查询
flux：流量包
https：HTTPS请求包
未填充时，默认为 flux
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
