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
 * WeeklySchedule
 *
 * @method array getTimes() 获取定时配置（星期）
 * @method void setTimes(array $Times) 设置定时配置（星期）
 */
class WeeklySchedule extends AbstractModel
{
    /**
     * @var array 定时配置（星期）
     */
    public $Times;

    /**
     * @param array $Times 定时配置（星期）
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
        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new WeeklyTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }
    }
}
