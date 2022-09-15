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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 华曦达（SDMC）相关的 DRM 密钥提供商信息。
 *
 * @method string getUid() 获取华曦达分配的用户 ID。最大长度为128个字符。
 * @method void setUid(string $Uid) 设置华曦达分配的用户 ID。最大长度为128个字符。
 * @method string getSecretId() 获取华曦达分配的用户密钥 ID。最大长度为128个字符。
 * @method void setSecretId(string $SecretId) 设置华曦达分配的用户密钥 ID。最大长度为128个字符。
 * @method string getSecretKey() 获取华曦达分配的用户密钥内容。最大长度为128个字符。
 * @method void setSecretKey(string $SecretKey) 设置华曦达分配的用户密钥内容。最大长度为128个字符。
 * @method string getFairPlayCertificateUrl() 获取华曦达分配的 FairPlay 证书地址。该地址需使用 HTTPS 协议，最大长度为1024个字符。
 * @method void setFairPlayCertificateUrl(string $FairPlayCertificateUrl) 设置华曦达分配的 FairPlay 证书地址。该地址需使用 HTTPS 协议，最大长度为1024个字符。
 */
class SDMCDrmKeyProviderInfo extends AbstractModel
{
    /**
     * @var string 华曦达分配的用户 ID。最大长度为128个字符。
     */
    public $Uid;

    /**
     * @var string 华曦达分配的用户密钥 ID。最大长度为128个字符。
     */
    public $SecretId;

    /**
     * @var string 华曦达分配的用户密钥内容。最大长度为128个字符。
     */
    public $SecretKey;

    /**
     * @var string 华曦达分配的 FairPlay 证书地址。该地址需使用 HTTPS 协议，最大长度为1024个字符。
     */
    public $FairPlayCertificateUrl;

    /**
     * @param string $Uid 华曦达分配的用户 ID。最大长度为128个字符。
     * @param string $SecretId 华曦达分配的用户密钥 ID。最大长度为128个字符。
     * @param string $SecretKey 华曦达分配的用户密钥内容。最大长度为128个字符。
     * @param string $FairPlayCertificateUrl 华曦达分配的 FairPlay 证书地址。该地址需使用 HTTPS 协议，最大长度为1024个字符。
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("FairPlayCertificateUrl",$param) and $param["FairPlayCertificateUrl"] !== null) {
            $this->FairPlayCertificateUrl = $param["FairPlayCertificateUrl"];
        }
    }
}
