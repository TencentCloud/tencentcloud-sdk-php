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
 * 批量运行集成任务配置
 *
 * @method string getEvent() 获取批量运行任务类型，比如START，TIMESTAMP，RESTORE，RESUME等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvent(string $Event) 设置批量运行任务类型，比如START，TIMESTAMP，RESTORE，RESUME等
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskIds() 获取任务Id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIds(array $TaskIds) 设置任务Id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfig() 获取批量运行任务配置，目前仅用与实时集成基于时间位点启动。基于时间位点启动，需要设置一个name=timestamp, value=具体时间戳的RecordField的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(array $Config) 设置批量运行任务配置，目前仅用与实时集成基于时间位点启动。基于时间位点启动，需要设置一个name=timestamp, value=具体时间戳的RecordField的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置操作类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class StartTaskInfo extends AbstractModel
{
    /**
     * @var string 批量运行任务类型，比如START，TIMESTAMP，RESTORE，RESUME等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Event;

    /**
     * @var array 任务Id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIds;

    /**
     * @var array 批量运行任务配置，目前仅用与实时集成基于时间位点启动。基于时间位点启动，需要设置一个name=timestamp, value=具体时间戳的RecordField的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var string 操作类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Event 批量运行任务类型，比如START，TIMESTAMP，RESTORE，RESUME等
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskIds 任务Id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Config 批量运行任务配置，目前仅用与实时集成基于时间位点启动。基于时间位点启动，需要设置一个name=timestamp, value=具体时间戳的RecordField的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 操作类型
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
        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
