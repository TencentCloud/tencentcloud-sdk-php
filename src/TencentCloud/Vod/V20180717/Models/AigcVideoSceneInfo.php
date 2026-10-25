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
 * @method string getType() 获取<p>AIGC 生视频场景类型。</p><p>枚举值：</p><ul><li>product_showcase：  产品360度展示。</li><li>character_scene： 角色场景。</li></ul>
 * @method void setType(string $Type) 设置<p>AIGC 生视频场景类型。</p><p>枚举值：</p><ul><li>product_showcase：  产品360度展示。</li><li>character_scene： 角色场景。</li></ul>
 * @method ProductShowcaseConfig getProductShowcaseConfig() 获取<p>产品展示参数配置。</p>
 * @method void setProductShowcaseConfig(ProductShowcaseConfig $ProductShowcaseConfig) 设置<p>产品展示参数配置。</p>
 * @method CharacterSceneConfig getCharacterSceneConfig() 获取<p>角色场景参数配置。</p>
 * @method void setCharacterSceneConfig(CharacterSceneConfig $CharacterSceneConfig) 设置<p>角色场景参数配置。</p>
 */
class AigcVideoSceneInfo extends AbstractModel
{
    /**
     * @var string <p>AIGC 生视频场景类型。</p><p>枚举值：</p><ul><li>product_showcase：  产品360度展示。</li><li>character_scene： 角色场景。</li></ul>
     */
    public $Type;

    /**
     * @var ProductShowcaseConfig <p>产品展示参数配置。</p>
     */
    public $ProductShowcaseConfig;

    /**
     * @var CharacterSceneConfig <p>角色场景参数配置。</p>
     */
    public $CharacterSceneConfig;

    /**
     * @param string $Type <p>AIGC 生视频场景类型。</p><p>枚举值：</p><ul><li>product_showcase：  产品360度展示。</li><li>character_scene： 角色场景。</li></ul>
     * @param ProductShowcaseConfig $ProductShowcaseConfig <p>产品展示参数配置。</p>
     * @param CharacterSceneConfig $CharacterSceneConfig <p>角色场景参数配置。</p>
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

        if (array_key_exists("ProductShowcaseConfig",$param) and $param["ProductShowcaseConfig"] !== null) {
            $this->ProductShowcaseConfig = new ProductShowcaseConfig();
            $this->ProductShowcaseConfig->deserialize($param["ProductShowcaseConfig"]);
        }

        if (array_key_exists("CharacterSceneConfig",$param) and $param["CharacterSceneConfig"] !== null) {
            $this->CharacterSceneConfig = new CharacterSceneConfig();
            $this->CharacterSceneConfig->deserialize($param["CharacterSceneConfig"]);
        }
    }
}
