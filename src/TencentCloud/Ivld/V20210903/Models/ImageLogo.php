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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片中出现的Logo信息
 *
 * @method string getLogo() 获取图片中出现的Logo识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogo(string $Logo) 设置图片中出现的Logo识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method Rectf getAppearRect() 获取Logo在图片中出现的位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppearRect(Rectf $AppearRect) 设置Logo在图片中出现的位置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageLogo extends AbstractModel
{
    /**
     * @var string 图片中出现的Logo识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logo;

    /**
     * @var Rectf Logo在图片中出现的位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppearRect;

    /**
     * @param string $Logo 图片中出现的Logo识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param Rectf $AppearRect Logo在图片中出现的位置
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
        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("AppearRect",$param) and $param["AppearRect"] !== null) {
            $this->AppearRect = new Rectf();
            $this->AppearRect->deserialize($param["AppearRect"]);
        }
    }
}
