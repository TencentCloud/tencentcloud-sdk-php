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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteJobs请求参数结构体
 *
 * @method array getJobIds() 获取作业Id列表
 * @method void setJobIds(array $JobIds) 设置作业Id列表
 * @method string getWorkSpaceId() 获取工作空间Id
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间Id
 */
class DeleteJobsRequest extends AbstractModel
{
    /**
     * @var array 作业Id列表
     */
    public $JobIds;

    /**
     * @var string 工作空间Id
     */
    public $WorkSpaceId;

    /**
     * @param array $JobIds 作业Id列表
     * @param string $WorkSpaceId 工作空间Id
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
        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
