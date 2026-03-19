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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署证书信息结构体
 *
 * @method string getSerialNumber() 获取证书序列号
 * @method void setSerialNumber(string $SerialNumber) 设置证书序列号
 * @method string getCommonName() 获取证书持有者名称
 * @method void setCommonName(string $CommonName) 设置证书持有者名称
 * @method integer getNotBefore() 获取证书生效时间
 * @method void setNotBefore(integer $NotBefore) 设置证书生效时间
 * @method integer getNotAfter() 获取证书失效时间
 * @method void setNotAfter(integer $NotAfter) 设置证书失效时间
 * @method string getIssuerCommonName() 获取证书颁发者名称
 * @method void setIssuerCommonName(string $IssuerCommonName) 设置证书颁发者名称
 */
class SignCertificate extends AbstractModel
{
    /**
     * @var string 证书序列号
     */
    public $SerialNumber;

    /**
     * @var string 证书持有者名称
     */
    public $CommonName;

    /**
     * @var integer 证书生效时间
     */
    public $NotBefore;

    /**
     * @var integer 证书失效时间
     */
    public $NotAfter;

    /**
     * @var string 证书颁发者名称
     */
    public $IssuerCommonName;

    /**
     * @param string $SerialNumber 证书序列号
     * @param string $CommonName 证书持有者名称
     * @param integer $NotBefore 证书生效时间
     * @param integer $NotAfter 证书失效时间
     * @param string $IssuerCommonName 证书颁发者名称
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
        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("CommonName",$param) and $param["CommonName"] !== null) {
            $this->CommonName = $param["CommonName"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("IssuerCommonName",$param) and $param["IssuerCommonName"] !== null) {
            $this->IssuerCommonName = $param["IssuerCommonName"];
        }
    }
}
