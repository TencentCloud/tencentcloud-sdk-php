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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTopWafData请求参数结构体
 *
 * @method string getStartTime() 获取查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
 * @method void setStartTime(string $StartTime) 设置查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
 * @method string getEndTime() 获取查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
 * @method string getDomain() 获取指定域名查询，不填写查询整个AppID下数据
 * @method void setDomain(string $Domain) 设置指定域名查询，不填写查询整个AppID下数据
 * @method string getAttackType() 获取指定攻击类型
不填则查询所有攻击类型的数据总和
AttackType 映射如下:
"webshell" : Webshell检测防护
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
 * @method void setAttackType(string $AttackType) 设置指定攻击类型
不填则查询所有攻击类型的数据总和
AttackType 映射如下:
"webshell" : Webshell检测防护
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
 * @method string getDefenceMode() 获取指定防御模式
不填则查询所有防御模式的数据总和
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
 * @method void setDefenceMode(string $DefenceMode) 设置指定防御模式
不填则查询所有防御模式的数据总和
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
 * @method string getMetric() 获取排序对象，支持以下几种形式：
url：攻击目标 url 排序
ip：攻击源 IP 排序
attackType：攻击类型排序
domain：当查询整个AppID下数据时，按照域名请求量排序
 * @method void setMetric(string $Metric) 设置排序对象，支持以下几种形式：
url：攻击目标 url 排序
ip：攻击源 IP 排序
attackType：攻击类型排序
domain：当查询整个AppID下数据时，按照域名请求量排序
 * @method string getArea() 获取地域：mainland 或 overseas
 * @method void setArea(string $Area) 设置地域：mainland 或 overseas
 * @method array getAttackTypes() 获取指定攻击类型列表，取值参考AttackType
 * @method void setAttackTypes(array $AttackTypes) 设置指定攻击类型列表，取值参考AttackType
 * @method array getDomains() 获取指定域名列表查询，不填写查询整个AppID下数据
 * @method void setDomains(array $Domains) 设置指定域名列表查询，不填写查询整个AppID下数据
 */
class ListTopWafDataRequest extends AbstractModel
{
    /**
     * @var string 查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
     */
    public $EndTime;

    /**
     * @var string 指定域名查询，不填写查询整个AppID下数据
     */
    public $Domain;

    /**
     * @var string 指定攻击类型
不填则查询所有攻击类型的数据总和
AttackType 映射如下:
"webshell" : Webshell检测防护
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
     */
    public $AttackType;

    /**
     * @var string 指定防御模式
不填则查询所有防御模式的数据总和
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
     */
    public $DefenceMode;

    /**
     * @var string 排序对象，支持以下几种形式：
url：攻击目标 url 排序
ip：攻击源 IP 排序
attackType：攻击类型排序
domain：当查询整个AppID下数据时，按照域名请求量排序
     */
    public $Metric;

    /**
     * @var string 地域：mainland 或 overseas
     */
    public $Area;

    /**
     * @var array 指定攻击类型列表，取值参考AttackType
     */
    public $AttackTypes;

    /**
     * @var array 指定域名列表查询，不填写查询整个AppID下数据
     */
    public $Domains;

    /**
     * @param string $StartTime 查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
     * @param string $EndTime 查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
     * @param string $Domain 指定域名查询，不填写查询整个AppID下数据
     * @param string $AttackType 指定攻击类型
不填则查询所有攻击类型的数据总和
AttackType 映射如下:
"webshell" : Webshell检测防护
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
     * @param string $DefenceMode 指定防御模式
不填则查询所有防御模式的数据总和
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
     * @param string $Metric 排序对象，支持以下几种形式：
url：攻击目标 url 排序
ip：攻击源 IP 排序
attackType：攻击类型排序
domain：当查询整个AppID下数据时，按照域名请求量排序
     * @param string $Area 地域：mainland 或 overseas
     * @param array $AttackTypes 指定攻击类型列表，取值参考AttackType
     * @param array $Domains 指定域名列表查询，不填写查询整个AppID下数据
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("DefenceMode",$param) and $param["DefenceMode"] !== null) {
            $this->DefenceMode = $param["DefenceMode"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("AttackTypes",$param) and $param["AttackTypes"] !== null) {
            $this->AttackTypes = $param["AttackTypes"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
