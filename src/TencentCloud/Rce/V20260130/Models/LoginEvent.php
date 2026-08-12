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
 * 登录事件详情
 *
 * @method User getUserInfo() 获取<p>用户基础信息</p>
 * @method void setUserInfo(User $UserInfo) 设置<p>用户基础信息</p>
 * @method string getUserLoginName() 获取<p>用户登录时输入的用户名</p>
 * @method void setUserLoginName(string $UserLoginName) 设置<p>用户登录时输入的用户名</p>
 * @method Result getLoginResult() 获取<p>登录结果</p>
 * @method void setLoginResult(Result $LoginResult) 设置<p>登录结果</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class LoginEvent extends AbstractModel
{
    /**
     * @var User <p>用户基础信息</p>
     */
    public $UserInfo;

    /**
     * @var string <p>用户登录时输入的用户名</p>
     */
    public $UserLoginName;

    /**
     * @var Result <p>登录结果</p>
     */
    public $LoginResult;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param User $UserInfo <p>用户基础信息</p>
     * @param string $UserLoginName <p>用户登录时输入的用户名</p>
     * @param Result $LoginResult <p>登录结果</p>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("UserLoginName",$param) and $param["UserLoginName"] !== null) {
            $this->UserLoginName = $param["UserLoginName"];
        }

        if (array_key_exists("LoginResult",$param) and $param["LoginResult"] !== null) {
            $this->LoginResult = new Result();
            $this->LoginResult->deserialize($param["LoginResult"]);
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
