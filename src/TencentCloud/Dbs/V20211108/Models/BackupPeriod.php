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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份周期描述
 *
 * @method string getPeriodType() 获取全量备份频率。目前仅支持"Weekly" - 每星期
 * @method void setPeriodType(string $PeriodType) 设置全量备份频率。目前仅支持"Weekly" - 每星期
 * @method array getDay() 获取全量备份周期。取值范围为：["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]。
 * @method void setDay(array $Day) 设置全量备份周期。取值范围为：["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]。
 */
class BackupPeriod extends AbstractModel
{
    /**
     * @var string 全量备份频率。目前仅支持"Weekly" - 每星期
     */
    public $PeriodType;

    /**
     * @var array 全量备份周期。取值范围为：["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]。
     */
    public $Day;

    /**
     * @param string $PeriodType 全量备份频率。目前仅支持"Weekly" - 每星期
     * @param array $Day 全量备份周期。取值范围为：["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]。
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
        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }
    }
}
