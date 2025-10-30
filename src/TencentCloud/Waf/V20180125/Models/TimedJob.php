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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则定时任务数据结构
 *
 * @method integer getStartDateTime() 获取开始时间戳，单位为秒
 * @method void setStartDateTime(integer $StartDateTime) 设置开始时间戳，单位为秒
 * @method integer getEndDateTime() 获取结束时间戳，单位为秒
 * @method void setEndDateTime(integer $EndDateTime) 设置结束时间戳，单位为秒
 */
class TimedJob extends AbstractModel
{
    /**
     * @var integer 开始时间戳，单位为秒
     */
    public $StartDateTime;

    /**
     * @var integer 结束时间戳，单位为秒
     */
    public $EndDateTime;

    /**
     * @param integer $StartDateTime 开始时间戳，单位为秒
     * @param integer $EndDateTime 结束时间戳，单位为秒
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
        if (array_key_exists("StartDateTime",$param) and $param["StartDateTime"] !== null) {
            $this->StartDateTime = $param["StartDateTime"];
        }

        if (array_key_exists("EndDateTime",$param) and $param["EndDateTime"] !== null) {
            $this->EndDateTime = $param["EndDateTime"];
        }
    }
}
