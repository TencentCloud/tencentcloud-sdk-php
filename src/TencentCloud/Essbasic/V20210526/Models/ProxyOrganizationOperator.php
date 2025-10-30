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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步的员工的信息
 *
 * @method string getId() 获取员工的唯一标识(即OpenId),  定义Agent中的OpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
 * @method void setId(string $Id) 设置员工的唯一标识(即OpenId),  定义Agent中的OpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
 * @method string getName() 获取员工的姓名，最大长度50个字符
员工的姓名将用于身份认证和电子签名，请确保填写的姓名为真实姓名，而非昵称等代名。
 * @method void setName(string $Name) 设置员工的姓名，最大长度50个字符
员工的姓名将用于身份认证和电子签名，请确保填写的姓名为真实姓名，而非昵称等代名。
 * @method string getIdCardType() 获取签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO :  中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN :  中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

 * @method void setIdCardType(string $IdCardType) 设置签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO :  中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN :  中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

 * @method string getIdCardNumber() 获取经办人证件号
 * @method void setIdCardNumber(string $IdCardNumber) 设置经办人证件号
 * @method string getMobile() 获取员工的手机号，支持国内手机号11位数字(无需加+86前缀或其他字符)，不支持海外手机号。
 * @method void setMobile(string $Mobile) 设置员工的手机号，支持国内手机号11位数字(无需加+86前缀或其他字符)，不支持海外手机号。
 * @method string getDefaultRole() 获取预先分配员工的角色, 可以分配的角色如下:
<table> <thead> <tr> <th>可以分配的角色</th> <th>角色名称</th> <th>角色描述</th> </tr> </thead> <tbody> <tr> <td>admin</td> <td>业务管理员（IT 系统负责人，e.g. CTO）</td> <td>有企业合同模块、印章模块、模板模块等全量功能及数据权限。</td> </tr> <tr> <td>channel-normal-operator</td> <td>经办人（企业法务负责人）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看企业所有合同数据。</td> </tr> <tr> <td>channel-sales-man</td> <td>业务员（一般为销售员、采购员）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看自己相关所有合同数据。</td> </tr> </tbody> </table>
 * @method void setDefaultRole(string $DefaultRole) 设置预先分配员工的角色, 可以分配的角色如下:
<table> <thead> <tr> <th>可以分配的角色</th> <th>角色名称</th> <th>角色描述</th> </tr> </thead> <tbody> <tr> <td>admin</td> <td>业务管理员（IT 系统负责人，e.g. CTO）</td> <td>有企业合同模块、印章模块、模板模块等全量功能及数据权限。</td> </tr> <tr> <td>channel-normal-operator</td> <td>经办人（企业法务负责人）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看企业所有合同数据。</td> </tr> <tr> <td>channel-sales-man</td> <td>业务员（一般为销售员、采购员）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看自己相关所有合同数据。</td> </tr> </tbody> </table>
 */
class ProxyOrganizationOperator extends AbstractModel
{
    /**
     * @var string 员工的唯一标识(即OpenId),  定义Agent中的OpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
     */
    public $Id;

    /**
     * @var string 员工的姓名，最大长度50个字符
员工的姓名将用于身份认证和电子签名，请确保填写的姓名为真实姓名，而非昵称等代名。
     */
    public $Name;

    /**
     * @var string 签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO :  中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN :  中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

     */
    public $IdCardType;

    /**
     * @var string 经办人证件号
     */
    public $IdCardNumber;

    /**
     * @var string 员工的手机号，支持国内手机号11位数字(无需加+86前缀或其他字符)，不支持海外手机号。
     */
    public $Mobile;

    /**
     * @var string 预先分配员工的角色, 可以分配的角色如下:
<table> <thead> <tr> <th>可以分配的角色</th> <th>角色名称</th> <th>角色描述</th> </tr> </thead> <tbody> <tr> <td>admin</td> <td>业务管理员（IT 系统负责人，e.g. CTO）</td> <td>有企业合同模块、印章模块、模板模块等全量功能及数据权限。</td> </tr> <tr> <td>channel-normal-operator</td> <td>经办人（企业法务负责人）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看企业所有合同数据。</td> </tr> <tr> <td>channel-sales-man</td> <td>业务员（一般为销售员、采购员）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看自己相关所有合同数据。</td> </tr> </tbody> </table>
     */
    public $DefaultRole;

    /**
     * @param string $Id 员工的唯一标识(即OpenId),  定义Agent中的OpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
     * @param string $Name 员工的姓名，最大长度50个字符
员工的姓名将用于身份认证和电子签名，请确保填写的姓名为真实姓名，而非昵称等代名。
     * @param string $IdCardType 签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO :  中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN :  中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>

     * @param string $IdCardNumber 经办人证件号
     * @param string $Mobile 员工的手机号，支持国内手机号11位数字(无需加+86前缀或其他字符)，不支持海外手机号。
     * @param string $DefaultRole 预先分配员工的角色, 可以分配的角色如下:
<table> <thead> <tr> <th>可以分配的角色</th> <th>角色名称</th> <th>角色描述</th> </tr> </thead> <tbody> <tr> <td>admin</td> <td>业务管理员（IT 系统负责人，e.g. CTO）</td> <td>有企业合同模块、印章模块、模板模块等全量功能及数据权限。</td> </tr> <tr> <td>channel-normal-operator</td> <td>经办人（企业法务负责人）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看企业所有合同数据。</td> </tr> <tr> <td>channel-sales-man</td> <td>业务员（一般为销售员、采购员）</td> <td>有发起合同、签署合同（含填写、拒签）、撤销合同、持有印章等权限能力，可查看自己相关所有合同数据。</td> </tr> </tbody> </table>
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
