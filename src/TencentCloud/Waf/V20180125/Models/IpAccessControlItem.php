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
 * ip黑白名单
 *
 * @method string getId() 获取mongo表自增Id
 * @method void setId(string $Id) 设置mongo表自增Id
 * @method integer getActionType() 获取动作
 * @method void setActionType(integer $ActionType) 设置动作
 * @method string getIp() 获取ip
 * @method void setIp(string $Ip) 设置ip
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method integer getTsVersion() 获取更新时间戳
 * @method void setTsVersion(integer $TsVersion) 设置更新时间戳
 * @method integer getValidTs() 获取有效截止时间戳
 * @method void setValidTs(integer $ValidTs) 设置有效截止时间戳
 * @method integer getValidStatus() 获取生效状态
 * @method void setValidStatus(integer $ValidStatus) 设置生效状态
 * @method integer getRuleId() 获取55000001
 * @method void setRuleId(integer $RuleId) 设置55000001
 * @method array getIpList() 获取IP列表
 * @method void setIpList(array $IpList) 设置IP列表
 * @method integer getCreateTime() 获取规则创建时间
 * @method void setCreateTime(integer $CreateTime) 设置规则创建时间
 * @method string getJobType() 获取定时任务类型
 * @method void setJobType(string $JobType) 设置定时任务类型
 * @method string getCronType() 获取周期任务类型
 * @method void setCronType(string $CronType) 设置周期任务类型
 * @method JobDateTime getJobDateTime() 获取定时任务配置详情
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置详情
 */
class IpAccessControlItem extends AbstractModel
{
    /**
     * @var string mongo表自增Id
     */
    public $Id;

    /**
     * @var integer 动作
     */
    public $ActionType;

    /**
     * @var string ip
     */
    public $Ip;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var integer 更新时间戳
     */
    public $TsVersion;

    /**
     * @var integer 有效截止时间戳
     */
    public $ValidTs;

    /**
     * @var integer 生效状态
     */
    public $ValidStatus;

    /**
     * @var integer 55000001
     */
    public $RuleId;

    /**
     * @var array IP列表
     */
    public $IpList;

    /**
     * @var integer 规则创建时间
     */
    public $CreateTime;

    /**
     * @var string 定时任务类型
     */
    public $JobType;

    /**
     * @var string 周期任务类型
     */
    public $CronType;

    /**
     * @var JobDateTime 定时任务配置详情
     */
    public $JobDateTime;

    /**
     * @param string $Id mongo表自增Id
     * @param integer $ActionType 动作
     * @param string $Ip ip
     * @param string $Note 备注
     * @param string $Source 来源
     * @param integer $TsVersion 更新时间戳
     * @param integer $ValidTs 有效截止时间戳
     * @param integer $ValidStatus 生效状态
     * @param integer $RuleId 55000001
     * @param array $IpList IP列表
     * @param integer $CreateTime 规则创建时间
     * @param string $JobType 定时任务类型
     * @param string $CronType 周期任务类型
     * @param JobDateTime $JobDateTime 定时任务配置详情
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("ValidTs",$param) and $param["ValidTs"] !== null) {
            $this->ValidTs = $param["ValidTs"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("CronType",$param) and $param["CronType"] !== null) {
            $this->CronType = $param["CronType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }
    }
}
