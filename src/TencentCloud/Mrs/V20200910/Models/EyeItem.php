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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 眼科结构体
 *
 * @method EyeChildItem getLeft() 获取左眼
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeft(EyeChildItem $Left) 设置左眼
注意：此字段可能返回 null，表示取不到有效值。
 * @method EyeChildItem getRight() 获取右眼
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRight(EyeChildItem $Right) 设置右眼
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem2 getPd() 获取瞳距
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPd(BaseItem2 $Pd) 设置瞳距
注意：此字段可能返回 null，表示取不到有效值。
 */
class EyeItem extends AbstractModel
{
    /**
     * @var EyeChildItem 左眼
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Left;

    /**
     * @var EyeChildItem 右眼
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Right;

    /**
     * @var BaseItem2 瞳距
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pd;

    /**
     * @param EyeChildItem $Left 左眼
注意：此字段可能返回 null，表示取不到有效值。
     * @param EyeChildItem $Right 右眼
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem2 $Pd 瞳距
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
        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = new EyeChildItem();
            $this->Left->deserialize($param["Left"]);
        }

        if (array_key_exists("Right",$param) and $param["Right"] !== null) {
            $this->Right = new EyeChildItem();
            $this->Right->deserialize($param["Right"]);
        }

        if (array_key_exists("Pd",$param) and $param["Pd"] !== null) {
            $this->Pd = new BaseItem2();
            $this->Pd->deserialize($param["Pd"]);
        }
    }
}
