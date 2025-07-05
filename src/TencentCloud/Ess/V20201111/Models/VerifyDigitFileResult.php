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
 * 数字加签文件验签结果
 *
 * @method integer getCertNotBefore() 获取证书起始时间的Unix时间戳，单位毫秒
 * @method void setCertNotBefore(integer $CertNotBefore) 设置证书起始时间的Unix时间戳，单位毫秒
 * @method integer getCertNotAfter() 获取证书过期时间的时间戳，单位毫秒
 * @method void setCertNotAfter(integer $CertNotAfter) 设置证书过期时间的时间戳，单位毫秒
 * @method string getCertSn() 获取证书序列号，在数字证书申请过程中，系统会自动生成一个独一无二的序号。	
 * @method void setCertSn(string $CertSn) 设置证书序列号，在数字证书申请过程中，系统会自动生成一个独一无二的序号。	
 * @method string getSignAlgorithm() 获取证书签名算法, 如SHA1withRSA等算法
 * @method void setSignAlgorithm(string $SignAlgorithm) 设置证书签名算法, 如SHA1withRSA等算法
 * @method integer getSignTime() 获取签署时间的Unix时间戳，单位毫秒
 * @method void setSignTime(integer $SignTime) 设置签署时间的Unix时间戳，单位毫秒
 * @method integer getSignType() 获取签名类型。0表示带签章的数字签名，1表示仅数字签名
 * @method void setSignType(integer $SignType) 设置签名类型。0表示带签章的数字签名，1表示仅数字签名
 * @method string getSignerName() 获取申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@编码
**个人**: ESS@个人姓名@证件号@808854

如果在其他平台签署的, 主体的名字参考其他平台的说明
 * @method void setSignerName(string $SignerName) 设置申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@编码
**个人**: ESS@个人姓名@证件号@808854

如果在其他平台签署的, 主体的名字参考其他平台的说明
 */
class VerifyDigitFileResult extends AbstractModel
{
    /**
     * @var integer 证书起始时间的Unix时间戳，单位毫秒
     */
    public $CertNotBefore;

    /**
     * @var integer 证书过期时间的时间戳，单位毫秒
     */
    public $CertNotAfter;

    /**
     * @var string 证书序列号，在数字证书申请过程中，系统会自动生成一个独一无二的序号。	
     */
    public $CertSn;

    /**
     * @var string 证书签名算法, 如SHA1withRSA等算法
     */
    public $SignAlgorithm;

    /**
     * @var integer 签署时间的Unix时间戳，单位毫秒
     */
    public $SignTime;

    /**
     * @var integer 签名类型。0表示带签章的数字签名，1表示仅数字签名
     */
    public $SignType;

    /**
     * @var string 申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@编码
**个人**: ESS@个人姓名@证件号@808854

如果在其他平台签署的, 主体的名字参考其他平台的说明
     */
    public $SignerName;

    /**
     * @param integer $CertNotBefore 证书起始时间的Unix时间戳，单位毫秒
     * @param integer $CertNotAfter 证书过期时间的时间戳，单位毫秒
     * @param string $CertSn 证书序列号，在数字证书申请过程中，系统会自动生成一个独一无二的序号。	
     * @param string $SignAlgorithm 证书签名算法, 如SHA1withRSA等算法
     * @param integer $SignTime 签署时间的Unix时间戳，单位毫秒
     * @param integer $SignType 签名类型。0表示带签章的数字签名，1表示仅数字签名
     * @param string $SignerName 申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@编码
**个人**: ESS@个人姓名@证件号@808854

如果在其他平台签署的, 主体的名字参考其他平台的说明
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
        if (array_key_exists("CertNotBefore",$param) and $param["CertNotBefore"] !== null) {
            $this->CertNotBefore = $param["CertNotBefore"];
        }

        if (array_key_exists("CertNotAfter",$param) and $param["CertNotAfter"] !== null) {
            $this->CertNotAfter = $param["CertNotAfter"];
        }

        if (array_key_exists("CertSn",$param) and $param["CertSn"] !== null) {
            $this->CertSn = $param["CertSn"];
        }

        if (array_key_exists("SignAlgorithm",$param) and $param["SignAlgorithm"] !== null) {
            $this->SignAlgorithm = $param["SignAlgorithm"];
        }

        if (array_key_exists("SignTime",$param) and $param["SignTime"] !== null) {
            $this->SignTime = $param["SignTime"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("SignerName",$param) and $param["SignerName"] !== null) {
            $this->SignerName = $param["SignerName"];
        }
    }
}
