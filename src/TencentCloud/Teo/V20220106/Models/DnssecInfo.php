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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNSSEC 相关信息
 *
 * @method integer getFlags() 获取标志
 * @method void setFlags(integer $Flags) 设置标志
 * @method string getAlgorithm() 获取加密算法
 * @method void setAlgorithm(string $Algorithm) 设置加密算法
 * @method string getKeyType() 获取加密类型
 * @method void setKeyType(string $KeyType) 设置加密类型
 * @method string getDigestType() 获取摘要类型
 * @method void setDigestType(string $DigestType) 设置摘要类型
 * @method string getDigestAlgorithm() 获取摘要算法
 * @method void setDigestAlgorithm(string $DigestAlgorithm) 设置摘要算法
 * @method string getDigest() 获取摘要信息
 * @method void setDigest(string $Digest) 设置摘要信息
 * @method string getDS() 获取DS 记录值
 * @method void setDS(string $DS) 设置DS 记录值
 * @method integer getKeyTag() 获取密钥标签
 * @method void setKeyTag(integer $KeyTag) 设置密钥标签
 * @method string getPublicKey() 获取公钥
 * @method void setPublicKey(string $PublicKey) 设置公钥
 */
class DnssecInfo extends AbstractModel
{
    /**
     * @var integer 标志
     */
    public $Flags;

    /**
     * @var string 加密算法
     */
    public $Algorithm;

    /**
     * @var string 加密类型
     */
    public $KeyType;

    /**
     * @var string 摘要类型
     */
    public $DigestType;

    /**
     * @var string 摘要算法
     */
    public $DigestAlgorithm;

    /**
     * @var string 摘要信息
     */
    public $Digest;

    /**
     * @var string DS 记录值
     */
    public $DS;

    /**
     * @var integer 密钥标签
     */
    public $KeyTag;

    /**
     * @var string 公钥
     */
    public $PublicKey;

    /**
     * @param integer $Flags 标志
     * @param string $Algorithm 加密算法
     * @param string $KeyType 加密类型
     * @param string $DigestType 摘要类型
     * @param string $DigestAlgorithm 摘要算法
     * @param string $Digest 摘要信息
     * @param string $DS DS 记录值
     * @param integer $KeyTag 密钥标签
     * @param string $PublicKey 公钥
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
        if (array_key_exists("Flags",$param) and $param["Flags"] !== null) {
            $this->Flags = $param["Flags"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("DigestType",$param) and $param["DigestType"] !== null) {
            $this->DigestType = $param["DigestType"];
        }

        if (array_key_exists("DigestAlgorithm",$param) and $param["DigestAlgorithm"] !== null) {
            $this->DigestAlgorithm = $param["DigestAlgorithm"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("DS",$param) and $param["DS"] !== null) {
            $this->DS = $param["DS"];
        }

        if (array_key_exists("KeyTag",$param) and $param["KeyTag"] !== null) {
            $this->KeyTag = $param["KeyTag"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }
    }
}
