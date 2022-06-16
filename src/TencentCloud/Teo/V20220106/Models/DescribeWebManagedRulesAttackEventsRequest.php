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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebManagedRulesAttackEvents请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getPageSize() 获取条数
 * @method void setPageSize(integer $PageSize) 设置条数
 * @method integer getPageNo() 获取当前页
 * @method void setPageNo(integer $PageNo) 设置当前页
 * @method array getPolicyIds() 获取ddos策略组id列表
 * @method void setPolicyIds(array $PolicyIds) 设置ddos策略组id列表
 * @method array getZoneIds() 获取站点集合
 * @method void setZoneIds(array $ZoneIds) 设置站点集合
 * @method array getDomains() 获取子域名列表
 * @method void setDomains(array $Domains) 设置子域名列表
 * @method string getIsShowDetail() 获取选填{Y、N},默认为Y；Y：展示，N：不展示
 * @method void setIsShowDetail(string $IsShowDetail) 设置选填{Y、N},默认为Y；Y：展示，N：不展示
 */
class DescribeWebManagedRulesAttackEventsRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 条数
     */
    public $PageSize;

    /**
     * @var integer 当前页
     */
    public $PageNo;

    /**
     * @var array ddos策略组id列表
     */
    public $PolicyIds;

    /**
     * @var array 站点集合
     */
    public $ZoneIds;

    /**
     * @var array 子域名列表
     */
    public $Domains;

    /**
     * @var string 选填{Y、N},默认为Y；Y：展示，N：不展示
     */
    public $IsShowDetail;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $PageSize 条数
     * @param integer $PageNo 当前页
     * @param array $PolicyIds ddos策略组id列表
     * @param array $ZoneIds 站点集合
     * @param array $Domains 子域名列表
     * @param string $IsShowDetail 选填{Y、N},默认为Y；Y：展示，N：不展示
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("IsShowDetail",$param) and $param["IsShowDetail"] !== null) {
            $this->IsShowDetail = $param["IsShowDetail"];
        }
    }
}
