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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateStandardEngineResourceGroupBaseInfo请求参数结构体
 *
 * @method string getEngineResourceGroupName() 获取引擎资源组名称
 * @method void setEngineResourceGroupName(string $EngineResourceGroupName) 设置引擎资源组名称
 * @method integer getAutoLaunch() 获取自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
 * @method void setAutoLaunch(integer $AutoLaunch) 设置自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
 * @method integer getAutoPause() 获取自动挂起资源组。0-自动挂起，1-不自动挂起
 * @method void setAutoPause(integer $AutoPause) 设置自动挂起资源组。0-自动挂起，1-不自动挂起
 * @method integer getAutoPauseTime() 获取自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
 * @method void setAutoPauseTime(integer $AutoPauseTime) 设置自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
 * @method integer getMaxConcurrency() 获取任务并发数
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置任务并发数
 */
class UpdateStandardEngineResourceGroupBaseInfoRequest extends AbstractModel
{
    /**
     * @var string 引擎资源组名称
     */
    public $EngineResourceGroupName;

    /**
     * @var integer 自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
     */
    public $AutoLaunch;

    /**
     * @var integer 自动挂起资源组。0-自动挂起，1-不自动挂起
     */
    public $AutoPause;

    /**
     * @var integer 自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
     */
    public $AutoPauseTime;

    /**
     * @var integer 任务并发数
     */
    public $MaxConcurrency;

    /**
     * @param string $EngineResourceGroupName 引擎资源组名称
     * @param integer $AutoLaunch 自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
     * @param integer $AutoPause 自动挂起资源组。0-自动挂起，1-不自动挂起
     * @param integer $AutoPauseTime 自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
     * @param integer $MaxConcurrency 任务并发数
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
        if (array_key_exists("EngineResourceGroupName",$param) and $param["EngineResourceGroupName"] !== null) {
            $this->EngineResourceGroupName = $param["EngineResourceGroupName"];
        }

        if (array_key_exists("AutoLaunch",$param) and $param["AutoLaunch"] !== null) {
            $this->AutoLaunch = $param["AutoLaunch"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseTime",$param) and $param["AutoPauseTime"] !== null) {
            $this->AutoPauseTime = $param["AutoPauseTime"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }
    }
}
