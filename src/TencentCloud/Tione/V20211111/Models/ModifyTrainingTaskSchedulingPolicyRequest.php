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
 * ModifyTrainingTaskSchedulingPolicy请求参数结构体
 *
 * @method string getTrainingTaskId() 获取<p>训练任务 id</p>
 * @method void setTrainingTaskId(string $TrainingTaskId) 设置<p>训练任务 id</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method boolean getCrossResourceGroupScheduling() 获取<p>是否开启跨资源组调度。缺省为 false，仅改优先级时若任务已开启需显式传 true，否则会被关闭。</p>
 * @method void setCrossResourceGroupScheduling(boolean $CrossResourceGroupScheduling) 设置<p>是否开启跨资源组调度。缺省为 false，仅改优先级时若任务已开启需显式传 true，否则会被关闭。</p>
 * @method SchedulePolicy getSchedulePolicy() 获取<p>调度策略</p>
 * @method void setSchedulePolicy(SchedulePolicy $SchedulePolicy) 设置<p>调度策略</p>
 */
class ModifyTrainingTaskSchedulingPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>训练任务 id</p>
     */
    public $TrainingTaskId;

    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var boolean <p>是否开启跨资源组调度。缺省为 false，仅改优先级时若任务已开启需显式传 true，否则会被关闭。</p>
     */
    public $CrossResourceGroupScheduling;

    /**
     * @var SchedulePolicy <p>调度策略</p>
     */
    public $SchedulePolicy;

    /**
     * @param string $TrainingTaskId <p>训练任务 id</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param boolean $CrossResourceGroupScheduling <p>是否开启跨资源组调度。缺省为 false，仅改优先级时若任务已开启需显式传 true，否则会被关闭。</p>
     * @param SchedulePolicy $SchedulePolicy <p>调度策略</p>
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
        if (array_key_exists("TrainingTaskId",$param) and $param["TrainingTaskId"] !== null) {
            $this->TrainingTaskId = $param["TrainingTaskId"];
        }

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("CrossResourceGroupScheduling",$param) and $param["CrossResourceGroupScheduling"] !== null) {
            $this->CrossResourceGroupScheduling = $param["CrossResourceGroupScheduling"];
        }

        if (array_key_exists("SchedulePolicy",$param) and $param["SchedulePolicy"] !== null) {
            $this->SchedulePolicy = new SchedulePolicy();
            $this->SchedulePolicy->deserialize($param["SchedulePolicy"]);
        }
    }
}
