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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可回档的时间范围
 *
 * @method string getTimeRangeStart() 获取开始时间
 * @method void setTimeRangeStart(string $TimeRangeStart) 设置开始时间
 * @method string getTimeRangeEnd() 获取结束时间
 * @method void setTimeRangeEnd(string $TimeRangeEnd) 设置结束时间
 */
class RollbackTimeRange extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $TimeRangeStart;

    /**
     * @var string 结束时间
     */
    public $TimeRangeEnd;

    /**
     * @param string $TimeRangeStart 开始时间
     * @param string $TimeRangeEnd 结束时间
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
        if (array_key_exists("TimeRangeStart",$param) and $param["TimeRangeStart"] !== null) {
            $this->TimeRangeStart = $param["TimeRangeStart"];
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }
    }
}
