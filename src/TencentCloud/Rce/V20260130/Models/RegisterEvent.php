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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 注册事件详情
 *
 * @method Result getRegisterResult() 获取<p>注册结果</p>
 * @method void setRegisterResult(Result $RegisterResult) 设置<p>注册结果</p>
 * @method User getUserInfo() 获取<p>用户基础信息</p>
 * @method void setUserInfo(User $UserInfo) 设置<p>用户基础信息</p>
 * @method Person getPerson() 获取<p>用户注册时填写的个人信息</p>
 * @method void setPerson(Person $Person) 设置<p>用户注册时填写的个人信息</p>
 * @method Address getBillingAddress() 获取<p>用户注册时填写的账单地址</p>
 * @method void setBillingAddress(Address $BillingAddress) 设置<p>用户注册时填写的账单地址</p>
 * @method Address getDeliveryAddress() 获取<p>用户注册时填写的收货地址</p>
 * @method void setDeliveryAddress(Address $DeliveryAddress) 设置<p>用户注册时填写的收货地址</p>
 * @method Inviter getInviter() 获取<p>邀请人信息</p>
 * @method void setInviter(Inviter $Inviter) 设置<p>邀请人信息</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class RegisterEvent extends AbstractModel
{
    /**
     * @var Result <p>注册结果</p>
     */
    public $RegisterResult;

    /**
     * @var User <p>用户基础信息</p>
     */
    public $UserInfo;

    /**
     * @var Person <p>用户注册时填写的个人信息</p>
     */
    public $Person;

    /**
     * @var Address <p>用户注册时填写的账单地址</p>
     */
    public $BillingAddress;

    /**
     * @var Address <p>用户注册时填写的收货地址</p>
     */
    public $DeliveryAddress;

    /**
     * @var Inviter <p>邀请人信息</p>
     */
    public $Inviter;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param Result $RegisterResult <p>注册结果</p>
     * @param User $UserInfo <p>用户基础信息</p>
     * @param Person $Person <p>用户注册时填写的个人信息</p>
     * @param Address $BillingAddress <p>用户注册时填写的账单地址</p>
     * @param Address $DeliveryAddress <p>用户注册时填写的收货地址</p>
     * @param Inviter $Inviter <p>邀请人信息</p>
     * @param array $Cust <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("RegisterResult",$param) and $param["RegisterResult"] !== null) {
            $this->RegisterResult = new Result();
            $this->RegisterResult->deserialize($param["RegisterResult"]);
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new Person();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("BillingAddress",$param) and $param["BillingAddress"] !== null) {
            $this->BillingAddress = new Address();
            $this->BillingAddress->deserialize($param["BillingAddress"]);
        }

        if (array_key_exists("DeliveryAddress",$param) and $param["DeliveryAddress"] !== null) {
            $this->DeliveryAddress = new Address();
            $this->DeliveryAddress->deserialize($param["DeliveryAddress"]);
        }

        if (array_key_exists("Inviter",$param) and $param["Inviter"] !== null) {
            $this->Inviter = new Inviter();
            $this->Inviter->deserialize($param["Inviter"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
