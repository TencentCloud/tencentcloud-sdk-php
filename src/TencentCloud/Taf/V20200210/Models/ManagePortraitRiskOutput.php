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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务出参
 *
 * @method integer getCode() 获取返回码（0，成功，其他失败）
 * @method void setCode(integer $Code) 设置返回码（0，成功，其他失败）
 * @method string getMessage() 获取返回码对应的信息
 * @method void setMessage(string $Message) 设置返回码对应的信息
 * @method ManagePortraitRiskValueOutput getValue() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(ManagePortraitRiskValueOutput $Value) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManagePortraitRiskOutput extends AbstractModel
{
    /**
     * @var integer 返回码（0，成功，其他失败）
     */
    public $Code;

    /**
     * @var string 返回码对应的信息
     */
    public $Message;

    /**
     * @var ManagePortraitRiskValueOutput 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $Code 返回码（0，成功，其他失败）
     * @param string $Message 返回码对应的信息
     * @param ManagePortraitRiskValueOutput $Value 结果
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new ManagePortraitRiskValueOutput();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
