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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitTaskTestRun请求参数结构体
 *
 * @method string getTaskIds() 获取taskId列表
 * @method void setTaskIds(string $TaskIds) 设置taskId列表
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getWorkFlowId() 获取工作流id
 * @method void setWorkFlowId(string $WorkFlowId) 设置工作流id
 * @method string getName() 获取工作流名称
 * @method void setName(string $Name) 设置工作流名称
 * @method array getTasks() 获取工作流任务列表
 * @method void setTasks(array $Tasks) 设置工作流任务列表
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getRunParams() 获取运行参数，map的Json形式
 * @method void setRunParams(string $RunParams) 设置运行参数，map的Json形式
 * @method string getScriptContent() 获取脚本内容
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
 * @method string getVersionId() 获取版本号
 * @method void setVersionId(string $VersionId) 设置版本号
 */
class SubmitTaskTestRunRequest extends AbstractModel
{
    /**
     * @var string taskId列表
     */
    public $TaskIds;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 工作流id
     */
    public $WorkFlowId;

    /**
     * @var string 工作流名称
     */
    public $Name;

    /**
     * @var array 工作流任务列表
     */
    public $Tasks;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string 运行参数，map的Json形式
     */
    public $RunParams;

    /**
     * @var string 脚本内容
     */
    public $ScriptContent;

    /**
     * @var string 版本号
     */
    public $VersionId;

    /**
     * @param string $TaskIds taskId列表
     * @param string $ProjectId 项目Id
     * @param string $WorkFlowId 工作流id
     * @param string $Name 工作流名称
     * @param array $Tasks 工作流任务列表
     * @param string $Description 备注
     * @param string $RunParams 运行参数，map的Json形式
     * @param string $ScriptContent 脚本内容
     * @param string $VersionId 版本号
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new StageCloudApiRequest();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
