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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时伸缩策略
 *
 * @method string getName() 获取定时伸缩策略名称
 * @method void setName(string $Name) 设置定时伸缩策略名称
 * @method string getPeriod() 获取策略周期
* * *，三个范围，第一个是天，第二个是月，第三个是周，中间用空格隔开
例子：
* * * （每天）
* * 0-3 （每周日到周三）
1,11,21 * *（每个月1号，11号，21号）
 * @method void setPeriod(string $Period) 设置策略周期
* * *，三个范围，第一个是天，第二个是月，第三个是周，中间用空格隔开
例子：
* * * （每天）
* * 0-3 （每周日到周三）
1,11,21 * *（每个月1号，11号，21号）
 * @method array getSchedules() 获取定时伸缩策略明细
 * @method void setSchedules(array $Schedules) 设置定时伸缩策略明细
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method integer getPriority() 获取策略优先级，值越大优先级越高，0为最小值
 * @method void setPriority(integer $Priority) 设置策略优先级，值越大优先级越高，0为最小值
 */
class CronHorizontalAutoscaler extends AbstractModel
{
    /**
     * @var string 定时伸缩策略名称
     */
    public $Name;

    /**
     * @var string 策略周期
* * *，三个范围，第一个是天，第二个是月，第三个是周，中间用空格隔开
例子：
* * * （每天）
* * 0-3 （每周日到周三）
1,11,21 * *（每个月1号，11号，21号）
     */
    public $Period;

    /**
     * @var array 定时伸缩策略明细
     */
    public $Schedules;

    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var integer 策略优先级，值越大优先级越高，0为最小值
     */
    public $Priority;

    /**
     * @param string $Name 定时伸缩策略名称
     * @param string $Period 策略周期
* * *，三个范围，第一个是天，第二个是月，第三个是周，中间用空格隔开
例子：
* * * （每天）
* * 0-3 （每周日到周三）
1,11,21 * *（每个月1号，11号，21号）
     * @param array $Schedules 定时伸缩策略明细
     * @param boolean $Enabled 是否启用
     * @param integer $Priority 策略优先级，值越大优先级越高，0为最小值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Schedules",$param) and $param["Schedules"] !== null) {
            $this->Schedules = [];
            foreach ($param["Schedules"] as $key => $value){
                $obj = new CronHorizontalAutoscalerSchedule();
                $obj->deserialize($value);
                array_push($this->Schedules, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
