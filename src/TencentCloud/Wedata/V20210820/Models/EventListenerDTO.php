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
 * 事件监听者信息
 *
 * @method string getKey() 获取关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTs() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTs(string $CreationTs) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPropertiesList() 获取配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertiesList(array $PropertiesList) 设置配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventName() 获取事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method EventListenerTaskInfo getTaskInfo() 获取监听者任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfo(EventListenerTaskInfo $TaskInfo) 设置监听者任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventProjectId() 获取事件所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventProjectId(string $EventProjectId) 设置事件所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventListenerDTO extends AbstractModel
{
    /**
     * @var string 关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTs;

    /**
     * @var array 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertiesList;

    /**
     * @var string 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var EventListenerTaskInfo 监听者任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfo;

    /**
     * @var string 事件所属项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventProjectId;

    /**
     * @param string $Key 关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTs 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PropertiesList 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventName 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param EventListenerTaskInfo $TaskInfo 监听者任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventProjectId 事件所属项目id
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreationTs",$param) and $param["CreationTs"] !== null) {
            $this->CreationTs = $param["CreationTs"];
        }

        if (array_key_exists("PropertiesList",$param) and $param["PropertiesList"] !== null) {
            $this->PropertiesList = [];
            foreach ($param["PropertiesList"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->PropertiesList, $obj);
            }
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new EventListenerTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("EventProjectId",$param) and $param["EventProjectId"] !== null) {
            $this->EventProjectId = $param["EventProjectId"];
        }
    }
}
