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
 * 解除协议的签署人，如不指定，默认使用待解除流程（即原流程）中的签署人。
注意：不支持更换C端（个人身份类型）签署人，如果原流程中含有C端签署人，默认使用原流程中的该C端签署人。
注意：目前不支持替换C端（个人身份类型）签署人，但是可以指定C端签署人的签署方自定义控件别名，具体见参数ApproverSignRole描述。
注意：当指定C端签署人的签署方自定义控件别名不空时，除RelievedApproverReceiptId参数外，可以只参数ApproverSignRole。
 *
 * @method string getName() 获取签署人姓名，最大长度50个字符

 * @method void setName(string $Name) 设置签署人姓名，最大长度50个字符

 * @method string getMobile() 获取签署人手机号
 * @method void setMobile(string $Mobile) 设置签署人手机号
 * @method string getRelievedApproverReceiptId() 获取要替换的参与人在原合同参与人列表中的签署人编号,通过DescribeFlowInfo 接口获取（即FlowDetailInfos. FlowApproverInfos 结构中的ReceiptId ）
 * @method void setRelievedApproverReceiptId(string $RelievedApproverReceiptId) 设置要替换的参与人在原合同参与人列表中的签署人编号,通过DescribeFlowInfo 接口获取（即FlowDetailInfos. FlowApproverInfos 结构中的ReceiptId ）
 * @method string getApproverType() 获取指定签署人类型，目前仅支持
ORGANIZATION-企业
ENTERPRISESERVER-企业静默签
 * @method void setApproverType(string $ApproverType) 设置指定签署人类型，目前仅支持
ORGANIZATION-企业
ENTERPRISESERVER-企业静默签
 * @method string getApproverSignComponentType() 获取签署控件类型，支持自定义企业签署方的签署控件为“印章”或“签名”
- SIGN_SEAL-默认为印章控件类型
- SIGN_SIGNATURE-手写签名控件类型
 * @method void setApproverSignComponentType(string $ApproverSignComponentType) 设置签署控件类型，支持自定义企业签署方的签署控件为“印章”或“签名”
- SIGN_SEAL-默认为印章控件类型
- SIGN_SIGNATURE-手写签名控件类型
 * @method string getApproverSignRole() 获取参与方在合同中的角色是按照创建合同的时候来排序的; 解除协议会将第一个参与人叫甲方, 第二个叫乙方,第三个叫丙方，以此类推。  如果想改动参与人的角色名字, 可以设置此签署方自定义控件别名字段，最大20个字符
 * @method void setApproverSignRole(string $ApproverSignRole) 设置参与方在合同中的角色是按照创建合同的时候来排序的; 解除协议会将第一个参与人叫甲方, 第二个叫乙方,第三个叫丙方，以此类推。  如果想改动参与人的角色名字, 可以设置此签署方自定义控件别名字段，最大20个字符
 */
class ReleasedApprover extends AbstractModel
{
    /**
     * @var string 签署人姓名，最大长度50个字符

     */
    public $Name;

    /**
     * @var string 签署人手机号
     */
    public $Mobile;

    /**
     * @var string 要替换的参与人在原合同参与人列表中的签署人编号,通过DescribeFlowInfo 接口获取（即FlowDetailInfos. FlowApproverInfos 结构中的ReceiptId ）
     */
    public $RelievedApproverReceiptId;

    /**
     * @var string 指定签署人类型，目前仅支持
ORGANIZATION-企业
ENTERPRISESERVER-企业静默签
     */
    public $ApproverType;

    /**
     * @var string 签署控件类型，支持自定义企业签署方的签署控件为“印章”或“签名”
- SIGN_SEAL-默认为印章控件类型
- SIGN_SIGNATURE-手写签名控件类型
     */
    public $ApproverSignComponentType;

    /**
     * @var string 参与方在合同中的角色是按照创建合同的时候来排序的; 解除协议会将第一个参与人叫甲方, 第二个叫乙方,第三个叫丙方，以此类推。  如果想改动参与人的角色名字, 可以设置此签署方自定义控件别名字段，最大20个字符
     */
    public $ApproverSignRole;

    /**
     * @param string $Name 签署人姓名，最大长度50个字符

     * @param string $Mobile 签署人手机号
     * @param string $RelievedApproverReceiptId 要替换的参与人在原合同参与人列表中的签署人编号,通过DescribeFlowInfo 接口获取（即FlowDetailInfos. FlowApproverInfos 结构中的ReceiptId ）
     * @param string $ApproverType 指定签署人类型，目前仅支持
ORGANIZATION-企业
ENTERPRISESERVER-企业静默签
     * @param string $ApproverSignComponentType 签署控件类型，支持自定义企业签署方的签署控件为“印章”或“签名”
- SIGN_SEAL-默认为印章控件类型
- SIGN_SIGNATURE-手写签名控件类型
     * @param string $ApproverSignRole 参与方在合同中的角色是按照创建合同的时候来排序的; 解除协议会将第一个参与人叫甲方, 第二个叫乙方,第三个叫丙方，以此类推。  如果想改动参与人的角色名字, 可以设置此签署方自定义控件别名字段，最大20个字符
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("RelievedApproverReceiptId",$param) and $param["RelievedApproverReceiptId"] !== null) {
            $this->RelievedApproverReceiptId = $param["RelievedApproverReceiptId"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("ApproverSignComponentType",$param) and $param["ApproverSignComponentType"] !== null) {
            $this->ApproverSignComponentType = $param["ApproverSignComponentType"];
        }

        if (array_key_exists("ApproverSignRole",$param) and $param["ApproverSignRole"] !== null) {
            $this->ApproverSignRole = $param["ApproverSignRole"];
        }
    }
}
