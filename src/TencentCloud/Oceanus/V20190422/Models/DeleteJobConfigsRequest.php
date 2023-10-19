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
 * DeleteJobConfigs请求参数结构体
 *
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 * @method array getJobConfigVersions() 获取作业配置版本数组
 * @method void setJobConfigVersions(array $JobConfigVersions) 设置作业配置版本数组
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class DeleteJobConfigsRequest extends AbstractModel
{
    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @var array 作业配置版本数组
     */
    public $JobConfigVersions;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param string $JobId 作业ID
     * @param array $JobConfigVersions 作业配置版本数组
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobConfigVersions",$param) and $param["JobConfigVersions"] !== null) {
            $this->JobConfigVersions = $param["JobConfigVersions"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
