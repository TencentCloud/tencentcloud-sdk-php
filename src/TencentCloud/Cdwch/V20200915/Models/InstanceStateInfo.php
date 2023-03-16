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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群状态抽象后的结构体
 *
 * @method string getInstanceState() 获取集群状态，例如：Serving
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(string $InstanceState) 设置集群状态，例如：Serving
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowCreateTime() 获取集群操作创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowCreateTime(string $FlowCreateTime) 设置集群操作创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowName() 获取集群操作名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowName(string $FlowName) 设置集群操作名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowProgress() 获取集群操作进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowProgress(integer $FlowProgress) 设置集群操作进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStateDesc() 获取集群状态描述，例如：运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStateDesc(string $InstanceStateDesc) 设置集群状态描述，例如：运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowMsg() 获取集群流程错误信息，例如：“创建失败，资源不足”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowMsg(string $FlowMsg) 设置集群流程错误信息，例如：“创建失败，资源不足”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessName() 获取当前步骤的名称，例如：”购买资源中“
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessName(string $ProcessName) 设置当前步骤的名称，例如：”购买资源中“
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取请求id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestId(string $RequestId) 设置请求id
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceStateInfo extends AbstractModel
{
    /**
     * @var string 集群状态，例如：Serving
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @var string 集群操作创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowCreateTime;

    /**
     * @var string 集群操作名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowName;

    /**
     * @var integer 集群操作进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowProgress;

    /**
     * @var string 集群状态描述，例如：运行中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStateDesc;

    /**
     * @var string 集群流程错误信息，例如：“创建失败，资源不足”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowMsg;

    /**
     * @var string 当前步骤的名称，例如：”购买资源中“
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessName;

    /**
     * @var string 请求id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestId;

    /**
     * @param string $InstanceState 集群状态，例如：Serving
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowCreateTime 集群操作创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowName 集群操作名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowProgress 集群操作进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStateDesc 集群状态描述，例如：运行中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowMsg 集群流程错误信息，例如：“创建失败，资源不足”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessName 当前步骤的名称，例如：”购买资源中“
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 请求id
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
    }
}
