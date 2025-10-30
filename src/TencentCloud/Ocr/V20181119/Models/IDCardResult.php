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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IDCardResult
 *
 * @method IDCardInfoResult getFront() 获取正面结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFront(IDCardInfoResult $Front) 设置正面结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method IDCardInfoResult getBack() 获取反面结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBack(IDCardInfoResult $Back) 设置反面结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class IDCardResult extends AbstractModel
{
    /**
     * @var IDCardInfoResult 正面结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Front;

    /**
     * @var IDCardInfoResult 反面结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Back;

    /**
     * @param IDCardInfoResult $Front 正面结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param IDCardInfoResult $Back 反面结果
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
        if (array_key_exists("Front",$param) and $param["Front"] !== null) {
            $this->Front = new IDCardInfoResult();
            $this->Front->deserialize($param["Front"]);
        }

        if (array_key_exists("Back",$param) and $param["Back"] !== null) {
            $this->Back = new IDCardInfoResult();
            $this->Back->deserialize($param["Back"]);
        }
    }
}
