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
 * @method string getType() 获取AI生视频场景类型，可选值：
- product_showcase： 产品360度展示。
 * @method void setType(string $Type) 设置AI生视频场景类型，可选值：
- product_showcase： 产品360度展示。
 * @method ProductShowcaseConfig getProductShowcaseConfig() 获取产品展示参数
 * @method void setProductShowcaseConfig(ProductShowcaseConfig $ProductShowcaseConfig) 设置产品展示参数
 */
class AigcVideoSceneInfo extends AbstractModel
{
    /**
     * @var string AI生视频场景类型，可选值：
- product_showcase： 产品360度展示。
     */
    public $Type;

    /**
     * @var ProductShowcaseConfig 产品展示参数
     */
    public $ProductShowcaseConfig;

    /**
     * @param string $Type AI生视频场景类型，可选值：
- product_showcase： 产品360度展示。
     * @param ProductShowcaseConfig $ProductShowcaseConfig 产品展示参数
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
    }
}
