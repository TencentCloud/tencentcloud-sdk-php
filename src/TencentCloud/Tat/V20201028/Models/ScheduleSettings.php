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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 周期执行器设置。
 *
 * @method string getPolicy() 获取执行策略：
<br><li>ONCE：单次执行
<br><li>RECURRENCE：周期执行
 * @method void setPolicy(string $Policy) 设置执行策略：
<br><li>ONCE：单次执行
<br><li>RECURRENCE：周期执行
 * @method string getRecurrence() 获取触发 Crontab 表达式。Policy 为 RECURRENCE 时，需要指定此字段。Crontab 按北京时间解析。
 * @method void setRecurrence(string $Recurrence) 设置触发 Crontab 表达式。Policy 为 RECURRENCE 时，需要指定此字段。Crontab 按北京时间解析。
 * @method string getInvokeTime() 获取执行器下次执行时间。Policy 为 ONCE 时，需要指定此字段。
 * @method void setInvokeTime(string $InvokeTime) 设置执行器下次执行时间。Policy 为 ONCE 时，需要指定此字段。
 */
class ScheduleSettings extends AbstractModel
{
    /**
     * @var string 执行策略：
<br><li>ONCE：单次执行
<br><li>RECURRENCE：周期执行
     */
    public $Policy;

    /**
     * @var string 触发 Crontab 表达式。Policy 为 RECURRENCE 时，需要指定此字段。Crontab 按北京时间解析。
     */
    public $Recurrence;

    /**
     * @var string 执行器下次执行时间。Policy 为 ONCE 时，需要指定此字段。
     */
    public $InvokeTime;

    /**
     * @param string $Policy 执行策略：
<br><li>ONCE：单次执行
<br><li>RECURRENCE：周期执行
     * @param string $Recurrence 触发 Crontab 表达式。Policy 为 RECURRENCE 时，需要指定此字段。Crontab 按北京时间解析。
     * @param string $InvokeTime 执行器下次执行时间。Policy 为 ONCE 时，需要指定此字段。
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }

        if (array_key_exists("InvokeTime",$param) and $param["InvokeTime"] !== null) {
            $this->InvokeTime = $param["InvokeTime"];
        }
    }
}
