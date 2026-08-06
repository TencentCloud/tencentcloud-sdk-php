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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseRunBuildLog请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getServiceVersion() 获取版本名称
 * @method void setServiceVersion(string $ServiceVersion) 设置版本名称
 * @method integer getBuildId() 获取构建ID
 * @method void setBuildId(integer $BuildId) 设置构建ID
 * @method integer getStart() 获取偏移记录
 * @method void setStart(integer $Start) 设置偏移记录
 */
class DescribeCloudBaseRunBuildLogRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var string 版本名称
     */
    public $ServiceVersion;

    /**
     * @var integer 构建ID
     */
    public $BuildId;

    /**
     * @var integer 偏移记录
     */
    public $Start;

    /**
     * @param string $EnvId 环境ID
     * @param string $ServiceName 服务名称
     * @param string $ServiceVersion 版本名称
     * @param integer $BuildId 构建ID
     * @param integer $Start 偏移记录
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceVersion",$param) and $param["ServiceVersion"] !== null) {
            $this->ServiceVersion = $param["ServiceVersion"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }
    }
}
