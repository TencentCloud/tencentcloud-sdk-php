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
 * @method string getRecipientId() 获取<p>合同参与方的角色ID</p>
 * @method void setRecipientId(string $RecipientId) 设置<p>合同参与方的角色ID</p>
 * @method string getRecipientType() 获取<p>参与者类型, 可以选择的类型如下:</p><ul><li> **ENTERPRISE** :此角色为企业参与方</li><li> **INDIVIDUAL** :此角色为个人参与方</li><li> **PROMOTER** :此角色是发起方</li></ul>
 * @method void setRecipientType(string $RecipientType) 设置<p>参与者类型, 可以选择的类型如下:</p><ul><li> **ENTERPRISE** :此角色为企业参与方</li><li> **INDIVIDUAL** :此角色为个人参与方</li><li> **PROMOTER** :此角色是发起方</li></ul>
 * @method string getDescription() 获取<p>合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。</p>
 * @method void setDescription(string $Description) 设置<p>合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。</p>
 * @method string getRoleName() 获取<p>合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。</p>
 * @method void setRoleName(string $RoleName) 设置<p>合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。</p>
 * @method boolean getRequireValidation() 获取<p>是否需要校验，<br>true-是，<br>false-否</p>
 * @method void setRequireValidation(boolean $RequireValidation) 设置<p>是否需要校验，<br>true-是，<br>false-否</p>
 * @method boolean getRequireSign() 获取<p>是否必须填写，<br>true-是，<br>false-否</p>
 * @method void setRequireSign(boolean $RequireSign) 设置<p>是否必须填写，<br>true-是，<br>false-否</p>
 * @method integer getSignType() 获取<p>内部字段，签署类型</p><p>枚举值：</p><ul><li>0： 人脸</li></ul>
 * @method void setSignType(integer $SignType) 设置<p>内部字段，签署类型</p><p>枚举值：</p><ul><li>0： 人脸</li></ul>
 * @method integer getRoutingOrder() 获取<p>签署顺序：数字越小优先级越高</p>
 * @method void setRoutingOrder(integer $RoutingOrder) 设置<p>签署顺序：数字越小优先级越高</p>
 * @method boolean getIsPromoter() 获取<p>是否是发起方，<br>true-是<br>false-否</p>
 * @method void setIsPromoter(boolean $IsPromoter) 设置<p>是否是发起方，<br>true-是<br>false-否</p>
 * @method array getApproverVerifyTypes() 获取<p>签署人查看合同校验方式, 支持的类型如下:</p><ul><li> 1 :实名认证查看</li><li> 2 :手机号校验查看</li></ul>
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置<p>签署人查看合同校验方式, 支持的类型如下:</p><ul><li> 1 :实名认证查看</li><li> 2 :手机号校验查看</li></ul>
 * @method array getApproverSignTypes() 获取<p>签署人进行合同签署时的认证方式，支持的类型如下:</p><ul><li> 1 :人脸认证</li><li> 2 :签署密码</li><li> 3 :运营商三要素认证</li><li> 4 :UKey认证</li><li> 5 :设备指纹识别</li><li> 6 :设备面容识别</li></ul>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置<p>签署人进行合同签署时的认证方式，支持的类型如下:</p><ul><li> 1 :人脸认证</li><li> 2 :签署密码</li><li> 3 :运营商三要素认证</li><li> 4 :UKey认证</li><li> 5 :设备指纹识别</li><li> 6 :设备面容识别</li></ul>
 * @method boolean getNoTransfer() 获取<p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
 * @method void setNoTransfer(boolean $NoTransfer) 设置<p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
 */
class Recipient extends AbstractModel
{
    /**
     * @var string <p>合同参与方的角色ID</p>
     */
    public $RecipientId;

    /**
     * @var string <p>参与者类型, 可以选择的类型如下:</p><ul><li> **ENTERPRISE** :此角色为企业参与方</li><li> **INDIVIDUAL** :此角色为个人参与方</li><li> **PROMOTER** :此角色是发起方</li></ul>
     */
    public $RecipientType;

    /**
     * @var string <p>合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。</p>
     */
    public $Description;

    /**
     * @var string <p>合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。</p>
     */
    public $RoleName;

    /**
     * @var boolean <p>是否需要校验，<br>true-是，<br>false-否</p>
     */
    public $RequireValidation;

    /**
     * @var boolean <p>是否必须填写，<br>true-是，<br>false-否</p>
     */
    public $RequireSign;

    /**
     * @var integer <p>内部字段，签署类型</p><p>枚举值：</p><ul><li>0： 人脸</li></ul>
     */
    public $SignType;

    /**
     * @var integer <p>签署顺序：数字越小优先级越高</p>
     */
    public $RoutingOrder;

    /**
     * @var boolean <p>是否是发起方，<br>true-是<br>false-否</p>
     */
    public $IsPromoter;

    /**
     * @var array <p>签署人查看合同校验方式, 支持的类型如下:</p><ul><li> 1 :实名认证查看</li><li> 2 :手机号校验查看</li></ul>
     */
    public $ApproverVerifyTypes;

    /**
     * @var array <p>签署人进行合同签署时的认证方式，支持的类型如下:</p><ul><li> 1 :人脸认证</li><li> 2 :签署密码</li><li> 3 :运营商三要素认证</li><li> 4 :UKey认证</li><li> 5 :设备指纹识别</li><li> 6 :设备面容识别</li></ul>
     */
    public $ApproverSignTypes;

    /**
     * @var boolean <p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
     */
    public $NoTransfer;

    /**
     * @param string $RecipientId <p>合同参与方的角色ID</p>
     * @param string $RecipientType <p>参与者类型, 可以选择的类型如下:</p><ul><li> **ENTERPRISE** :此角色为企业参与方</li><li> **INDIVIDUAL** :此角色为个人参与方</li><li> **PROMOTER** :此角色是发起方</li></ul>
     * @param string $Description <p>合同参与方的角色描述，长度不能超过100，只能由中文、字母、数字和下划线组成。</p>
     * @param string $RoleName <p>合同参与方的角色名字，长度不能超过20，只能由中文、字母、数字和下划线组成。</p>
     * @param boolean $RequireValidation <p>是否需要校验，<br>true-是，<br>false-否</p>
     * @param boolean $RequireSign <p>是否必须填写，<br>true-是，<br>false-否</p>
     * @param integer $SignType <p>内部字段，签署类型</p><p>枚举值：</p><ul><li>0： 人脸</li></ul>
     * @param integer $RoutingOrder <p>签署顺序：数字越小优先级越高</p>
     * @param boolean $IsPromoter <p>是否是发起方，<br>true-是<br>false-否</p>
     * @param array $ApproverVerifyTypes <p>签署人查看合同校验方式, 支持的类型如下:</p><ul><li> 1 :实名认证查看</li><li> 2 :手机号校验查看</li></ul>
     * @param array $ApproverSignTypes <p>签署人进行合同签署时的认证方式，支持的类型如下:</p><ul><li> 1 :人脸认证</li><li> 2 :签署密码</li><li> 3 :运营商三要素认证</li><li> 4 :UKey认证</li><li> 5 :设备指纹识别</li><li> 6 :设备面容识别</li></ul>
     * @param boolean $NoTransfer <p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
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
