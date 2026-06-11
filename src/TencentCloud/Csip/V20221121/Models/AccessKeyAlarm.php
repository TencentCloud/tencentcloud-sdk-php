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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问密钥告警记录
 *
 * @method string getName() 获取<p>告警名称</p>
 * @method void setName(string $Name) 设置<p>告警名称</p>
 * @method integer getLevel() 获取<p>告警等级<br>0-无效 1-提示 2-低危 3-中危 4-高危 5-严重</p>
 * @method void setLevel(integer $Level) 设置<p>告警等级<br>0-无效 1-提示 2-低危 3-中危 4-高危 5-严重</p>
 * @method integer getID() 获取<p>告警记录ID</p>
 * @method void setID(integer $ID) 设置<p>告警记录ID</p>
 * @method integer getAlarmRuleID() 获取<p>告警规则ID</p>
 * @method void setAlarmRuleID(integer $AlarmRuleID) 设置<p>告警规则ID</p>
 * @method integer getAlarmType() 获取<p>告警类型<br>0 异常调用<br>1 泄漏监测</p>
 * @method void setAlarmType(integer $AlarmType) 设置<p>告警类型<br>0 异常调用<br>1 泄漏监测</p>
 * @method string getAccessKey() 获取<p>访问密钥</p>
 * @method void setAccessKey(string $AccessKey) 设置<p>访问密钥</p>
 * @method integer getAccessKeyID() 获取<p>访问密钥ID</p>
 * @method void setAccessKeyID(integer $AccessKeyID) 设置<p>访问密钥ID</p>
 * @method string getAccessKeyRemark() 获取<p>访问密钥备注</p>
 * @method void setAccessKeyRemark(string $AccessKeyRemark) 设置<p>访问密钥备注</p>
 * @method string getLastAlarmTime() 获取<p>最后告警时间</p>
 * @method void setLastAlarmTime(string $LastAlarmTime) 设置<p>最后告警时间</p>
 * @method integer getStatus() 获取<p>告警状态<br>0-未处理 1-已处理 2-已忽略</p>
 * @method void setStatus(integer $Status) 设置<p>告警状态<br>0-未处理 1-已处理 2-已忽略</p>
 * @method string getDate() 获取<p>聚合日期</p>
 * @method void setDate(string $Date) 设置<p>聚合日期</p>
 * @method array getTag() 获取<p>告警标签</p>
 * @method void setTag(array $Tag) 设置<p>告警标签</p>
 * @method string getUin() 获取<p>所属主账号Uin</p>
 * @method void setUin(string $Uin) 设置<p>所属主账号Uin</p>
 * @method string getNickname() 获取<p>所属主账号昵称</p>
 * @method void setNickname(string $Nickname) 设置<p>所属主账号昵称</p>
 * @method string getSubUin() 获取<p>所属子账号Uin</p>
 * @method void setSubUin(string $SubUin) 设置<p>所属子账号Uin</p>
 * @method string getSubNickname() 获取<p>所属子账号昵称</p>
 * @method void setSubNickname(string $SubNickname) 设置<p>所属子账号昵称</p>
 * @method integer getType() 获取<p>账号类型<br>0 主账号AK 1 子账号AK 2 临时密钥</p>
 * @method void setType(integer $Type) 设置<p>账号类型<br>0 主账号AK 1 子账号AK 2 临时密钥</p>
 * @method integer getAppID() 获取<p>所属appid</p>
 * @method void setAppID(integer $AppID) 设置<p>所属appid</p>
 * @method array getLeakEvidence() 获取<p>泄漏证据</p>
 * @method void setLeakEvidence(array $LeakEvidence) 设置<p>泄漏证据</p>
 * @method boolean getIsSupportEditWhiteAccount() 获取<p>是否支持编辑信任账号</p>
 * @method void setIsSupportEditWhiteAccount(boolean $IsSupportEditWhiteAccount) 设置<p>是否支持编辑信任账号</p>
 * @method string getEvidence() 获取<p>告警证据</p>
 * @method void setEvidence(string $Evidence) 设置<p>告警证据</p>
 * @method string getRuleKey() 获取<p>告警规则标识</p>
 * @method void setRuleKey(string $RuleKey) 设置<p>告警规则标识</p>
 * @method integer getCloudType() 获取<p>云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云</p>
 * @method void setCloudType(integer $CloudType) 设置<p>云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云</p>
 * @method integer getAIStatus() 获取<p>告警AI分析状态<br>-1 分析失败<br>0 未分析<br>1 分析中<br>2 分析成功，真实告警<br>3 分析成功，可疑告警</p>
 * @method void setAIStatus(integer $AIStatus) 设置<p>告警AI分析状态<br>-1 分析失败<br>0 未分析<br>1 分析中<br>2 分析成功，真实告警<br>3 分析成功，可疑告警</p>
 * @method integer getFirstAlarmTimestamp() 获取<p>首次告警时间戳（秒级）</p>
 * @method void setFirstAlarmTimestamp(integer $FirstAlarmTimestamp) 设置<p>首次告警时间戳（秒级）</p>
 * @method integer getLastAlarmTimestamp() 获取<p>最后告警时间戳（秒级）</p>
 * @method void setLastAlarmTimestamp(integer $LastAlarmTimestamp) 设置<p>最后告警时间戳（秒级）</p>
 * @method string getAIFailedReason() 获取<p>ai分析失败描述，未失败为空字符串</p>
 * @method void setAIFailedReason(string $AIFailedReason) 设置<p>ai分析失败描述，未失败为空字符串</p>
 */
