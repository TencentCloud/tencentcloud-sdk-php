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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConsole请求参数结构体
 *
 * @method array getAccessMode() 获取<p>访问方式：public - 公网，internal - 内网</p>
 * @method void setAccessMode(array $AccessMode) 设置<p>访问方式：public - 公网，internal - 内网</p>
 * @method integer getLoginMode() 获取<p>登录方式</p><p>枚举值：</p><ul><li>0： 账号密码鉴权</li><li>1： 匿名登录</li><li>2： 第三方认证登录</li></ul>
 * @method void setLoginMode(integer $LoginMode) 设置<p>登录方式</p><p>枚举值：</p><ul><li>0： 账号密码鉴权</li><li>1： 匿名登录</li><li>2： 第三方认证登录</li></ul>
 * @method string getDomainPrefix() 获取<p>自定义域名前缀</p>
 * @method void setDomainPrefix(string $DomainPrefix) 设置<p>自定义域名前缀</p>
 * @method array getAccounts() 获取<p>用户账号信息</p><p>“账号密码鉴权”登录方式必传</p>
 * @method void setAccounts(array $Accounts) 设置<p>用户账号信息</p><p>“账号密码鉴权”登录方式必传</p>
 * @method AnonymousLoginInfo getAnonymousLogin() 获取<p>匿名登录账号信息</p><p>“匿名登录”登录方式必传</p>
 * @method void setAnonymousLogin(AnonymousLoginInfo $AnonymousLogin) 设置<p>匿名登录账号信息</p><p>“匿名登录”登录方式必传</p>
 * @method integer getIntranetType() 获取<p>内网类型，默认为0</p>
 * @method void setIntranetType(integer $IntranetType) 设置<p>内网类型，默认为0</p>
 * @method string getIntranetRegion() 获取<p>内网地域</p>
 * @method void setIntranetRegion(string $IntranetRegion) 设置<p>内网地域</p>
 * @method string getVpcId() 获取<p>内网私有网络VpcId</p>
 * @method void setVpcId(string $VpcId) 设置<p>内网私有网络VpcId</p>
 * @method string getSubnetId() 获取<p>内网子网SubnetId</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>内网子网SubnetId</p>
 * @method array getAuthRoles() 获取<p>Auth角色信息</p><p>“第三方认证登录”登录方式必传</p>
 * @method void setAuthRoles(array $AuthRoles) 设置<p>Auth角色信息</p><p>“第三方认证登录”登录方式必传</p>
 * @method array getTags() 获取<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 * @method array getHideParams() 获取<p>自定义隐藏参数</p>
 * @method void setHideParams(array $HideParams) 设置<p>自定义隐藏参数</p>
 * @method array getAccessControlRules() 获取<p>访问控制规则</p><p>“第三方认证登录”登录方式必传 AccessMode: internal &amp;&amp; Action: ACCEPT 规则</p>
 * @method void setAccessControlRules(array $AccessControlRules) 设置<p>访问控制规则</p><p>“第三方认证登录”登录方式必传 AccessMode: internal &amp;&amp; Action: ACCEPT 规则</p>
 * @method string getRemarks() 获取<p>备注</p>
 * @method void setRemarks(string $Remarks) 设置<p>备注</p>
 * @method array getMenus() 获取<p>自定义显示菜单</p>
 * @method void setMenus(array $Menus) 设置<p>自定义显示菜单</p>
 */
class CreateConsoleRequest extends AbstractModel
{
    /**
     * @var array <p>访问方式：public - 公网，internal - 内网</p>
     */
    public $AccessMode;

    /**
     * @var integer <p>登录方式</p><p>枚举值：</p><ul><li>0： 账号密码鉴权</li><li>1： 匿名登录</li><li>2： 第三方认证登录</li></ul>
     */
    public $LoginMode;

    /**
     * @var string <p>自定义域名前缀</p>
     */
    public $DomainPrefix;

    /**
     * @var array <p>用户账号信息</p><p>“账号密码鉴权”登录方式必传</p>
     */
    public $Accounts;

    /**
     * @var AnonymousLoginInfo <p>匿名登录账号信息</p><p>“匿名登录”登录方式必传</p>
     */
    public $AnonymousLogin;

