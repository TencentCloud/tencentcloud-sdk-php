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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时移录制段。
 *
 * @method string getSid() 获取时移录制会话标识。
 * @method void setSid(string $Sid) 设置时移录制会话标识。
 * @method integer getStartTime() 获取录制会话开始时间，Unix 时间戳。
 * @method void setStartTime(integer $StartTime) 设置录制会话开始时间，Unix 时间戳。
 * @method integer getEndTime() 获取录制会话结束时间，Unix 时间戳。
 * @method void setEndTime(integer $EndTime) 设置录制会话结束时间，Unix 时间戳。
 */
class TimeShiftRecord extends AbstractModel
{
    /**
     * @var string 时移录制会话标识。
     */
    public $Sid;

    /**
     * @var integer 录制会话开始时间，Unix 时间戳。
     */
    public $StartTime;

    /**
     * @var integer 录制会话结束时间，Unix 时间戳。
     */
    public $EndTime;

    /**
     * @param string $Sid 时移录制会话标识。
     * @param integer $StartTime 录制会话开始时间，Unix 时间戳。
     * @param integer $EndTime 录制会话结束时间，Unix 时间戳。
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
