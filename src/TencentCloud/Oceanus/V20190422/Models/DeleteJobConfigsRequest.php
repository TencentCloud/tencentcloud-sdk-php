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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteJobConfigs请求参数结构体
 *
 * @method string getJobId() 获取<p>作业ID</p>
 * @method void setJobId(string $JobId) 设置<p>作业ID</p>
 * @method array getJobConfigVersions() 获取<p>作业配置版本数组</p>
 * @method void setJobConfigVersions(array $JobConfigVersions) 设置<p>作业配置版本数组</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 * @method integer getConfigScope() 获取<p>配置更新范围 0=全量(默认) 1=仅开发 2=仅运维</p><p>取值范围：[0, 2]</p>
 * @method void setConfigScope(integer $ConfigScope) 设置<p>配置更新范围 0=全量(默认) 1=仅开发 2=仅运维</p><p>取值范围：[0, 2]</p>
 */
class DeleteJobConfigsRequest extends AbstractModel
{
    /**
     * @var string <p>作业ID</p>
     */
    public $JobId;

    /**
     * @var array <p>作业配置版本数组</p>
     */
    public $JobConfigVersions;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @var integer <p>配置更新范围 0=全量(默认) 1=仅开发 2=仅运维</p><p>取值范围：[0, 2]</p>
     */
    public $ConfigScope;

    /**
     * @param string $JobId <p>作业ID</p>
     * @param array $JobConfigVersions <p>作业配置版本数组</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
     * @param integer $ConfigScope <p>配置更新范围 0=全量(默认) 1=仅开发 2=仅运维</p><p>取值范围：[0, 2]</p>
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

        if (array_key_exists("ConfigScope",$param) and $param["ConfigScope"] !== null) {
            $this->ConfigScope = $param["ConfigScope"];
        }
    }
}
