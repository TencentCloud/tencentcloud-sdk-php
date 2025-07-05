<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIpAccessControl请求参数结构体
 *
 * @method string getDomain() 获取具体域名如：test.qcloudwaf.com
全局域名为：global
 * @method void setDomain(string $Domain) 设置具体域名如：test.qcloudwaf.com
全局域名为：global
 * @method array getIpList() 获取ip参数列表
 * @method void setIpList(array $IpList) 设置ip参数列表
 * @method integer getActionType() 获取42为黑名单，40为白名单
 * @method void setActionType(integer $ActionType) 设置42为黑名单，40为白名单
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method integer getValidTS() 获取valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
 * @method void setValidTS(integer $ValidTS) 设置valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getEdition() 获取WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
 * @method void setEdition(string $Edition) 设置WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
 * @method string getSourceType() 获取是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
 * @method void setSourceType(string $SourceType) 设置是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时配置详情
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时配置详情
 */
class ModifyIpAccessControlRequest extends AbstractModel
{
    /**
     * @var string 具体域名如：test.qcloudwaf.com
全局域名为：global
     */
    public $Domain;

    /**
     * @var array ip参数列表
     */
    public $IpList;

    /**
     * @var integer 42为黑名单，40为白名单
     */
    public $ActionType;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var integer valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
     * @deprecated
     */
    public $ValidTS;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
     */
    public $Edition;

    /**
     * @var string 是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
     */
    public $SourceType;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时配置详情
     */
    public $JobDateTime;

    /**
     * @param string $Domain 具体域名如：test.qcloudwaf.com
全局域名为：global
     * @param array $IpList ip参数列表
     * @param integer $ActionType 42为黑名单，40为白名单
     * @param integer $RuleId 规则ID
     * @param integer $ValidTS valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
     * @param string $InstanceId 实例Id
     * @param string $Edition WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
     * @param string $SourceType 是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
     * @param string $Note 备注
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时配置详情
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ValidTS",$param) and $param["ValidTS"] !== null) {
            $this->ValidTS = $param["ValidTS"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }
    }
}
