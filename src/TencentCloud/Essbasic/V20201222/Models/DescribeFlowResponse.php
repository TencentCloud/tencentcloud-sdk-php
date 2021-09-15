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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlow返回参数结构体
 *
 * @method Caller getCreator() 获取流程创建者信息
 * @method void setCreator(Caller $Creator) 设置流程创建者信息
 * @method string getFlowId() 获取流程编号
 * @method void setFlowId(string $FlowId) 设置流程编号
 * @method string getFlowName() 获取流程名称
 * @method void setFlowName(string $FlowName) 设置流程名称
 * @method string getFlowDescription() 获取流程描述
 * @method void setFlowDescription(string $FlowDescription) 设置流程描述
 * @method string getFlowType() 获取流程的类型: ”劳务合同“,”租赁合同“,”销售合同“,”其他“
 * @method void setFlowType(string $FlowType) 设置流程的类型: ”劳务合同“,”租赁合同“,”销售合同“,”其他“
 * @method integer getFlowStatus() 获取流程状态：
0-创建；
1-签署中；
2-拒签；
3-撤回；
4-签完存档完成；
5-已过期；
6-已销毁
7-签署完成未归档
 * @method void setFlowStatus(integer $FlowStatus) 设置流程状态：
0-创建；
1-签署中；
2-拒签；
3-撤回；
4-签完存档完成；
5-已过期；
6-已销毁
7-签署完成未归档
 * @method integer getCreatedOn() 获取流程创建时间
 * @method void setCreatedOn(integer $CreatedOn) 设置流程创建时间
 * @method integer getUpdatedOn() 获取流程完成时间
 * @method void setUpdatedOn(integer $UpdatedOn) 设置流程完成时间
 * @method integer getDeadline() 获取流程截止日期
 * @method void setDeadline(integer $Deadline) 设置流程截止日期
 * @method string getCallbackUrl() 获取回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址
 * @method string getFlowMessage() 获取流程中止原因
 * @method void setFlowMessage(string $FlowMessage) 设置流程中止原因
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFlowResponse extends AbstractModel
{
    /**
     * @var Caller 流程创建者信息
     */
    public $Creator;

    /**
     * @var string 流程编号
     */
    public $FlowId;

    /**
     * @var string 流程名称
     */
    public $FlowName;

    /**
     * @var string 流程描述
     */
    public $FlowDescription;

    /**
     * @var string 流程的类型: ”劳务合同“,”租赁合同“,”销售合同“,”其他“
     */
    public $FlowType;

    /**
     * @var integer 流程状态：
0-创建；
1-签署中；
2-拒签；
3-撤回；
4-签完存档完成；
5-已过期；
6-已销毁
7-签署完成未归档
     */
    public $FlowStatus;

    /**
     * @var integer 流程创建时间
     */
    public $CreatedOn;

    /**
     * @var integer 流程完成时间
     */
    public $UpdatedOn;

    /**
     * @var integer 流程截止日期
     */
    public $Deadline;

    /**
     * @var string 回调地址
     */
    public $CallbackUrl;

    /**
     * @var string 流程中止原因
     */
    public $FlowMessage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Caller $Creator 流程创建者信息
     * @param string $FlowId 流程编号
     * @param string $FlowName 流程名称
     * @param string $FlowDescription 流程描述
     * @param string $FlowType 流程的类型: ”劳务合同“,”租赁合同“,”销售合同“,”其他“
     * @param integer $FlowStatus 流程状态：
0-创建；
1-签署中；
2-拒签；
3-撤回；
4-签完存档完成；
5-已过期；
6-已销毁
7-签署完成未归档
     * @param integer $CreatedOn 流程创建时间
     * @param integer $UpdatedOn 流程完成时间
     * @param integer $Deadline 流程截止日期
     * @param string $CallbackUrl 回调地址
     * @param string $FlowMessage 流程中止原因
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new Caller();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("FlowMessage",$param) and $param["FlowMessage"] !== null) {
            $this->FlowMessage = $param["FlowMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
