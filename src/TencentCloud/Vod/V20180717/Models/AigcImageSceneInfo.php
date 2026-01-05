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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景化 AIGC 生图配置。
 *
 * @method string getType() 获取AI生图场景类型，可选值：
- change_clothes：AI换衣。
- product_image：AI生商品图。
 * @method void setType(string $Type) 设置AI生图场景类型，可选值：
- change_clothes：AI换衣。
- product_image：AI生商品图。
 * @method ChangeClothesConfig getChangeClothesConfig() 获取当 Type 为 change_clothes 时有效，则该项为必填，表示AI 换衣生图配置参数。
 * @method void setChangeClothesConfig(ChangeClothesConfig $ChangeClothesConfig) 设置当 Type 为 change_clothes 时有效，则该项为必填，表示AI 换衣生图配置参数。
 * @method ProductImageConfig getProductImageConfig() 获取当 Type 为 product_image 时有效，表示AI 生商品图配置参数。
 * @method void setProductImageConfig(ProductImageConfig $ProductImageConfig) 设置当 Type 为 product_image 时有效，表示AI 生商品图配置参数。
 */
class AigcImageSceneInfo extends AbstractModel
{
    /**
     * @var string AI生图场景类型，可选值：
- change_clothes：AI换衣。
- product_image：AI生商品图。
     */
    public $Type;

    /**
     * @var ChangeClothesConfig 当 Type 为 change_clothes 时有效，则该项为必填，表示AI 换衣生图配置参数。
     */
    public $ChangeClothesConfig;

    /**
     * @var ProductImageConfig 当 Type 为 product_image 时有效，表示AI 生商品图配置参数。
     */
    public $ProductImageConfig;

    /**
     * @param string $Type AI生图场景类型，可选值：
- change_clothes：AI换衣。
- product_image：AI生商品图。
     * @param ChangeClothesConfig $ChangeClothesConfig 当 Type 为 change_clothes 时有效，则该项为必填，表示AI 换衣生图配置参数。
     * @param ProductImageConfig $ProductImageConfig 当 Type 为 product_image 时有效，表示AI 生商品图配置参数。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ChangeClothesConfig",$param) and $param["ChangeClothesConfig"] !== null) {
            $this->ChangeClothesConfig = new ChangeClothesConfig();
            $this->ChangeClothesConfig->deserialize($param["ChangeClothesConfig"]);
        }

        if (array_key_exists("ProductImageConfig",$param) and $param["ProductImageConfig"] !== null) {
            $this->ProductImageConfig = new ProductImageConfig();
            $this->ProductImageConfig->deserialize($param["ProductImageConfig"]);
        }
    }
}