    /**
     * @var integer <p>内网类型，默认为0</p>
     */
    public $IntranetType;

    /**
     * @var string <p>内网地域</p>
     */
    public $IntranetRegion;

    /**
     * @var string <p>内网私有网络VpcId</p>
     */
    public $VpcId;

    /**
     * @var string <p>内网子网SubnetId</p>
     */
    public $SubnetId;

    /**
     * @var array <p>Auth角色信息</p><p>“第三方认证登录”登录方式必传</p>
     */
    public $AuthRoles;

    /**
     * @var array <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
     */
    public $Tags;

    /**
     * @var array <p>自定义隐藏参数</p>
     */
    public $HideParams;

    /**
     * @var array <p>访问控制规则</p><p>“第三方认证登录”登录方式必传 AccessMode: internal &amp;&amp; Action: ACCEPT 规则</p>
     */
    public $AccessControlRules;

    /**
     * @var string <p>备注</p>
     */
    public $Remarks;

    /**
     * @var array <p>自定义显示菜单</p>
     */
    public $Menus;

    /**
     * @param array $AccessMode <p>访问方式：public - 公网，internal - 内网</p>
     * @param integer $LoginMode <p>登录方式</p><p>枚举值：</p><ul><li>0： 账号密码鉴权</li><li>1： 匿名登录</li><li>2： 第三方认证登录</li></ul>
     * @param string $DomainPrefix <p>自定义域名前缀</p>
     * @param array $Accounts <p>用户账号信息</p><p>“账号密码鉴权”登录方式必传</p>
     * @param AnonymousLoginInfo $AnonymousLogin <p>匿名登录账号信息</p><p>“匿名登录”登录方式必传</p>
     * @param integer $IntranetType <p>内网类型，默认为0</p>
     * @param string $IntranetRegion <p>内网地域</p>
     * @param string $VpcId <p>内网私有网络VpcId</p>
     * @param string $SubnetId <p>内网子网SubnetId</p>
     * @param array $AuthRoles <p>Auth角色信息</p><p>“第三方认证登录”登录方式必传</p>
     * @param array $Tags <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的日志主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
     * @param array $HideParams <p>自定义隐藏参数</p>
     * @param array $AccessControlRules <p>访问控制规则</p><p>“第三方认证登录”登录方式必传 AccessMode: internal &amp;&amp; Action: ACCEPT 规则</p>
     * @param string $Remarks <p>备注</p>
     * @param array $Menus <p>自定义显示菜单</p>
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
        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("LoginMode",$param) and $param["LoginMode"] !== null) {
            $this->LoginMode = $param["LoginMode"];
        }

        if (array_key_exists("DomainPrefix",$param) and $param["DomainPrefix"] !== null) {
            $this->DomainPrefix = $param["DomainPrefix"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new ConsoleAccount();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("AnonymousLogin",$param) and $param["AnonymousLogin"] !== null) {
            $this->AnonymousLogin = new AnonymousLoginInfo();
            $this->AnonymousLogin->deserialize($param["AnonymousLogin"]);
        }

        if (array_key_exists("IntranetType",$param) and $param["IntranetType"] !== null) {
            $this->IntranetType = $param["IntranetType"];
        }

        if (array_key_exists("IntranetRegion",$param) and $param["IntranetRegion"] !== null) {
            $this->IntranetRegion = $param["IntranetRegion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AuthRoles",$param) and $param["AuthRoles"] !== null) {
            $this->AuthRoles = [];
            foreach ($param["AuthRoles"] as $key => $value){
                $obj = new AuthRoleInfo();
                $obj->deserialize($value);
                array_push($this->AuthRoles, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HideParams",$param) and $param["HideParams"] !== null) {
            $this->HideParams = $param["HideParams"];
        }

        if (array_key_exists("AccessControlRules",$param) and $param["AccessControlRules"] !== null) {
            $this->AccessControlRules = [];
            foreach ($param["AccessControlRules"] as $key => $value){
                $obj = new AccessControlRule();
                $obj->deserialize($value);
                array_push($this->AccessControlRules, $obj);
            }
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("Menus",$param) and $param["Menus"] !== null) {
            $this->Menus = $param["Menus"];
        }
    }
}
