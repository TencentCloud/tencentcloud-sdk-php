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
 * 签署链接内容
 *
 * @method string getSignUrl() 获取签署链接，过期时间为30天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignUrl(string $SignUrl) 设置签署链接，过期时间为30天
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeadline() 获取合同过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadline(integer $Deadline) 设置合同过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSignOrder() 获取当流程为顺序签署此参数有效时，数字越小优先级越高，暂不支持并行签署 可选
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignOrder(integer $SignOrder) 设置当流程为顺序签署此参数有效时，数字越小优先级越高，暂不支持并行签署 可选
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignId() 获取签署人编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignId(string $SignId) 设置签署人编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomUserId() 获取自定义用户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomUserId(string $CustomUserId) 设置自定义用户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取用户姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置用户姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMobile() 获取用户手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMobile(string $Mobile) 设置用户手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationName() 获取签署参与者机构名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置签署参与者机构名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverType() 获取参与者类型:
ORGANIZATION 企业经办人
PERSON 自然人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverType(string $ApproverType) 设置参与者类型:
ORGANIZATION 企业经办人
PERSON 自然人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardNumber() 获取经办人身份证号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardNumber(string $IdCardNumber) 设置经办人身份证号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowId() 获取签署链接对应流程Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(string $FlowId) 设置签署链接对应流程Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取企业经办人 用户在渠道的编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置企业经办人 用户在渠道的编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowGroupId() 获取合同组签署链接对应的合同组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowGroupId(string $FlowGroupId) 设置合同组签署链接对应的合同组id
注意：此字段可能返回 null，表示取不到有效值。
 */
class SignUrlInfo extends AbstractModel
{
    /**
     * @var string 签署链接，过期时间为30天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignUrl;

    /**
     * @var integer 合同过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deadline;

    /**
     * @var integer 当流程为顺序签署此参数有效时，数字越小优先级越高，暂不支持并行签署 可选
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignOrder;

    /**
     * @var string 签署人编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignId;

    /**
     * @var string 自定义用户编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomUserId;

    /**
     * @var string 用户姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 用户手机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mobile;

    /**
     * @var string 签署参与者机构名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @var string 参与者类型:
ORGANIZATION 企业经办人
PERSON 自然人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverType;

    /**
     * @var string 经办人身份证号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardNumber;

    /**
     * @var string 签署链接对应流程Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var string 企业经办人 用户在渠道的编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var string 合同组签署链接对应的合同组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowGroupId;

    /**
     * @param string $SignUrl 签署链接，过期时间为30天
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Deadline 合同过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SignOrder 当流程为顺序签署此参数有效时，数字越小优先级越高，暂不支持并行签署 可选
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignId 签署人编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomUserId 自定义用户编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 用户姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mobile 用户手机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationName 签署参与者机构名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverType 参与者类型:
ORGANIZATION 企业经办人
PERSON 自然人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardNumber 经办人身份证号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowId 签署链接对应流程Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId 企业经办人 用户在渠道的编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowGroupId 合同组签署链接对应的合同组id
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
        if (array_key_exists("SignUrl",$param) and $param["SignUrl"] !== null) {
            $this->SignUrl = $param["SignUrl"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("SignOrder",$param) and $param["SignOrder"] !== null) {
            $this->SignOrder = $param["SignOrder"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("CustomUserId",$param) and $param["CustomUserId"] !== null) {
            $this->CustomUserId = $param["CustomUserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }
    }
}
