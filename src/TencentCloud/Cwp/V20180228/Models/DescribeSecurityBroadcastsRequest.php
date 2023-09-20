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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityBroadcasts请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取需要返回的数量，默认为10 ，0=全部
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10 ，0=全部
 * @method string getBeginDate() 获取筛选发布日期：开始时间
 * @method void setBeginDate(string $BeginDate) 设置筛选发布日期：开始时间
 * @method string getEndDate() 获取筛选发布日期：结束时间
 * @method void setEndDate(string $EndDate) 设置筛选发布日期：结束时间
 * @method string getBroadcastType() 获取过滤安全播报类型：0-紧急通知，1-功能更新，2-行业荣誉，3-版本发布
 * @method void setBroadcastType(string $BroadcastType) 设置过滤安全播报类型：0-紧急通知，1-功能更新，2-行业荣誉，3-版本发布
 */
class DescribeSecurityBroadcastsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 需要返回的数量，默认为10 ，0=全部
     */
    public $Limit;

    /**
     * @var string 筛选发布日期：开始时间
     */
    public $BeginDate;

    /**
     * @var string 筛选发布日期：结束时间
     */
    public $EndDate;

    /**
     * @var string 过滤安全播报类型：0-紧急通知，1-功能更新，2-行业荣誉，3-版本发布
     */
    public $BroadcastType;

    /**
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 需要返回的数量，默认为10 ，0=全部
     * @param string $BeginDate 筛选发布日期：开始时间
     * @param string $EndDate 筛选发布日期：结束时间
     * @param string $BroadcastType 过滤安全播报类型：0-紧急通知，1-功能更新，2-行业荣誉，3-版本发布
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("BroadcastType",$param) and $param["BroadcastType"] !== null) {
            $this->BroadcastType = $param["BroadcastType"];
        }
    }
}
