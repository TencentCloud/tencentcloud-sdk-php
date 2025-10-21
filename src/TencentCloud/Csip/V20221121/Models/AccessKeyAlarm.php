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
 * @method string getName() 获取告警名称
 * @method void setName(string $Name) 设置告警名称
 * @method integer getLevel() 获取告警等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
 * @method void setLevel(integer $Level) 设置告警等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
 * @method integer getID() 获取告警记录ID
 * @method void setID(integer $ID) 设置告警记录ID
 * @method integer getAlarmRuleID() 获取告警规则ID
 * @method void setAlarmRuleID(integer $AlarmRuleID) 设置告警规则ID
 * @method integer getAlarmType() 获取告警类型
0 异常调用
1 泄漏监测
 * @method void setAlarmType(integer $AlarmType) 设置告警类型
0 异常调用
1 泄漏监测
 * @method string getAccessKey() 获取访问密钥
 * @method void setAccessKey(string $AccessKey) 设置访问密钥
 * @method integer getAccessKeyID() 获取访问密钥ID
 * @method void setAccessKeyID(integer $AccessKeyID) 设置访问密钥ID
 * @method string getAccessKeyRemark() 获取访问密钥备注
 * @method void setAccessKeyRemark(string $AccessKeyRemark) 设置访问密钥备注
 * @method string getLastAlarmTime() 获取最后告警时间
 * @method void setLastAlarmTime(string $LastAlarmTime) 设置最后告警时间
 * @method integer getStatus() 获取告警状态
0-未处理 1-已处理 2-已忽略
 * @method void setStatus(integer $Status) 设置告警状态
0-未处理 1-已处理 2-已忽略
 * @method string getDate() 获取聚合日期
 * @method void setDate(string $Date) 设置聚合日期
 * @method array getTag() 获取告警标签
 * @method void setTag(array $Tag) 设置告警标签
 * @method string getUin() 获取所属主账号Uin
 * @method void setUin(string $Uin) 设置所属主账号Uin
 * @method string getNickname() 获取所属主账号昵称
 * @method void setNickname(string $Nickname) 设置所属主账号昵称
 * @method string getSubUin() 获取所属子账号Uin
 * @method void setSubUin(string $SubUin) 设置所属子账号Uin
 * @method string getSubNickname() 获取所属子账号昵称
 * @method void setSubNickname(string $SubNickname) 设置所属子账号昵称
 * @method integer getType() 获取账号类型
0 主账号AK 1 子账号AK 2 临时密钥
 * @method void setType(integer $Type) 设置账号类型
0 主账号AK 1 子账号AK 2 临时密钥
 * @method integer getAppID() 获取所属appid
 * @method void setAppID(integer $AppID) 设置所属appid
 * @method array getLeakEvidence() 获取泄漏证据
 * @method void setLeakEvidence(array $LeakEvidence) 设置泄漏证据
 * @method boolean getIsSupportEditWhiteAccount() 获取是否支持编辑信任账号
 * @method void setIsSupportEditWhiteAccount(boolean $IsSupportEditWhiteAccount) 设置是否支持编辑信任账号
 * @method string getEvidence() 获取告警证据
 * @method void setEvidence(string $Evidence) 设置告警证据
 * @method string getRuleKey() 获取告警规则标识
 * @method void setRuleKey(string $RuleKey) 设置告警规则标识
 * @method integer getCloudType() 获取云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
 * @method void setCloudType(integer $CloudType) 设置云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
 */
class AccessKeyAlarm extends AbstractModel
{
    /**
     * @var string 告警名称
     */
    public $Name;

    /**
     * @var integer 告警等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
     */
    public $Level;

    /**
     * @var integer 告警记录ID
     */
    public $ID;

    /**
     * @var integer 告警规则ID
     */
    public $AlarmRuleID;

    /**
     * @var integer 告警类型
0 异常调用
1 泄漏监测
     */
    public $AlarmType;

    /**
     * @var string 访问密钥
     */
    public $AccessKey;

    /**
     * @var integer 访问密钥ID
     */
    public $AccessKeyID;

    /**
     * @var string 访问密钥备注
     */
    public $AccessKeyRemark;

    /**
     * @var string 最后告警时间
     */
    public $LastAlarmTime;

    /**
     * @var integer 告警状态
0-未处理 1-已处理 2-已忽略
     */
    public $Status;

    /**
     * @var string 聚合日期
     */
    public $Date;

    /**
     * @var array 告警标签
     */
    public $Tag;

    /**
     * @var string 所属主账号Uin
     */
    public $Uin;

    /**
     * @var string 所属主账号昵称
     */
    public $Nickname;

    /**
     * @var string 所属子账号Uin
     */
    public $SubUin;

    /**
     * @var string 所属子账号昵称
     */
    public $SubNickname;

    /**
     * @var integer 账号类型
0 主账号AK 1 子账号AK 2 临时密钥
     */
    public $Type;

    /**
     * @var integer 所属appid
     */
    public $AppID;

    /**
     * @var array 泄漏证据
     */
    public $LeakEvidence;

    /**
     * @var boolean 是否支持编辑信任账号
     */
    public $IsSupportEditWhiteAccount;

    /**
     * @var string 告警证据
     */
    public $Evidence;

    /**
     * @var string 告警规则标识
     */
    public $RuleKey;

    /**
     * @var integer 云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
     */
    public $CloudType;

    /**
     * @param string $Name 告警名称
     * @param integer $Level 告警等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
     * @param integer $ID 告警记录ID
     * @param integer $AlarmRuleID 告警规则ID
     * @param integer $AlarmType 告警类型
0 异常调用
1 泄漏监测
     * @param string $AccessKey 访问密钥
     * @param integer $AccessKeyID 访问密钥ID
     * @param string $AccessKeyRemark 访问密钥备注
     * @param string $LastAlarmTime 最后告警时间
     * @param integer $Status 告警状态
0-未处理 1-已处理 2-已忽略
     * @param string $Date 聚合日期
     * @param array $Tag 告警标签
     * @param string $Uin 所属主账号Uin
     * @param string $Nickname 所属主账号昵称
     * @param string $SubUin 所属子账号Uin
     * @param string $SubNickname 所属子账号昵称
     * @param integer $Type 账号类型
0 主账号AK 1 子账号AK 2 临时密钥
     * @param integer $AppID 所属appid
     * @param array $LeakEvidence 泄漏证据
     * @param boolean $IsSupportEditWhiteAccount 是否支持编辑信任账号
     * @param string $Evidence 告警证据
     * @param string $RuleKey 告警规则标识
     * @param integer $CloudType 云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
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
    }
}
