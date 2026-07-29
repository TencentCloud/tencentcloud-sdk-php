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
 * DescribeCloudAppInfo返回参数结构体
 *
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method string getFramework() 获取<p>框架名称</p>
 * @method void setFramework(string $Framework) 设置<p>框架名称</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getAppPath() 获取<p>构建路径</p>
 * @method void setAppPath(string $AppPath) 设置<p>构建路径</p>
 * @method string getCreateTime() 获取<p>服务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>服务创建时间</p>
 * @method string getLatestVersionName() 获取<p>最新版本名</p>
 * @method void setLatestVersionName(string $LatestVersionName) 设置<p>最新版本名</p>
 * @method string getLatestStatus() 获取<p>最新版本状态</p>
 * @method void setLatestStatus(string $LatestStatus) 设置<p>最新版本状态</p>
 * @method string getLatestBuildTime() 获取<p>最新版本构建时间</p>
 * @method void setLatestBuildTime(string $LatestBuildTime) 设置<p>最新版本构建时间</p>
 * @method string getDeployType() 获取<p>部署类型</p>
 * @method void setDeployType(string $DeployType) 设置<p>部署类型</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudAppInfoResponse extends AbstractModel
{
    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>框架名称</p>
     */
    public $Framework;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>构建路径</p>
     */
    public $AppPath;

    /**
     * @var string <p>服务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最新版本名</p>
     */
    public $LatestVersionName;

    /**
     * @var string <p>最新版本状态</p>
     */
    public $LatestStatus;

    /**
     * @var string <p>最新版本构建时间</p>
     */
    public $LatestBuildTime;

    /**
     * @var string <p>部署类型</p>
     */
    public $DeployType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ServiceName <p>服务名称</p>
     * @param string $Framework <p>框架名称</p>
     * @param string $Domain <p>域名</p>
     * @param string $AppPath <p>构建路径</p>
     * @param string $CreateTime <p>服务创建时间</p>
     * @param string $LatestVersionName <p>最新版本名</p>
     * @param string $LatestStatus <p>最新版本状态</p>
     * @param string $LatestBuildTime <p>最新版本构建时间</p>
     * @param string $DeployType <p>部署类型</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AppPath",$param) and $param["AppPath"] !== null) {
            $this->AppPath = $param["AppPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LatestVersionName",$param) and $param["LatestVersionName"] !== null) {
            $this->LatestVersionName = $param["LatestVersionName"];
        }

        if (array_key_exists("LatestStatus",$param) and $param["LatestStatus"] !== null) {
            $this->LatestStatus = $param["LatestStatus"];
        }

        if (array_key_exists("LatestBuildTime",$param) and $param["LatestBuildTime"] !== null) {
            $this->LatestBuildTime = $param["LatestBuildTime"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
