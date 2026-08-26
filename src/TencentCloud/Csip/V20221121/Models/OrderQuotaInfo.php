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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单配额信息
 *
 * @method string getQuotaKey() 获取配额键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaKey(string $QuotaKey) 设置配额键
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuotaNum() 获取配额总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaNum(integer $QuotaNum) 设置配额总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuotaUsed() 获取配额已使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaUsed(integer $QuotaUsed) 设置配额已使用量
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrderQuotaInfo extends AbstractModel
{
    /**
     * @var string 配额键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaKey;

    /**
     * @var integer 配额总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaNum;

    /**
     * @var integer 配额已使用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaUsed;

    /**
     * @param string $QuotaKey 配额键
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QuotaNum 配额总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QuotaUsed 配额已使用量
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
        if (array_key_exists("QuotaKey",$param) and $param["QuotaKey"] !== null) {
            $this->QuotaKey = $param["QuotaKey"];
        }

        if (array_key_exists("QuotaNum",$param) and $param["QuotaNum"] !== null) {
            $this->QuotaNum = $param["QuotaNum"];
        }

        if (array_key_exists("QuotaUsed",$param) and $param["QuotaUsed"] !== null) {
            $this->QuotaUsed = $param["QuotaUsed"];
        }
    }
}
