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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件集信息
 *
 * @method string getModTime() 获取更新时间
 * @method void setModTime(string $ModTime) 设置更新时间
 * @method string getDescription() 获取事件集描述，不限字符类型，200字符描述以内
 * @method void setDescription(string $Description) 设置事件集描述，不限字符类型，200字符描述以内
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getEventBusName() 获取事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
 * @method void setEventBusName(string $EventBusName) 设置事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getType() 获取事件集类型
 * @method void setType(string $Type) 设置事件集类型
 * @method string getPayMode() 获取计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConnectionBriefs() 获取连接器基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionBriefs(array $ConnectionBriefs) 设置连接器基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetBriefs() 获取目标简要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetBriefs(array $TargetBriefs) 设置目标简要信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventBus extends AbstractModel
{
    /**
     * @var string 更新时间
     */
    public $ModTime;

    /**
     * @var string 事件集描述，不限字符类型，200字符描述以内
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
     */
    public $EventBusName;

    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 事件集类型
     */
    public $Type;

    /**
     * @var string 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var array 连接器基础信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionBriefs;

    /**
     * @var array 目标简要信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetBriefs;

    /**
     * @param string $ModTime 更新时间
     * @param string $Description 事件集描述，不限字符类型，200字符描述以内
     * @param string $AddTime 创建时间
     * @param string $EventBusName 事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
     * @param string $EventBusId 事件集ID
     * @param string $Type 事件集类型
     * @param string $PayMode 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConnectionBriefs 连接器基础信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetBriefs 目标简要信息
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ConnectionBriefs",$param) and $param["ConnectionBriefs"] !== null) {
            $this->ConnectionBriefs = [];
            foreach ($param["ConnectionBriefs"] as $key => $value){
                $obj = new ConnectionBrief();
                $obj->deserialize($value);
                array_push($this->ConnectionBriefs, $obj);
            }
        }

        if (array_key_exists("TargetBriefs",$param) and $param["TargetBriefs"] !== null) {
            $this->TargetBriefs = [];
            foreach ($param["TargetBriefs"] as $key => $value){
                $obj = new TargetBrief();
                $obj->deserialize($value);
                array_push($this->TargetBriefs, $obj);
            }
        }
    }
}
