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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * value信息组
 *
 * @method string getAutoContent() 获取自动识别的字段内容
 * @method void setAutoContent(string $AutoContent) 设置自动识别的字段内容
 * @method Polygon getCoord() 获取四点坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoord(Polygon $Coord) 设置四点坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class Value extends AbstractModel
{
    /**
     * @var string 自动识别的字段内容
     */
    public $AutoContent;

    /**
     * @var Polygon 四点坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coord;

    /**
     * @param string $AutoContent 自动识别的字段内容
     * @param Polygon $Coord 四点坐标
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
        if (array_key_exists("AutoContent",$param) and $param["AutoContent"] !== null) {
            $this->AutoContent = $param["AutoContent"];
        }

        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = new Polygon();
            $this->Coord->deserialize($param["Coord"]);
        }
    }
}
