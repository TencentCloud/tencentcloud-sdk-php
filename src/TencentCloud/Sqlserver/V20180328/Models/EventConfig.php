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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设置实例扩展事件阈值
 *
 * @method string getEventType() 获取事件类型，slow-设置慢SQL阈值，blocked-设置阻塞、死锁阈值
 * @method void setEventType(string $EventType) 设置事件类型，slow-设置慢SQL阈值，blocked-设置阻塞、死锁阈值
 * @method integer getThreshold() 获取阈值，单位毫秒。0表示关闭，大于0表示开启
 * @method void setThreshold(integer $Threshold) 设置阈值，单位毫秒。0表示关闭，大于0表示开启
 */
class EventConfig extends AbstractModel
{
    /**
     * @var string 事件类型，slow-设置慢SQL阈值，blocked-设置阻塞、死锁阈值
     */
    public $EventType;

    /**
     * @var integer 阈值，单位毫秒。0表示关闭，大于0表示开启
     */
    public $Threshold;

    /**
     * @param string $EventType 事件类型，slow-设置慢SQL阈值，blocked-设置阻塞、死锁阈值
     * @param integer $Threshold 阈值，单位毫秒。0表示关闭，大于0表示开启
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

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
