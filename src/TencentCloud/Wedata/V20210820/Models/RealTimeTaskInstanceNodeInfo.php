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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时任务实例当前的节点信息
 *
 * @method string getTaskName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceNodeInfoList() 获取实时任务实例节点信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNodeInfoList(array $InstanceNodeInfoList) 设置实时任务实例节点信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RealTimeTaskInstanceNodeInfo extends AbstractModel
{
    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var array 实时任务实例节点信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNodeInfoList;

    /**
     * @param string $TaskName 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceNodeInfoList 实时任务实例节点信息列表
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("InstanceNodeInfoList",$param) and $param["InstanceNodeInfoList"] !== null) {
            $this->InstanceNodeInfoList = [];
            foreach ($param["InstanceNodeInfoList"] as $key => $value){
                $obj = new InstanceNodeInfo();
                $obj->deserialize($value);
                array_push($this->InstanceNodeInfoList, $obj);
            }
        }
    }
}
