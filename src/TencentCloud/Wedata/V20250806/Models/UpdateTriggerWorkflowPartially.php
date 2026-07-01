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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询工作流详细信息
 *
 * @method string getWorkflowName() 获取<p>工作流名称</p>
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
 * @method string getOwnerUin() 获取<p>责任人ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>责任人ID</p>
 * @method array getWorkflowParams() 获取<p>工作流参数数组</p>
 * @method void setWorkflowParams(array $WorkflowParams) 设置<p>工作流参数数组</p>
 * @method array getTriggerWorkflowSchedulerConfigurations() 获取<p>统一调度参数</p>
 * @method void setTriggerWorkflowSchedulerConfigurations(array $TriggerWorkflowSchedulerConfigurations) 设置<p>统一调度参数</p>
 * @method string getWorkflowDesc() 获取<p>工作流描述</p>
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置<p>工作流描述</p>
 * @method string getBundleId() 获取<p>BundleId项</p>
 * @method void setBundleId(string $BundleId) 设置<p>BundleId项</p>
 * @method string getBundleInfo() 获取<p>BundleInfo项</p>
 * @method void setBundleInfo(string $BundleInfo) 设置<p>BundleInfo项</p>
 * @method array getGeneralTaskParams() 获取<p>通用参数</p>
 * @method void setGeneralTaskParams(array $GeneralTaskParams) 设置<p>通用参数</p>
 * @method WorkflowRunConfig getTriggerWorkflowRunConfiguration() 获取<p>工作流运行参数配置</p>
 * @method void setTriggerWorkflowRunConfiguration(WorkflowRunConfig $TriggerWorkflowRunConfiguration) 设置<p>工作流运行参数配置</p>
 * @method string getSchedulerStatus() 获取<p>Trigger 状态 启动ACTIVE，暂停PAUSED。配置完之后，内部的Trigger状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
 * @method void setSchedulerStatus(string $SchedulerStatus) 设置<p>Trigger 状态 启动ACTIVE，暂停PAUSED。配置完之后，内部的Trigger状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
 * @method string getTriggerMode() 获取<p>触发方式：定时触发：TIME_TRIGGER 。配置完之后，内部的TriggerMode状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
 * @method void setTriggerMode(string $TriggerMode) 设置<p>触发方式：定时触发：TIME_TRIGGER 。配置完之后，内部的TriggerMode状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
 */
class UpdateTriggerWorkflowPartially extends AbstractModel
{
    /**
     * @var string <p>工作流名称</p>
     */
    public $WorkflowName;

    /**
     * @var string <p>责任人ID</p>
     */
    public $OwnerUin;

    /**
     * @var array <p>工作流参数数组</p>
     */
    public $WorkflowParams;

    /**
     * @var array <p>统一调度参数</p>
     */
    public $TriggerWorkflowSchedulerConfigurations;

    /**
     * @var string <p>工作流描述</p>
     */
    public $WorkflowDesc;

    /**
     * @var string <p>BundleId项</p>
     */
    public $BundleId;

    /**
     * @var string <p>BundleInfo项</p>
     */
    public $BundleInfo;

    /**
     * @var array <p>通用参数</p>
     */
    public $GeneralTaskParams;

    /**
     * @var WorkflowRunConfig <p>工作流运行参数配置</p>
     */
    public $TriggerWorkflowRunConfiguration;

    /**
     * @var string <p>Trigger 状态 启动ACTIVE，暂停PAUSED。配置完之后，内部的Trigger状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
     */
    public $SchedulerStatus;

    /**
     * @var string <p>触发方式：定时触发：TIME_TRIGGER 。配置完之后，内部的TriggerMode状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
     */
    public $TriggerMode;

    /**
     * @param string $WorkflowName <p>工作流名称</p>
     * @param string $OwnerUin <p>责任人ID</p>
     * @param array $WorkflowParams <p>工作流参数数组</p>
     * @param array $TriggerWorkflowSchedulerConfigurations <p>统一调度参数</p>
     * @param string $WorkflowDesc <p>工作流描述</p>
     * @param string $BundleId <p>BundleId项</p>
     * @param string $BundleInfo <p>BundleInfo项</p>
     * @param array $GeneralTaskParams <p>通用参数</p>
     * @param WorkflowRunConfig $TriggerWorkflowRunConfiguration <p>工作流运行参数配置</p>
     * @param string $SchedulerStatus <p>Trigger 状态 启动ACTIVE，暂停PAUSED。配置完之后，内部的Trigger状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
     * @param string $TriggerMode <p>触发方式：定时触发：TIME_TRIGGER 。配置完之后，内部的TriggerMode状态可不配置，如果配置，内容会被该值覆盖。</p><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = [];
            foreach ($param["WorkflowParams"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->WorkflowParams, $obj);
            }
        }

        if (array_key_exists("TriggerWorkflowSchedulerConfigurations",$param) and $param["TriggerWorkflowSchedulerConfigurations"] !== null) {
            $this->TriggerWorkflowSchedulerConfigurations = [];
            foreach ($param["TriggerWorkflowSchedulerConfigurations"] as $key => $value){
                $obj = new WorkflowTriggerConfig();
                $obj->deserialize($value);
                array_push($this->TriggerWorkflowSchedulerConfigurations, $obj);
            }
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("GeneralTaskParams",$param) and $param["GeneralTaskParams"] !== null) {
            $this->GeneralTaskParams = [];
            foreach ($param["GeneralTaskParams"] as $key => $value){
                $obj = new WorkflowGeneralTaskParam();
                $obj->deserialize($value);
                array_push($this->GeneralTaskParams, $obj);
            }
        }

        if (array_key_exists("TriggerWorkflowRunConfiguration",$param) and $param["TriggerWorkflowRunConfiguration"] !== null) {
            $this->TriggerWorkflowRunConfiguration = new WorkflowRunConfig();
            $this->TriggerWorkflowRunConfiguration->deserialize($param["TriggerWorkflowRunConfiguration"]);
        }

        if (array_key_exists("SchedulerStatus",$param) and $param["SchedulerStatus"] !== null) {
            $this->SchedulerStatus = $param["SchedulerStatus"];
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }
    }
}
