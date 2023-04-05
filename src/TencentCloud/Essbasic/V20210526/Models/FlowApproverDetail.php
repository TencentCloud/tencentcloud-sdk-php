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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署人的流程信息明细
 *
 * @method string getReceiptId() 获取模板配置时候的签署人id,与控件绑定
 * @method void setReceiptId(string $ReceiptId) 设置模板配置时候的签署人id,与控件绑定
 * @method string getProxyOrganizationOpenId() 获取平台企业的第三方id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyOrganizationOpenId(string $ProxyOrganizationOpenId) 设置平台企业的第三方id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyOperatorOpenId() 获取平台企业操作人的第三方id
 * @method void setProxyOperatorOpenId(string $ProxyOperatorOpenId) 设置平台企业操作人的第三方id
 * @method string getProxyOrganizationName() 获取平台企业名称
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置平台企业名称
 * @method string getMobile() 获取签署人手机号
 * @method void setMobile(string $Mobile) 设置签署人手机号
 * @method integer getSignOrder() 获取签署人签署顺序
 * @method void setSignOrder(integer $SignOrder) 设置签署人签署顺序
 * @method string getApproveName() 获取签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveName(string $ApproveName) 设置签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveStatus() 获取当前签署人的状态, 状态如下

PENDING 流程等待中 
FILLPENDING 待填写状态
FILLACCEPT 参与人已经填写
FILLREJECT 参与人解决填写
WAITPICKUP 待签收
ACCEPT 签收 
REJECT 拒签 
DEADLINE 过期没有处理 
CANCEL 取消
FORWARD 已经转他人处理
STOP 流程因为其他原因终止
RELIEVED 已经解除

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveStatus(string $ApproveStatus) 设置当前签署人的状态, 状态如下

PENDING 流程等待中 
FILLPENDING 待填写状态
FILLACCEPT 参与人已经填写
FILLREJECT 参与人解决填写
WAITPICKUP 待签收
ACCEPT 签收 
REJECT 拒签 
DEADLINE 过期没有处理 
CANCEL 取消
FORWARD 已经转他人处理
STOP 流程因为其他原因终止
RELIEVED 已经解除

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveMessage() 获取签署人信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveMessage(string $ApproveMessage) 设置签署人信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApproveTime() 获取签署人签署时间
 * @method void setApproveTime(integer $ApproveTime) 设置签署人签署时间
 * @method string getApproveType() 获取参与者类型 (ORGANIZATION企业/PERSON个人)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveType(string $ApproveType) 设置参与者类型 (ORGANIZATION企业/PERSON个人)
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowApproverDetail extends AbstractModel
{
    /**
     * @var string 模板配置时候的签署人id,与控件绑定
     */
    public $ReceiptId;

    /**
     * @var string 平台企业的第三方id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyOrganizationOpenId;

    /**
     * @var string 平台企业操作人的第三方id
     */
    public $ProxyOperatorOpenId;

    /**
     * @var string 平台企业名称
     */
    public $ProxyOrganizationName;

    /**
     * @var string 签署人手机号
     */
    public $Mobile;

    /**
     * @var integer 签署人签署顺序
     */
    public $SignOrder;

    /**
     * @var string 签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveName;

    /**
     * @var string 当前签署人的状态, 状态如下

PENDING 流程等待中 
FILLPENDING 待填写状态
FILLACCEPT 参与人已经填写
FILLREJECT 参与人解决填写
WAITPICKUP 待签收
ACCEPT 签收 
REJECT 拒签 
DEADLINE 过期没有处理 
CANCEL 取消
FORWARD 已经转他人处理
STOP 流程因为其他原因终止
RELIEVED 已经解除

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveStatus;

    /**
     * @var string 签署人信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveMessage;

    /**
     * @var integer 签署人签署时间
     */
    public $ApproveTime;

    /**
     * @var string 参与者类型 (ORGANIZATION企业/PERSON个人)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveType;

    /**
     * @param string $ReceiptId 模板配置时候的签署人id,与控件绑定
     * @param string $ProxyOrganizationOpenId 平台企业的第三方id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyOperatorOpenId 平台企业操作人的第三方id
     * @param string $ProxyOrganizationName 平台企业名称
     * @param string $Mobile 签署人手机号
     * @param integer $SignOrder 签署人签署顺序
     * @param string $ApproveName 签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveStatus 当前签署人的状态, 状态如下

PENDING 流程等待中 
FILLPENDING 待填写状态
FILLACCEPT 参与人已经填写
FILLREJECT 参与人解决填写
WAITPICKUP 待签收
ACCEPT 签收 
REJECT 拒签 
DEADLINE 过期没有处理 
CANCEL 取消
FORWARD 已经转他人处理
STOP 流程因为其他原因终止
RELIEVED 已经解除

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveMessage 签署人信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApproveTime 签署人签署时间
     * @param string $ApproveType 参与者类型 (ORGANIZATION企业/PERSON个人)
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
    }
}
