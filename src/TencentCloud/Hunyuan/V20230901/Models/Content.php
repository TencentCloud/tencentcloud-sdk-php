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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可以传入多种类型的内容，如图片或文本。当前只支持传入单张图片，传入多张图片时，以第一个图片为准。
 *
 * @method string getType() 获取内容类型
注意：
当前只支持传入单张图片，传入多张图片时，以第一个图片为准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置内容类型
注意：
当前只支持传入单张图片，传入多张图片时，以第一个图片为准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取当 Type 为 text 时使用，表示具体的文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置当 Type 为 text 时使用，表示具体的文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageUrl getImageUrl() 获取当 Type 为 image_url 时使用，表示具体的图片内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrl(ImageUrl $ImageUrl) 设置当 Type 为 image_url 时使用，表示具体的图片内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class Content extends AbstractModel
{
    /**
     * @var string 内容类型
注意：
当前只支持传入单张图片，传入多张图片时，以第一个图片为准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 当 Type 为 text 时使用，表示具体的文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var ImageUrl 当 Type 为 image_url 时使用，表示具体的图片内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrl;

    /**
     * @param string $Type 内容类型
注意：
当前只支持传入单张图片，传入多张图片时，以第一个图片为准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 当 Type 为 text 时使用，表示具体的文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageUrl $ImageUrl 当 Type 为 image_url 时使用，表示具体的图片内容
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = new ImageUrl();
            $this->ImageUrl->deserialize($param["ImageUrl"]);
        }
    }
}
