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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchAuditLog请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，不得早于当前时间的180天前
 * @method void setStartTime(string $StartTime) 设置开始时间，不得早于当前时间的180天前
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getOperationSet() 获取操作类型
 * @method void setOperationSet(array $OperationSet) 设置操作类型
 * @method array getProtocolSet() 获取会话类型
 * @method void setProtocolSet(array $ProtocolSet) 设置会话类型
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
     * @var array 操作类型
     */
    public $OperationSet;

    /**
     * @var array 会话类型
     */
    public $ProtocolSet;

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
     * @param array $OperationSet 操作类型
     * @param array $ProtocolSet 会话类型
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

        if (array_key_exists("OperationSet",$param) and $param["OperationSet"] !== null) {
            $this->OperationSet = $param["OperationSet"];
        }

        if (array_key_exists("ProtocolSet",$param) and $param["ProtocolSet"] !== null) {
            $this->ProtocolSet = $param["ProtocolSet"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
