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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMonitorDataByDate请求参数结构体
 *
 * @method integer getStartTime() 获取开始时间戳
 * @method void setStartTime(integer $StartTime) 设置开始时间戳
 * @method integer getEndTime() 获取结束时间戳 最多显示30天数据
 * @method void setEndTime(integer $EndTime) 设置结束时间戳 最多显示30天数据
 */
class DescribeMonitorDataByDateRequest extends AbstractModel
{
    /**
     * @var integer 开始时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳 最多显示30天数据
     */
    public $EndTime;

    /**
     * @param integer $StartTime 开始时间戳
     * @param integer $EndTime 结束时间戳 最多显示30天数据
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
