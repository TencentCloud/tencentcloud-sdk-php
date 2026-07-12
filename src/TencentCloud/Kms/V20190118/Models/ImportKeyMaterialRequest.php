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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportKeyMaterial请求参数结构体
 *
 * @method string getEncryptedKeyMaterial() 获取<p>使用GetParametersForImport 返回的PublicKey加密后的密钥材料base64编码。对于国密版本region的KMS，导入的密钥材料长度要求为 128 bit，FIPS 140-2版本region的KMS， 导入的密钥材料长度要求为 256 bit。</p>
 * @method void setEncryptedKeyMaterial(string $EncryptedKeyMaterial) 设置<p>使用GetParametersForImport 返回的PublicKey加密后的密钥材料base64编码。对于国密版本region的KMS，导入的密钥材料长度要求为 128 bit，FIPS 140-2版本region的KMS， 导入的密钥材料长度要求为 256 bit。</p>
 * @method string getImportToken() 获取<p>通过调用GetParametersForImport获得的导入令牌。</p>
 * @method void setImportToken(string $ImportToken) 设置<p>通过调用GetParametersForImport获得的导入令牌。</p>
 * @method string getKeyId() 获取<p>指定导入密钥材料的CMK，需要和GetParametersForImport 指定的CMK相同。</p>
 * @method void setKeyId(string $KeyId) 设置<p>指定导入密钥材料的CMK，需要和GetParametersForImport 指定的CMK相同。</p>
 * @method integer getValidTo() 获取<p>密钥材料过期时间 unix 时间戳，不指定或者 0 表示密钥材料不会过期，若指定过期时间，需要大于当前时间点，最大支持 2147443200。</p>
 * @method void setValidTo(integer $ValidTo) 设置<p>密钥材料过期时间 unix 时间戳，不指定或者 0 表示密钥材料不会过期，若指定过期时间，需要大于当前时间点，最大支持 2147443200。</p>
 */
class ImportKeyMaterialRequest extends AbstractModel
{
    /**
     * @var string <p>使用GetParametersForImport 返回的PublicKey加密后的密钥材料base64编码。对于国密版本region的KMS，导入的密钥材料长度要求为 128 bit，FIPS 140-2版本region的KMS， 导入的密钥材料长度要求为 256 bit。</p>
     */
    public $EncryptedKeyMaterial;

    /**
     * @var string <p>通过调用GetParametersForImport获得的导入令牌。</p>
     */
    public $ImportToken;

    /**
     * @var string <p>指定导入密钥材料的CMK，需要和GetParametersForImport 指定的CMK相同。</p>
     */
    public $KeyId;

    /**
     * @var integer <p>密钥材料过期时间 unix 时间戳，不指定或者 0 表示密钥材料不会过期，若指定过期时间，需要大于当前时间点，最大支持 2147443200。</p>
     */
    public $ValidTo;

    /**
     * @param string $EncryptedKeyMaterial <p>使用GetParametersForImport 返回的PublicKey加密后的密钥材料base64编码。对于国密版本region的KMS，导入的密钥材料长度要求为 128 bit，FIPS 140-2版本region的KMS， 导入的密钥材料长度要求为 256 bit。</p>
     * @param string $ImportToken <p>通过调用GetParametersForImport获得的导入令牌。</p>
     * @param string $KeyId <p>指定导入密钥材料的CMK，需要和GetParametersForImport 指定的CMK相同。</p>
     * @param integer $ValidTo <p>密钥材料过期时间 unix 时间戳，不指定或者 0 表示密钥材料不会过期，若指定过期时间，需要大于当前时间点，最大支持 2147443200。</p>
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
        if (array_key_exists("EncryptedKeyMaterial",$param) and $param["EncryptedKeyMaterial"] !== null) {
            $this->EncryptedKeyMaterial = $param["EncryptedKeyMaterial"];
        }

        if (array_key_exists("ImportToken",$param) and $param["ImportToken"] !== null) {
            $this->ImportToken = $param["ImportToken"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }
    }
}