class AccessKeyAlarm extends AbstractModel
{
    /**
     * @var string <p>告警名称</p>
     */
    public $Name;

    /**
     * @var integer <p>告警等级<br>0-无效 1-提示 2-低危 3-中危 4-高危 5-严重</p>
     */
    public $Level;

    /**
     * @var integer <p>告警记录ID</p>
     */
    public $ID;

    /**
     * @var integer <p>告警规则ID</p>
     */
    public $AlarmRuleID;

    /**
     * @var integer <p>告警类型<br>0 异常调用<br>1 泄漏监测</p>
     */
    public $AlarmType;

    /**
     * @var string <p>访问密钥</p>
     */
    public $AccessKey;

    /**
     * @var integer <p>访问密钥ID</p>
     */
    public $AccessKeyID;

    /**
     * @var string <p>访问密钥备注</p>
     */
    public $AccessKeyRemark;

    /**
     * @var string <p>最后告警时间</p>
     */
    public $LastAlarmTime;

    /**
     * @var integer <p>告警状态<br>0-未处理 1-已处理 2-已忽略</p>
     */
    public $Status;

    /**
     * @var string <p>聚合日期</p>
     */
    public $Date;

    /**
     * @var array <p>告警标签</p>
     */
    public $Tag;

    /**
     * @var string <p>所属主账号Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>所属主账号昵称</p>
     */
    public $Nickname;

    /**
     * @var string <p>所属子账号Uin</p>
     */
    public $SubUin;

    /**
     * @var string <p>所属子账号昵称</p>
     */
    public $SubNickname;

    /**
     * @var integer <p>账号类型<br>0 主账号AK 1 子账号AK 2 临时密钥</p>
     */
    public $Type;

    /**
     * @var integer <p>所属appid</p>
     */
    public $AppID;

    /**
     * @var array <p>泄漏证据</p>
     */
    public $LeakEvidence;

    /**
     * @var boolean <p>是否支持编辑信任账号</p>
     */
    public $IsSupportEditWhiteAccount;

    /**
     * @var string <p>告警证据</p>
     */
    public $Evidence;

    /**
     * @var string <p>告警规则标识</p>
     */
    public $RuleKey;

    /**
     * @var integer <p>云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云</p>
     */
    public $CloudType;

    /**
     * @var integer <p>告警AI分析状态<br>-1 分析失败<br>0 未分析<br>1 分析中<br>2 分析成功，真实告警<br>3 分析成功，可疑告警</p>
     */
    public $AIStatus;

    /**
     * @var integer <p>首次告警时间戳（秒级）</p>
     */
    public $FirstAlarmTimestamp;

    /**
     * @var integer <p>最后告警时间戳（秒级）</p>
     */
    public $LastAlarmTimestamp;

    /**
     * @var string <p>ai分析失败描述，未失败为空字符串</p>
     */
    public $AIFailedReason;

