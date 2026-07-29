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
 * DescribeCloudAppVersion返回参数结构体
 *
 * @method string getBuildType() 获取<p>构建类型</p>
 * @method void setBuildType(string $BuildType) 设置<p>构建类型</p>
 * @method string getBuildId() 获取<p>构建Id</p>
 * @method void setBuildId(string $BuildId) 设置<p>构建Id</p>
 * @method string getStatus() 获取<p>构建状态</p>
 * @method void setStatus(string $Status) 设置<p>构建状态</p>
 * @method string getFramework() 获取<p>框架</p>
 * @method void setFramework(string $Framework) 设置<p>框架</p>
 * @method StaticConfig getStaticConfig() 获取<p>静态托管配置信息</p>
 * @method void setStaticConfig(StaticConfig $StaticConfig) 设置<p>静态托管配置信息</p>
 * @method string getBuildTime() 获取<p>构建时间</p>
 * @method void setBuildTime(string $BuildTime) 设置<p>构建时间</p>
 * @method array getSteps() 获取<p>[]BuildStepStatus 的 JSON 序列化</p>
 * @method void setSteps(array $Steps) 设置<p>[]BuildStepStatus 的 JSON 序列化</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudAppVersionResponse extends AbstractModel
{
    /**
     * @var string <p>构建类型</p>
     */
    public $BuildType;

    /**
     * @var string <p>构建Id</p>
     */
    public $BuildId;

    /**
     * @var string <p>构建状态</p>
     */
    public $Status;

    /**
     * @var string <p>框架</p>
     */
    public $Framework;

    /**
     * @var StaticConfig <p>静态托管配置信息</p>
     */
    public $StaticConfig;

    /**
     * @var string <p>构建时间</p>
     */
    public $BuildTime;

    /**
     * @var array <p>[]BuildStepStatus 的 JSON 序列化</p>
     */
    public $Steps;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BuildType <p>构建类型</p>
     * @param string $BuildId <p>构建Id</p>
     * @param string $Status <p>构建状态</p>
     * @param string $Framework <p>框架</p>
     * @param StaticConfig $StaticConfig <p>静态托管配置信息</p>
     * @param string $BuildTime <p>构建时间</p>
     * @param array $Steps <p>[]BuildStepStatus 的 JSON 序列化</p>
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
        if (array_key_exists("BuildType",$param) and $param["BuildType"] !== null) {
            $this->BuildType = $param["BuildType"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("StaticConfig",$param) and $param["StaticConfig"] !== null) {
            $this->StaticConfig = new StaticConfig();
            $this->StaticConfig->deserialize($param["StaticConfig"]);
        }

        if (array_key_exists("BuildTime",$param) and $param["BuildTime"] !== null) {
            $this->BuildTime = $param["BuildTime"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new BuildStepStatus();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
