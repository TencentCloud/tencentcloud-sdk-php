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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RPS模式的施压配置
 *
 * @method integer getMaxRequestsPerSecond() 获取最大RPS
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) 设置最大RPS
 * @method integer getDurationSeconds() 获取施压时间
 * @method void setDurationSeconds(integer $DurationSeconds) 设置施压时间
 * @method integer getTargetVirtualUsers() 获取deprecated
 * @method void setTargetVirtualUsers(integer $TargetVirtualUsers) 设置deprecated
 * @method integer getResources() 获取资源数
 * @method void setResources(integer $Resources) 设置资源数
 * @method integer getStartRequestsPerSecond() 获取起始RPS
 * @method void setStartRequestsPerSecond(integer $StartRequestsPerSecond) 设置起始RPS
 * @method integer getTargetRequestsPerSecond() 获取目标RPS，入参无效
 * @method void setTargetRequestsPerSecond(integer $TargetRequestsPerSecond) 设置目标RPS，入参无效
 * @method integer getGracefulStopSeconds() 获取优雅关停的等待时间
 * @method void setGracefulStopSeconds(integer $GracefulStopSeconds) 设置优雅关停的等待时间
 * @method integer getIterationCount() 获取场景最大执行次数
 * @method void setIterationCount(integer $IterationCount) 设置场景最大执行次数
 */
class RequestsPerSecond extends AbstractModel
{
    /**
     * @var integer 最大RPS
     */
    public $MaxRequestsPerSecond;

    /**
     * @var integer 施压时间
     */
    public $DurationSeconds;

    /**
     * @var integer deprecated
     */
    public $TargetVirtualUsers;

    /**
     * @var integer 资源数
     */
    public $Resources;

    /**
     * @var integer 起始RPS
     */
    public $StartRequestsPerSecond;

    /**
     * @var integer 目标RPS，入参无效
     */
    public $TargetRequestsPerSecond;

    /**
     * @var integer 优雅关停的等待时间
     */
    public $GracefulStopSeconds;

    /**
     * @var integer 场景最大执行次数
     */
    public $IterationCount;

    /**
     * @param integer $MaxRequestsPerSecond 最大RPS
     * @param integer $DurationSeconds 施压时间
     * @param integer $TargetVirtualUsers deprecated
     * @param integer $Resources 资源数
     * @param integer $StartRequestsPerSecond 起始RPS
     * @param integer $TargetRequestsPerSecond 目标RPS，入参无效
     * @param integer $GracefulStopSeconds 优雅关停的等待时间
     * @param integer $IterationCount 场景最大执行次数
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
        if (array_key_exists("MaxRequestsPerSecond",$param) and $param["MaxRequestsPerSecond"] !== null) {
            $this->MaxRequestsPerSecond = $param["MaxRequestsPerSecond"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("TargetVirtualUsers",$param) and $param["TargetVirtualUsers"] !== null) {
            $this->TargetVirtualUsers = $param["TargetVirtualUsers"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("StartRequestsPerSecond",$param) and $param["StartRequestsPerSecond"] !== null) {
            $this->StartRequestsPerSecond = $param["StartRequestsPerSecond"];
        }

        if (array_key_exists("TargetRequestsPerSecond",$param) and $param["TargetRequestsPerSecond"] !== null) {
            $this->TargetRequestsPerSecond = $param["TargetRequestsPerSecond"];
        }

        if (array_key_exists("GracefulStopSeconds",$param) and $param["GracefulStopSeconds"] !== null) {
            $this->GracefulStopSeconds = $param["GracefulStopSeconds"];
        }

        if (array_key_exists("IterationCount",$param) and $param["IterationCount"] !== null) {
            $this->IterationCount = $param["IterationCount"];
        }
    }
}
