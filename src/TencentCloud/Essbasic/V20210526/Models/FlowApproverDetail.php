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
 * 签署人的流程信息明细
 *
 * @method string getReceiptId() 获取模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
 * @method void setReceiptId(string $ReceiptId) 设置模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
 * @method string getProxyOrganizationOpenId() 获取第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
 * @method void setProxyOrganizationOpenId(string $ProxyOrganizationOpenId) 设置第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
 * @method string getProxyOperatorOpenId() 获取第三方平台子客企业员工的唯一标识
 * @method void setProxyOperatorOpenId(string $ProxyOperatorOpenId) 设置第三方平台子客企业员工的唯一标识
 * @method string getProxyOrganizationName() 获取第三方平台子客企业名称，与企业营业执照中注册的名称一致。
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置第三方平台子客企业名称，与企业营业执照中注册的名称一致。
 * @method string getMobile() 获取签署人手机号
 * @method void setMobile(string $Mobile) 设置签署人手机号
 * @method integer getSignOrder() 获取签署顺序，如果是有序签署，签署顺序从小到大
 * @method void setSignOrder(integer $SignOrder) 设置签署顺序，如果是有序签署，签署顺序从小到大
 * @method string getApproveName() 获取签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
 * @method void setApproveName(string $ApproveName) 设置签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
 * @method string getApproveStatus() 获取当前签署人的状态, 状态如下
<ul><li> **PENDING** :待签署</li>
<li> **FILLPENDING** :待填写</li>
<li> **FILLACCEPT** :填写完成</li>
<li> **FILLREJECT** :拒绝填写</li>
<li> **WAITPICKUP** :待领取</li>
<li> **ACCEPT** :已签署</li>
<li> **REJECT** :拒签</li>
<li> **DEADLINE** :过期没人处理</li>
<li> **CANCEL** :流程已撤回</li>
<li> **FORWARD** :已经转他人处理</li>
<li> **STOP** :流程已终止</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
 * @method void setApproveStatus(string $ApproveStatus) 设置当前签署人的状态, 状态如下
<ul><li> **PENDING** :待签署</li>
<li> **FILLPENDING** :待填写</li>
<li> **FILLACCEPT** :填写完成</li>
<li> **FILLREJECT** :拒绝填写</li>
<li> **WAITPICKUP** :待领取</li>
<li> **ACCEPT** :已签署</li>
<li> **REJECT** :拒签</li>
<li> **DEADLINE** :过期没人处理</li>
<li> **CANCEL** :流程已撤回</li>
<li> **FORWARD** :已经转他人处理</li>
<li> **STOP** :流程已终止</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
 * @method string getApproveMessage() 获取签署人拒签等情况的时候填写的原因
 * @method void setApproveMessage(string $ApproveMessage) 设置签署人拒签等情况的时候填写的原因
 * @method integer getApproveTime() 获取签署人签署时间戳，单位秒
 * @method void setApproveTime(integer $ApproveTime) 设置签署人签署时间戳，单位秒
 * @method string getApproveType() 获取参与者类型 
<ul><li> **ORGANIZATION** :企业签署人</li>
<li> **PERSON** :个人签署人</li></ul>
 * @method void setApproveType(string $ApproveType) 设置参与者类型 
<ul><li> **ORGANIZATION** :企业签署人</li>
<li> **PERSON** :个人签署人</li></ul>
 * @method string getApproverRoleName() 获取自定义签署人的角色名, 如: 收款人、开具人、见证人等
 * @method void setApproverRoleName(string $ApproverRoleName) 设置自定义签署人的角色名, 如: 收款人、开具人、见证人等
 * @method string getSignId() 获取签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点。
 * @method void setSignId(string $SignId) 设置签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点。
 * @method string getRecipientId() 获取模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
 * @method void setRecipientId(string $RecipientId) 设置模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
 */
class FlowApproverDetail extends AbstractModel
{
    /**
     * @var string 模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
     * @deprecated
     */
    public $ReceiptId;

    /**
     * @var string 第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
     */
    public $ProxyOrganizationOpenId;

    /**
     * @var string 第三方平台子客企业员工的唯一标识
     */
    public $ProxyOperatorOpenId;

    /**
     * @var string 第三方平台子客企业名称，与企业营业执照中注册的名称一致。
     */
    public $ProxyOrganizationName;

    /**
     * @var string 签署人手机号
     */
    public $Mobile;

    /**
     * @var integer 签署顺序，如果是有序签署，签署顺序从小到大
     */
    public $SignOrder;

    /**
     * @var string 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
     */
    public $ApproveName;

