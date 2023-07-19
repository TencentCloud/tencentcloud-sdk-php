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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitTaskTestRun请求参数结构体
 *
 * @method string getTaskIds() 获取无
 * @method void setTaskIds(string $TaskIds) 设置无
 * @method string getProjectId() 获取无
 * @method void setProjectId(string $ProjectId) 设置无
 * @method string getWorkFlowId() 获取无
 * @method void setWorkFlowId(string $WorkFlowId) 设置无
 * @method string getName() 获取无
 * @method void setName(string $Name) 设置无
 * @method array getTasks() 获取无
 * @method void setTasks(array $Tasks) 设置无
 * @method string getDescription() 获取无
 * @method void setDescription(string $Description) 设置无
 * @method string getRunParams() 获取无
 * @method void setRunParams(string $RunParams) 设置无
 * @method string getScriptContent() 获取无
 * @method void setScriptContent(string $ScriptContent) 设置无
 * @method string getVersionId() 获取无
 * @method void setVersionId(string $VersionId) 设置无
 */
class SubmitTaskTestRunRequest extends AbstractModel
{
    /**
     * @var string 无
     */
    public $TaskIds;

    /**
     * @var string 无
     */
    public $ProjectId;

    /**
     * @var string 无
     */
    public $WorkFlowId;

    /**
     * @var string 无
     */
    public $Name;

    /**
     * @var array 无
     */
    public $Tasks;

    /**
     * @var string 无
     */
    public $Description;

    /**
     * @var string 无
     */
    public $RunParams;

    /**
     * @var string 无
     */
    public $ScriptContent;

    /**
     * @var string 无
     */
    public $VersionId;

    /**
     * @param string $TaskIds 无
     * @param string $ProjectId 无
     * @param string $WorkFlowId 无
     * @param string $Name 无
     * @param array $Tasks 无
     * @param string $Description 无
     * @param string $RunParams 无
     * @param string $ScriptContent 无
     * @param string $VersionId 无
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
