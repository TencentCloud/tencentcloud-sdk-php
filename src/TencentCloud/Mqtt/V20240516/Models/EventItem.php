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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件
 *
 * @method integer getTimestamp() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvent() 获取<p>事件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvent(string $Event) 设置<p>事件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientId() 获取<p>发消息或者收消息的clientid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientId(string $ClientId) 设置<p>发消息或者收消息的clientid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInfo() 获取<p>事件的相关信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfo(array $Info) 设置<p>事件的相关信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventItem extends AbstractModel
{
    /**
     * @var integer <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string <p>事件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Event;

    /**
     * @var string <p>发消息或者收消息的clientid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientId;

    /**
     * @var array <p>事件的相关信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Info;

    /**
     * @param integer $Timestamp <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Event <p>事件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientId <p>发消息或者收消息的clientid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Info <p>事件的相关信息</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = [];
            foreach ($param["Info"] as $key => $value){
                $obj = new EventInfo();
                $obj->deserialize($value);
                array_push($this->Info, $obj);
            }
        }
    }
}
