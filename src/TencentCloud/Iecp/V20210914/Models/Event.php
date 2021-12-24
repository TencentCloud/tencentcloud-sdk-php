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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件信息
 *
 * @method string getFirstTime() 获取第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstTime(string $FirstTime) 设置第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTime() 获取最后一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTime(string $LastTime) 设置最后一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvolvedObjectKind() 获取事件关联对象类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvolvedObjectKind(string $InvolvedObjectKind) 设置事件关联对象类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvolvedObjectName() 获取事件关联对象名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvolvedObjectName(string $InvolvedObjectName) 设置事件关联对象名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取事件类型(Normal|Warning)
 * @method void setType(string $Type) 设置事件类型(Normal|Warning)
 * @method string getReason() 获取原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取出现次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置出现次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Event extends AbstractModel
{
    /**
     * @var string 第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstTime;

    /**
     * @var string 最后一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTime;

    /**
     * @var string 事件关联对象类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvolvedObjectKind;

    /**
     * @var string 事件关联对象名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvolvedObjectName;

    /**
     * @var string 事件类型(Normal|Warning)
     */
    public $Type;

    /**
     * @var string 原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 出现次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $FirstTime 第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTime 最后一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvolvedObjectKind 事件关联对象类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvolvedObjectName 事件关联对象名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 事件类型(Normal|Warning)
     * @param string $Reason 原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 出现次数
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
        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("InvolvedObjectKind",$param) and $param["InvolvedObjectKind"] !== null) {
            $this->InvolvedObjectKind = $param["InvolvedObjectKind"];
        }

        if (array_key_exists("InvolvedObjectName",$param) and $param["InvolvedObjectName"] !== null) {
            $this->InvolvedObjectName = $param["InvolvedObjectName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
