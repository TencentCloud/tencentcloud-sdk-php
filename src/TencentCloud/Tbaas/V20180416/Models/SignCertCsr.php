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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于申请用户签名证书的结构体
 *
 * @method string getCertMark() 获取用户签名证书的标识，会存在于用户申请的证书中
 * @method void setCertMark(string $CertMark) 设置用户签名证书的标识，会存在于用户申请的证书中
 * @method string getSignCsrContent() 获取用户申请签名证书所需要的证书请求文件的base64编码
 * @method void setSignCsrContent(string $SignCsrContent) 设置用户申请签名证书所需要的证书请求文件的base64编码
 */
class SignCertCsr extends AbstractModel
{
    /**
     * @var string 用户签名证书的标识，会存在于用户申请的证书中
     */
    public $CertMark;

    /**
     * @var string 用户申请签名证书所需要的证书请求文件的base64编码
     */
    public $SignCsrContent;

    /**
     * @param string $CertMark 用户签名证书的标识，会存在于用户申请的证书中
     * @param string $SignCsrContent 用户申请签名证书所需要的证书请求文件的base64编码
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
        if (array_key_exists("CertMark",$param) and $param["CertMark"] !== null) {
            $this->CertMark = $param["CertMark"];
        }

        if (array_key_exists("SignCsrContent",$param) and $param["SignCsrContent"] !== null) {
            $this->SignCsrContent = $param["SignCsrContent"];
        }
    }
}
