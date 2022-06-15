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
 * DescribeWebProtectionData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getMetricNames() 获取统计指标列表
 * @method void setMetricNames(array $MetricNames) 设置统计指标列表
 * @method array getZoneIds() 获取站点id列表
 * @method void setZoneIds(array $ZoneIds) 设置站点id列表
 * @method array getDomains() 获取子域名列表
 * @method void setDomains(array $Domains) 设置子域名列表
 * @method string getProtocolType() 获取协议类型
 * @method void setProtocolType(string $ProtocolType) 设置协议类型
 * @method string getAttackType() 获取"webshell" : Webshell检测防护
"oa" : 常见OA漏洞防护
"xss" : XSS跨站脚本攻击防护
"xxe" : XXE攻击防护
"webscan" : 扫描器攻击漏洞防护
"cms" : 常见CMS漏洞防护
"upload" : 恶意文件上传攻击防护
"sql" : SQL注入攻击防护
"cmd_inject": 命令/代码注入攻击防护
"osc" : 开源组件漏洞防护
"file_read" : 任意文件读取
"ldap" : LDAP注入攻击防护
"other" : 其它漏洞防护

"all":"所有"
 * @method void setAttackType(string $AttackType) 设置"webshell" : Webshell检测防护
"oa" : 常见OA漏洞防护
"xss" : XSS跨站脚本攻击防护
"xxe" : XXE攻击防护
"webscan" : 扫描器攻击漏洞防护
"cms" : 常见CMS漏洞防护
"upload" : 恶意文件上传攻击防护
"sql" : SQL注入攻击防护
"cmd_inject": 命令/代码注入攻击防护
"osc" : 开源组件漏洞防护
"file_read" : 任意文件读取
"ldap" : LDAP注入攻击防护
"other" : 其它漏洞防护

"all":"所有"
 * @method string getInterval() 获取查询时间粒度，可选{min,5min,hour,day}
 * @method void setInterval(string $Interval) 设置查询时间粒度，可选{min,5min,hour,day}
 */
class DescribeWebProtectionDataRequest extends AbstractModel
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
     * @var array 统计指标列表
     */
    public $MetricNames;

    /**
     * @var array 站点id列表
     */
    public $ZoneIds;

    /**
     * @var array 子域名列表
     */
    public $Domains;

    /**
     * @var string 协议类型
     */
    public $ProtocolType;

    /**
     * @var string "webshell" : Webshell检测防护
"oa" : 常见OA漏洞防护
"xss" : XSS跨站脚本攻击防护
"xxe" : XXE攻击防护
"webscan" : 扫描器攻击漏洞防护
"cms" : 常见CMS漏洞防护
"upload" : 恶意文件上传攻击防护
"sql" : SQL注入攻击防护
"cmd_inject": 命令/代码注入攻击防护
"osc" : 开源组件漏洞防护
"file_read" : 任意文件读取
"ldap" : LDAP注入攻击防护
"other" : 其它漏洞防护

"all":"所有"
     */
    public $AttackType;

    /**
     * @var string 查询时间粒度，可选{min,5min,hour,day}
     */
    public $Interval;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param array $MetricNames 统计指标列表
     * @param array $ZoneIds 站点id列表
     * @param array $Domains 子域名列表
     * @param string $ProtocolType 协议类型
     * @param string $AttackType "webshell" : Webshell检测防护
"oa" : 常见OA漏洞防护
"xss" : XSS跨站脚本攻击防护
"xxe" : XXE攻击防护
"webscan" : 扫描器攻击漏洞防护
"cms" : 常见CMS漏洞防护
"upload" : 恶意文件上传攻击防护
"sql" : SQL注入攻击防护
"cmd_inject": 命令/代码注入攻击防护
"osc" : 开源组件漏洞防护
"file_read" : 任意文件读取
"ldap" : LDAP注入攻击防护
"other" : 其它漏洞防护

"all":"所有"
     * @param string $Interval 查询时间粒度，可选{min,5min,hour,day}
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

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
