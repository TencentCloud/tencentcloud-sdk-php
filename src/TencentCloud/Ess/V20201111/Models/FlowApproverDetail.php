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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署人详情信息
 *
 * @method string getApproveMessage() 获取<p>签署时的相关信息</p>
 * @method void setApproveMessage(string $ApproveMessage) 设置<p>签署时的相关信息</p>
 * @method string getApproveName() 获取<p>签署方姓名</p>
 * @method void setApproveName(string $ApproveName) 设置<p>签署方姓名</p>
 * @method integer getApproveStatus() 获取<p>签署方的签署状态<br>0：还没有发起<br>1：流程中 没有开始处理<br>2：待签署<br>3：已签署<br>4：已拒绝<br>5：已过期<br>6：已撤销<br>7：还没有预发起<br>8：待填写<br>9：因为各种原因而终止<br>10：填写完成<br>15：已解除<br>19：转他人处理</p>
 * @method void setApproveStatus(integer $ApproveStatus) 设置<p>签署方的签署状态<br>0：还没有发起<br>1：流程中 没有开始处理<br>2：待签署<br>3：已签署<br>4：已拒绝<br>5：已过期<br>6：已撤销<br>7：还没有预发起<br>8：待填写<br>9：因为各种原因而终止<br>10：填写完成<br>15：已解除<br>19：转他人处理</p>
 * @method string getReceiptId() 获取<p>模板配置中的参与方ID,与控件绑定</p>
 * @method void setReceiptId(string $ReceiptId) 设置<p>模板配置中的参与方ID,与控件绑定</p>
 * @method string getCustomUserId() 获取<p>客户自定义的用户ID</p>
 * @method void setCustomUserId(string $CustomUserId) 设置<p>客户自定义的用户ID</p>
 * @method string getMobile() 获取<p>签署人手机号</p>
 * @method void setMobile(string $Mobile) 设置<p>签署人手机号</p>
 * @method integer getSignOrder() 获取<p>签署顺序，如果是有序签署，签署顺序从小到大</p>
 * @method void setSignOrder(integer $SignOrder) 设置<p>签署顺序，如果是有序签署，签署顺序从小到大</p>
 * @method integer getApproveTime() 获取<p>签署人签署时间，时间戳，单位秒</p>
 * @method void setApproveTime(integer $ApproveTime) 设置<p>签署人签署时间，时间戳，单位秒</p>
 * @method string getApproveType() 获取<p>签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签</p>
 * @method void setApproveType(string $ApproveType) 设置<p>签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签</p>
 * @method string getApproverSource() 获取<p>签署方侧用户来源，如WEWORKAPP-企业微信等</p>
 * @method void setApproverSource(string $ApproverSource) 设置<p>签署方侧用户来源，如WEWORKAPP-企业微信等</p>
 * @method string getCustomApproverTag() 获取<p>客户自定义签署方标识</p>
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置<p>客户自定义签署方标识</p>
 * @method string getOrganizationId() 获取<p>签署方企业Id</p>
 * @method void setOrganizationId(string $OrganizationId) 设置<p>签署方企业Id</p>
 * @method string getOrganizationName() 获取<p>签署方企业名称</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>签署方企业名称</p>
 * @method string getSignId() 获取<p>签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。</p>
 * @method void setSignId(string $SignId) 设置<p>签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。</p>
 * @method string getApproverRoleName() 获取<p>自定义签署人角色</p>
 * @method void setApproverRoleName(string $ApproverRoleName) 设置<p>自定义签署人角色</p>
 * @method string getRecipientId() 获取<p>模板配置中的参与方ID,与控件绑定</p>
 * @method void setRecipientId(string $RecipientId) 设置<p>模板配置中的参与方ID,与控件绑定</p>
 * @method array getForwardRecords() 获取<p>签署方转交记录列表，标识该签署方是由谁转交而来，按转交时间由远到近进行排序</p>
 * @method void setForwardRecords(array $ForwardRecords) 设置<p>签署方转交记录列表，标识该签署方是由谁转交而来，按转交时间由远到近进行排序</p>
 */
class FlowApproverDetail extends AbstractModel
{
    /**
     * @var string <p>签署时的相关信息</p>
     */
    public $ApproveMessage;

