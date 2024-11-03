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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则执行的时间结构体
 *
 * @method array getTimed() 获取定时执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimed(array $Timed) 设置定时执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCron() 获取周期执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCron(array $Cron) 设置周期执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeTZone() 获取时区
 * @method void setTimeTZone(string $TimeTZone) 设置时区
 */
class JobDateTime extends AbstractModel
{
    /**
     * @var array 定时执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timed;

    /**
     * @var array 周期执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cron;

    /**
     * @var string 时区
     */
    public $TimeTZone;

    /**
     * @param array $Timed 定时执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Cron 周期执行的时间参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeTZone 时区
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
        if (array_key_exists("Timed",$param) and $param["Timed"] !== null) {
            $this->Timed = [];
            foreach ($param["Timed"] as $key => $value){
                $obj = new TimedJob();
                $obj->deserialize($value);
                array_push($this->Timed, $obj);
            }
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = [];
            foreach ($param["Cron"] as $key => $value){
                $obj = new CronJob();
                $obj->deserialize($value);
                array_push($this->Cron, $obj);
            }
        }

        if (array_key_exists("TimeTZone",$param) and $param["TimeTZone"] !== null) {
            $this->TimeTZone = $param["TimeTZone"];
        }
    }
}
