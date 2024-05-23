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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSavingPlanUsage请求参数结构体
 *
 * @method string getStartDate() 获取开始时间，格式yyyy-MM-dd 注：查询范围请勿超过6个月
 * @method void setStartDate(string $StartDate) 设置开始时间，格式yyyy-MM-dd 注：查询范围请勿超过6个月
 * @method string getEndDate() 获取结束时间，格式yyyy-MM-dd
 * @method void setEndDate(string $EndDate) 设置结束时间，格式yyyy-MM-dd
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getLimit() 获取每页数量，最大值为200
 * @method void setLimit(integer $Limit) 设置每页数量，最大值为200
 * @method string getTimeInterval() 获取查询结果数据的时间间隔
 * @method void setTimeInterval(string $TimeInterval) 设置查询结果数据的时间间隔
 */
class DescribeSavingPlanUsageRequest extends AbstractModel
{
    /**
     * @var string 开始时间，格式yyyy-MM-dd 注：查询范围请勿超过6个月
     */
    public $StartDate;

    /**
     * @var string 结束时间，格式yyyy-MM-dd
     */
    public $EndDate;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 每页数量，最大值为200
     */
    public $Limit;

    /**
     * @var string 查询结果数据的时间间隔
     */
    public $TimeInterval;

    /**
     * @param string $StartDate 开始时间，格式yyyy-MM-dd 注：查询范围请勿超过6个月
     * @param string $EndDate 结束时间，格式yyyy-MM-dd
     * @param integer $Offset 分页偏移量
     * @param integer $Limit 每页数量，最大值为200
     * @param string $TimeInterval 查询结果数据的时间间隔
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TimeInterval",$param) and $param["TimeInterval"] !== null) {
            $this->TimeInterval = $param["TimeInterval"];
        }
    }
}