    /**
     * @var string 当前签署人的状态, 状态如下
<ul><li> **PENDING** :待签署</li>
<li> **FILLPENDING** :待填写</li>
<li> **FILLACCEPT** :填写完成</li>
<li> **FILLREJECT** :拒绝填写</li>
<li> **WAITPICKUP** :待领取</li>
<li> **ACCEPT** :已签署</li>
<li> **REJECT** :拒签</li>
<li> **DEADLINE** :过期没人处理</li>
<li> **CANCEL** :流程已撤回</li>
<li> **FORWARD** :已经转他人处理</li>
<li> **STOP** :流程已终止</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
     */
    public $ApproveStatus;

    /**
     * @var string 签署人拒签等情况的时候填写的原因
     */
    public $ApproveMessage;

    /**
     * @var integer 签署人签署时间戳，单位秒
     */
    public $ApproveTime;

    /**
     * @var string 参与者类型 
<ul><li> **ORGANIZATION** :企业签署人</li>
<li> **PERSON** :个人签署人</li></ul>
     */
    public $ApproveType;

    /**
     * @var string 自定义签署人的角色名, 如: 收款人、开具人、见证人等
     */
    public $ApproverRoleName;

    /**
     * @var string 签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点。
     */
    public $SignId;

    /**
     * @var string 模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
     */
    public $RecipientId;

    /**
     * @param string $ReceiptId 模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
     * @param string $ProxyOrganizationOpenId 第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>
     * @param string $ProxyOperatorOpenId 第三方平台子客企业员工的唯一标识
     * @param string $ProxyOrganizationName 第三方平台子客企业名称，与企业营业执照中注册的名称一致。
     * @param string $Mobile 签署人手机号
     * @param integer $SignOrder 签署顺序，如果是有序签署，签署顺序从小到大
     * @param string $ApproveName 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
     * @param string $ApproveStatus 当前签署人的状态, 状态如下
<ul><li> **PENDING** :待签署</li>
<li> **FILLPENDING** :待填写</li>
<li> **FILLACCEPT** :填写完成</li>
<li> **FILLREJECT** :拒绝填写</li>
<li> **WAITPICKUP** :待领取</li>
<li> **ACCEPT** :已签署</li>
<li> **REJECT** :拒签</li>
<li> **DEADLINE** :过期没人处理</li>
<li> **CANCEL** :流程已撤回</li>
<li> **FORWARD** :已经转他人处理</li>
<li> **STOP** :流程已终止</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
     * @param string $ApproveMessage 签署人拒签等情况的时候填写的原因
     * @param integer $ApproveTime 签署人签署时间戳，单位秒
     * @param string $ApproveType 参与者类型 
<ul><li> **ORGANIZATION** :企业签署人</li>
<li> **PERSON** :个人签署人</li></ul>
     * @param string $ApproverRoleName 自定义签署人的角色名, 如: 收款人、开具人、见证人等
     * @param string $SignId 签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点。
     * @param string $RecipientId 模板配置时候的签署人角色ID(用PDF文件发起也可以指定,如果不指定则自动生成此角色ID), 所有的填写控件和签署控件都归属不同的角色
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
        if (array_key_exists("ReceiptId",$param) and $param["ReceiptId"] !== null) {
            $this->ReceiptId = $param["ReceiptId"];
        }

        if (array_key_exists("ProxyOrganizationOpenId",$param) and $param["ProxyOrganizationOpenId"] !== null) {
            $this->ProxyOrganizationOpenId = $param["ProxyOrganizationOpenId"];
        }

        if (array_key_exists("ProxyOperatorOpenId",$param) and $param["ProxyOperatorOpenId"] !== null) {
            $this->ProxyOperatorOpenId = $param["ProxyOperatorOpenId"];
        }

        if (array_key_exists("ProxyOrganizationName",$param) and $param["ProxyOrganizationName"] !== null) {
            $this->ProxyOrganizationName = $param["ProxyOrganizationName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("SignOrder",$param) and $param["SignOrder"] !== null) {
            $this->SignOrder = $param["SignOrder"];
        }

        if (array_key_exists("ApproveName",$param) and $param["ApproveName"] !== null) {
            $this->ApproveName = $param["ApproveName"];
        }

        if (array_key_exists("ApproveStatus",$param) and $param["ApproveStatus"] !== null) {
            $this->ApproveStatus = $param["ApproveStatus"];
        }

        if (array_key_exists("ApproveMessage",$param) and $param["ApproveMessage"] !== null) {
            $this->ApproveMessage = $param["ApproveMessage"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("ApproveType",$param) and $param["ApproveType"] !== null) {
            $this->ApproveType = $param["ApproveType"];
        }

        if (array_key_exists("ApproverRoleName",$param) and $param["ApproverRoleName"] !== null) {
            $this->ApproverRoleName = $param["ApproverRoleName"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }
    }
}
