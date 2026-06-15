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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateHealthCheckSettings请求参数结构体
 *
 * @method string getGroupId() 获取<p>部署组ID，可通过调用<a href="https://cloud.tencent.com/document/api/649/36068">DescribeContainerGroups</a>查询已创建的部署组列表或登录控制台进行查看；也可以调用<a href="https://cloud.tencent.com/document/api/649/36075">CreateContainGroup</a>创建新的部署组。</p>
 * @method void setGroupId(string $GroupId) 设置<p>部署组ID，可通过调用<a href="https://cloud.tencent.com/document/api/649/36068">DescribeContainerGroups</a>查询已创建的部署组列表或登录控制台进行查看；也可以调用<a href="https://cloud.tencent.com/document/api/649/36075">CreateContainGroup</a>创建新的部署组。</p>
 * @method boolean getEnableHealthCheck() 获取<p>是否开启健康检查</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否开启健康检查</p>
 * @method HealthCheckSettings getHealthCheckSettings() 获取<p>健康检查配置</p>
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置<p>健康检查配置</p>
 * @method boolean getLivenessAutoRestart() 获取<p>是否自动重启</p>
 * @method void setLivenessAutoRestart(boolean $LivenessAutoRestart) 设置<p>是否自动重启</p>
 */
class UpdateHealthCheckSettingsRequest extends AbstractModel
{
    /**
     * @var string <p>部署组ID，可通过调用<a href="https://cloud.tencent.com/document/api/649/36068">DescribeContainerGroups</a>查询已创建的部署组列表或登录控制台进行查看；也可以调用<a href="https://cloud.tencent.com/document/api/649/36075">CreateContainGroup</a>创建新的部署组。</p>
     */
    public $GroupId;

    /**
     * @var boolean <p>是否开启健康检查</p>
     */
    public $EnableHealthCheck;

    /**
     * @var HealthCheckSettings <p>健康检查配置</p>
     */
    public $HealthCheckSettings;

    /**
     * @var boolean <p>是否自动重启</p>
     */
    public $LivenessAutoRestart;

    /**
     * @param string $GroupId <p>部署组ID，可通过调用<a href="https://cloud.tencent.com/document/api/649/36068">DescribeContainerGroups</a>查询已创建的部署组列表或登录控制台进行查看；也可以调用<a href="https://cloud.tencent.com/document/api/649/36075">CreateContainGroup</a>创建新的部署组。</p>
     * @param boolean $EnableHealthCheck <p>是否开启健康检查</p>
     * @param HealthCheckSettings $HealthCheckSettings <p>健康检查配置</p>
     * @param boolean $LivenessAutoRestart <p>是否自动重启</p>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }

        if (array_key_exists("LivenessAutoRestart",$param) and $param["LivenessAutoRestart"] !== null) {
            $this->LivenessAutoRestart = $param["LivenessAutoRestart"];
        }
    }
}
