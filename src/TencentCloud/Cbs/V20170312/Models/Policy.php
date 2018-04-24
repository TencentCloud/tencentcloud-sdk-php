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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getDayOfWeek() 获取选定周一到周日中需要创建快照的日期，取值范围：[0, 6]。0表示周一触发，依此类推。
 * @method void setDayOfWeek(array $dayOfWeek) 设置选定周一到周日中需要创建快照的日期，取值范围：[0, 6]。0表示周一触发，依此类推。
 * @method array getHour() 获取指定定期快照策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
 * @method void setHour(array $hour) 设置指定定期快照策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
 */

/**
 *描述了定期快照的执行策略
 */
class Policy extends AbstractModel
{
    /**
     * @var array 选定周一到周日中需要创建快照的日期，取值范围：[0, 6]。0表示周一触发，依此类推。
     */
    public $dayOfWeek;

    /**
     * @var array 指定定期快照策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
     */
    public $hour;
    /**
     * @param array $dayOfWeek 选定周一到周日中需要创建快照的日期，取值范围：[0, 6]。0表示周一触发，依此类推。
     * @param array $hour 指定定期快照策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
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
        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->dayOfWeek = [];
            foreach ($param["DayOfWeek"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->dayOfWeek, $obj);
            }
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->hour = [];
            foreach ($param["Hour"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->hour, $obj);
            }
        }
    }
}
