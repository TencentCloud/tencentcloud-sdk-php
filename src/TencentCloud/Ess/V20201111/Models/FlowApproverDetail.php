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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveMessage(string $ApproveMessage) 设置签署时的相关信息
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomUserId(string $CustomUserId) 设置客户自定义的用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMobile() 获取签署人手机号
 * @method void setMobile(string $Mobile) 设置签署人手机号
 * @method integer getSignOrder() 获取签署顺序，如果是有序签署，签署顺序从小到大
 * @method void setSignOrder(integer $SignOrder) 设置签署顺序，如果是有序签署，签署顺序从小到大
 * @method integer getApproveTime() 获取签署人签署时间，时间戳，单位秒
 * @method void setApproveTime(integer $ApproveTime) 设置签署人签署时间，时间戳，单位秒
 * @method string getApproveType() 获取签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveType(string $ApproveType) 设置签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverSource() 获取签署方侧用户来源，如WEWORKAPP-企业微信等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverSource(string $ApproverSource) 设置签署方侧用户来源，如WEWORKAPP-企业微信等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomApproverTag() 获取客户自定义签署方标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置客户自定义签署方标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationId() 获取签署方企业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationId(string $OrganizationId) 设置签署方企业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationName() 获取签署方企业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置签署方企业名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowApproverDetail extends AbstractModel
{
    /**
     * @var string 签署时的相关信息
注意：此字段可能返回 null，表示取不到有效值。
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
     */
    public $ReceiptId;

    /**
     * @var string 客户自定义的用户ID
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveType;

    /**
     * @var string 签署方侧用户来源，如WEWORKAPP-企业微信等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverSource;

    /**
     * @var string 客户自定义签署方标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomApproverTag;

    /**
     * @var string 签署方企业Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationId;

    /**
     * @var string 签署方企业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @param string $ApproveMessage 签署时的相关信息
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mobile 签署人手机号
     * @param integer $SignOrder 签署顺序，如果是有序签署，签署顺序从小到大
     * @param integer $ApproveTime 签署人签署时间，时间戳，单位秒
     * @param string $ApproveType 签署方类型，ORGANIZATION-企业员工，PERSON-个人，ENTERPRISESERVER-企业静默签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverSource 签署方侧用户来源，如WEWORKAPP-企业微信等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomApproverTag 客户自定义签署方标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationId 签署方企业Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationName 签署方企业名称
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
