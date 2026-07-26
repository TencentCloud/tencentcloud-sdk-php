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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppTriggerScheduleStatus
 *
 * @method string getLastFireTime() 获取
 * @method void setLastFireTime(string $LastFireTime) 设置
 * @method string getNextFireTime() 获取
 * @method void setNextFireTime(string $NextFireTime) 设置
 * @method string getPolicySummary() 获取
 * @method void setPolicySummary(string $PolicySummary) 设置
 */
class AppTriggerScheduleStatus extends AbstractModel
{
    /**
     * @var string 
     */
    public $LastFireTime;

    /**
     * @var string 
     */
    public $NextFireTime;

    /**
     * @var string 
     */
    public $PolicySummary;

    /**
     * @param string $LastFireTime 
     * @param string $NextFireTime 
     * @param string $PolicySummary 
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
        if (array_key_exists("LastFireTime",$param) and $param["LastFireTime"] !== null) {
            $this->LastFireTime = $param["LastFireTime"];
        }

        if (array_key_exists("NextFireTime",$param) and $param["NextFireTime"] !== null) {
            $this->NextFireTime = $param["NextFireTime"];
        }

        if (array_key_exists("PolicySummary",$param) and $param["PolicySummary"] !== null) {
            $this->PolicySummary = $param["PolicySummary"];
        }
    }
}
