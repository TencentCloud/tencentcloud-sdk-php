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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询网关所支持的接入协议
 *
 * @method string getTypeCode() 获取接入协议的字典码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeCode(string $TypeCode) 设置接入协议的字典码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValue() 获取接入协议类型值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(integer $Value) 设置接入协议类型值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取接入协议的类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置接入协议的类型描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeGatewayProtocolData extends AbstractModel
{
    /**
     * @var string 接入协议的字典码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeCode;

    /**
     * @var integer 接入协议类型值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 接入协议的类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @param string $TypeCode 接入协议的字典码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Value 接入协议类型值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 接入协议的类型描述
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
        if (array_key_exists("TypeCode",$param) and $param["TypeCode"] !== null) {
            $this->TypeCode = $param["TypeCode"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
