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
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getTaskType() 获取任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型
 * @method void setTaskType(integer $TaskType) 设置任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型
 * @method integer getInstanceVersion() 获取提交版本号
 * @method void setInstanceVersion(integer $InstanceVersion) 设置提交版本号
 * @method array getExtConfig() 获取额外参数
 * @method void setExtConfig(array $ExtConfig) 设置额外参数
 */
class DescribeIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型
     */
    public $TaskType;

    /**
     * @var integer 提交版本号
     */
    public $InstanceVersion;

    /**
     * @var array 额外参数
     */
    public $ExtConfig;

    /**
     * @param string $TaskId 任务id
     * @param string $ProjectId 项目id
     * @param integer $TaskType 任务类型，201: 实时集成任务,   202：离线集成任务，不传默认值为201 实时任务类型
     * @param integer $InstanceVersion 提交版本号
     * @param array $ExtConfig 额外参数
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
