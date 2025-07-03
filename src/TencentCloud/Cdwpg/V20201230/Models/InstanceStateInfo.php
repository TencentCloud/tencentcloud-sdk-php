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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群状态抽象后的结构体
 *
 * @method string getInstanceState() 获取集群状态，例如：Serving
 * @method void setInstanceState(string $InstanceState) 设置集群状态，例如：Serving
 * @method string getFlowCreateTime() 获取集群操作创建时间
 * @method void setFlowCreateTime(string $FlowCreateTime) 设置集群操作创建时间
 * @method string getFlowName() 获取集群操作名称
 * @method void setFlowName(string $FlowName) 设置集群操作名称
 * @method integer getFlowProgress() 获取集群操作进度
 * @method void setFlowProgress(integer $FlowProgress) 设置集群操作进度
 * @method string getInstanceStateDesc() 获取集群状态描述，例如：运行中
 * @method void setInstanceStateDesc(string $InstanceStateDesc) 设置集群状态描述，例如：运行中
 * @method string getFlowMsg() 获取集群流程错误信息，例如：“创建失败，资源不足”
 * @method void setFlowMsg(string $FlowMsg) 设置集群流程错误信息，例如：“创建失败，资源不足”
 * @method string getProcessName() 获取当前步骤的名称，例如：”购买资源中“
 * @method void setProcessName(string $ProcessName) 设置当前步骤的名称，例如：”购买资源中“
 * @method integer getBackupStatus() 获取集群是否有备份中任务，有为1,无为0
 * @method void setBackupStatus(integer $BackupStatus) 设置集群是否有备份中任务，有为1,无为0
 * @method string getRequestId() 获取请求id
 * @method void setRequestId(string $RequestId) 设置请求id
 * @method integer getBackupOpenStatus() 获取集群是否有备份中任务，有为1,无为0
 * @method void setBackupOpenStatus(integer $BackupOpenStatus) 设置集群是否有备份中任务，有为1,无为0
 */
class InstanceStateInfo extends AbstractModel
{
    /**
     * @var string 集群状态，例如：Serving
     */
    public $InstanceState;

    /**
     * @var string 集群操作创建时间
     */
    public $FlowCreateTime;

    /**
     * @var string 集群操作名称
     */
    public $FlowName;

    /**
     * @var integer 集群操作进度
     */
    public $FlowProgress;

    /**
     * @var string 集群状态描述，例如：运行中
     */
    public $InstanceStateDesc;

    /**
     * @var string 集群流程错误信息，例如：“创建失败，资源不足”
     */
    public $FlowMsg;

    /**
     * @var string 当前步骤的名称，例如：”购买资源中“
     */
    public $ProcessName;

    /**
     * @var integer 集群是否有备份中任务，有为1,无为0
     */
    public $BackupStatus;

    /**
     * @var string 请求id
     */
    public $RequestId;

    /**
     * @var integer 集群是否有备份中任务，有为1,无为0
     */
    public $BackupOpenStatus;

    /**
     * @param string $InstanceState 集群状态，例如：Serving
     * @param string $FlowCreateTime 集群操作创建时间
     * @param string $FlowName 集群操作名称
     * @param integer $FlowProgress 集群操作进度
     * @param string $InstanceStateDesc 集群状态描述，例如：运行中
     * @param string $FlowMsg 集群流程错误信息，例如：“创建失败，资源不足”
     * @param string $ProcessName 当前步骤的名称，例如：”购买资源中“
     * @param integer $BackupStatus 集群是否有备份中任务，有为1,无为0
     * @param string $RequestId 请求id
     * @param integer $BackupOpenStatus 集群是否有备份中任务，有为1,无为0
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

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("BackupOpenStatus",$param) and $param["BackupOpenStatus"] !== null) {
            $this->BackupOpenStatus = $param["BackupOpenStatus"];
        }
    }
}
