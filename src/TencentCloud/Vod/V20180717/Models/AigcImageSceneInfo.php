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
 * @method string getType() 获取<p>AI生图场景类型，可选值：</p><ul><li><code>ai_try_on</code>：AI 换装。</li><li><code>product_image</code>：AI 生商品图。</li><li><code>outpainting</code>: AI 扩图。</li></ul><p>下列 <code>Type</code> 已废弃，后续不再更新：</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
 * @method void setType(string $Type) 设置<p>AI生图场景类型，可选值：</p><ul><li><code>ai_try_on</code>：AI 换装。</li><li><code>product_image</code>：AI 生商品图。</li><li><code>outpainting</code>: AI 扩图。</li></ul><p>下列 <code>Type</code> 已废弃，后续不再更新：</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
 * @method AiTryOnConfig getAiTryOnConfig() 获取<p>当 Type 为 ai_try_on 时必填，表示 AI 换装配置参数。</p>
 * @method void setAiTryOnConfig(AiTryOnConfig $AiTryOnConfig) 设置<p>当 Type 为 ai_try_on 时必填，表示 AI 换装配置参数。</p>
 * @method ChangeClothesConfig getChangeClothesConfig() 获取<p><strong>已废弃，请使用AiTryOnConfig。</strong>当 Type 下列类型时，则该项为必填，表示AI 换衣生图配置参数：</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
 * @method void setChangeClothesConfig(ChangeClothesConfig $ChangeClothesConfig) 设置<p><strong>已废弃，请使用AiTryOnConfig。</strong>当 Type 下列类型时，则该项为必填，表示AI 换衣生图配置参数：</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
 * @method ProductImageConfig getProductImageConfig() 获取<p>当 Type 为 product_image 时必填，表示AI 生商品图配置参数。</p>
 * @method void setProductImageConfig(ProductImageConfig $ProductImageConfig) 设置<p>当 Type 为 product_image 时必填，表示AI 生商品图配置参数。</p>
 */
class AigcImageSceneInfo extends AbstractModel
{
    /**
     * @var string <p>AI生图场景类型，可选值：</p><ul><li><code>ai_try_on</code>：AI 换装。</li><li><code>product_image</code>：AI 生商品图。</li><li><code>outpainting</code>: AI 扩图。</li></ul><p>下列 <code>Type</code> 已废弃，后续不再更新：</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
     */
    public $Type;

    /**
     * @var AiTryOnConfig <p>当 Type 为 ai_try_on 时必填，表示 AI 换装配置参数。</p>
     */
    public $AiTryOnConfig;

    /**
     * @var ChangeClothesConfig <p><strong>已废弃，请使用AiTryOnConfig。</strong>当 Type 下列类型时，则该项为必填，表示AI 换衣生图配置参数：</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
     */
    public $ChangeClothesConfig;

    /**
     * @var ProductImageConfig <p>当 Type 为 product_image 时必填，表示AI 生商品图配置参数。</p>
     */
    public $ProductImageConfig;

    /**
     * @param string $Type <p>AI生图场景类型，可选值：</p><ul><li><code>ai_try_on</code>：AI 换装。</li><li><code>product_image</code>：AI 生商品图。</li><li><code>outpainting</code>: AI 扩图。</li></ul><p>下列 <code>Type</code> 已废弃，后续不再更新：</p><ul><li><code>change_clothes</code></li><li><code>change_clothes_under</code></li><li><code>change_clothes_top_wear</code></li><li><code>change_clothes_bottom_wear</code></li><li><code>change_clothes_full_wear</code></li></ul>
     * @param AiTryOnConfig $AiTryOnConfig <p>当 Type 为 ai_try_on 时必填，表示 AI 换装配置参数。</p>
     * @param ChangeClothesConfig $ChangeClothesConfig <p><strong>已废弃，请使用AiTryOnConfig。</strong>当 Type 下列类型时，则该项为必填，表示AI 换衣生图配置参数：</p><ul><li>change_clothes</li><li>change_clothes_under</li></ul>
     * @param ProductImageConfig $ProductImageConfig <p>当 Type 为 product_image 时必填，表示AI 生商品图配置参数。</p>
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

        if (array_key_exists("AiTryOnConfig",$param) and $param["AiTryOnConfig"] !== null) {
            $this->AiTryOnConfig = new AiTryOnConfig();
            $this->AiTryOnConfig->deserialize($param["AiTryOnConfig"]);
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
