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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭证链上状态信息
 *
 * @method string getCredentialId() 获取凭证唯一id
 * @method void setCredentialId(string $CredentialId) 设置凭证唯一id
 * @method integer getStatus() 获取凭证状态（0：吊销；1：有效）
 * @method void setStatus(integer $Status) 设置凭证状态（0：吊销；1：有效）
 * @method string getIssuer() 获取凭证颁发者Did
 * @method void setIssuer(string $Issuer) 设置凭证颁发者Did
 * @method string getDigest() 获取凭证摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDigest(string $Digest) 设置凭证摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignature() 获取凭证签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignature(string $Signature) 设置凭证签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeStamp() 获取更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeStamp(integer $TimeStamp) 设置更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class CredentialStatus extends AbstractModel
{
    /**
     * @var string 凭证唯一id
     */
    public $CredentialId;

    /**
     * @var integer 凭证状态（0：吊销；1：有效）
     */
    public $Status;

    /**
     * @var string 凭证颁发者Did
     */
    public $Issuer;

    /**
     * @var string 凭证摘要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Digest;

    /**
     * @var string 凭证签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Signature;

    /**
     * @var integer 更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeStamp;

    /**
     * @param string $CredentialId 凭证唯一id
     * @param integer $Status 凭证状态（0：吊销；1：有效）
     * @param string $Issuer 凭证颁发者Did
     * @param string $Digest 凭证摘要
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Signature 凭证签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeStamp 更新时间戳
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
        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }
    }
}
