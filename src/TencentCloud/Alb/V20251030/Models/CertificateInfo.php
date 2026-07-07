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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书信息
 *
 * @method string getAssociatedTime() 获取证书绑定时间。
 * @method void setAssociatedTime(string $AssociatedTime) 设置证书绑定时间。
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method string getCertificateType() 获取证书类型。取值：CA或SVR（服务器证书）。
 * @method void setCertificateType(string $CertificateType) 设置证书类型。取值：CA或SVR（服务器证书）。
 * @method boolean getIsDefault() 获取是否为监听器默认证书。取值：
true：默认证书。
false：扩展证书。
 * @method void setIsDefault(boolean $IsDefault) 设置是否为监听器默认证书。取值：
true：默认证书。
false：扩展证书。
 * @method string getStatus() 获取证书与监听器的绑定状态。取值：Associated（已关联）、Associating（关联中）、Disassociating（解除关联中）、Error（异常）。
 * @method void setStatus(string $Status) 设置证书与监听器的绑定状态。取值：Associated（已关联）、Associating（关联中）、Disassociating（解除关联中）、Error（异常）。
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string 证书绑定时间。
     */
    public $AssociatedTime;

    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var string 证书类型。取值：CA或SVR（服务器证书）。
     */
    public $CertificateType;

    /**
     * @var boolean 是否为监听器默认证书。取值：
true：默认证书。
false：扩展证书。
     */
    public $IsDefault;

    /**
     * @var string 证书与监听器的绑定状态。取值：Associated（已关联）、Associating（关联中）、Disassociating（解除关联中）、Error（异常）。
     */
    public $Status;

    /**
     * @param string $AssociatedTime 证书绑定时间。
     * @param string $CertificateId 证书 ID。
     * @param string $CertificateType 证书类型。取值：CA或SVR（服务器证书）。
     * @param boolean $IsDefault 是否为监听器默认证书。取值：
true：默认证书。
false：扩展证书。
     * @param string $Status 证书与监听器的绑定状态。取值：Associated（已关联）、Associating（关联中）、Disassociating（解除关联中）、Error（异常）。
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
        if (array_key_exists("AssociatedTime",$param) and $param["AssociatedTime"] !== null) {
            $this->AssociatedTime = $param["AssociatedTime"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
