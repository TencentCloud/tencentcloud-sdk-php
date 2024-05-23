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
 * DescribeSavingPlanDeduct请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getLimit() 获取每页数量，最大值为200
 * @method void setLimit(integer $Limit) 设置每页数量，最大值为200
 * @method string getStartEndDate() 获取节省计划使用开始的查询结束时间
 * @method void setStartEndDate(string $StartEndDate) 设置节省计划使用开始的查询结束时间
 * @method string getStartStartDate() 获取节省计划使用开始的查询开始时间
 * @method void setStartStartDate(string $StartStartDate) 设置节省计划使用开始的查询开始时间
 * @method integer getRegionId() 获取地域编码
 * @method void setRegionId(integer $RegionId) 设置地域编码
 * @method integer getZoneId() 获取区域编码
 * @method void setZoneId(integer $ZoneId) 设置区域编码
 * @method string getSpId() 获取节省计划资源id
 * @method void setSpId(string $SpId) 设置节省计划资源id
 * @method string getDeductEndDate() 获取抵扣查询结束时间，格式：yyyy-MM-dd HH:mm:ss
 * @method void setDeductEndDate(string $DeductEndDate) 设置抵扣查询结束时间，格式：yyyy-MM-dd HH:mm:ss
 * @method string getDeductStartDate() 获取抵扣查询开始时间，格式：yyyy-MM-dd HH:mm:ss
 * @method void setDeductStartDate(string $DeductStartDate) 设置抵扣查询开始时间，格式：yyyy-MM-dd HH:mm:ss
 * @method string getEndEndDate() 获取节省计划使用结束的查询结束时间
 * @method void setEndEndDate(string $EndEndDate) 设置节省计划使用结束的查询结束时间
 * @method string getEndStartDate() 获取节省计划使用结束的查询开始时间
 * @method void setEndStartDate(string $EndStartDate) 设置节省计划使用结束的查询开始时间
 */
class DescribeSavingPlanDeductRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 每页数量，最大值为200
     */
    public $Limit;

    /**
     * @var string 节省计划使用开始的查询结束时间
     */
    public $StartEndDate;

    /**
     * @var string 节省计划使用开始的查询开始时间
     */
    public $StartStartDate;

    /**
     * @var integer 地域编码
     */
    public $RegionId;

    /**
     * @var integer 区域编码
     */
    public $ZoneId;

    /**
     * @var string 节省计划资源id
     */
    public $SpId;

    /**
     * @var string 抵扣查询结束时间，格式：yyyy-MM-dd HH:mm:ss
     */
    public $DeductEndDate;

    /**
     * @var string 抵扣查询开始时间，格式：yyyy-MM-dd HH:mm:ss
     */
    public $DeductStartDate;

    /**
     * @var string 节省计划使用结束的查询结束时间
     */
    public $EndEndDate;

    /**
     * @var string 节省计划使用结束的查询开始时间
     */
    public $EndStartDate;

    /**
     * @param integer $Offset 分页偏移量
     * @param integer $Limit 每页数量，最大值为200
     * @param string $StartEndDate 节省计划使用开始的查询结束时间
     * @param string $StartStartDate 节省计划使用开始的查询开始时间
     * @param integer $RegionId 地域编码
     * @param integer $ZoneId 区域编码
     * @param string $SpId 节省计划资源id
     * @param string $DeductEndDate 抵扣查询结束时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $DeductStartDate 抵扣查询开始时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $EndEndDate 节省计划使用结束的查询结束时间
     * @param string $EndStartDate 节省计划使用结束的查询开始时间
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

        if (array_key_exists("StartEndDate",$param) and $param["StartEndDate"] !== null) {
            $this->StartEndDate = $param["StartEndDate"];
        }

        if (array_key_exists("StartStartDate",$param) and $param["StartStartDate"] !== null) {
            $this->StartStartDate = $param["StartStartDate"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SpId",$param) and $param["SpId"] !== null) {
            $this->SpId = $param["SpId"];
        }

        if (array_key_exists("DeductEndDate",$param) and $param["DeductEndDate"] !== null) {
            $this->DeductEndDate = $param["DeductEndDate"];
        }

        if (array_key_exists("DeductStartDate",$param) and $param["DeductStartDate"] !== null) {
            $this->DeductStartDate = $param["DeductStartDate"];
        }

        if (array_key_exists("EndEndDate",$param) and $param["EndEndDate"] !== null) {
            $this->EndEndDate = $param["EndEndDate"];
        }

        if (array_key_exists("EndStartDate",$param) and $param["EndStartDate"] !== null) {
            $this->EndStartDate = $param["EndStartDate"];
        }
    }
}
