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
 * DescribeWebManagedRulesLog请求参数结构体
 *
 * @method string getStartTime() 获取起始时间。
 * @method void setStartTime(string $StartTime) 设置起始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method integer getPageSize() 获取分页拉取的最大返回结果数。最大值：1000。
 * @method void setPageSize(integer $PageSize) 设置分页拉取的最大返回结果数。最大值：1000。
 * @method integer getPageNo() 获取分页拉取的起始页号。最小值：1。
 * @method void setPageNo(integer $PageNo) 设置分页拉取的起始页号。最小值：1。
 * @method array getZoneIds() 获取站点集合，不填默认选择全部站点。
 * @method void setZoneIds(array $ZoneIds) 设置站点集合，不填默认选择全部站点。
 * @method array getDomains() 获取域名集合，不填默认选择全部子域名。
 * @method void setDomains(array $Domains) 设置域名集合，不填默认选择全部子域名。
 * @method array getQueryCondition() 获取筛选条件，取值有：
<li>attackType ：攻击类型 ；</li>
<li>riskLevel ：风险等级 ；</li>
<li>action ：执行动作（处置方式） ；</li>
<li>ruleId ：规则id ；</li>
<li>sipCountryCode ：ip所在国家 ；</li>
<li>attackIp ：攻击ip ；</li>
<li>oriDomain ：被攻击的子域名 ；</li>
<li>eventId ：事件id ；</li>
<li>ua ：用户代理 ；</li>
<li>requestMethod ：请求方法 ；</li>
<li>uri ：统一资源标识符 。</li>
 * @method void setQueryCondition(array $QueryCondition) 设置筛选条件，取值有：
<li>attackType ：攻击类型 ；</li>
<li>riskLevel ：风险等级 ；</li>
<li>action ：执行动作（处置方式） ；</li>
<li>ruleId ：规则id ；</li>
<li>sipCountryCode ：ip所在国家 ；</li>
<li>attackIp ：攻击ip ；</li>
<li>oriDomain ：被攻击的子域名 ；</li>
<li>eventId ：事件id ；</li>
<li>ua ：用户代理 ；</li>
<li>requestMethod ：请求方法 ；</li>
<li>uri ：统一资源标识符 。</li>
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
 */
class DescribeWebManagedRulesLogRequest extends AbstractModel
{
    /**
     * @var string 起始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var integer 分页拉取的最大返回结果数。最大值：1000。
     */
    public $PageSize;

    /**
     * @var integer 分页拉取的起始页号。最小值：1。
     */
    public $PageNo;

    /**
     * @var array 站点集合，不填默认选择全部站点。
     */
    public $ZoneIds;

    /**
     * @var array 域名集合，不填默认选择全部子域名。
     */
    public $Domains;

    /**
     * @var array 筛选条件，取值有：
<li>attackType ：攻击类型 ；</li>
<li>riskLevel ：风险等级 ；</li>
<li>action ：执行动作（处置方式） ；</li>
<li>ruleId ：规则id ；</li>
<li>sipCountryCode ：ip所在国家 ；</li>
<li>attackIp ：攻击ip ；</li>
<li>oriDomain ：被攻击的子域名 ；</li>
<li>eventId ：事件id ；</li>
<li>ua ：用户代理 ；</li>
<li>requestMethod ：请求方法 ；</li>
<li>uri ：统一资源标识符 。</li>
     */
    public $QueryCondition;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
     */
    public $Area;

    /**
     * @param string $StartTime 起始时间。
     * @param string $EndTime 结束时间。
     * @param integer $PageSize 分页拉取的最大返回结果数。最大值：1000。
     * @param integer $PageNo 分页拉取的起始页号。最小值：1。
     * @param array $ZoneIds 站点集合，不填默认选择全部站点。
     * @param array $Domains 域名集合，不填默认选择全部子域名。
     * @param array $QueryCondition 筛选条件，取值有：
<li>attackType ：攻击类型 ；</li>
<li>riskLevel ：风险等级 ；</li>
<li>action ：执行动作（处置方式） ；</li>
<li>ruleId ：规则id ；</li>
<li>sipCountryCode ：ip所在国家 ；</li>
<li>attackIp ：攻击ip ；</li>
<li>oriDomain ：被攻击的子域名 ；</li>
<li>eventId ：事件id ；</li>
<li>ua ：用户代理 ；</li>
<li>requestMethod ：请求方法 ；</li>
<li>uri ：统一资源标识符 。</li>
     * @param string $Area 数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("QueryCondition",$param) and $param["QueryCondition"] !== null) {
            $this->QueryCondition = [];
            foreach ($param["QueryCondition"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->QueryCondition, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
