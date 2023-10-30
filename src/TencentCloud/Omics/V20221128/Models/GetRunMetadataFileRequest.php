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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRunMetadataFile请求参数结构体
 *
 * @method string getRunUuid() 获取任务Uuid。
 * @method void setRunUuid(string $RunUuid) 设置任务Uuid。
 * @method string getKey() 获取需要获取的文件名。

默认支持以下文件：
- nextflow.log

提交时NFOption中report指定为true时，额外支持以下文件：
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
 * @method void setKey(string $Key) 设置需要获取的文件名。

默认支持以下文件：
- nextflow.log

提交时NFOption中report指定为true时，额外支持以下文件：
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
 * @method string getProjectId() 获取项目ID。
（不填使用指定地域下的默认项目）
 * @method void setProjectId(string $ProjectId) 设置项目ID。
（不填使用指定地域下的默认项目）
 */
class GetRunMetadataFileRequest extends AbstractModel
{
    /**
     * @var string 任务Uuid。
     */
    public $RunUuid;

    /**
     * @var string 需要获取的文件名。

默认支持以下文件：
- nextflow.log

提交时NFOption中report指定为true时，额外支持以下文件：
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
     */
    public $Key;

    /**
     * @var string 项目ID。
（不填使用指定地域下的默认项目）
     */
    public $ProjectId;

    /**
     * @param string $RunUuid 任务Uuid。
     * @param string $Key 需要获取的文件名。

默认支持以下文件：
- nextflow.log

提交时NFOption中report指定为true时，额外支持以下文件：
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
     * @param string $ProjectId 项目ID。
（不填使用指定地域下的默认项目）
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
        if (array_key_exists("RunUuid",$param) and $param["RunUuid"] !== null) {
            $this->RunUuid = $param["RunUuid"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
