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
 * DescribeIntegrationVersionNodesInfo请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTaskVersionPath() 获取task version path
 * @method void setTaskVersionPath(string $TaskVersionPath) 设置task version path
 * @method string getTaskVersion() 获取task version
 * @method void setTaskVersion(string $TaskVersion) 设置task version
 */
class DescribeIntegrationVersionNodesInfoRequest extends AbstractModel
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
     * @var string task version path
     */
    public $TaskVersionPath;

    /**
     * @var string task version
     */
    public $TaskVersion;

    /**
     * @param string $TaskId 任务id
     * @param string $ProjectId 项目id
     * @param string $TaskVersionPath task version path
     * @param string $TaskVersion task version
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

        if (array_key_exists("TaskVersionPath",$param) and $param["TaskVersionPath"] !== null) {
            $this->TaskVersionPath = $param["TaskVersionPath"];
        }

        if (array_key_exists("TaskVersion",$param) and $param["TaskVersion"] !== null) {
            $this->TaskVersion = $param["TaskVersion"];
        }
    }
}
