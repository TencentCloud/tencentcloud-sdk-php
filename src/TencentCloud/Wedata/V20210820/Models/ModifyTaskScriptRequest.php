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
 * ModifyTaskScript请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getScriptContent() 获取脚本内容 base64编码
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容 base64编码
 * @method array getIntegrationNodeDetails() 获取集成任务脚本配置
 * @method void setIntegrationNodeDetails(array $IntegrationNodeDetails) 设置集成任务脚本配置
 */
class ModifyTaskScriptRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 脚本内容 base64编码
     */
    public $ScriptContent;

    /**
     * @var array 集成任务脚本配置
     */
    public $IntegrationNodeDetails;

    /**
     * @param string $ProjectId 项目Id
     * @param string $TaskId 任务ID
     * @param string $ScriptContent 脚本内容 base64编码
     * @param array $IntegrationNodeDetails 集成任务脚本配置
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("IntegrationNodeDetails",$param) and $param["IntegrationNodeDetails"] !== null) {
            $this->IntegrationNodeDetails = [];
            foreach ($param["IntegrationNodeDetails"] as $key => $value){
                $obj = new IntegrationNodeDetail();
                $obj->deserialize($value);
                array_push($this->IntegrationNodeDetails, $obj);
            }
        }
    }
}
