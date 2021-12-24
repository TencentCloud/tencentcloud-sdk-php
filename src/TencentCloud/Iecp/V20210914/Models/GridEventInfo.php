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
 * Grid事件信息
 *
 * @method string getFirstTime() 获取首次出现时间
 * @method void setFirstTime(string $FirstTime) 设置首次出现时间
 * @method string getLastTime() 获取最后出现时间
 * @method void setLastTime(string $LastTime) 设置最后出现时间
 * @method string getInvolvedObjectKind() 获取对象类型
 * @method void setInvolvedObjectKind(string $InvolvedObjectKind) 设置对象类型
 * @method string getInvolvedObjectName() 获取对象名称
 * @method void setInvolvedObjectName(string $InvolvedObjectName) 设置对象名称
 * @method string getType() 获取事件类型(Normal,Warning)
 * @method void setType(string $Type) 设置事件类型(Normal,Warning)
 * @method string getReason() 获取事件原因
 * @method void setReason(string $Reason) 设置事件原因
 * @method string getMessage() 获取事件内容
 * @method void setMessage(string $Message) 设置事件内容
 * @method integer getCount() 获取次数
 * @method void setCount(integer $Count) 设置次数
 * @method string getNodeName() 获取节点名（Pod事件类型时有值）
 * @method void setNodeName(string $NodeName) 设置节点名（Pod事件类型时有值）
 * @method string getIP() 获取节点内部IP（Pod事件类型时有值）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置节点内部IP（Pod事件类型时有值）
注意：此字段可能返回 null，表示取不到有效值。
 */
class GridEventInfo extends AbstractModel
{
    /**
     * @var string 首次出现时间
     */
    public $FirstTime;

    /**
     * @var string 最后出现时间
     */
    public $LastTime;

    /**
     * @var string 对象类型
     */
    public $InvolvedObjectKind;

    /**
     * @var string 对象名称
     */
    public $InvolvedObjectName;

    /**
     * @var string 事件类型(Normal,Warning)
     */
    public $Type;

    /**
     * @var string 事件原因
     */
    public $Reason;

    /**
     * @var string 事件内容
     */
    public $Message;

    /**
     * @var integer 次数
     */
    public $Count;

    /**
     * @var string 节点名（Pod事件类型时有值）
     */
    public $NodeName;

    /**
     * @var string 节点内部IP（Pod事件类型时有值）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @param string $FirstTime 首次出现时间
     * @param string $LastTime 最后出现时间
     * @param string $InvolvedObjectKind 对象类型
     * @param string $InvolvedObjectName 对象名称
     * @param string $Type 事件类型(Normal,Warning)
     * @param string $Reason 事件原因
     * @param string $Message 事件内容
     * @param integer $Count 次数
     * @param string $NodeName 节点名（Pod事件类型时有值）
     * @param string $IP 节点内部IP（Pod事件类型时有值）
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

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }
    }
}
