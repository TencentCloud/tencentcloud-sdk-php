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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkflow请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method WorkflowBaseInfo getBaseInfo() 获取<p>工作流基本信息。必填，其中 WorkflowName 必填且工作空间内唯一</p>
 * @method void setBaseInfo(WorkflowBaseInfo $BaseInfo) 设置<p>工作流基本信息。必填，其中 WorkflowName 必填且工作空间内唯一</p>
 * @method array getTrigger() 获取<p>工作流调度配置</p>
 * @method void setTrigger(array $Trigger) 设置<p>工作流调度配置</p>
 * @method array getParamList() 获取<p>工作流参数列表</p>
 * @method void setParamList(array $ParamList) 设置<p>工作流参数列表</p>
 * @method array getLabelList() 获取<p>标签列表</p>
 * @method void setLabelList(array $LabelList) 设置<p>标签列表</p>
 * @method AlarmBrief getAlarm() 获取<p>工作流告警配置</p>
 * @method void setAlarm(AlarmBrief $Alarm) 设置<p>工作流告警配置</p>
 * @method MonitorMetricBrief getMonitorMetric() 获取<p>监控指标配置。若告警条件中选择了监控告警，则本字段必填</p>
 * @method void setMonitorMetric(MonitorMetricBrief $MonitorMetric) 设置<p>监控指标配置。若告警条件中选择了监控告警，则本字段必填</p>
 * @method WorkflowAdvanceConfig getAdvanceConfig() 获取<p>工作流高级设置</p>
 * @method void setAdvanceConfig(WorkflowAdvanceConfig $AdvanceConfig) 设置<p>工作流高级设置</p>
 * @method array getTaskList() 获取<p>工作流任务列表</p>
 * @method void setTaskList(array $TaskList) 设置<p>工作流任务列表</p>
 * @method string getBundleId() 获取<p>BundleId，可通过 Bundle 相关接口获取</p>
 * @method void setBundleId(string $BundleId) 设置<p>BundleId，可通过 Bundle 相关接口获取</p>
 * @method string getBundleInfo() 获取<p>Bundle信息</p>
 * @method void setBundleInfo(string $BundleInfo) 设置<p>Bundle信息</p>
 * @method string getGitConfigId() 获取<p>Git配置ID，可通过 Git 配置相关接口获取</p>
 * @method void setGitConfigId(string $GitConfigId) 设置<p>Git配置ID，可通过 Git 配置相关接口获取</p>
 * @method string getGitBranch() 获取<p>Git分支信息</p>
 * @method void setGitBranch(string $GitBranch) 设置<p>Git分支信息</p>
 */
class CreateWorkflowRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     */
    public $WorkspaceId;

    /**
     * @var WorkflowBaseInfo <p>工作流基本信息。必填，其中 WorkflowName 必填且工作空间内唯一</p>
     */
    public $BaseInfo;

    /**
     * @var array <p>工作流调度配置</p>
     */
    public $Trigger;

    /**
     * @var array <p>工作流参数列表</p>
     */
    public $ParamList;

    /**
     * @var array <p>标签列表</p>
     */
    public $LabelList;

    /**
     * @var AlarmBrief <p>工作流告警配置</p>
     */
    public $Alarm;

    /**
     * @var MonitorMetricBrief <p>监控指标配置。若告警条件中选择了监控告警，则本字段必填</p>
     */
    public $MonitorMetric;

    /**
     * @var WorkflowAdvanceConfig <p>工作流高级设置</p>
     */
    public $AdvanceConfig;

    /**
     * @var array <p>工作流任务列表</p>
     */
    public $TaskList;

    /**
     * @var string <p>BundleId，可通过 Bundle 相关接口获取</p>
     */
    public $BundleId;

    /**
     * @var string <p>Bundle信息</p>
     */
    public $BundleInfo;

    /**
     * @var string <p>Git配置ID，可通过 Git 配置相关接口获取</p>
     */
    public $GitConfigId;

    /**
     * @var string <p>Git分支信息</p>
     */
    public $GitBranch;

    /**
     * @param string $WorkspaceId <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     * @param WorkflowBaseInfo $BaseInfo <p>工作流基本信息。必填，其中 WorkflowName 必填且工作空间内唯一</p>
     * @param array $Trigger <p>工作流调度配置</p>
     * @param array $ParamList <p>工作流参数列表</p>
     * @param array $LabelList <p>标签列表</p>
     * @param AlarmBrief $Alarm <p>工作流告警配置</p>
     * @param MonitorMetricBrief $MonitorMetric <p>监控指标配置。若告警条件中选择了监控告警，则本字段必填</p>
     * @param WorkflowAdvanceConfig $AdvanceConfig <p>工作流高级设置</p>
     * @param array $TaskList <p>工作流任务列表</p>
     * @param string $BundleId <p>BundleId，可通过 Bundle 相关接口获取</p>
     * @param string $BundleInfo <p>Bundle信息</p>
     * @param string $GitConfigId <p>Git配置ID，可通过 Git 配置相关接口获取</p>
     * @param string $GitBranch <p>Git分支信息</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new WorkflowBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = [];
            foreach ($param["Trigger"] as $key => $value){
                $obj = new WorkflowTriggerConfiguration();
                $obj->deserialize($value);
                array_push($this->Trigger, $obj);
            }
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = [];
            foreach ($param["LabelList"] as $key => $value){
                $obj = new LabelBrief();
                $obj->deserialize($value);
                array_push($this->LabelList, $obj);
            }
        }

        if (array_key_exists("Alarm",$param) and $param["Alarm"] !== null) {
            $this->Alarm = new AlarmBrief();
            $this->Alarm->deserialize($param["Alarm"]);
        }

        if (array_key_exists("MonitorMetric",$param) and $param["MonitorMetric"] !== null) {
            $this->MonitorMetric = new MonitorMetricBrief();
            $this->MonitorMetric->deserialize($param["MonitorMetric"]);
        }

        if (array_key_exists("AdvanceConfig",$param) and $param["AdvanceConfig"] !== null) {
            $this->AdvanceConfig = new WorkflowAdvanceConfig();
            $this->AdvanceConfig->deserialize($param["AdvanceConfig"]);
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new WorkflowTask();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("GitConfigId",$param) and $param["GitConfigId"] !== null) {
            $this->GitConfigId = $param["GitConfigId"];
        }

        if (array_key_exists("GitBranch",$param) and $param["GitBranch"] !== null) {
            $this->GitBranch = $param["GitBranch"];
        }
    }
}
