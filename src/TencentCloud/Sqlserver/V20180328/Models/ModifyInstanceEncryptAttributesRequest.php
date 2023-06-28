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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceEncryptAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getCertificateAttribution() 获取证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，默认self。
 * @method void setCertificateAttribution(string $CertificateAttribution) 设置证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，默认self。
 * @method string getQuoteUin() 获取引用的其他主账号ID，当CertificateAttribution 为others时必填。
 * @method void setQuoteUin(string $QuoteUin) 设置引用的其他主账号ID，当CertificateAttribution 为others时必填。
 */
class ModifyInstanceEncryptAttributesRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，默认self。
     */
    public $CertificateAttribution;

    /**
     * @var string 引用的其他主账号ID，当CertificateAttribution 为others时必填。
     */
    public $QuoteUin;

    /**
     * @param string $InstanceId 实例ID
     * @param string $CertificateAttribution 证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，默认self。
     * @param string $QuoteUin 引用的其他主账号ID，当CertificateAttribution 为others时必填。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CertificateAttribution",$param) and $param["CertificateAttribution"] !== null) {
            $this->CertificateAttribution = $param["CertificateAttribution"];
        }

        if (array_key_exists("QuoteUin",$param) and $param["QuoteUin"] !== null) {
            $this->QuoteUin = $param["QuoteUin"];
        }
    }
}
