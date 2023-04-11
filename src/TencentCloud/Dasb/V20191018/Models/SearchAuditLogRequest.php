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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchAuditLog请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，不得早于当前时间的180天前
 * @method void setStartTime(string $StartTime) 设置开始时间，不得早于当前时间的180天前
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每页容量，默认为20，最大200
 * @method void setLimit(integer $Limit) 设置每页容量，默认为20，最大200
 */
class SearchAuditLogRequest extends AbstractModel
{
    /**
     * @var string 开始时间，不得早于当前时间的180天前
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每页容量，默认为20，最大200
     */
    public $Limit;

    /**
     * @param string $StartTime 开始时间，不得早于当前时间的180天前
     * @param string $EndTime 结束时间
     * @param integer $Offset 偏移量
     * @param integer $Limit 每页容量，默认为20，最大200
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
