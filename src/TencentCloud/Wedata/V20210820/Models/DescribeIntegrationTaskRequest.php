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
 * DescribeIntegrationTask请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method integer getTaskType() 获取<p>任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型</p>
 * @method void setTaskType(integer $TaskType) 设置<p>任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型</p>
 * @method integer getInstanceVersion() 获取<p>提交版本号</p>
 * @method void setInstanceVersion(integer $InstanceVersion) 设置<p>提交版本号</p>
 * @method array getExtConfig() 获取<p>额外参数</p>
 * @method void setExtConfig(array $ExtConfig) 设置<p>额外参数</p>
 */
class DescribeIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型</p>
     */
    public $TaskType;

    /**
     * @var integer <p>提交版本号</p>
     */
    public $InstanceVersion;

    /**
     * @var array <p>额外参数</p>
     */
    public $ExtConfig;

    /**
     * @param string $TaskId <p>任务id</p>
     * @param string $ProjectId <p>项目id</p>
     * @param integer $TaskType <p>任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型</p>
     * @param integer $InstanceVersion <p>提交版本号</p>
     * @param array $ExtConfig <p>额外参数</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }
    }
}
