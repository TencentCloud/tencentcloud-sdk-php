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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRequestWithEncryption返回参数结构体
 *
 * @method string getIV() 获取<p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
 * @method void setIV(string $IV) 设置<p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
 * @method string getEncryptedData() 获取<p>使用 AES-CBC 或 SM4-CBC 加密返回内容得到的密文。加密前返回内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
 * @method void setEncryptedData(string $EncryptedData) 设置<p>使用 AES-CBC 或 SM4-CBC 加密返回内容得到的密文。加密前返回内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
 * @method string getEncryptionSignature() 获取<p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
 * @method void setEncryptionSignature(string $EncryptionSignature) 设置<p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateRequestWithEncryptionResponse extends AbstractModel
{
    /**
     * @var string <p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
     */
    public $IV;

    /**
     * @var string <p>使用 AES-CBC 或 SM4-CBC 加密返回内容得到的密文。加密前返回内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
     */
    public $EncryptedData;

    /**
     * @var string <p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
     */
    public $EncryptionSignature;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IV <p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
     * @param string $EncryptedData <p>使用 AES-CBC 或 SM4-CBC 加密返回内容得到的密文。加密前返回内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
     * @param string $EncryptionSignature <p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IV",$param) and $param["IV"] !== null) {
            $this->IV = $param["IV"];
        }

        if (array_key_exists("EncryptedData",$param) and $param["EncryptedData"] !== null) {
            $this->EncryptedData = $param["EncryptedData"];
        }

        if (array_key_exists("EncryptionSignature",$param) and $param["EncryptionSignature"] !== null) {
            $this->EncryptionSignature = $param["EncryptionSignature"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
