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
 * ocr结果信息
 *
 * @method IDCardResult getIDCardResult() 获取身份证结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIDCardResult(IDCardResult $IDCardResult) 设置身份证结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class OCRResult extends AbstractModel
{
    /**
     * @var IDCardResult 身份证结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IDCardResult;

    /**
     * @param IDCardResult $IDCardResult 身份证结果
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
        if (array_key_exists("IDCardResult",$param) and $param["IDCardResult"] !== null) {
            $this->IDCardResult = new IDCardResult();
            $this->IDCardResult->deserialize($param["IDCardResult"]);
        }
    }
}
