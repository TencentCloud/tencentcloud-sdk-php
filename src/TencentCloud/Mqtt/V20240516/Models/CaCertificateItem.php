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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CA证书信息
 *
 * @method string getCaCn() 获取common name
 * @method void setCaCn(string $CaCn) 设置common name
 * @method string getCaCertificate() 获取证书内容
 * @method void setCaCertificate(string $CaCertificate) 设置证书内容
 * @method string getCaSn() 获取证书序列号
 * @method void setCaSn(string $CaSn) 设置证书序列号
 * @method string getFormat() 获取证书格式
 * @method void setFormat(string $Format) 设置证书格式
 * @method string getVerificationCertificate() 获取验证证书内容
 * @method void setVerificationCertificate(string $VerificationCertificate) 设置验证证书内容
 * @method string getStatus() 获取ca状态
 * @method void setStatus(string $Status) 设置ca状态
 * @method integer getLastActivationTime() 获取上次激活时间
 * @method void setLastActivationTime(integer $LastActivationTime) 设置上次激活时间
 * @method integer getCreatedTime() 获取创建时间
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间
 * @method integer getUpdateTime() 获取预销毁时间
 * @method void setUpdateTime(integer $UpdateTime) 设置预销毁时间
 * @method integer getLastInactivationTime() 获取上次去激活时间
 * @method void setLastInactivationTime(integer $LastInactivationTime) 设置上次去激活时间
 * @method string getCaIssuerCn() 获取Ca证书颁发者CN
 * @method void setCaIssuerCn(string $CaIssuerCn) 设置Ca证书颁发者CN
 * @method integer getNotBeforeTime() 获取生效时间
 * @method void setNotBeforeTime(integer $NotBeforeTime) 设置生效时间
 * @method integer getNotAfterTime() 获取失效时间
 * @method void setNotAfterTime(integer $NotAfterTime) 设置失效时间
 */
class CaCertificateItem extends AbstractModel
{
    /**
     * @var string common name
     */
    public $CaCn;

    /**
     * @var string 证书内容
     */
    public $CaCertificate;

    /**
     * @var string 证书序列号
     */
    public $CaSn;

    /**
     * @var string 证书格式
     */
    public $Format;

    /**
     * @var string 验证证书内容
     */
    public $VerificationCertificate;

    /**
     * @var string ca状态
     */
    public $Status;

    /**
     * @var integer 上次激活时间
     */
    public $LastActivationTime;

    /**
     * @var integer 创建时间
     */
    public $CreatedTime;

    /**
     * @var integer 预销毁时间
     */
    public $UpdateTime;

    /**
     * @var integer 上次去激活时间
     */
    public $LastInactivationTime;

    /**
     * @var string Ca证书颁发者CN
     */
    public $CaIssuerCn;

    /**
     * @var integer 生效时间
     */
    public $NotBeforeTime;

    /**
     * @var integer 失效时间
     */
    public $NotAfterTime;

    /**
     * @param string $CaCn common name
     * @param string $CaCertificate 证书内容
     * @param string $CaSn 证书序列号
     * @param string $Format 证书格式
     * @param string $VerificationCertificate 验证证书内容
     * @param string $Status ca状态
     * @param integer $LastActivationTime 上次激活时间
     * @param integer $CreatedTime 创建时间
     * @param integer $UpdateTime 预销毁时间
     * @param integer $LastInactivationTime 上次去激活时间
     * @param string $CaIssuerCn Ca证书颁发者CN
     * @param integer $NotBeforeTime 生效时间
     * @param integer $NotAfterTime 失效时间
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
        if (array_key_exists("CaCn",$param) and $param["CaCn"] !== null) {
            $this->CaCn = $param["CaCn"];
        }

        if (array_key_exists("CaCertificate",$param) and $param["CaCertificate"] !== null) {
            $this->CaCertificate = $param["CaCertificate"];
        }

        if (array_key_exists("CaSn",$param) and $param["CaSn"] !== null) {
            $this->CaSn = $param["CaSn"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("VerificationCertificate",$param) and $param["VerificationCertificate"] !== null) {
            $this->VerificationCertificate = $param["VerificationCertificate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastActivationTime",$param) and $param["LastActivationTime"] !== null) {
            $this->LastActivationTime = $param["LastActivationTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastInactivationTime",$param) and $param["LastInactivationTime"] !== null) {
            $this->LastInactivationTime = $param["LastInactivationTime"];
        }

        if (array_key_exists("CaIssuerCn",$param) and $param["CaIssuerCn"] !== null) {
            $this->CaIssuerCn = $param["CaIssuerCn"];
        }

        if (array_key_exists("NotBeforeTime",$param) and $param["NotBeforeTime"] !== null) {
            $this->NotBeforeTime = $param["NotBeforeTime"];
        }

        if (array_key_exists("NotAfterTime",$param) and $param["NotAfterTime"] !== null) {
            $this->NotAfterTime = $param["NotAfterTime"];
        }
    }
}
