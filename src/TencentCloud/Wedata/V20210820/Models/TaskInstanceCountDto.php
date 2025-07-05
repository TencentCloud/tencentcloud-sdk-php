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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务实例状态统计
 *
 * @method integer getSuccess() 获取成功的实例数
 * @method void setSuccess(integer $Success) 设置成功的实例数
 * @method integer getRunning() 获取执行中实例数
 * @method void setRunning(integer $Running) 设置执行中实例数
 * @method integer getWaiting() 获取等待中的实例数
 * @method void setWaiting(integer $Waiting) 设置等待中的实例数
 * @method integer getDepend() 获取等待上游实例数
 * @method void setDepend(integer $Depend) 设置等待上游实例数
 * @method integer getFailed() 获取失败实例数
 * @method void setFailed(integer $Failed) 设置失败实例数
 * @method integer getStopped() 获取永久终止实例数
 * @method void setStopped(integer $Stopped) 设置永久终止实例数
 */
class TaskInstanceCountDto extends AbstractModel
{
    /**
     * @var integer 成功的实例数
     */
    public $Success;

    /**
     * @var integer 执行中实例数
     */
    public $Running;

    /**
     * @var integer 等待中的实例数
     */
    public $Waiting;

    /**
     * @var integer 等待上游实例数
     */
    public $Depend;

    /**
     * @var integer 失败实例数
     */
    public $Failed;

    /**
     * @var integer 永久终止实例数
     */
    public $Stopped;

    /**
     * @param integer $Success 成功的实例数
     * @param integer $Running 执行中实例数
     * @param integer $Waiting 等待中的实例数
     * @param integer $Depend 等待上游实例数
     * @param integer $Failed 失败实例数
     * @param integer $Stopped 永久终止实例数
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Running",$param) and $param["Running"] !== null) {
            $this->Running = $param["Running"];
        }

        if (array_key_exists("Waiting",$param) and $param["Waiting"] !== null) {
            $this->Waiting = $param["Waiting"];
        }

        if (array_key_exists("Depend",$param) and $param["Depend"] !== null) {
            $this->Depend = $param["Depend"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Stopped",$param) and $param["Stopped"] !== null) {
            $this->Stopped = $param["Stopped"];
        }
    }
}
