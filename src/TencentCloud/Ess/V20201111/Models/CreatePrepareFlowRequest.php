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
 * CreatePrepareFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method string getResourceId() 获取资源Id，通过多文件上传（UploadFiles）接口获得
 * @method void setResourceId(string $ResourceId) 设置资源Id，通过多文件上传（UploadFiles）接口获得
 * @method string getFlowName() 获取合同名称
 * @method void setFlowName(string $FlowName) 设置合同名称
 * @method boolean getUnordered() 获取是否顺序签署(true:无序签,false:顺序签)
 * @method void setUnordered(boolean $Unordered) 设置是否顺序签署(true:无序签,false:顺序签)
 * @method integer getDeadline() 获取签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method void setDeadline(integer $Deadline) 设置签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method string getUserFlowTypeId() 获取用户自定义合同类型
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置用户自定义合同类型
 * @method array getApprovers() 获取签署流程参与者信息，最大限制50方
 * @method void setApprovers(array $Approvers) 设置签署流程参与者信息，最大限制50方
 * @method string getIntelligentStatus() 获取打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
 * @method void setIntelligentStatus(string $IntelligentStatus) 设置打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
 */
class CreatePrepareFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var string 资源Id，通过多文件上传（UploadFiles）接口获得
     */
    public $ResourceId;

    /**
     * @var string 合同名称
     */
    public $FlowName;

    /**
     * @var boolean 是否顺序签署(true:无序签,false:顺序签)
     */
    public $Unordered;

    /**
     * @var integer 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     */
    public $Deadline;

    /**
     * @var string 用户自定义合同类型
     */
    public $UserFlowTypeId;

    /**
     * @var array 签署流程参与者信息，最大限制50方
     */
    public $Approvers;

    /**
     * @var string 打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
     */
    public $IntelligentStatus;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param string $ResourceId 资源Id，通过多文件上传（UploadFiles）接口获得
     * @param string $FlowName 合同名称
     * @param boolean $Unordered 是否顺序签署(true:无序签,false:顺序签)
     * @param integer $Deadline 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     * @param string $UserFlowTypeId 用户自定义合同类型
     * @param array $Approvers 签署流程参与者信息，最大限制50方
     * @param string $IntelligentStatus 打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FlowCreateApprover();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("IntelligentStatus",$param) and $param["IntelligentStatus"] !== null) {
            $this->IntelligentStatus = $param["IntelligentStatus"];
        }
    }
}
