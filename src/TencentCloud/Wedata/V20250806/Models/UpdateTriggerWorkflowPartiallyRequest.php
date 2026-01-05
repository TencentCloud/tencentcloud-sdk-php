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
 * UpdateTriggerWorkflowPartially请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method UpdateTriggerWorkflowPartially getNewSetting() 获取责任人ID
 * @method void setNewSetting(UpdateTriggerWorkflowPartially $NewSetting) 设置责任人ID
 * @method array getFieldToRemoveList() 获取删除字段内容，采用属性路径的形式标识，删除的值以":"分割，多个值以","分割
 // 删除调度参数中 ParamKey 为 aa,bb 的属性 "WorkflowParams:aa,bb"
 // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置"TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" 
// 删除spark sql通用参数 "GeneralTaskParams: SPARK_SQL" 

 * @method void setFieldToRemoveList(array $FieldToRemoveList) 设置删除字段内容，采用属性路径的形式标识，删除的值以":"分割，多个值以","分割
 // 删除调度参数中 ParamKey 为 aa,bb 的属性 "WorkflowParams:aa,bb"
 // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置"TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" 
// 删除spark sql通用参数 "GeneralTaskParams: SPARK_SQL" 
 */
class UpdateTriggerWorkflowPartiallyRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var UpdateTriggerWorkflowPartially 责任人ID
     */
    public $NewSetting;

    /**
     * @var array 删除字段内容，采用属性路径的形式标识，删除的值以":"分割，多个值以","分割
 // 删除调度参数中 ParamKey 为 aa,bb 的属性 "WorkflowParams:aa,bb"
 // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置"TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" 
// 删除spark sql通用参数 "GeneralTaskParams: SPARK_SQL" 

     */
    public $FieldToRemoveList;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowId 工作流ID
     * @param UpdateTriggerWorkflowPartially $NewSetting 责任人ID
     * @param array $FieldToRemoveList 删除字段内容，采用属性路径的形式标识，删除的值以":"分割，多个值以","分割
 // 删除调度参数中 ParamKey 为 aa,bb 的属性 "WorkflowParams:aa,bb"
 // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置"TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" 
// 删除spark sql通用参数 "GeneralTaskParams: SPARK_SQL" 
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("NewSetting",$param) and $param["NewSetting"] !== null) {
            $this->NewSetting = new UpdateTriggerWorkflowPartially();
            $this->NewSetting->deserialize($param["NewSetting"]);
        }

        if (array_key_exists("FieldToRemoveList",$param) and $param["FieldToRemoveList"] !== null) {
            $this->FieldToRemoveList = $param["FieldToRemoveList"];
        }
    }
}
