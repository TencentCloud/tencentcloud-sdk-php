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
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkflowParams() 获取工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(array $WorkflowParams) 设置工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerWorkflowSchedulerConfigurations() 获取统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerWorkflowSchedulerConfigurations(array $TriggerWorkflowSchedulerConfigurations) 设置统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取BundleId项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置BundleId项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取BundleInfo项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置BundleInfo项
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGeneralTaskParams() 获取通用参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeneralTaskParams(array $GeneralTaskParams) 设置通用参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerStatus() 获取Trigger 状态 启动ACTIVE，暂停PAUSED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerStatus(string $SchedulerStatus) 设置Trigger 状态 启动ACTIVE，暂停PAUSED
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerWorkflowDetail extends AbstractModel
{
    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var array 工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var array 统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerWorkflowSchedulerConfigurations;

    /**
     * @var string 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string BundleId项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string BundleInfo项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var array 通用参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeneralTaskParams;

    /**
     * @var string Trigger 状态 启动ACTIVE，暂停PAUSED
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerStatus;

    /**
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WorkflowParams 工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerWorkflowSchedulerConfigurations 统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId BundleId项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo BundleInfo项
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GeneralTaskParams 通用参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerStatus Trigger 状态 启动ACTIVE，暂停PAUSED
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
    }
}
