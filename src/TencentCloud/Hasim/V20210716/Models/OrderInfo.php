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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单信息
 *
 * @method string getDealName() 获取子订单ID
 * @method void setDealName(string $DealName) 设置子订单ID
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取订单账户
 * @method void setUin(string $Uin) 设置订单账户
 * @method integer getBuyNum() 获取购买数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyNum(integer $BuyNum) 设置购买数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndustryCode() 获取行业代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndustryCode(string $IndustryCode) 设置行业代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContact() 获取联系人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContact(string $Contact) 设置联系人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsisdn() 获取电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsisdn(string $Msisdn) 设置电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecification() 获取卡片规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecification(string $Specification) 设置卡片规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取用户订单备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置用户订单备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBigDealId() 获取大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDealId(string $BigDealId) 设置大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuditStatus() 获取审批状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditStatus(string $AuditStatus) 设置审批状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowStatus() 获取发货状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowStatus(string $FlowStatus) 设置发货状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取审批备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置审批备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundBigDealId() 获取退费订单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundBigDealId(string $RefundBigDealId) 设置退费订单
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrderInfo extends AbstractModel
{
    /**
     * @var string 子订单ID
     */
    public $DealName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 订单账户
     */
    public $Uin;

    /**
     * @var integer 购买数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyNum;

    /**
     * @var string 行业代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndustryCode;

    /**
     * @var string 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 联系人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contact;

    /**
     * @var string 电话号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msisdn;

    /**
     * @var string 卡片规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Specification;

    /**
     * @var string 用户订单备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 大订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDealId;

    /**
     * @var string 审批状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditStatus;

    /**
     * @var string 发货状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowStatus;

    /**
     * @var string 审批备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 退费订单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundBigDealId;

    /**
     * @param string $DealName 子订单ID
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 订单账户
     * @param integer $BuyNum 购买数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndustryCode 行业代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Contact 联系人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msisdn 电话号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Specification 卡片规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 用户订单备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BigDealId 大订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuditStatus 审批状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowStatus 发货状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 审批备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundBigDealId 退费订单
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("BuyNum",$param) and $param["BuyNum"] !== null) {
            $this->BuyNum = $param["BuyNum"];
        }

        if (array_key_exists("IndustryCode",$param) and $param["IndustryCode"] !== null) {
            $this->IndustryCode = $param["IndustryCode"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Contact",$param) and $param["Contact"] !== null) {
            $this->Contact = $param["Contact"];
        }

        if (array_key_exists("Msisdn",$param) and $param["Msisdn"] !== null) {
            $this->Msisdn = $param["Msisdn"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RefundBigDealId",$param) and $param["RefundBigDealId"] !== null) {
            $this->RefundBigDealId = $param["RefundBigDealId"];
        }
    }
}
