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
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getWorkflowId() 获取<p>工作流ID</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
 * @method UpdateTriggerWorkflowPartially getNewSetting() 获取<p>责任人ID</p>
 * @method void setNewSetting(UpdateTriggerWorkflowPartially $NewSetting) 设置<p>责任人ID</p>
 * @method array getFieldToRemoveList() 获取<p>删除字段内容，采用属性路径的形式标识，删除的值以&quot;:&quot;分割，多个值以&quot;,&quot;分割<br> // 删除调度参数中 ParamKey 为 aa,bb 的属性 &quot;WorkflowParams:aa,bb&quot;<br> // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置&quot;TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0&quot;<br>// 删除spark sql通用参数 &quot;GeneralTaskParams: SPARK_SQL&quot;</p>
 * @method void setFieldToRemoveList(array $FieldToRemoveList) 设置<p>删除字段内容，采用属性路径的形式标识，删除的值以&quot;:&quot;分割，多个值以&quot;,&quot;分割<br> // 删除调度参数中 ParamKey 为 aa,bb 的属性 &quot;WorkflowParams:aa,bb&quot;<br> // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置&quot;TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0&quot;<br>// 删除spark sql通用参数 &quot;GeneralTaskParams: SPARK_SQL&quot;</p>
 */
class UpdateTriggerWorkflowPartiallyRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>工作流ID</p>
     */
    public $WorkflowId;

    /**
     * @var UpdateTriggerWorkflowPartially <p>责任人ID</p>
     */
    public $NewSetting;

    /**
     * @var array <p>删除字段内容，采用属性路径的形式标识，删除的值以&quot;:&quot;分割，多个值以&quot;,&quot;分割<br> // 删除调度参数中 ParamKey 为 aa,bb 的属性 &quot;WorkflowParams:aa,bb&quot;<br> // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置&quot;TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0&quot;<br>// 删除spark sql通用参数 &quot;GeneralTaskParams: SPARK_SQL&quot;</p>
     */
    public $FieldToRemoveList;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $WorkflowId <p>工作流ID</p>
     * @param UpdateTriggerWorkflowPartially $NewSetting <p>责任人ID</p>
     * @param array $FieldToRemoveList <p>删除字段内容，采用属性路径的形式标识，删除的值以&quot;:&quot;分割，多个值以&quot;,&quot;分割<br> // 删除调度参数中 ParamKey 为 aa,bb 的属性 &quot;WorkflowParams:aa,bb&quot;<br> // 删除配置的 TriggerId 为 da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0 的调度配置&quot;TriggerWorkflowSchedulerConfigurations :da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0&quot;<br>// 删除spark sql通用参数 &quot;GeneralTaskParams: SPARK_SQL&quot;</p>
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
