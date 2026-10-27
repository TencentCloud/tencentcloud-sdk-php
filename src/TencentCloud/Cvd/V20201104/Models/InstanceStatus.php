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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例状态
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getStatus() 获取实例状态
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中
DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm测资源已经不存在了
FAILED：表示资源创建失败.这个是业务层面的状态
ROLLBACKING：表示机器正在回滚中
RESETTING：表示机器正在重置中
USING：表示机器正在使用中
 * @method void setStatus(string $Status) 设置实例状态
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中
DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm测资源已经不存在了
FAILED：表示资源创建失败.这个是业务层面的状态
ROLLBACKING：表示机器正在回滚中
RESETTING：表示机器正在重置中
USING：表示机器正在使用中
 * @method integer getSessionState() 获取只有在Status为RUNNING时候，当前值才有意义
取值范围：
0:Unknown
1:Connected 
2:Disconnected 
3:Terminated
4:PreparingSession
5:Active
6:Reconnecting
7:NonBrokeredSession
8:Other
9:Pending
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionState(integer $SessionState) 设置只有在Status为RUNNING时候，当前值才有意义
取值范围：
0:Unknown
1:Connected 
2:Disconnected 
3:Terminated
4:PreparingSession
5:Active
6:Reconnecting
7:NonBrokeredSession
8:Other
9:Pending
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getIdleSeconds() 获取此字段只有在Status为USING时，才有效。
字段意义：表示桌面当前session空闲时间（客户没有鼠标，键盘等操作），单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdleSeconds(float $IdleSeconds) 设置此字段只有在Status为USING时，才有效。
字段意义：表示桌面当前session空闲时间（客户没有鼠标，键盘等操作），单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatusChangeTime() 获取当前状态改变的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusChangeTime(integer $StatusChangeTime) 设置当前状态改变的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperation() 获取实例最近一次操作类型
 * @method void setLatestOperation(string $LatestOperation) 设置实例最近一次操作类型
 * @method string getLatestOperationState() 获取实例最近一次操作状态
 * @method void setLatestOperationState(string $LatestOperationState) 设置实例最近一次操作状态
 */
class InstanceStatus extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例状态
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中
DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm测资源已经不存在了
FAILED：表示资源创建失败.这个是业务层面的状态
ROLLBACKING：表示机器正在回滚中
RESETTING：表示机器正在重置中
USING：表示机器正在使用中
     */
    public $Status;

    /**
     * @var integer 只有在Status为RUNNING时候，当前值才有意义
取值范围：
0:Unknown
1:Connected 
2:Disconnected 
3:Terminated
4:PreparingSession
5:Active
6:Reconnecting
7:NonBrokeredSession
8:Other
9:Pending
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionState;

    /**
     * @var float 此字段只有在Status为USING时，才有效。
字段意义：表示桌面当前session空闲时间（客户没有鼠标，键盘等操作），单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdleSeconds;

    /**
     * @var integer 当前状态改变的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusChangeTime;

    /**
     * @var string 实例最近一次操作类型
     */
    public $LatestOperation;

    /**
     * @var string 实例最近一次操作状态
     */
    public $LatestOperationState;

    /**
     * @param string $InstanceId 实例id
     * @param string $Status 实例状态
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中
DELETED：表示资源已经销毁，这个状态是业务层面的状态，cvm如果销毁了，在cvm测资源已经不存在了
FAILED：表示资源创建失败.这个是业务层面的状态
ROLLBACKING：表示机器正在回滚中
RESETTING：表示机器正在重置中
USING：表示机器正在使用中
     * @param integer $SessionState 只有在Status为RUNNING时候，当前值才有意义
取值范围：
0:Unknown
1:Connected 
2:Disconnected 
3:Terminated
4:PreparingSession
5:Active
6:Reconnecting
7:NonBrokeredSession
8:Other
9:Pending
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $IdleSeconds 此字段只有在Status为USING时，才有效。
字段意义：表示桌面当前session空闲时间（客户没有鼠标，键盘等操作），单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StatusChangeTime 当前状态改变的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperation 实例最近一次操作类型
     * @param string $LatestOperationState 实例最近一次操作状态
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SessionState",$param) and $param["SessionState"] !== null) {
            $this->SessionState = $param["SessionState"];
        }

        if (array_key_exists("IdleSeconds",$param) and $param["IdleSeconds"] !== null) {
            $this->IdleSeconds = $param["IdleSeconds"];
        }

        if (array_key_exists("StatusChangeTime",$param) and $param["StatusChangeTime"] !== null) {
            $this->StatusChangeTime = $param["StatusChangeTime"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }
    }
}
