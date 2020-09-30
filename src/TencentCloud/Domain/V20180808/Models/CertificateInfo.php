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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 认证资料信息
 *
 * @method string getCertificateCode() 获取证件号码。
 * @method void setCertificateCode(string $CertificateCode) 设置证件号码。
 * @method string getCertificateType() 获取证件类型。
 * @method void setCertificateType(string $CertificateType) 设置证件类型。
 * @method string getImgUrl() 获取证件照片地址。
 * @method void setImgUrl(string $ImgUrl) 设置证件照片地址。
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string 证件号码。
     */
    public $CertificateCode;

    /**
     * @var string 证件类型。
     */
    public $CertificateType;

    /**
     * @var string 证件照片地址。
     */
    public $ImgUrl;

    /**
     * @param string $CertificateCode 证件号码。
     * @param string $CertificateType 证件类型。
     * @param string $ImgUrl 证件照片地址。
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
        if (array_key_exists("CertificateCode",$param) and $param["CertificateCode"] !== null) {
            $this->CertificateCode = $param["CertificateCode"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("ImgUrl",$param) and $param["ImgUrl"] !== null) {
            $this->ImgUrl = $param["ImgUrl"];
        }
    }
}
