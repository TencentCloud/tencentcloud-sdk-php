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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件通知回调
 *
 * @method array getEvents() 获取通知事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvents(array $Events) 设置通知事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getURL() 获取回调 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURL(string $URL) 设置回调 URL
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotificationHook extends AbstractModel
{
    /**
     * @var array 通知事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Events;

    /**
     * @var string 回调 URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URL;

    /**
     * @param array $Events 通知事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $URL 回调 URL
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
        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = $param["Events"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
