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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取<p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置<p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取<p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkflowParams() 获取<p>工作流参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(array $WorkflowParams) 设置<p>工作流参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerWorkflowSchedulerConfigurations() 获取<p>统一调度参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerWorkflowSchedulerConfigurations(array $TriggerWorkflowSchedulerConfigurations) 设置<p>统一调度参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取<p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置<p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>工作流所属路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>工作流所属路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取<p>BundleId项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置<p>BundleId项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取<p>BundleInfo项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置<p>BundleInfo项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGeneralTaskParams() 获取<p>通用参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeneralTaskParams(array $GeneralTaskParams) 设置<p>通用参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerStatus() 获取<p>Trigger 状态 启动ACTIVE，暂停PAUSED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerStatus(string $SchedulerStatus) 设置<p>Trigger 状态 启动ACTIVE，暂停PAUSED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowRunConfig getTriggerWorkflowRunConfiguration() 获取<p>工作流运行参数配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerWorkflowRunConfiguration(WorkflowRunConfig $TriggerWorkflowRunConfiguration) 设置<p>工作流运行参数配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerWorkflowDetail extends AbstractModel
{
    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string <p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var array <p>工作流参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var array <p>统一调度参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerWorkflowSchedulerConfigurations;

    /**
     * @var string <p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string <p>工作流所属路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string <p>BundleId项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string <p>BundleInfo项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var array <p>通用参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeneralTaskParams;

    /**
     * @var string <p>Trigger 状态 启动ACTIVE，暂停PAUSED</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerStatus;

    /**
     * @var WorkflowRunConfig <p>工作流运行参数配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerWorkflowRunConfiguration;

    /**
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin <p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin <p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WorkflowParams <p>工作流参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerWorkflowSchedulerConfigurations <p>统一调度参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc <p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>工作流所属路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId <p>BundleId项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo <p>BundleInfo项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GeneralTaskParams <p>通用参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerStatus <p>Trigger 状态 启动ACTIVE，暂停PAUSED</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowRunConfig $TriggerWorkflowRunConfiguration <p>工作流运行参数配置</p>
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
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

        if (array_key_exists("SchedulerStatus",$param) and $param["SchedulerStatus"] !== null) {
            $this->SchedulerStatus = $param["SchedulerStatus"];
        }

        if (array_key_exists("TriggerWorkflowRunConfiguration",$param) and $param["TriggerWorkflowRunConfiguration"] !== null) {
            $this->TriggerWorkflowRunConfiguration = new WorkflowRunConfig();
            $this->TriggerWorkflowRunConfiguration->deserialize($param["TriggerWorkflowRunConfiguration"]);
        }
    }
}
