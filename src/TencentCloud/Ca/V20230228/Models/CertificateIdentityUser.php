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
namespace TencentCloud\Ca\V20230228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书用户信息和身份鉴别信息。则该字段无需传入，默认为空。对电子签名者身份鉴别类型及措施有特殊展示要求的可使用该字段。
 *
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getIdentityUniqueId() 获取唯一身份id
 * @method void setIdentityUniqueId(string $IdentityUniqueId) 设置唯一身份id
 * @method string getIdCardNumber() 获取身份证号
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证号
 * @method string getIdentificationType() 获取身份鉴别类型
1：授权金融机构身份鉴别
 * @method void setIdentificationType(string $IdentificationType) 设置身份鉴别类型
1：授权金融机构身份鉴别
 * @method array getIdentificationMeasures() 获取身份鉴别措施
1、身份证鉴别
2、银行卡鉴别
3、支付账户密码验证
4、人脸识别验证
 * @method void setIdentificationMeasures(array $IdentificationMeasures) 设置身份鉴别措施
1、身份证鉴别
2、银行卡鉴别
3、支付账户密码验证
4、人脸识别验证
 */
class CertificateIdentityUser extends AbstractModel
{
    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 唯一身份id
     */
    public $IdentityUniqueId;

    /**
     * @var string 身份证号
     */
    public $IdCardNumber;

    /**
     * @var string 身份鉴别类型
1：授权金融机构身份鉴别
     */
    public $IdentificationType;

    /**
     * @var array 身份鉴别措施
1、身份证鉴别
2、银行卡鉴别
3、支付账户密码验证
4、人脸识别验证
     */
    public $IdentificationMeasures;

    /**
     * @param string $Name 姓名
     * @param string $IdentityUniqueId 唯一身份id
     * @param string $IdCardNumber 身份证号
     * @param string $IdentificationType 身份鉴别类型
1：授权金融机构身份鉴别
     * @param array $IdentificationMeasures 身份鉴别措施
1、身份证鉴别
2、银行卡鉴别
3、支付账户密码验证
4、人脸识别验证
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdentityUniqueId",$param) and $param["IdentityUniqueId"] !== null) {
            $this->IdentityUniqueId = $param["IdentityUniqueId"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("IdentificationType",$param) and $param["IdentificationType"] !== null) {
            $this->IdentificationType = $param["IdentificationType"];
        }

        if (array_key_exists("IdentificationMeasures",$param) and $param["IdentificationMeasures"] !== null) {
            $this->IdentificationMeasures = $param["IdentificationMeasures"];
        }
    }
}
