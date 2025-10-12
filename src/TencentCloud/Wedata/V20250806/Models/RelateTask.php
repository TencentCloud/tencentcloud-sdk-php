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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源相关任务
 *
 * @method string getTaskType() 获取任务类型

- OfflineIntegration --- 离线集成任务
- RealtimeIntegration --- 实时集成任务
- DataDevelopment --- 数据开发任务
- DataQuality --- 数据质量任务
- DataService --- 数据服务任务
- MetadataCollection --- 元数据采集任务
 * @method void setTaskType(string $TaskType) 设置任务类型

- OfflineIntegration --- 离线集成任务
- RealtimeIntegration --- 实时集成任务
- DataDevelopment --- 数据开发任务
- DataQuality --- 数据质量任务
- DataService --- 数据服务任务
- MetadataCollection --- 元数据采集任务
 * @method integer getTaskNum() 获取任务数量
 * @method void setTaskNum(integer $TaskNum) 设置任务数量
 * @method array getTaskList() 获取任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskList(array $TaskList) 设置任务详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class RelateTask extends AbstractModel
{
    /**
     * @var string 任务类型

- OfflineIntegration --- 离线集成任务
- RealtimeIntegration --- 实时集成任务
- DataDevelopment --- 数据开发任务
- DataQuality --- 数据质量任务
- DataService --- 数据服务任务
- MetadataCollection --- 元数据采集任务
     */
    public $TaskType;

    /**
     * @var integer 任务数量
     */
    public $TaskNum;

    /**
     * @var array 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskList;

    /**
     * @param string $TaskType 任务类型

- OfflineIntegration --- 离线集成任务
- RealtimeIntegration --- 实时集成任务
- DataDevelopment --- 数据开发任务
- DataQuality --- 数据质量任务
- DataService --- 数据服务任务
- MetadataCollection --- 元数据采集任务
     * @param integer $TaskNum 任务数量
     * @param array $TaskList 任务详情
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskNum",$param) and $param["TaskNum"] !== null) {
            $this->TaskNum = $param["TaskNum"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new BriefTask();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }
    }
}
