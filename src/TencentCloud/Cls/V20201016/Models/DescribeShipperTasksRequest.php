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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShipperTasks请求参数结构体
 *
 * @method string getShipperId() 获取投递规则ID
 * @method void setShipperId(string $ShipperId) 设置投递规则ID
 * @method integer getStartTime() 获取查询的开始时间戳，支持最近3天的查询， 毫秒
 * @method void setStartTime(integer $StartTime) 设置查询的开始时间戳，支持最近3天的查询， 毫秒
 * @method integer getEndTime() 获取查询的结束时间戳， 毫秒
 * @method void setEndTime(integer $EndTime) 设置查询的结束时间戳， 毫秒
 */
class DescribeShipperTasksRequest extends AbstractModel
{
    /**
     * @var string 投递规则ID
     */
    public $ShipperId;

    /**
     * @var integer 查询的开始时间戳，支持最近3天的查询， 毫秒
     */
    public $StartTime;

    /**
     * @var integer 查询的结束时间戳， 毫秒
     */
    public $EndTime;

    /**
     * @param string $ShipperId 投递规则ID
     * @param integer $StartTime 查询的开始时间戳，支持最近3天的查询， 毫秒
     * @param integer $EndTime 查询的结束时间戳， 毫秒
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
        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
