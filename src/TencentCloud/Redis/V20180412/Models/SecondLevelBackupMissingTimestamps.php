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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 秒级备份不存在的时间戳范围
 *
 * @method integer getStartTimeStamp() 获取开始时间戳
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置开始时间戳
 * @method integer getEndTimeStamp() 获取结束时间戳
 * @method void setEndTimeStamp(integer $EndTimeStamp) 设置结束时间戳
 */
class SecondLevelBackupMissingTimestamps extends AbstractModel
{
    /**
     * @var integer 开始时间戳
     */
    public $StartTimeStamp;

    /**
     * @var integer 结束时间戳
     */
    public $EndTimeStamp;

    /**
     * @param integer $StartTimeStamp 开始时间戳
     * @param integer $EndTimeStamp 结束时间戳
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }
    }
}
