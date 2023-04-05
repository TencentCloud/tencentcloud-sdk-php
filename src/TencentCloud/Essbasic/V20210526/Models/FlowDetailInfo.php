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
 * 此结构体(FlowDetailInfo)描述的是合同(流程)的详细信息
 *
 * @method string getFlowId() 获取合同(流程)的Id
 * @method void setFlowId(string $FlowId) 设置合同(流程)的Id
 * @method string getFlowName() 获取合同(流程)的名字
 * @method void setFlowName(string $FlowName) 设置合同(流程)的名字
 * @method string getFlowType() 获取合同(流程)的类型
 * @method void setFlowType(string $FlowType) 设置合同(流程)的类型
 * @method string getFlowStatus() 获取合同(流程)的状态, 状态如下

INIT 还没发起
PART 部分签署
REJECT 拒签
ALL 全部签署
DEADLINE 流签
CANCEL 取消
RELIEVED 解除
 
 * @method void setFlowStatus(string $FlowStatus) 设置合同(流程)的状态, 状态如下

INIT 还没发起
PART 部分签署
REJECT 拒签
ALL 全部签署
DEADLINE 流签
CANCEL 取消
RELIEVED 解除
 
 * @method string getFlowMessage() 获取合同(流程)的信息
 * @method void setFlowMessage(string $FlowMessage) 设置合同(流程)的信息
 * @method integer getCreateOn() 获取合同(流程)的创建时间戳
 * @method void setCreateOn(integer $CreateOn) 设置合同(流程)的创建时间戳
 * @method integer getDeadLine() 获取合同(流程)的签署截止时间戳
 * @method void setDeadLine(integer $DeadLine) 设置合同(流程)的签署截止时间戳
 * @method string getCustomData() 获取用户自定义数据
 * @method void setCustomData(string $CustomData) 设置用户自定义数据
 * @method array getFlowApproverInfos() 获取合同(流程)的签署人数组
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置合同(流程)的签署人数组
 * @method array getCcInfos() 获取合同(流程)关注方信息列表
 * @method void setCcInfos(array $CcInfos) 设置合同(流程)关注方信息列表
 */
class FlowDetailInfo extends AbstractModel
{
    /**
     * @var string 合同(流程)的Id
     */
    public $FlowId;

    /**
     * @var string 合同(流程)的名字
     */
    public $FlowName;

    /**
     * @var string 合同(流程)的类型
     */
    public $FlowType;

    /**
     * @var string 合同(流程)的状态, 状态如下

INIT 还没发起
PART 部分签署
REJECT 拒签
ALL 全部签署
DEADLINE 流签
CANCEL 取消
RELIEVED 解除
 
     */
    public $FlowStatus;

    /**
     * @var string 合同(流程)的信息
     */
    public $FlowMessage;

    /**
     * @var integer 合同(流程)的创建时间戳
     */
    public $CreateOn;

    /**
     * @var integer 合同(流程)的签署截止时间戳
     */
    public $DeadLine;

    /**
     * @var string 用户自定义数据
     */
    public $CustomData;

    /**
     * @var array 合同(流程)的签署人数组
     */
    public $FlowApproverInfos;

    /**
     * @var array 合同(流程)关注方信息列表
     */
    public $CcInfos;

    /**
     * @param string $FlowId 合同(流程)的Id
     * @param string $FlowName 合同(流程)的名字
     * @param string $FlowType 合同(流程)的类型
     * @param string $FlowStatus 合同(流程)的状态, 状态如下

INIT 还没发起
PART 部分签署
REJECT 拒签
ALL 全部签署
DEADLINE 流签
CANCEL 取消
RELIEVED 解除
 
     * @param string $FlowMessage 合同(流程)的信息
     * @param integer $CreateOn 合同(流程)的创建时间戳
     * @param integer $DeadLine 合同(流程)的签署截止时间戳
     * @param string $CustomData 用户自定义数据
     * @param array $FlowApproverInfos 合同(流程)的签署人数组
     * @param array $CcInfos 合同(流程)关注方信息列表
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("FlowMessage",$param) and $param["FlowMessage"] !== null) {
            $this->FlowMessage = $param["FlowMessage"];
        }

        if (array_key_exists("CreateOn",$param) and $param["CreateOn"] !== null) {
            $this->CreateOn = $param["CreateOn"];
        }

        if (array_key_exists("DeadLine",$param) and $param["DeadLine"] !== null) {
            $this->DeadLine = $param["DeadLine"];
        }

        if (array_key_exists("CustomData",$param) and $param["CustomData"] !== null) {
            $this->CustomData = $param["CustomData"];
        }

        if (array_key_exists("FlowApproverInfos",$param) and $param["FlowApproverInfos"] !== null) {
            $this->FlowApproverInfos = [];
            foreach ($param["FlowApproverInfos"] as $key => $value){
                $obj = new FlowApproverDetail();
                $obj->deserialize($value);
                array_push($this->FlowApproverInfos, $obj);
            }
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new FlowApproverDetail();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }
    }
}
