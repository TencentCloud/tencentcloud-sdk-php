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
 * 告警策略
 *
 * @method string getUin() 获取用户账号
 * @method void setUin(string $Uin) 设置用户账号
 * @method string getEvent() 获取告警事件
 * @method void setEvent(string $Event) 设置告警事件
 * @method integer getLimit() 获取告警阈值
 * @method void setLimit(integer $Limit) 设置告警阈值
 * @method integer getStatus() 获取告警策略是否生效，0：停用，1：启用
 * @method void setStatus(integer $Status) 设置告警策略是否生效，0：停用，1：启用
 * @method string getBeginTime() 获取在这个时间后才允许发送告警
 * @method void setBeginTime(string $BeginTime) 设置在这个时间后才允许发送告警
 * @method string getEndTime() 获取在这个时间前才允许发送告警
 * @method void setEndTime(string $EndTime) 设置在这个时间前才允许发送告警
 */
class AlarmPolicy extends AbstractModel
{
    /**
     * @var string 用户账号
     */
    public $Uin;

    /**
     * @var string 告警事件
     */
    public $Event;

    /**
     * @var integer 告警阈值
     */
    public $Limit;

    /**
     * @var integer 告警策略是否生效，0：停用，1：启用
     */
    public $Status;

    /**
     * @var string 在这个时间后才允许发送告警
     */
    public $BeginTime;

    /**
     * @var string 在这个时间前才允许发送告警
     */
    public $EndTime;

    /**
     * @param string $Uin 用户账号
     * @param string $Event 告警事件
     * @param integer $Limit 告警阈值
     * @param integer $Status 告警策略是否生效，0：停用，1：启用
     * @param string $BeginTime 在这个时间后才允许发送告警
     * @param string $EndTime 在这个时间前才允许发送告警
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
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
