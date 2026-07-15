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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件类型详情结构
 *
 * @method integer getEventType() 获取<p>事件类型</p>
 * @method void setEventType(integer $EventType) 设置<p>事件类型</p>
 * @method string getEventTypeName() 获取<p>事件名称</p>
 * @method void setEventTypeName(string $EventTypeName) 设置<p>事件名称</p>
 */
class EventTypeInfo extends AbstractModel
{
    /**
     * @var integer <p>事件类型</p>
     */
    public $EventType;

    /**
     * @var string <p>事件名称</p>
     */
    public $EventTypeName;

    /**
     * @param integer $EventType <p>事件类型</p>
     * @param string $EventTypeName <p>事件名称</p>
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventTypeName",$param) and $param["EventTypeName"] !== null) {
            $this->EventTypeName = $param["EventTypeName"];
        }
    }
}
