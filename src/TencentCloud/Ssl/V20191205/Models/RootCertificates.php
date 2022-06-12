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
 * 根证书
 *
 * @method string getSign() 获取国密签名证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSign(string $Sign) 设置国密签名证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncrypt() 获取国密加密证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncrypt(string $Encrypt) 设置国密加密证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandard() 获取标准证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandard(string $Standard) 设置标准证书
注意：此字段可能返回 null，表示取不到有效值。
 */
class RootCertificates extends AbstractModel
{
    /**
     * @var string 国密签名证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sign;

    /**
     * @var string 国密加密证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encrypt;

    /**
     * @var string 标准证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Standard;

    /**
     * @param string $Sign 国密签名证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Encrypt 国密加密证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Standard 标准证书
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
        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }
    }
}
