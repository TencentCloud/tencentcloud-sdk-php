<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景配置
 *
 * @method string getScene() 获取场景名称
 * @method void setScene(string $Scene) 设置场景名称
 * @method string getLogoUrl() 获取logo地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogoUrl(string $LogoUrl) 设置logo地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHomeUrl() 获取主页地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHomeUrl(string $HomeUrl) 设置主页地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJSUrl() 获取自定义的js
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJSUrl(string $JSUrl) 设置自定义的js
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCSSUrl() 获取自定义的css
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCSSUrl(string $CSSUrl) 设置自定义的css
注意：此字段可能返回 null，表示取不到有效值。
 */
class SceneItem extends AbstractModel
{
    /**
     * @var string 场景名称
     */
    public $Scene;

    /**
     * @var string logo地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogoUrl;

    /**
     * @var string 主页地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HomeUrl;

    /**
     * @var string 自定义的js
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JSUrl;

    /**
     * @var string 自定义的css
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CSSUrl;

    /**
     * @param string $Scene 场景名称
     * @param string $LogoUrl logo地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HomeUrl 主页地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JSUrl 自定义的js
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CSSUrl 自定义的css
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("LogoUrl",$param) and $param["LogoUrl"] !== null) {
            $this->LogoUrl = $param["LogoUrl"];
        }

        if (array_key_exists("HomeUrl",$param) and $param["HomeUrl"] !== null) {
            $this->HomeUrl = $param["HomeUrl"];
        }

        if (array_key_exists("JSUrl",$param) and $param["JSUrl"] !== null) {
            $this->JSUrl = $param["JSUrl"];
        }

        if (array_key_exists("CSSUrl",$param) and $param["CSSUrl"] !== null) {
            $this->CSSUrl = $param["CSSUrl"];
        }
    }
}
