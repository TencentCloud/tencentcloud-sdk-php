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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探针结构信息
 *
 * @method ProbeAction getProbeAction() 获取探针行为
 * @method void setProbeAction(ProbeAction $ProbeAction) 设置探针行为
 * @method integer getInitialDelaySeconds() 获取等待服务启动的延迟
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置等待服务启动的延迟
 * @method integer getPeriodSeconds() 获取轮询检查时间间隔
 * @method void setPeriodSeconds(integer $PeriodSeconds) 设置轮询检查时间间隔
 * @method integer getTimeoutSeconds() 获取检查超时时长
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置检查超时时长
 * @method integer getFailureThreshold() 获取检测失败认定次数
 * @method void setFailureThreshold(integer $FailureThreshold) 设置检测失败认定次数
 * @method integer getSuccessThreshold() 获取检测成功认定次数，就绪默认 3，存活/启动默认 1
 * @method void setSuccessThreshold(integer $SuccessThreshold) 设置检测成功认定次数，就绪默认 3，存活/启动默认 1
 */
class Probe extends AbstractModel
{
    /**
     * @var ProbeAction 探针行为
     */
    public $ProbeAction;

    /**
     * @var integer 等待服务启动的延迟
     */
    public $InitialDelaySeconds;

    /**
     * @var integer 轮询检查时间间隔
     */
    public $PeriodSeconds;

    /**
     * @var integer 检查超时时长
     */
    public $TimeoutSeconds;

    /**
     * @var integer 检测失败认定次数
     */
    public $FailureThreshold;

    /**
     * @var integer 检测成功认定次数，就绪默认 3，存活/启动默认 1
     */
    public $SuccessThreshold;

    /**
     * @param ProbeAction $ProbeAction 探针行为
     * @param integer $InitialDelaySeconds 等待服务启动的延迟
     * @param integer $PeriodSeconds 轮询检查时间间隔
     * @param integer $TimeoutSeconds 检查超时时长
     * @param integer $FailureThreshold 检测失败认定次数
     * @param integer $SuccessThreshold 检测成功认定次数，就绪默认 3，存活/启动默认 1
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
        if (array_key_exists("ProbeAction",$param) and $param["ProbeAction"] !== null) {
            $this->ProbeAction = new ProbeAction();
            $this->ProbeAction->deserialize($param["ProbeAction"]);
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("FailureThreshold",$param) and $param["FailureThreshold"] !== null) {
            $this->FailureThreshold = $param["FailureThreshold"];
        }

        if (array_key_exists("SuccessThreshold",$param) and $param["SuccessThreshold"] !== null) {
            $this->SuccessThreshold = $param["SuccessThreshold"];
        }
    }
}
