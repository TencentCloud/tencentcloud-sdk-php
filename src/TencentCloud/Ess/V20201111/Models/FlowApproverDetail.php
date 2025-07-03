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
 * 签署人详情信息
 *
 * @method string getApproveMessage() 获取签署时的相关信息
 * @method void setApproveMessage(string $ApproveMessage) 设置签署时的相关信息
 * @method string getApproveName() 获取签署方姓名
 * @method void setApproveName(string $ApproveName) 设置签署方姓名
 * @method integer getApproveStatus() 获取签署方的签署状态
0：还没有发起
1：流程中 没有开始处理
2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
7：还没有预发起
8：待填写
9：因为各种原因而终止
10：填写完成
15：已解除
19：转他人处理
 * @method void setApproveStatus(integer $ApproveStatus) 设置签署方的签署状态
0：还没有发起
1：流程中 没有开始处理
2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
7：还没有预发起
8：待填写
9：因为各种原因而终止
10：填写完成
15：已解除
19：转他人处理
 * @method string getReceiptId() 获取模板配置中的参与方ID,与控件绑定
 * @method void setReceiptId(string $ReceiptId) 设置模板配置中的参与方ID,与控件绑定
 * @method string getCustomUserId() 获取客户自定义的用户ID
 * @method void setCustomUserId(string $CustomUserId) 设置客户自定义的用户ID
 * @method string getMobile() 获取签署人手机号
 * @method void setMobile(string $Mobile) 设置签署人手机号
 * @method integer getSignOrder() 获取签署顺序，如果是有序签署，签署顺序从小到大
 * @method void setSignOrder(integer $SignOrder) 设置签署顺序，如果是有序签署，签署顺序从小到大
 * @method integer getApproveTime() 获取签署人签署时间，时间戳，单位秒
 * @method void setApproveTime(integer $ApproveTime) 设置签署人签署时间，时间戳，单位秒
 * @method string getApproveType() 获取签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签
 * @method void setApproveType(string $ApproveType) 设置签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签
 * @method string getApproverSource() 获取签署方侧用户来源，如WEWORKAPP-企业微信等
 * @method void setApproverSource(string $ApproverSource) 设置签署方侧用户来源，如WEWORKAPP-企业微信等
 * @method string getCustomApproverTag() 获取客户自定义签署方标识
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置客户自定义签署方标识
 * @method string getOrganizationId() 获取签署方企业Id
 * @method void setOrganizationId(string $OrganizationId) 设置签署方企业Id
 * @method string getOrganizationName() 获取签署方企业名称
 * @method void setOrganizationName(string $OrganizationName) 设置签署方企业名称
 * @method string getSignId() 获取签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。
 * @method void setSignId(string $SignId) 设置签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。
 * @method string getApproverRoleName() 获取自定义签署人角色
 * @method void setApproverRoleName(string $ApproverRoleName) 设置自定义签署人角色
 * @method string getRecipientId() 获取模板配置中的参与方ID,与控件绑定
 * @method void setRecipientId(string $RecipientId) 设置模板配置中的参与方ID,与控件绑定
 */
class FlowApproverDetail extends AbstractModel
{
    /**
     * @var string 签署时的相关信息
     */
    public $ApproveMessage;

    /**
     * @var string 签署方姓名
     */
    public $ApproveName;

    /**
     * @var integer 签署方的签署状态
0：还没有发起
1：流程中 没有开始处理
2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
7：还没有预发起
8：待填写
9：因为各种原因而终止
10：填写完成
15：已解除
19：转他人处理
     */
    public $ApproveStatus;

    /**
     * @var string 模板配置中的参与方ID,与控件绑定
     * @deprecated
     */
    public $ReceiptId;

    /**
     * @var string 客户自定义的用户ID
     */
    public $CustomUserId;

    /**
     * @var string 签署人手机号
     */
    public $Mobile;

    /**
     * @var integer 签署顺序，如果是有序签署，签署顺序从小到大
     */
    public $SignOrder;

    /**
     * @var integer 签署人签署时间，时间戳，单位秒
     */
    public $ApproveTime;

    /**
     * @var string 签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签
     */
    public $ApproveType;

    /**
     * @var string 签署方侧用户来源，如WEWORKAPP-企业微信等
     */
    public $ApproverSource;

    /**
     * @var string 客户自定义签署方标识
     */
    public $CustomApproverTag;

    /**
     * @var string 签署方企业Id
     */
    public $OrganizationId;

    /**
     * @var string 签署方企业名称
     */
    public $OrganizationName;

    /**
     * @var string 签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。
     */
    public $SignId;

    /**
     * @var string 自定义签署人角色
     */
    public $ApproverRoleName;

    /**
     * @var string 模板配置中的参与方ID,与控件绑定
     */
    public $RecipientId;

    /**
     * @param string $ApproveMessage 签署时的相关信息
     * @param string $ApproveName 签署方姓名
     * @param integer $ApproveStatus 签署方的签署状态
0：还没有发起
1：流程中 没有开始处理
2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
7：还没有预发起
8：待填写
9：因为各种原因而终止
10：填写完成
15：已解除
19：转他人处理
     * @param string $ReceiptId 模板配置中的参与方ID,与控件绑定
     * @param string $CustomUserId 客户自定义的用户ID
     * @param string $Mobile 签署人手机号
     * @param integer $SignOrder 签署顺序，如果是有序签署，签署顺序从小到大
     * @param integer $ApproveTime 签署人签署时间，时间戳，单位秒
     * @param string $ApproveType 签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签
     * @param string $ApproverSource 签署方侧用户来源，如WEWORKAPP-企业微信等
     * @param string $CustomApproverTag 客户自定义签署方标识
     * @param string $OrganizationId 签署方企业Id
     * @param string $OrganizationName 签署方企业名称
     * @param string $SignId 签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。
     * @param string $ApproverRoleName 自定义签署人角色
     * @param string $RecipientId 模板配置中的参与方ID,与控件绑定
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
        if (array_key_exists("ApproveMessage",$param) and $param["ApproveMessage"] !== null) {
            $this->ApproveMessage = $param["ApproveMessage"];
        }

        if (array_key_exists("ApproveName",$param) and $param["ApproveName"] !== null) {
            $this->ApproveName = $param["ApproveName"];
        }

        if (array_key_exists("ApproveStatus",$param) and $param["ApproveStatus"] !== null) {
            $this->ApproveStatus = $param["ApproveStatus"];
        }

        if (array_key_exists("ReceiptId",$param) and $param["ReceiptId"] !== null) {
            $this->ReceiptId = $param["ReceiptId"];
        }

        if (array_key_exists("CustomUserId",$param) and $param["CustomUserId"] !== null) {
            $this->CustomUserId = $param["CustomUserId"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("SignOrder",$param) and $param["SignOrder"] !== null) {
            $this->SignOrder = $param["SignOrder"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("ApproveType",$param) and $param["ApproveType"] !== null) {
            $this->ApproveType = $param["ApproveType"];
        }

        if (array_key_exists("ApproverSource",$param) and $param["ApproverSource"] !== null) {
            $this->ApproverSource = $param["ApproverSource"];
        }

        if (array_key_exists("CustomApproverTag",$param) and $param["CustomApproverTag"] !== null) {
            $this->CustomApproverTag = $param["CustomApproverTag"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("ApproverRoleName",$param) and $param["ApproverRoleName"] !== null) {
            $this->ApproverRoleName = $param["ApproverRoleName"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }
    }
}
