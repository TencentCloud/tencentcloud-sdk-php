<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 刷新批次关联实例，包含单个实例的刷新活动状态、对应伸缩活动等信息。
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getInstanceStatus() 获取刷新实例状态。如果在刷新时实例被移出或销毁，状态会更新为 NOT_FOUND。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED：刷新失败</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功</li><li>NOT_FOUND：实例不存在
 * @method void setInstanceStatus(string $InstanceStatus) 设置刷新实例状态。如果在刷新时实例被移出或销毁，状态会更新为 NOT_FOUND。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED：刷新失败</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功</li><li>NOT_FOUND：实例不存在
 * @method string getLastActivityId() 获取实例刷新中最近一次伸缩活动 ID，可通过 DescribeAutoScalingActivities 接口查询。
需注意伸缩活动与实例刷新活动不同，一次实例刷新活动可能包括多次伸缩活动。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastActivityId(string $LastActivityId) 设置实例刷新中最近一次伸缩活动 ID，可通过 DescribeAutoScalingActivities 接口查询。
需注意伸缩活动与实例刷新活动不同，一次实例刷新活动可能包括多次伸缩活动。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatusMessage() 获取实例刷新状态信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatusMessage(string $InstanceStatusMessage) 设置实例刷新状态信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RefreshBatchRelatedInstance extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 刷新实例状态。如果在刷新时实例被移出或销毁，状态会更新为 NOT_FOUND。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED：刷新失败</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功</li><li>NOT_FOUND：实例不存在
     */
    public $InstanceStatus;

    /**
     * @var string 实例刷新中最近一次伸缩活动 ID，可通过 DescribeAutoScalingActivities 接口查询。
需注意伸缩活动与实例刷新活动不同，一次实例刷新活动可能包括多次伸缩活动。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastActivityId;

    /**
     * @var string 实例刷新状态信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatusMessage;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $InstanceStatus 刷新实例状态。如果在刷新时实例被移出或销毁，状态会更新为 NOT_FOUND。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED：刷新失败</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功</li><li>NOT_FOUND：实例不存在
     * @param string $LastActivityId 实例刷新中最近一次伸缩活动 ID，可通过 DescribeAutoScalingActivities 接口查询。
需注意伸缩活动与实例刷新活动不同，一次实例刷新活动可能包括多次伸缩活动。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatusMessage 实例刷新状态信息。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("LastActivityId",$param) and $param["LastActivityId"] !== null) {
            $this->LastActivityId = $param["LastActivityId"];
        }

        if (array_key_exists("InstanceStatusMessage",$param) and $param["InstanceStatusMessage"] !== null) {
            $this->InstanceStatusMessage = $param["InstanceStatusMessage"];
        }
    }
}
