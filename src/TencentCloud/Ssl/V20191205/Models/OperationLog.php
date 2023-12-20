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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书操作日志。
 *
 * @method string getAction() 获取操作证书动作。
 * @method void setAction(string $Action) 设置操作证书动作。
 * @method string getCreatedOn() 获取操作时间。
 * @method void setCreatedOn(string $CreatedOn) 设置操作时间。
 * @method string getUin() 获取主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertId() 获取证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertId(string $CertId) 设置证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置操作
注意：此字段可能返回 null，表示取不到有效值。
 */
class OperationLog extends AbstractModel
{
    /**
     * @var string 操作证书动作。
     */
    public $Action;

    /**
     * @var string 操作时间。
     */
    public $CreatedOn;

    /**
     * @var string 主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 子账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertId;

    /**
     * @var string 操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $Action 操作证书动作。
     * @param string $CreatedOn 操作时间。
     * @param string $Uin 主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 子账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertId 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 操作
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
