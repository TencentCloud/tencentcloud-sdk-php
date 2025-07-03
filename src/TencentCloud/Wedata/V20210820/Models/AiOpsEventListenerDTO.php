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
 * 监听事件
 *
 * @method string getEventName() 获取事件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置事件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectDisplayName() 获取项目展示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectDisplayName(string $ProjectDisplayName) 设置项目展示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventSubType() 获取事件周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventSubType(string $EventSubType) 设置事件周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取事件项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置事件项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPropertiesList() 获取扩展名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertiesList(array $PropertiesList) 设置扩展名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventBroadcastType() 获取事件广播类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventBroadcastType(string $EventBroadcastType) 设置事件广播类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiOpsEventListenerDTO extends AbstractModel
{
    /**
     * @var string 事件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 项目展示名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectDisplayName;

    /**
     * @var string 事件周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventSubType;

    /**
     * @var string 事件项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var array 扩展名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertiesList;

    /**
     * @var string 事件广播类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventBroadcastType;

    /**
     * @param string $EventName 事件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectDisplayName 项目展示名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventSubType 事件周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 事件项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PropertiesList 扩展名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventBroadcastType 事件广播类型
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PropertiesList",$param) and $param["PropertiesList"] !== null) {
            $this->PropertiesList = [];
            foreach ($param["PropertiesList"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->PropertiesList, $obj);
            }
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }
    }
}
