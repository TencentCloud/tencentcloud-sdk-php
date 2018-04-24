<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取云数据库实例ID
 * @method void setInstanceId(string $instanceId) 设置云数据库实例ID
 * @method array getMonday() 获取星期一的维护时间窗口
 * @method void setMonday(array $monday) 设置星期一的维护时间窗口
 * @method array getTuesday() 获取星期二的维护时间窗口
 * @method void setTuesday(array $tuesday) 设置星期二的维护时间窗口
 * @method array getWednesday() 获取星期三的维护时间窗口
 * @method void setWednesday(array $wednesday) 设置星期三的维护时间窗口
 * @method array getThursday() 获取星期四的维护时间窗口
 * @method void setThursday(array $thursday) 设置星期四的维护时间窗口
 * @method array getFriday() 获取星期五的维护时间窗口
 * @method void setFriday(array $friday) 设置星期五的维护时间窗口
 * @method array getSaturday() 获取星期六的维护时间窗口
 * @method void setSaturday(array $saturday) 设置星期六的维护时间窗口
 * @method array getSunday() 获取星期日的维护时间窗口
 * @method void setSunday(array $sunday) 设置星期日的维护时间窗口
 */

/**
 *AddTimeWindow请求参数结构体
 */
class AddTimeWindowRequest extends AbstractModel
{
    /**
     * @var string 云数据库实例ID
     */
    public $instanceId;

    /**
     * @var array 星期一的维护时间窗口
     */
    public $monday;

    /**
     * @var array 星期二的维护时间窗口
     */
    public $tuesday;

    /**
     * @var array 星期三的维护时间窗口
     */
    public $wednesday;

    /**
     * @var array 星期四的维护时间窗口
     */
    public $thursday;

    /**
     * @var array 星期五的维护时间窗口
     */
    public $friday;

    /**
     * @var array 星期六的维护时间窗口
     */
    public $saturday;

    /**
     * @var array 星期日的维护时间窗口
     */
    public $sunday;
    /**
     * @param string $instanceId 云数据库实例ID
     * @param array $monday 星期一的维护时间窗口
     * @param array $tuesday 星期二的维护时间窗口
     * @param array $wednesday 星期三的维护时间窗口
     * @param array $thursday 星期四的维护时间窗口
     * @param array $friday 星期五的维护时间窗口
     * @param array $saturday 星期六的维护时间窗口
     * @param array $sunday 星期日的维护时间窗口
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }

        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->sunday = $param["Sunday"];
        }
    }
}
