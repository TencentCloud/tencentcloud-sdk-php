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
 * 流程中签署方和填写方(如果有填写控件存证时)的信息
 *
 * @method string getRecipientId() 获取合同参与方的角色ID
 * @method void setRecipientId(string $RecipientId) 设置合同参与方的角色ID
 * @method string getRecipientType() 获取参与者类型, 可以选择的类型如下:
<ul><li> **ENTERPRISE** :此角色为企业参与方</li>
<li> **INDIVIDUAL** :此角色为个人参与方</li>
<li> **PROMOTER** :此角色是发起方</li></ul>
 * @method void setRecipientType(string $RecipientType) 设置参与者类型, 可以选择的类型如下:
<ul><li> **ENTERPRISE** :此角色为企业参与方</li>
<li> **INDIVIDUAL** :此角色为个人参与方</li>
<li> **PROMOTER** :此角色是发起方</li></ul>
 * @method string getDescription() 获取合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。
 * @method void setDescription(string $Description) 设置合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。
 * @method string getRoleName() 获取合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。
 * @method void setRoleName(string $RoleName) 设置合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。
 * @method boolean getRequireValidation() 获取是否需要校验，
true-是，
false-否
 * @method void setRequireValidation(boolean $RequireValidation) 设置是否需要校验，
true-是，
false-否
 * @method boolean getRequireSign() 获取是否必须填写，
true-是，
false-否
 * @method void setRequireSign(boolean $RequireSign) 设置是否必须填写，
true-是，
false-否
 * @method integer getSignType() 获取内部字段，签署类型
 * @method void setSignType(integer $SignType) 设置内部字段，签署类型
 * @method integer getRoutingOrder() 获取签署顺序：数字越小优先级越高
 * @method void setRoutingOrder(integer $RoutingOrder) 设置签署顺序：数字越小优先级越高
 * @method boolean getIsPromoter() 获取是否是发起方，
true-是 
false-否
 * @method void setIsPromoter(boolean $IsPromoter) 设置是否是发起方，
true-是 
false-否
 * @method array getApproverVerifyTypes() 获取签署人查看合同校验方式, 支持的类型如下:
<ul><li> 1 :实名认证查看</li>
<li> 2 :手机号校验查看</li></ul>
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置签署人查看合同校验方式, 支持的类型如下:
<ul><li> 1 :实名认证查看</li>
<li> 2 :手机号校验查看</li></ul>
 * @method array getApproverSignTypes() 获取签署人进行合同签署时的认证方式，支持的类型如下:
<ul><li> 1 :人脸认证</li>
<li> 2 :签署密码</li>
<li> 3 :运营商三要素认证</li>
<li> 4 :UKey认证</li>
<li> 5 :设备指纹识别</li>
<li> 6 :设备面容识别</li></ul>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置签署人进行合同签署时的认证方式，支持的类型如下:
<ul><li> 1 :人脸认证</li>
<li> 2 :签署密码</li>
<li> 3 :运营商三要素认证</li>
<li> 4 :UKey认证</li>
<li> 5 :设备指纹识别</li>
<li> 6 :设备面容识别</li></ul>
 * @method boolean getNoTransfer() 获取签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
 * @method void setNoTransfer(boolean $NoTransfer) 设置签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
 */
class Recipient extends AbstractModel
{
    /**
     * @var string 合同参与方的角色ID
     */
    public $RecipientId;

    /**
     * @var string 参与者类型, 可以选择的类型如下:
<ul><li> **ENTERPRISE** :此角色为企业参与方</li>
<li> **INDIVIDUAL** :此角色为个人参与方</li>
<li> **PROMOTER** :此角色是发起方</li></ul>
     */
    public $RecipientType;

    /**
     * @var string 合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。
     */
    public $Description;

    /**
     * @var string 合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。
     */
    public $RoleName;

    /**
     * @var boolean 是否需要校验，
true-是，
false-否
     */
    public $RequireValidation;

    /**
     * @var boolean 是否必须填写，
true-是，
false-否
     */
    public $RequireSign;

    /**
     * @var integer 内部字段，签署类型
     */
    public $SignType;

    /**
     * @var integer 签署顺序：数字越小优先级越高
     */
    public $RoutingOrder;

    /**
     * @var boolean 是否是发起方，
true-是 
false-否
     */
    public $IsPromoter;

    /**
     * @var array 签署人查看合同校验方式, 支持的类型如下:
<ul><li> 1 :实名认证查看</li>
<li> 2 :手机号校验查看</li></ul>
     */
    public $ApproverVerifyTypes;

    /**
     * @var array 签署人进行合同签署时的认证方式，支持的类型如下:
<ul><li> 1 :人脸认证</li>
<li> 2 :签署密码</li>
<li> 3 :运营商三要素认证</li>
<li> 4 :UKey认证</li>
<li> 5 :设备指纹识别</li>
<li> 6 :设备面容识别</li></ul>
     */
    public $ApproverSignTypes;

    /**
     * @var boolean 签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
     */
    public $NoTransfer;

    /**
     * @param string $RecipientId 合同参与方的角色ID
     * @param string $RecipientType 参与者类型, 可以选择的类型如下:
<ul><li> **ENTERPRISE** :此角色为企业参与方</li>
<li> **INDIVIDUAL** :此角色为个人参与方</li>
<li> **PROMOTER** :此角色是发起方</li></ul>
     * @param string $Description 合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。
     * @param string $RoleName 合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。
     * @param boolean $RequireValidation 是否需要校验，
true-是，
false-否
     * @param boolean $RequireSign 是否必须填写，
true-是，
false-否
     * @param integer $SignType 内部字段，签署类型
     * @param integer $RoutingOrder 签署顺序：数字越小优先级越高
     * @param boolean $IsPromoter 是否是发起方，
true-是 
false-否
     * @param array $ApproverVerifyTypes 签署人查看合同校验方式, 支持的类型如下:
<ul><li> 1 :实名认证查看</li>
<li> 2 :手机号校验查看</li></ul>
     * @param array $ApproverSignTypes 签署人进行合同签署时的认证方式，支持的类型如下:
<ul><li> 1 :人脸认证</li>
<li> 2 :签署密码</li>
<li> 3 :运营商三要素认证</li>
<li> 4 :UKey认证</li>
<li> 5 :设备指纹识别</li>
<li> 6 :设备面容识别</li></ul>
     * @param boolean $NoTransfer 签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("RecipientType",$param) and $param["RecipientType"] !== null) {
            $this->RecipientType = $param["RecipientType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RequireValidation",$param) and $param["RequireValidation"] !== null) {
            $this->RequireValidation = $param["RequireValidation"];
        }

        if (array_key_exists("RequireSign",$param) and $param["RequireSign"] !== null) {
            $this->RequireSign = $param["RequireSign"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("RoutingOrder",$param) and $param["RoutingOrder"] !== null) {
            $this->RoutingOrder = $param["RoutingOrder"];
        }

        if (array_key_exists("IsPromoter",$param) and $param["IsPromoter"] !== null) {
            $this->IsPromoter = $param["IsPromoter"];
        }

        if (array_key_exists("ApproverVerifyTypes",$param) and $param["ApproverVerifyTypes"] !== null) {
            $this->ApproverVerifyTypes = $param["ApproverVerifyTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }

        if (array_key_exists("NoTransfer",$param) and $param["NoTransfer"] !== null) {
            $this->NoTransfer = $param["NoTransfer"];
        }
    }
}