    /**
     * @param string $Name <p>告警名称</p>
     * @param integer $Level <p>告警等级<br>0-无效 1-提示 2-低危 3-中危 4-高危 5-严重</p>
     * @param integer $ID <p>告警记录ID</p>
     * @param integer $AlarmRuleID <p>告警规则ID</p>
     * @param integer $AlarmType <p>告警类型<br>0 异常调用<br>1 泄漏监测</p>
     * @param string $AccessKey <p>访问密钥</p>
     * @param integer $AccessKeyID <p>访问密钥ID</p>
     * @param string $AccessKeyRemark <p>访问密钥备注</p>
     * @param string $LastAlarmTime <p>最后告警时间</p>
     * @param integer $Status <p>告警状态<br>0-未处理 1-已处理 2-已忽略</p>
     * @param string $Date <p>聚合日期</p>
     * @param array $Tag <p>告警标签</p>
     * @param string $Uin <p>所属主账号Uin</p>
     * @param string $Nickname <p>所属主账号昵称</p>
     * @param string $SubUin <p>所属子账号Uin</p>
     * @param string $SubNickname <p>所属子账号昵称</p>
     * @param integer $Type <p>账号类型<br>0 主账号AK 1 子账号AK 2 临时密钥</p>
     * @param integer $AppID <p>所属appid</p>
     * @param array $LeakEvidence <p>泄漏证据</p>
     * @param boolean $IsSupportEditWhiteAccount <p>是否支持编辑信任账号</p>
     * @param string $Evidence <p>告警证据</p>
     * @param string $RuleKey <p>告警规则标识</p>
     * @param integer $CloudType <p>云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云</p>
     * @param integer $AIStatus <p>告警AI分析状态<br>-1 分析失败<br>0 未分析<br>1 分析中<br>2 分析成功，真实告警<br>3 分析成功，可疑告警</p>
     * @param integer $FirstAlarmTimestamp <p>首次告警时间戳（秒级）</p>
     * @param integer $LastAlarmTimestamp <p>最后告警时间戳（秒级）</p>
     * @param string $AIFailedReason <p>ai分析失败描述，未失败为空字符串</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AlarmRuleID",$param) and $param["AlarmRuleID"] !== null) {
            $this->AlarmRuleID = $param["AlarmRuleID"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AccessKeyID",$param) and $param["AccessKeyID"] !== null) {
            $this->AccessKeyID = $param["AccessKeyID"];
        }

        if (array_key_exists("AccessKeyRemark",$param) and $param["AccessKeyRemark"] !== null) {
            $this->AccessKeyRemark = $param["AccessKeyRemark"];
        }

        if (array_key_exists("LastAlarmTime",$param) and $param["LastAlarmTime"] !== null) {
            $this->LastAlarmTime = $param["LastAlarmTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubNickname",$param) and $param["SubNickname"] !== null) {
            $this->SubNickname = $param["SubNickname"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("LeakEvidence",$param) and $param["LeakEvidence"] !== null) {
            $this->LeakEvidence = $param["LeakEvidence"];
        }

        if (array_key_exists("IsSupportEditWhiteAccount",$param) and $param["IsSupportEditWhiteAccount"] !== null) {
            $this->IsSupportEditWhiteAccount = $param["IsSupportEditWhiteAccount"];
        }

        if (array_key_exists("Evidence",$param) and $param["Evidence"] !== null) {
            $this->Evidence = $param["Evidence"];
        }

        if (array_key_exists("RuleKey",$param) and $param["RuleKey"] !== null) {
            $this->RuleKey = $param["RuleKey"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("AIStatus",$param) and $param["AIStatus"] !== null) {
            $this->AIStatus = $param["AIStatus"];
        }

        if (array_key_exists("FirstAlarmTimestamp",$param) and $param["FirstAlarmTimestamp"] !== null) {
            $this->FirstAlarmTimestamp = $param["FirstAlarmTimestamp"];
        }

        if (array_key_exists("LastAlarmTimestamp",$param) and $param["LastAlarmTimestamp"] !== null) {
            $this->LastAlarmTimestamp = $param["LastAlarmTimestamp"];
        }

        if (array_key_exists("AIFailedReason",$param) and $param["AIFailedReason"] !== null) {
            $this->AIFailedReason = $param["AIFailedReason"];
        }
    }
}
