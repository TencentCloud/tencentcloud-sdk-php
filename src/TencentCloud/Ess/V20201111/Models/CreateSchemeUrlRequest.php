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
 * CreateSchemeUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息, userId 必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息, userId 必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getOrganizationName() 获取合同流程签署方的组织机构名称。
如果名称中包含英文括号()，请使用中文括号（）代替。
 * @method void setOrganizationName(string $OrganizationName) 设置合同流程签署方的组织机构名称。
如果名称中包含英文括号()，请使用中文括号（）代替。
 * @method string getName() 获取合同流程里边签署方经办人的姓名。

 * @method void setName(string $Name) 设置合同流程里边签署方经办人的姓名。

 * @method string getMobile() 获取合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
 * @method void setMobile(string $Mobile) 设置合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
 * @method string getEndPoint() 获取要跳转的链接类型

<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li>
<li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li>
<li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li></ul>
 * @method void setEndPoint(string $EndPoint) 设置要跳转的链接类型

<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li>
<li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li>
<li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li></ul>
 * @method string getFlowId() 获取合同流程ID 
注: `如果准备跳转到合同流程签署的详情页面(即PathType=1时)必传,   跳转其他页面可不传`
 * @method void setFlowId(string $FlowId) 设置合同流程ID 
注: `如果准备跳转到合同流程签署的详情页面(即PathType=1时)必传,   跳转其他页面可不传`
 * @method string getFlowGroupId() 获取合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
 * @method void setFlowGroupId(string $FlowGroupId) 设置合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
 * @method integer getPathType() 获取要跳转到的页面类型 

<ul><li> **0** : 腾讯电子签小程序个人首页 (默认)</li>
<li> **1** : 腾讯电子签小程序流程合同的详情页 (即合同签署页面)</li>
<li> **2** : 腾讯电子签小程序合同列表页</li></ul>
 * @method void setPathType(integer $PathType) 设置要跳转到的页面类型 

<ul><li> **0** : 腾讯电子签小程序个人首页 (默认)</li>
<li> **1** : 腾讯电子签小程序流程合同的详情页 (即合同签署页面)</li>
<li> **2** : 腾讯电子签小程序合同列表页</li></ul>
 * @method boolean getAutoJumpBack() 获取签署完成后是否自动回跳
<ul><li>**false**：否, 签署完成不会自动跳转回来(默认)</li><li>**true**：是, 签署完成会自动跳转回来</li></ul>
注:  ` 该参数只针对"APP" 类型的签署链接有效`
 * @method void setAutoJumpBack(boolean $AutoJumpBack) 设置签署完成后是否自动回跳
<ul><li>**false**：否, 签署完成不会自动跳转回来(默认)</li><li>**true**：是, 签署完成会自动跳转回来</li></ul>
注:  ` 该参数只针对"APP" 类型的签署链接有效`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method array getHides() 获取生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
 * @method void setHides(array $Hides) 设置生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
 * @method string getRecipientId() 获取签署节点ID，用于生成动态签署人链接完成领取
 * @method void setRecipientId(string $RecipientId) 设置签署节点ID，用于生成动态签署人链接完成领取
 */
class CreateSchemeUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息, userId 必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 合同流程签署方的组织机构名称。
如果名称中包含英文括号()，请使用中文括号（）代替。
     */
    public $OrganizationName;

    /**
     * @var string 合同流程里边签署方经办人的姓名。

     */
    public $Name;

    /**
     * @var string 合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
     */
    public $Mobile;

    /**
     * @var string 要跳转的链接类型

<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li>
<li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li>
<li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li></ul>
     */
    public $EndPoint;

    /**
     * @var string 合同流程ID 
注: `如果准备跳转到合同流程签署的详情页面(即PathType=1时)必传,   跳转其他页面可不传`
     */
    public $FlowId;

    /**
     * @var string 合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
     */
    public $FlowGroupId;

    /**
     * @var integer 要跳转到的页面类型 

<ul><li> **0** : 腾讯电子签小程序个人首页 (默认)</li>
<li> **1** : 腾讯电子签小程序流程合同的详情页 (即合同签署页面)</li>
<li> **2** : 腾讯电子签小程序合同列表页</li></ul>
     */
    public $PathType;

    /**
     * @var boolean 签署完成后是否自动回跳
<ul><li>**false**：否, 签署完成不会自动跳转回来(默认)</li><li>**true**：是, 签署完成会自动跳转回来</li></ul>
注:  ` 该参数只针对"APP" 类型的签署链接有效`
     */
    public $AutoJumpBack;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var array 生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
     */
    public $Hides;

    /**
     * @var string 签署节点ID，用于生成动态签署人链接完成领取
     */
    public $RecipientId;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息, userId 必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $OrganizationName 合同流程签署方的组织机构名称。
如果名称中包含英文括号()，请使用中文括号（）代替。
     * @param string $Name 合同流程里边签署方经办人的姓名。

     * @param string $Mobile 合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
     * @param string $EndPoint 要跳转的链接类型

<ul><li> **HTTP**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链 (默认类型)</li>
<li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li>
<li>**APP**： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型</li></ul>
     * @param string $FlowId 合同流程ID 
注: `如果准备跳转到合同流程签署的详情页面(即PathType=1时)必传,   跳转其他页面可不传`
     * @param string $FlowGroupId 合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
     * @param integer $PathType 要跳转到的页面类型 

<ul><li> **0** : 腾讯电子签小程序个人首页 (默认)</li>
<li> **1** : 腾讯电子签小程序流程合同的详情页 (即合同签署页面)</li>
<li> **2** : 腾讯电子签小程序合同列表页</li></ul>
     * @param boolean $AutoJumpBack 签署完成后是否自动回跳
<ul><li>**false**：否, 签署完成不会自动跳转回来(默认)</li><li>**true**：是, 签署完成会自动跳转回来</li></ul>
注:  ` 该参数只针对"APP" 类型的签署链接有效`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param array $Hides 生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
     * @param string $RecipientId 签署节点ID，用于生成动态签署人链接完成领取
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("EndPoint",$param) and $param["EndPoint"] !== null) {
            $this->EndPoint = $param["EndPoint"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }

        if (array_key_exists("PathType",$param) and $param["PathType"] !== null) {
            $this->PathType = $param["PathType"];
        }

        if (array_key_exists("AutoJumpBack",$param) and $param["AutoJumpBack"] !== null) {
            $this->AutoJumpBack = $param["AutoJumpBack"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Hides",$param) and $param["Hides"] !== null) {
            $this->Hides = $param["Hides"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }
    }
}
