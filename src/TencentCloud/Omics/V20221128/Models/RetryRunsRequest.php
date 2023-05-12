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
 * RetryRuns请求参数结构体
 *
 * @method string getProjectId() 获取关联项目ID。
 * @method void setProjectId(string $ProjectId) 设置关联项目ID。
 * @method array getRunUuids() 获取任务UUID。
 * @method void setRunUuids(array $RunUuids) 设置任务UUID。
 */
class RetryRunsRequest extends AbstractModel
{
    /**
     * @var string 关联项目ID。
     */
    public $ProjectId;

    /**
     * @var array 任务UUID。
     */
    public $RunUuids;

    /**
     * @param string $ProjectId 关联项目ID。
     * @param array $RunUuids 任务UUID。
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

        if (array_key_exists("RunUuids",$param) and $param["RunUuids"] !== null) {
            $this->RunUuids = $param["RunUuids"];
        }
    }
}
