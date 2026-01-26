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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthorizeResult授权结果
 *
 * @method PrivilegeResource getResource() 获取授权资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(PrivilegeResource $Resource) 设置授权资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResult() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(boolean $Result) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthorizeResult extends AbstractModel
{
    /**
     * @var PrivilegeResource 授权资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var boolean 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @param PrivilegeResource $Resource 授权资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Result 结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 原因
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new PrivilegeResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