    /**
     * @var string <p>签署方姓名</p>
     */
    public $ApproveName;

    /**
     * @var integer <p>签署方的签署状态<br>0：还没有发起<br>1：流程中 没有开始处理<br>2：待签署<br>3：已签署<br>4：已拒绝<br>5：已过期<br>6：已撤销<br>7：还没有预发起<br>8：待填写<br>9：因为各种原因而终止<br>10：填写完成<br>15：已解除<br>19：转他人处理</p>
     */
    public $ApproveStatus;

    /**
     * @var string <p>模板配置中的参与方ID,与控件绑定</p>
     * @deprecated
     */
    public $ReceiptId;

    /**
     * @var string <p>客户自定义的用户ID</p>
     */
    public $CustomUserId;

    /**
     * @var string <p>签署人手机号</p>
     */
    public $Mobile;

    /**
     * @var integer <p>签署顺序，如果是有序签署，签署顺序从小到大</p>
     */
    public $SignOrder;

    /**
     * @var integer <p>签署人签署时间，时间戳，单位秒</p>
     */
    public $ApproveTime;

    /**
     * @var string <p>签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签</p>
     */
    public $ApproveType;

    /**
     * @var string <p>签署方侧用户来源，如WEWORKAPP-企业微信等</p>
     */
    public $ApproverSource;

    /**
     * @var string <p>客户自定义签署方标识</p>
     */
    public $CustomApproverTag;

    /**
     * @var string <p>签署方企业Id</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>签署方企业名称</p>
     */
    public $OrganizationName;

    /**
     * @var string <p>签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。</p>
     */
    public $SignId;

    /**
     * @var string <p>自定义签署人角色</p>
     */
    public $ApproverRoleName;

    /**
     * @var string <p>模板配置中的参与方ID,与控件绑定</p>
     */
    public $RecipientId;

    /**
     * @var array <p>签署方转交记录列表，标识该签署方是由谁转交而来，按转交时间由远到近进行排序</p>
     */
    public $ForwardRecords;

    /**
     * @param string $ApproveMessage <p>签署时的相关信息</p>
     * @param string $ApproveName <p>签署方姓名</p>
     * @param integer $ApproveStatus <p>签署方的签署状态<br>0：还没有发起<br>1：流程中 没有开始处理<br>2：待签署<br>3：已签署<br>4：已拒绝<br>5：已过期<br>6：已撤销<br>7：还没有预发起<br>8：待填写<br>9：因为各种原因而终止<br>10：填写完成<br>15：已解除<br>19：转他人处理</p>
     * @param string $ReceiptId <p>模板配置中的参与方ID,与控件绑定</p>
     * @param string $CustomUserId <p>客户自定义的用户ID</p>
     * @param string $Mobile <p>签署人手机号</p>
     * @param integer $SignOrder <p>签署顺序，如果是有序签署，签署顺序从小到大</p>
     * @param integer $ApproveTime <p>签署人签署时间，时间戳，单位秒</p>
     * @param string $ApproveType <p>签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签</p>
     * @param string $ApproverSource <p>签署方侧用户来源，如WEWORKAPP-企业微信等</p>
     * @param string $CustomApproverTag <p>客户自定义签署方标识</p>
     * @param string $OrganizationId <p>签署方企业Id</p>
     * @param string $OrganizationName <p>签署方企业名称</p>
     * @param string $SignId <p>签署参与人在本流程中的编号ID（每个流程不同），可用此ID来定位签署参与人在本流程的签署节点，也可用于后续创建签署链接等操作。</p>
     * @param string $ApproverRoleName <p>自定义签署人角色</p>
     * @param string $RecipientId <p>模板配置中的参与方ID,与控件绑定</p>
     * @param array $ForwardRecords <p>签署方转交记录列表，标识该签署方是由谁转交而来，按转交时间由远到近进行排序</p>
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

        if (array_key_exists("ForwardRecords",$param) and $param["ForwardRecords"] !== null) {
            $this->ForwardRecords = [];
            foreach ($param["ForwardRecords"] as $key => $value){
                $obj = new ForwardRecord();
                $obj->deserialize($value);
                array_push($this->ForwardRecords, $obj);
            }
        }
    }
}
