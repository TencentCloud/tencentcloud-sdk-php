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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流程中参与方的信息结构
 *
 * @method string getRecipientId() 获取签署参与者ID，唯一标识
 * @method void setRecipientId(string $RecipientId) 设置签署参与者ID，唯一标识
 * @method string getRecipientType() 获取参与者类型。
默认为空。
ENTERPRISE-企业；
INDIVIDUAL-个人；
PROMOTER-发起方
 * @method void setRecipientType(string $RecipientType) 设置参与者类型。
默认为空。
ENTERPRISE-企业；
INDIVIDUAL-个人；
PROMOTER-发起方
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method boolean getRequireValidation() 获取是否需要验证，
默认为false-不需要验证
 * @method void setRequireValidation(boolean $RequireValidation) 设置是否需要验证，
默认为false-不需要验证
 * @method boolean getRequireSign() 获取是否需要签署，
默认为true-需要签署
 * @method void setRequireSign(boolean $RequireSign) 设置是否需要签署，
默认为true-需要签署
 * @method integer getRoutingOrder() 获取此参与方添加的顺序，从0～N
 * @method void setRoutingOrder(integer $RoutingOrder) 设置此参与方添加的顺序，从0～N
 * @method boolean getRequireDelivery() 获取是否需要发送，
默认为true-需要发送
 * @method void setRequireDelivery(boolean $RequireDelivery) 设置是否需要发送，
默认为true-需要发送
 * @method string getEmail() 获取邮箱地址
 * @method void setEmail(string $Email) 设置邮箱地址
 * @method string getMobile() 获取电话号码
 * @method void setMobile(string $Mobile) 设置电话号码
 * @method string getUserId() 获取关联的用户ID，电子签系统的用户ID
 * @method void setUserId(string $UserId) 设置关联的用户ID，电子签系统的用户ID
 * @method string getDeliveryMethod() 获取发送方式，默认为EMAIL。
EMAIL-邮件；
MOBILE-手机短信；
WECHAT-微信通知
 * @method void setDeliveryMethod(string $DeliveryMethod) 设置发送方式，默认为EMAIL。
EMAIL-邮件；
MOBILE-手机短信；
WECHAT-微信通知
 * @method string getRecipientExtra() 获取参与方的一些附属信息，json格式
 * @method void setRecipientExtra(string $RecipientExtra) 设置参与方的一些附属信息，json格式
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
<li> 4 :UKey认证</li></ul>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置签署人进行合同签署时的认证方式，支持的类型如下:
<ul><li> 1 :人脸认证</li>
<li> 2 :签署密码</li>
<li> 3 :运营商三要素认证</li>
<li> 4 :UKey认证</li></ul>
 */
class Recipient extends AbstractModel
{
    /**
     * @var string 签署参与者ID，唯一标识
     */
    public $RecipientId;

    /**
     * @var string 参与者类型。
默认为空。
ENTERPRISE-企业；
INDIVIDUAL-个人；
PROMOTER-发起方
     */
    public $RecipientType;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var boolean 是否需要验证，
默认为false-不需要验证
     */
    public $RequireValidation;

    /**
     * @var boolean 是否需要签署，
默认为true-需要签署
     */
    public $RequireSign;

    /**
     * @var integer 此参与方添加的顺序，从0～N
     */
    public $RoutingOrder;

    /**
     * @var boolean 是否需要发送，
默认为true-需要发送
     */
    public $RequireDelivery;

    /**
     * @var string 邮箱地址
     */
    public $Email;

    /**
     * @var string 电话号码
     */
    public $Mobile;

    /**
     * @var string 关联的用户ID，电子签系统的用户ID
     */
    public $UserId;

    /**
     * @var string 发送方式，默认为EMAIL。
EMAIL-邮件；
MOBILE-手机短信；
WECHAT-微信通知
     */
    public $DeliveryMethod;

    /**
     * @var string 参与方的一些附属信息，json格式
     */
    public $RecipientExtra;

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
<li> 4 :UKey认证</li></ul>
     */
    public $ApproverSignTypes;

    /**
     * @param string $RecipientId 签署参与者ID，唯一标识
     * @param string $RecipientType 参与者类型。
默认为空。
ENTERPRISE-企业；
INDIVIDUAL-个人；
PROMOTER-发起方
     * @param string $Description 描述信息
     * @param string $RoleName 角色名称
     * @param boolean $RequireValidation 是否需要验证，
默认为false-不需要验证
     * @param boolean $RequireSign 是否需要签署，
默认为true-需要签署
     * @param integer $RoutingOrder 此参与方添加的顺序，从0～N
     * @param boolean $RequireDelivery 是否需要发送，
默认为true-需要发送
     * @param string $Email 邮箱地址
     * @param string $Mobile 电话号码
     * @param string $UserId 关联的用户ID，电子签系统的用户ID
     * @param string $DeliveryMethod 发送方式，默认为EMAIL。
EMAIL-邮件；
MOBILE-手机短信；
WECHAT-微信通知
     * @param string $RecipientExtra 参与方的一些附属信息，json格式
     * @param array $ApproverVerifyTypes 签署人查看合同校验方式, 支持的类型如下:
<ul><li> 1 :实名认证查看</li>
<li> 2 :手机号校验查看</li></ul>
     * @param array $ApproverSignTypes 签署人进行合同签署时的认证方式，支持的类型如下:
<ul><li> 1 :人脸认证</li>
<li> 2 :签署密码</li>
<li> 3 :运营商三要素认证</li>
<li> 4 :UKey认证</li></ul>
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

        if (array_key_exists("RoutingOrder",$param) and $param["RoutingOrder"] !== null) {
            $this->RoutingOrder = $param["RoutingOrder"];
        }

        if (array_key_exists("RequireDelivery",$param) and $param["RequireDelivery"] !== null) {
            $this->RequireDelivery = $param["RequireDelivery"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DeliveryMethod",$param) and $param["DeliveryMethod"] !== null) {
            $this->DeliveryMethod = $param["DeliveryMethod"];
        }

        if (array_key_exists("RecipientExtra",$param) and $param["RecipientExtra"] !== null) {
            $this->RecipientExtra = $param["RecipientExtra"];
        }

        if (array_key_exists("ApproverVerifyTypes",$param) and $param["ApproverVerifyTypes"] !== null) {
            $this->ApproverVerifyTypes = $param["ApproverVerifyTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }
    }
}
