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
 * 文档智能元素组
 *
 * @method Key getKey() 获取<p>key信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(Key $Key) 设置<p>key信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Value getValue() 获取<p>Value信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(Value $Value) 设置<p>Value信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAuditResult() 获取<p>返回这个字段是否比对审核通过</p><p>默认值：false</p>
 * @method void setAuditResult(boolean $AuditResult) 设置<p>返回这个字段是否比对审核通过</p><p>默认值：false</p>
 */
class ItemInfo extends AbstractModel
{
    /**
     * @var Key <p>key信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var Value <p>Value信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var boolean <p>返回这个字段是否比对审核通过</p><p>默认值：false</p>
     */
    public $AuditResult;

    /**
     * @param Key $Key <p>key信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Value $Value <p>Value信息组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AuditResult <p>返回这个字段是否比对审核通过</p><p>默认值：false</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = new Key();
            $this->Key->deserialize($param["Key"]);
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new Value();
            $this->Value->deserialize($param["Value"]);
        }

        if (array_key_exists("AuditResult",$param) and $param["AuditResult"] !== null) {
            $this->AuditResult = $param["AuditResult"];
        }
    }
}
