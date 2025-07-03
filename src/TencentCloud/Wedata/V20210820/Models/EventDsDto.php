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
 * 事件管理- 事件实体
 *
 * @method string getName() 获取事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventType() 获取事件类型GENERAL、TIME_SERIES
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(string $EventType) 设置事件类型GENERAL、TIME_SERIES
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeToLive() 获取存活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeToLive(integer $TimeToLive) 设置存活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeUnit() 获取存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUnit(string $TimeUnit) 设置存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventSubType() 获取事件分割类型 SECOND、MIN、HOUR、DAY
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventSubType(string $EventSubType) 设置事件分割类型 SECOND、MIN、HOUR、DAY
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventBroadcastType() 获取事件广播类型SINGLE、BROADCAST
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventBroadcastType(string $EventBroadcastType) 设置事件广播类型SINGLE、BROADCAST
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimensionFormat() 获取时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensionFormat(string $DimensionFormat) 设置时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTs() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTs(string $CreationTs) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取事件所属人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置事件所属人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProperties() 获取属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(string $Properties) 设置属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getListeners() 获取事件监听者信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListeners(array $Listeners) 设置事件监听者信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventDsDto extends AbstractModel
{
    /**
     * @var string 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 事件类型GENERAL、TIME_SERIES
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var integer 存活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeToLive;

    /**
     * @var string 存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUnit;

    /**
     * @var string 事件分割类型 SECOND、MIN、HOUR、DAY
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventSubType;

    /**
     * @var string 事件广播类型SINGLE、BROADCAST
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventBroadcastType;

    /**
     * @var string 时间格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimensionFormat;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTs;

    /**
     * @var string 事件所属人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 事件监听者信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Listeners;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @param string $Name 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventType 事件类型GENERAL、TIME_SERIES
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeToLive 存活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeUnit 存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventSubType 事件分割类型 SECOND、MIN、HOUR、DAY
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventBroadcastType 事件广播类型SINGLE、BROADCAST
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DimensionFormat 时间格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTs 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 事件所属人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Properties 属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Listeners 事件监听者信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("DimensionFormat",$param) and $param["DimensionFormat"] !== null) {
            $this->DimensionFormat = $param["DimensionFormat"];
        }

        if (array_key_exists("CreationTs",$param) and $param["CreationTs"] !== null) {
            $this->CreationTs = $param["CreationTs"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new EventListenerDTO();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
