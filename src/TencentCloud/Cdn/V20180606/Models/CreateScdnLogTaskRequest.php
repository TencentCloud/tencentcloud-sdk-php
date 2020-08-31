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
 * CreateScdnLogTask请求参数结构体
 *
 * @method string getMode() 获取防护类型
Mode 映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
 * @method void setMode(string $Mode) 设置防护类型
Mode 映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
 * @method string getStartTime() 获取查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
 * @method void setStartTime(string $StartTime) 设置查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
 * @method string getEndTime() 获取查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
 * @method string getDomain() 获取指定域名查询, 不填默认查询全部域名
 * @method void setDomain(string $Domain) 设置指定域名查询, 不填默认查询全部域名
 * @method string getAttackType() 获取指定攻击类型, 不填默认查询全部攻击类型
AttackType 映射如下:
  other = '未知类型'
  malicious_scan = "恶意扫描"
  sql_inject = "SQL注入攻击"
  xss = "XSS攻击"
  cmd_inject = "命令注入攻击"
  ldap_inject = "LDAP注入攻击"
  ssi_inject = "SSI注入攻击"
  xml_inject = "XML注入攻击"
  web_service = "WEB服务漏洞攻击"
  web_app = "WEB应用漏洞攻击"
  path_traversal = "路径跨越攻击"
  illegal_access_core_file = "核心文件非法访问"
  trojan_horse = "木马后门攻击"
  csrf = "CSRF攻击"
  malicious_file_upload= '恶意文件上传'
 * @method void setAttackType(string $AttackType) 设置指定攻击类型, 不填默认查询全部攻击类型
AttackType 映射如下:
  other = '未知类型'
  malicious_scan = "恶意扫描"
  sql_inject = "SQL注入攻击"
  xss = "XSS攻击"
  cmd_inject = "命令注入攻击"
  ldap_inject = "LDAP注入攻击"
  ssi_inject = "SSI注入攻击"
  xml_inject = "XML注入攻击"
  web_service = "WEB服务漏洞攻击"
  web_app = "WEB应用漏洞攻击"
  path_traversal = "路径跨越攻击"
  illegal_access_core_file = "核心文件非法访问"
  trojan_horse = "木马后门攻击"
  csrf = "CSRF攻击"
  malicious_file_upload= '恶意文件上传'
 * @method string getDefenceMode() 获取指定执行动作, 不填默认查询全部执行动作
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
 * @method void setDefenceMode(string $DefenceMode) 设置指定执行动作, 不填默认查询全部执行动作
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
 * @method string getIp() 获取不填为全部ip
 * @method void setIp(string $Ip) 设置不填为全部ip
 * @method array getDomains() 获取指定域名查询, 与 Domain 参数同时有值时使用 Domains 参数，不填默认查询全部域名，指定域名查询时最多支持同时选择 5 个域名查询
 * @method void setDomains(array $Domains) 设置指定域名查询, 与 Domain 参数同时有值时使用 Domains 参数，不填默认查询全部域名，指定域名查询时最多支持同时选择 5 个域名查询
 */
class CreateScdnLogTaskRequest extends AbstractModel
{
    /**
     * @var string 防护类型
Mode 映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
     */
    public $Mode;

    /**
     * @var string 查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
     */
    public $EndTime;

    /**
     * @var string 指定域名查询, 不填默认查询全部域名
     */
    public $Domain;

    /**
     * @var string 指定攻击类型, 不填默认查询全部攻击类型
AttackType 映射如下:
  other = '未知类型'
  malicious_scan = "恶意扫描"
  sql_inject = "SQL注入攻击"
  xss = "XSS攻击"
  cmd_inject = "命令注入攻击"
  ldap_inject = "LDAP注入攻击"
  ssi_inject = "SSI注入攻击"
  xml_inject = "XML注入攻击"
  web_service = "WEB服务漏洞攻击"
  web_app = "WEB应用漏洞攻击"
  path_traversal = "路径跨越攻击"
  illegal_access_core_file = "核心文件非法访问"
  trojan_horse = "木马后门攻击"
  csrf = "CSRF攻击"
  malicious_file_upload= '恶意文件上传'
     */
    public $AttackType;

    /**
     * @var string 指定执行动作, 不填默认查询全部执行动作
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
     */
    public $DefenceMode;

    /**
     * @var string 不填为全部ip
     */
    public $Ip;

    /**
     * @var array 指定域名查询, 与 Domain 参数同时有值时使用 Domains 参数，不填默认查询全部域名，指定域名查询时最多支持同时选择 5 个域名查询
     */
    public $Domains;

    /**
     * @param string $Mode 防护类型
Mode 映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
     * @param string $StartTime 查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
     * @param string $EndTime 查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
     * @param string $Domain 指定域名查询, 不填默认查询全部域名
     * @param string $AttackType 指定攻击类型, 不填默认查询全部攻击类型
AttackType 映射如下:
  other = '未知类型'
  malicious_scan = "恶意扫描"
  sql_inject = "SQL注入攻击"
  xss = "XSS攻击"
  cmd_inject = "命令注入攻击"
  ldap_inject = "LDAP注入攻击"
  ssi_inject = "SSI注入攻击"
  xml_inject = "XML注入攻击"
  web_service = "WEB服务漏洞攻击"
  web_app = "WEB应用漏洞攻击"
  path_traversal = "路径跨越攻击"
  illegal_access_core_file = "核心文件非法访问"
  trojan_horse = "木马后门攻击"
  csrf = "CSRF攻击"
  malicious_file_upload= '恶意文件上传'
     * @param string $DefenceMode 指定执行动作, 不填默认查询全部执行动作
DefenceMode 映射如下：
  observe = '观察模式'
  intercept = '拦截模式'
     * @param string $Ip 不填为全部ip
     * @param array $Domains 指定域名查询, 与 Domain 参数同时有值时使用 Domains 参数，不填默认查询全部域名，指定域名查询时最多支持同时选择 5 个域名查询
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
