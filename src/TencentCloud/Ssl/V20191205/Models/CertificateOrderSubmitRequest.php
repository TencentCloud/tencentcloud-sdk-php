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
 * CertificateOrderSubmit请求参数结构体
 *
 * @method string getCertId() 获取证书 ID。
 * @method void setCertId(string $CertId) 设置证书 ID。
 * @method integer getDeleteDnsAutoRecord() 获取是否删除自动DNS验证值：0，不删除； 1，删除； 默认不删除
 * @method void setDeleteDnsAutoRecord(integer $DeleteDnsAutoRecord) 设置是否删除自动DNS验证值：0，不删除； 1，删除； 默认不删除
 * @method string getVerifyType() 获取域名验证方式：DNS_AUTO 自动DNS验证， DNS DNS验证， FILE 文件验证
 * @method void setVerifyType(string $VerifyType) 设置域名验证方式：DNS_AUTO 自动DNS验证， DNS DNS验证， FILE 文件验证
 */
class CertificateOrderSubmitRequest extends AbstractModel
{
    /**
     * @var string 证书 ID。
     */
    public $CertId;

    /**
     * @var integer 是否删除自动DNS验证值：0，不删除； 1，删除； 默认不删除
     */
    public $DeleteDnsAutoRecord;

    /**
     * @var string 域名验证方式：DNS_AUTO 自动DNS验证， DNS DNS验证， FILE 文件验证
     */
    public $VerifyType;

    /**
     * @param string $CertId 证书 ID。
     * @param integer $DeleteDnsAutoRecord 是否删除自动DNS验证值：0，不删除； 1，删除； 默认不删除
     * @param string $VerifyType 域名验证方式：DNS_AUTO 自动DNS验证， DNS DNS验证， FILE 文件验证
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DeleteDnsAutoRecord",$param) and $param["DeleteDnsAutoRecord"] !== null) {
            $this->DeleteDnsAutoRecord = $param["DeleteDnsAutoRecord"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
