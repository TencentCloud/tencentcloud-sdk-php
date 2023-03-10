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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmEvent请求参数结构体
 *
 * @method string getEvent() 获取告警事件，支持CPU、MEM、TCP
 * @method void setEvent(string $Event) 设置告警事件，支持CPU、MEM、TCP
 * @method integer getLimit() 获取告警阈值
 * @method void setLimit(integer $Limit) 设置告警阈值
 * @method integer getStatus() 获取告警状态，0表示停用，1表示启动
 * @method void setStatus(integer $Status) 设置告警状态，0表示停用，1表示启动
 * @method string getBeginTime() 获取告警开始时间，只有在这个时间后才会发送告警，当跟EndTime同时为空时表示全天告警
 * @method void setBeginTime(string $BeginTime) 设置告警开始时间，只有在这个时间后才会发送告警，当跟EndTime同时为空时表示全天告警
 * @method string getEndTime() 获取告警结束时间，只有在这个时间前才会发送告警，当跟BeginTime同时为空时表示全天告警
 * @method void setEndTime(string $EndTime) 设置告警结束时间，只有在这个时间前才会发送告警，当跟BeginTime同时为空时表示全天告警
 */
class ModifyAlarmEventRequest extends AbstractModel
{
    /**
     * @var string 告警事件，支持CPU、MEM、TCP
     */
    public $Event;

    /**
     * @var integer 告警阈值
     */
    public $Limit;

    /**
     * @var integer 告警状态，0表示停用，1表示启动
     */
    public $Status;

    /**
     * @var string 告警开始时间，只有在这个时间后才会发送告警，当跟EndTime同时为空时表示全天告警
     */
    public $BeginTime;

    /**
     * @var string 告警结束时间，只有在这个时间前才会发送告警，当跟BeginTime同时为空时表示全天告警
     */
    public $EndTime;

    /**
     * @param string $Event 告警事件，支持CPU、MEM、TCP
     * @param integer $Limit 告警阈值
     * @param integer $Status 告警状态，0表示停用，1表示启动
     * @param string $BeginTime 告警开始时间，只有在这个时间后才会发送告警，当跟EndTime同时为空时表示全天告警
     * @param string $EndTime 告警结束时间，只有在这个时间前才会发送告警，当跟BeginTime同时为空时表示全天告警
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
        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
