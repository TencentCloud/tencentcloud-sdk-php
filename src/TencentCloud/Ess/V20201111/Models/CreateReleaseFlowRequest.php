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
 * CreateReleaseFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method string getNeedRelievedFlowId() 获取待解除的签署流程编号（即原签署流程的编号）
 * @method void setNeedRelievedFlowId(string $NeedRelievedFlowId) 设置待解除的签署流程编号（即原签署流程的编号）
 * @method RelieveInfo getReliveInfo() 获取解除协议内容
 * @method void setReliveInfo(RelieveInfo $ReliveInfo) 设置解除协议内容
 * @method array getReleasedApprovers() 获取非必须，解除协议的本企业签署人列表，
默认使用原流程的签署人列表,当解除协议的签署人与原流程的签署人不能相同时（例如原流程签署人离职了），需要指定本企业其他已实名员工来替换原流程中的原签署人，注意需要指明原签署人的编号(ReceiptId,通过DescribeFlowInfo接口获取)来代表需要替换哪一个签署人
解除协议的签署人数量不能多于原流程的签署人数量
 * @method void setReleasedApprovers(array $ReleasedApprovers) 设置非必须，解除协议的本企业签署人列表，
默认使用原流程的签署人列表,当解除协议的签署人与原流程的签署人不能相同时（例如原流程签署人离职了），需要指定本企业其他已实名员工来替换原流程中的原签署人，注意需要指明原签署人的编号(ReceiptId,通过DescribeFlowInfo接口获取)来代表需要替换哪一个签署人
解除协议的签署人数量不能多于原流程的签署人数量
 */
class CreateReleaseFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var string 待解除的签署流程编号（即原签署流程的编号）
     */
    public $NeedRelievedFlowId;

    /**
     * @var RelieveInfo 解除协议内容
     */
    public $ReliveInfo;

    /**
     * @var array 非必须，解除协议的本企业签署人列表，
默认使用原流程的签署人列表,当解除协议的签署人与原流程的签署人不能相同时（例如原流程签署人离职了），需要指定本企业其他已实名员工来替换原流程中的原签署人，注意需要指明原签署人的编号(ReceiptId,通过DescribeFlowInfo接口获取)来代表需要替换哪一个签署人
解除协议的签署人数量不能多于原流程的签署人数量
     */
    public $ReleasedApprovers;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param string $NeedRelievedFlowId 待解除的签署流程编号（即原签署流程的编号）
     * @param RelieveInfo $ReliveInfo 解除协议内容
     * @param array $ReleasedApprovers 非必须，解除协议的本企业签署人列表，
默认使用原流程的签署人列表,当解除协议的签署人与原流程的签署人不能相同时（例如原流程签署人离职了），需要指定本企业其他已实名员工来替换原流程中的原签署人，注意需要指明原签署人的编号(ReceiptId,通过DescribeFlowInfo接口获取)来代表需要替换哪一个签署人
解除协议的签署人数量不能多于原流程的签署人数量
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

        if (array_key_exists("NeedRelievedFlowId",$param) and $param["NeedRelievedFlowId"] !== null) {
            $this->NeedRelievedFlowId = $param["NeedRelievedFlowId"];
        }

        if (array_key_exists("ReliveInfo",$param) and $param["ReliveInfo"] !== null) {
            $this->ReliveInfo = new RelieveInfo();
            $this->ReliveInfo->deserialize($param["ReliveInfo"]);
        }

        if (array_key_exists("ReleasedApprovers",$param) and $param["ReleasedApprovers"] !== null) {
            $this->ReleasedApprovers = [];
            foreach ($param["ReleasedApprovers"] as $key => $value){
                $obj = new ReleasedApprover();
                $obj->deserialize($value);
                array_push($this->ReleasedApprovers, $obj);
            }
        }
    }
}
