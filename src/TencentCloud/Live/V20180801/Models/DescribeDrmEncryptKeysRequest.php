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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method DrmGetKeyPara getDrmGetKeyPara() 获取获取key所需要的参数。
 * @method void setDrmGetKeyPara(DrmGetKeyPara $DrmGetKeyPara) 设置获取key所需要的参数。
 * @method string getRsaSignature() 获取base64 编码的DrmGetKeyPara参数数字签名。
 * @method void setRsaSignature(string $RsaSignature) 设置base64 编码的DrmGetKeyPara参数数字签名。
 */

/**
 *DescribeDrmEncryptKeys请求参数结构体
 */
class DescribeDrmEncryptKeysRequest extends AbstractModel
{
    /**
     * @var DrmGetKeyPara 获取key所需要的参数。
     */
    public $DrmGetKeyPara;

    /**
     * @var string base64 编码的DrmGetKeyPara参数数字签名。
     */
    public $RsaSignature;
    /**
     * @param DrmGetKeyPara $DrmGetKeyPara 获取key所需要的参数。
     * @param string $RsaSignature base64 编码的DrmGetKeyPara参数数字签名。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DrmGetKeyPara",$param) and $param["DrmGetKeyPara"] !== null) {
            $this->DrmGetKeyPara = new DrmGetKeyPara();
            $this->DrmGetKeyPara->deserialize($param["DrmGetKeyPara"]);
        }

        if (array_key_exists("RsaSignature",$param) and $param["RsaSignature"] !== null) {
            $this->RsaSignature = $param["RsaSignature"];
        }
    }
}
