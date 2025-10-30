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
 * 集群事件日志
 *
 * @method array getTime() 获取事件时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(array $Time) 设置事件时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventsAction() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventsAction(array $EventsAction) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterInfo() 获取集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterInfo(array $ClusterInfo) 设置集群信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class HouseEventsInfo extends AbstractModel
{
    /**
     * @var array 事件时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var array 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventsAction;

    /**
     * @var array 集群信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterInfo;

    /**
     * @param array $Time 事件时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventsAction 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterInfo 集群信息
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("EventsAction",$param) and $param["EventsAction"] !== null) {
            $this->EventsAction = $param["EventsAction"];
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = $param["ClusterInfo"];
        }
    }
}
