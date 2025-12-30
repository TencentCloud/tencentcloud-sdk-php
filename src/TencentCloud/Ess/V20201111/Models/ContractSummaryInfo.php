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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同摘要信息
 *
 * @method string getKey() 获取字段 key
 * @method void setKey(string $Key) 设置字段 key
 * @method string getValue() 获取字段值
 * @method void setValue(string $Value) 设置字段值
 * @method Identity getIdentity() 获取主体信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentity(Identity $Identity) 设置主体信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContractSummaryInfo extends AbstractModel
{
    /**
     * @var string 字段 key
     */
    public $Key;

    /**
     * @var string 字段值
     */
    public $Value;

    /**
     * @var Identity 主体信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Identity;

    /**
     * @param string $Key 字段 key
     * @param string $Value 字段值
     * @param Identity $Identity 主体信息
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Identity",$param) and $param["Identity"] !== null) {
            $this->Identity = new Identity();
            $this->Identity->deserialize($param["Identity"]);
        }
    }
}
