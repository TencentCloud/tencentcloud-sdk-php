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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群状态抽象后的结构体
 *
 * @method string getInstanceState() 获取<p>集群状态，例如：Serving</p>
 * @method void setInstanceState(string $InstanceState) 设置<p>集群状态，例如：Serving</p>
 * @method string getFlowCreateTime() 获取<p>集群操作创建时间</p>
 * @method void setFlowCreateTime(string $FlowCreateTime) 设置<p>集群操作创建时间</p>
 * @method string getFlowName() 获取<p>集群操作名称</p>
 * @method void setFlowName(string $FlowName) 设置<p>集群操作名称</p>
 * @method integer getFlowProgress() 获取<p>集群操作进度</p>
 * @method void setFlowProgress(integer $FlowProgress) 设置<p>集群操作进度</p>
 * @method string getInstanceStateDesc() 获取<p>集群状态描述，例如：运行中</p>
 * @method void setInstanceStateDesc(string $InstanceStateDesc) 设置<p>集群状态描述，例如：运行中</p>
 * @method string getFlowMsg() 获取<p>集群流程错误信息，例如：“创建失败，资源不足”</p>
 * @method void setFlowMsg(string $FlowMsg) 设置<p>集群流程错误信息，例如：“创建失败，资源不足”</p>
 * @method string getProcessName() 获取<p>当前步骤的名称，例如：”购买资源中“</p>
 * @method void setProcessName(string $ProcessName) 设置<p>当前步骤的名称，例如：”购买资源中“</p>
 * @method string getRequestId() 获取<p>请求id</p>
 * @method void setRequestId(string $RequestId) 设置<p>请求id</p>
 * @method string getProcessSubName() 获取<p>流程的二级名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessSubName(string $ProcessSubName) 设置<p>流程的二级名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestID() 获取<p>请求ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestID(string $RequestID) 设置<p>请求ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceStateInfo extends AbstractModel
{
    /**
     * @var string <p>集群状态，例如：Serving</p>
     */
    public $InstanceState;

    /**
     * @var string <p>集群操作创建时间</p>
     */
    public $FlowCreateTime;

    /**
     * @var string <p>集群操作名称</p>
     */
    public $FlowName;

    /**
     * @var integer <p>集群操作进度</p>
     */
    public $FlowProgress;

    /**
     * @var string <p>集群状态描述，例如：运行中</p>
     */
    public $InstanceStateDesc;

    /**
     * @var string <p>集群流程错误信息，例如：“创建失败，资源不足”</p>
     */
    public $FlowMsg;

    /**
     * @var string <p>当前步骤的名称，例如：”购买资源中“</p>
     */
    public $ProcessName;

    /**
     * @var string <p>请求id</p>
     */
    public $RequestId;

    /**
     * @var string <p>流程的二级名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessSubName;

    /**
     * @var string <p>请求ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestID;

    /**
     * @param string $InstanceState <p>集群状态，例如：Serving</p>
     * @param string $FlowCreateTime <p>集群操作创建时间</p>
     * @param string $FlowName <p>集群操作名称</p>
     * @param integer $FlowProgress <p>集群操作进度</p>
     * @param string $InstanceStateDesc <p>集群状态描述，例如：运行中</p>
     * @param string $FlowMsg <p>集群流程错误信息，例如：“创建失败，资源不足”</p>
     * @param string $ProcessName <p>当前步骤的名称，例如：”购买资源中“</p>
     * @param string $RequestId <p>请求id</p>
     * @param string $ProcessSubName <p>流程的二级名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestID <p>请求ID</p>
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
        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("FlowCreateTime",$param) and $param["FlowCreateTime"] !== null) {
            $this->FlowCreateTime = $param["FlowCreateTime"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowProgress",$param) and $param["FlowProgress"] !== null) {
            $this->FlowProgress = $param["FlowProgress"];
        }

        if (array_key_exists("InstanceStateDesc",$param) and $param["InstanceStateDesc"] !== null) {
            $this->InstanceStateDesc = $param["InstanceStateDesc"];
        }

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("ProcessSubName",$param) and $param["ProcessSubName"] !== null) {
            $this->ProcessSubName = $param["ProcessSubName"];
        }

        if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
            $this->RequestID = $param["RequestID"];
        }
    }
}
