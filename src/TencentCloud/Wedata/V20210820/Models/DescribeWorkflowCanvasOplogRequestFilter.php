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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkflowCanvasOplogRequestFilter
 *
 * @method integer getStartTime() 获取开始时间，时间戳，精确到秒
 * @method void setStartTime(integer $StartTime) 设置开始时间，时间戳，精确到秒
 * @method integer getEndTime() 获取开始时间，时间戳，精确到秒
 * @method void setEndTime(integer $EndTime) 设置开始时间，时间戳，精确到秒
 * @method string getOrderType() 获取排序类型，asc 或者 desc，不填默认为 asc
 * @method void setOrderType(string $OrderType) 设置排序类型，asc 或者 desc，不填默认为 asc
 * @method array getOperatorIds() 获取操作人ID，用来过滤
 * @method void setOperatorIds(array $OperatorIds) 设置操作人ID，用来过滤
 */
class DescribeWorkflowCanvasOplogRequestFilter extends AbstractModel
{
    /**
     * @var integer 开始时间，时间戳，精确到秒
     */
    public $StartTime;

    /**
     * @var integer 开始时间，时间戳，精确到秒
     */
    public $EndTime;

    /**
     * @var string 排序类型，asc 或者 desc，不填默认为 asc
     */
    public $OrderType;

    /**
     * @var array 操作人ID，用来过滤
     */
    public $OperatorIds;

    /**
     * @param integer $StartTime 开始时间，时间戳，精确到秒
     * @param integer $EndTime 开始时间，时间戳，精确到秒
     * @param string $OrderType 排序类型，asc 或者 desc，不填默认为 asc
     * @param array $OperatorIds 操作人ID，用来过滤
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

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OperatorIds",$param) and $param["OperatorIds"] !== null) {
            $this->OperatorIds = $param["OperatorIds"];
        }
    }
}
