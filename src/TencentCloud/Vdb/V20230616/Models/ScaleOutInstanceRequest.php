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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstance请求参数结构体
 *
 * @method string getInstanceId() 获取指定需扩容节点数量的实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定需扩容节点数量的实例 ID。
 * @method integer getReplicaNum() 获取指定扩容后的节点数量。选项范围起始于当前实例已有的节点数，上限为30个节点。
 * @method void setReplicaNum(integer $ReplicaNum) 设置指定扩容后的节点数量。选项范围起始于当前实例已有的节点数，上限为30个节点。
 * @method boolean getRunNow() 获取指定水平扩容增加节点数量的时间。
- false：默认值，指在下一个维护时间段内执行增加节点数的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动扩容任务。维护时间的更多信息，请参维护时间窗。
- true：立即执行增加节点数的任务，请确保此时没有重大业务操作。
 * @method void setRunNow(boolean $RunNow) 设置指定水平扩容增加节点数量的时间。
- false：默认值，指在下一个维护时间段内执行增加节点数的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动扩容任务。维护时间的更多信息，请参维护时间窗。
- true：立即执行增加节点数的任务，请确保此时没有重大业务操作。
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string 指定需扩容节点数量的实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 指定扩容后的节点数量。选项范围起始于当前实例已有的节点数，上限为30个节点。
     */
    public $ReplicaNum;

    /**
     * @var boolean 指定水平扩容增加节点数量的时间。
- false：默认值，指在下一个维护时间段内执行增加节点数的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动扩容任务。维护时间的更多信息，请参维护时间窗。
- true：立即执行增加节点数的任务，请确保此时没有重大业务操作。
     */
    public $RunNow;

    /**
     * @param string $InstanceId 指定需扩容节点数量的实例 ID。
     * @param integer $ReplicaNum 指定扩容后的节点数量。选项范围起始于当前实例已有的节点数，上限为30个节点。
     * @param boolean $RunNow 指定水平扩容增加节点数量的时间。
- false：默认值，指在下一个维护时间段内执行增加节点数的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动扩容任务。维护时间的更多信息，请参维护时间窗。
- true：立即执行增加节点数的任务，请确保此时没有重大业务操作。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("RunNow",$param) and $param["RunNow"] !== null) {
            $this->RunNow = $param["RunNow"];
        }
    }
}
