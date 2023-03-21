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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合作企业经办人列表信息
 *
 * @method string getId() 获取对应Agent-ProxyOperator-OpenId。第三方应用平台自定义，对子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
 * @method void setId(string $Id) 设置对应Agent-ProxyOperator-OpenId。第三方应用平台自定义，对子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
 * @method string getName() 获取经办人姓名，最大长度50个字符
 * @method void setName(string $Name) 设置经办人姓名，最大长度50个字符
 * @method string getIdCardType() 获取经办人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
 * @method void setIdCardType(string $IdCardType) 设置经办人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
 * @method string getIdCardNumber() 获取经办人证件号
 * @method void setIdCardNumber(string $IdCardNumber) 设置经办人证件号
 * @method string getMobile() 获取经办人手机号，大陆手机号输入11位，暂不支持海外手机号。
 * @method void setMobile(string $Mobile) 设置经办人手机号，大陆手机号输入11位，暂不支持海外手机号。
 * @method string getDefaultRole() 获取默认角色，值为以下三个对应的英文：
业务管理员：admin
经办人：channel-normal-operator
业务员：channel-sales-man
 * @method void setDefaultRole(string $DefaultRole) 设置默认角色，值为以下三个对应的英文：
业务管理员：admin
经办人：channel-normal-operator
业务员：channel-sales-man
 */
class ProxyOrganizationOperator extends AbstractModel
{
    /**
     * @var string 对应Agent-ProxyOperator-OpenId。第三方应用平台自定义，对子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
     */
    public $Id;

    /**
     * @var string 经办人姓名，最大长度50个字符
     */
    public $Name;

    /**
     * @var string 经办人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
     */
    public $IdCardType;

    /**
     * @var string 经办人证件号
     */
    public $IdCardNumber;

    /**
     * @var string 经办人手机号，大陆手机号输入11位，暂不支持海外手机号。
     */
    public $Mobile;

    /**
     * @var string 默认角色，值为以下三个对应的英文：
业务管理员：admin
经办人：channel-normal-operator
业务员：channel-sales-man
     */
    public $DefaultRole;

    /**
     * @param string $Id 对应Agent-ProxyOperator-OpenId。第三方应用平台自定义，对子客企业员的唯一标识。一个OpenId在一个子客企业内唯一对应一个真实员工，不可在其他子客企业内重复使用。（例如，可以使用经办人企业名+员工身份证的hash值，需要第三方应用平台保存），最大64位字符串
     * @param string $Name 经办人姓名，最大长度50个字符
     * @param string $IdCardType 经办人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
     * @param string $IdCardNumber 经办人证件号
     * @param string $Mobile 经办人手机号，大陆手机号输入11位，暂不支持海外手机号。
     * @param string $DefaultRole 默认角色，值为以下三个对应的英文：
业务管理员：admin
经办人：channel-normal-operator
业务员：channel-sales-man
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("DefaultRole",$param) and $param["DefaultRole"] !== null) {
            $this->DefaultRole = $param["DefaultRole"];
        }
    }
}
