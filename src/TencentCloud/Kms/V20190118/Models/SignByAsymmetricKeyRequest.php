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
 * SignByAsymmetricKey请求参数结构体
 *
 * @method string getAlgorithm() 获取<p>签名算法，支持的算法：SM2DSA，ECC_P256_R1，ECDSA384_SHA384，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256，RSA_PSS_SHA_384，RSA_PKCS1_SHA_384，RSA_PSS_SHA_512，RSA_PKCS1_SHA_512 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。</p>
 * @method void setAlgorithm(string $Algorithm) 设置<p>签名算法，支持的算法：SM2DSA，ECC_P256_R1，ECDSA384_SHA384，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256，RSA_PSS_SHA_384，RSA_PKCS1_SHA_384，RSA_PSS_SHA_512，RSA_PKCS1_SHA_512 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。</p>
 * @method string getMessage() 获取<p>消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，消息摘要长度（Base64编码前的长度）必须等于32字节</p>
 * @method void setMessage(string $Message) 设置<p>消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，消息摘要长度（Base64编码前的长度）必须等于32字节</p>
 * @method string getKeyId() 获取<p>密钥的唯一标识</p>
 * @method void setKeyId(string $KeyId) 设置<p>密钥的唯一标识</p>
 * @method string getMessageType() 获取<p>消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。</p>
 * @method void setMessageType(string $MessageType) 设置<p>消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。</p>
 */
class SignByAsymmetricKeyRequest extends AbstractModel
{
    /**
     * @var string <p>签名算法，支持的算法：SM2DSA，ECC_P256_R1，ECDSA384_SHA384，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256，RSA_PSS_SHA_384，RSA_PKCS1_SHA_384，RSA_PSS_SHA_512，RSA_PKCS1_SHA_512 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。</p>
     */
    public $Algorithm;

    /**
     * @var string <p>消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，消息摘要长度（Base64编码前的长度）必须等于32字节</p>
     */
    public $Message;

    /**
     * @var string <p>密钥的唯一标识</p>
     */
    public $KeyId;

    /**
     * @var string <p>消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。</p>
     */
    public $MessageType;

    /**
     * @param string $Algorithm <p>签名算法，支持的算法：SM2DSA，ECC_P256_R1，ECDSA384_SHA384，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256，RSA_PSS_SHA_384，RSA_PKCS1_SHA_384，RSA_PSS_SHA_512，RSA_PKCS1_SHA_512 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。</p>
     * @param string $Message <p>消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，消息摘要长度（Base64编码前的长度）必须等于32字节</p>
     * @param string $KeyId <p>密钥的唯一标识</p>
     * @param string $MessageType <p>消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。</p>
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
        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }
    }
}
