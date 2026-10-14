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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResumeWorkflowRun请求参数结构体
 *
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method string getWorkflowRunId() 获取<p>工作流运行实例ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行实例ID</p>
 * @method string getQuery() 获取<p>用户输入的内容</p>
 * @method void setQuery(string $Query) 设置<p>用户输入的内容</p>
 * @method array getFileList() 获取<p>文件信息</p>
 * @method void setFileList(array $FileList) 设置<p>文件信息</p>
 */
class ResumeWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>工作流运行实例ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var string <p>用户输入的内容</p>
     */
    public $Query;

    /**
     * @var array <p>文件信息</p>
     */
    public $FileList;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param string $WorkflowRunId <p>工作流运行实例ID</p>
     * @param string $Query <p>用户输入的内容</p>
     * @param array $FileList <p>文件信息</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = [];
            foreach ($param["FileList"] as $key => $value){
                $obj = new ConversationFileInfo();
                $obj->deserialize($value);
                array_push($this->FileList, $obj);
            }
        }
    }
}
