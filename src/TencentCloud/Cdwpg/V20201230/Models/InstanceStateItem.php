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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量实例状态项
 *
 * @method string getInstanceId() 获取<p>集群实例名称</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例名称</p>
 * @method string getInstanceState() 获取<p>集群状态，例如：Serving</p>
 * @method void setInstanceState(string $InstanceState) 设置<p>集群状态，例如：Serving</p>
 * @method string getInstanceStateDesc() 获取<p>集群状态描述，例如：运行中</p>
 * @method void setInstanceStateDesc(string $InstanceStateDesc) 设置<p>集群状态描述，例如：运行中</p>
 * @method integer getBackupStatus() 获取<p>集群备份任务开启状态</p>
 * @method void setBackupStatus(integer $BackupStatus) 设置<p>集群备份任务开启状态</p>
 * @method integer getBackupOpenStatus() 获取<p>集群备份任务开启状态2</p>
 * @method void setBackupOpenStatus(integer $BackupOpenStatus) 设置<p>集群备份任务开启状态2</p>
 * @method string getFlowCreateTime() 获取<p>集群操作创建时间</p>
 * @method void setFlowCreateTime(string $FlowCreateTime) 设置<p>集群操作创建时间</p>
 * @method string getFlowName() 获取<p>集群操作名称</p>
 * @method void setFlowName(string $FlowName) 设置<p>集群操作名称</p>
 * @method float getFlowProgress() 获取<p>集群操作进度</p>
 * @method void setFlowProgress(float $FlowProgress) 设置<p>集群操作进度</p>
 * @method string getFlowMsg() 获取<p>集群流程错误信息</p>
 * @method void setFlowMsg(string $FlowMsg) 设置<p>集群流程错误信息</p>
 * @method string getProcessName() 获取<p>当前步骤的名称</p>
 * @method void setProcessName(string $ProcessName) 设置<p>当前步骤的名称</p>
 */
class InstanceStateItem extends AbstractModel
{
    /**
     * @var string <p>集群实例名称</p>
     */
    public $InstanceId;

    /**
     * @var string <p>集群状态，例如：Serving</p>
     */
    public $InstanceState;

    /**
     * @var string <p>集群状态描述，例如：运行中</p>
     */
    public $InstanceStateDesc;

    /**
     * @var integer <p>集群备份任务开启状态</p>
     */
    public $BackupStatus;

    /**
     * @var integer <p>集群备份任务开启状态2</p>
     */
    public $BackupOpenStatus;

    /**
     * @var string <p>集群操作创建时间</p>
     */
    public $FlowCreateTime;

    /**
     * @var string <p>集群操作名称</p>
     */
    public $FlowName;

    /**
     * @var float <p>集群操作进度</p>
     */
    public $FlowProgress;

    /**
     * @var string <p>集群流程错误信息</p>
     */
    public $FlowMsg;

    /**
     * @var string <p>当前步骤的名称</p>
     */
    public $ProcessName;

    /**
     * @param string $InstanceId <p>集群实例名称</p>
     * @param string $InstanceState <p>集群状态，例如：Serving</p>
     * @param string $InstanceStateDesc <p>集群状态描述，例如：运行中</p>
     * @param integer $BackupStatus <p>集群备份任务开启状态</p>
     * @param integer $BackupOpenStatus <p>集群备份任务开启状态2</p>
     * @param string $FlowCreateTime <p>集群操作创建时间</p>
     * @param string $FlowName <p>集群操作名称</p>
     * @param float $FlowProgress <p>集群操作进度</p>
     * @param string $FlowMsg <p>集群流程错误信息</p>
     * @param string $ProcessName <p>当前步骤的名称</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("InstanceStateDesc",$param) and $param["InstanceStateDesc"] !== null) {
            $this->InstanceStateDesc = $param["InstanceStateDesc"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("BackupOpenStatus",$param) and $param["BackupOpenStatus"] !== null) {
            $this->BackupOpenStatus = $param["BackupOpenStatus"];
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

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }
    }
}
