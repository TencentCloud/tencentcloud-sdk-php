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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bpaas申请入参
 *
 * @method string getKey() 获取审批流中表单唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置审批流中表单唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValue() 获取表单value
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(array $Value) 设置表单value
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取表单参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置表单参数描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplyParam extends AbstractModel
{
    /**
     * @var string 审批流中表单唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var array 表单value
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 表单参数描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $Key 审批流中表单唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Value 表单value
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 表单参数描述
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
