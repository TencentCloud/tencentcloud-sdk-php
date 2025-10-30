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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例审计详情信息
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getAuditStatus() 获取审计状态。ON-表示审计已开启，OFF-表示审计关闭
 * @method void setAuditStatus(string $AuditStatus) 设置审计状态。ON-表示审计已开启，OFF-表示审计关闭
 * @method integer getAuditTask() 获取任务状态。0-无任务；1-审计开启中，2-审计关闭中。
 * @method void setAuditTask(integer $AuditTask) 设置任务状态。0-无任务；1-审计开启中，2-审计关闭中。
 * @method integer getLogExpireDay() 获取日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method integer getHighLogExpireDay() 获取高频存储时长。支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置高频存储时长。支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method integer getLowLogExpireDay() 获取低频存储时长。单位：天，等于日志保存时长减去高频存储时长。
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) 设置低频存储时长。单位：天，等于日志保存时长减去高频存储时长。
 * @method float getBillingAmount() 获取日志存储量(单位：GB)。
 * @method void setBillingAmount(float $BillingAmount) 设置日志存储量(单位：GB)。
 * @method float getHighRealStorage() 获取高频存储量(单位：GB)。
 * @method void setHighRealStorage(float $HighRealStorage) 设置高频存储量(单位：GB)。
 * @method float getLowRealStorage() 获取低频存储量(单位：GB)。
 * @method void setLowRealStorage(float $LowRealStorage) 设置低频存储量(单位：GB)。
 * @method boolean getAuditAll() 获取是否为全审计。true-表示全审计。
 * @method void setAuditAll(boolean $AuditAll) 设置是否为全审计。true-表示全审计。
 * @method string getCreateAt() 获取审计开通时间。
 * @method void setCreateAt(string $CreateAt) 设置审计开通时间。
 * @method AuditInstanceInfo getInstanceInfo() 获取实例相关信息
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) 设置实例相关信息
 * @method float getRealStorage() 获取总存储量(单位：GB)。
 * @method void setRealStorage(float $RealStorage) 设置总存储量(单位：GB)。
 * @method boolean getOldRule() 获取是否包含审计策略
 * @method void setOldRule(boolean $OldRule) 设置是否包含审计策略
 * @method array getRuleTemplateIds() 获取实例所应用的规则模板。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置实例所应用的规则模板。
 * @method string getTrialStatus() 获取限免状态
 * @method void setTrialStatus(string $TrialStatus) 设置限免状态
 * @method integer getTrialStartTime() 获取限免开启时间
 * @method void setTrialStartTime(integer $TrialStartTime) 设置限免开启时间
 * @method integer getTrialDuration() 获取限免持续时间
 * @method void setTrialDuration(integer $TrialDuration) 设置限免持续时间
 * @method integer getTrialCloseTime() 获取限免关闭时间
 * @method void setTrialCloseTime(integer $TrialCloseTime) 设置限免关闭时间
 * @method integer getTrialDescribeLogHours() 获取限免期查询日志时长
 * @method void setTrialDescribeLogHours(integer $TrialDescribeLogHours) 设置限免期查询日志时长
 */
class InstanceDbAuditStatus extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 审计状态。ON-表示审计已开启，OFF-表示审计关闭
     */
    public $AuditStatus;

    /**
     * @var integer 任务状态。0-无任务；1-审计开启中，2-审计关闭中。
     */
    public $AuditTask;

    /**
     * @var integer 日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     */
    public $LogExpireDay;

    /**
     * @var integer 高频存储时长。支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     */
    public $HighLogExpireDay;

    /**
     * @var integer 低频存储时长。单位：天，等于日志保存时长减去高频存储时长。
     */
    public $LowLogExpireDay;

    /**
     * @var float 日志存储量(单位：GB)。
     */
    public $BillingAmount;

    /**
     * @var float 高频存储量(单位：GB)。
     */
    public $HighRealStorage;

    /**
     * @var float 低频存储量(单位：GB)。
     */
    public $LowRealStorage;

    /**
     * @var boolean 是否为全审计。true-表示全审计。
     */
    public $AuditAll;

    /**
     * @var string 审计开通时间。
     */
    public $CreateAt;

    /**
     * @var AuditInstanceInfo 实例相关信息
     */
    public $InstanceInfo;

    /**
     * @var float 总存储量(单位：GB)。
     */
    public $RealStorage;

    /**
     * @var boolean 是否包含审计策略
     */
    public $OldRule;

    /**
     * @var array 实例所应用的规则模板。
     */
    public $RuleTemplateIds;

    /**
     * @var string 限免状态
     */
    public $TrialStatus;

    /**
     * @var integer 限免开启时间
     */
    public $TrialStartTime;

    /**
     * @var integer 限免持续时间
     */
    public $TrialDuration;

    /**
     * @var integer 限免关闭时间
     */
    public $TrialCloseTime;

    /**
     * @var integer 限免期查询日志时长
     */
    public $TrialDescribeLogHours;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $AuditStatus 审计状态。ON-表示审计已开启，OFF-表示审计关闭
     * @param integer $AuditTask 任务状态。0-无任务；1-审计开启中，2-审计关闭中。
     * @param integer $LogExpireDay 日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     * @param integer $HighLogExpireDay 高频存储时长。支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     * @param integer $LowLogExpireDay 低频存储时长。单位：天，等于日志保存时长减去高频存储时长。
     * @param float $BillingAmount 日志存储量(单位：GB)。
     * @param float $HighRealStorage 高频存储量(单位：GB)。
     * @param float $LowRealStorage 低频存储量(单位：GB)。
     * @param boolean $AuditAll 是否为全审计。true-表示全审计。
     * @param string $CreateAt 审计开通时间。
     * @param AuditInstanceInfo $InstanceInfo 实例相关信息
     * @param float $RealStorage 总存储量(单位：GB)。
     * @param boolean $OldRule 是否包含审计策略
     * @param array $RuleTemplateIds 实例所应用的规则模板。
     * @param string $TrialStatus 限免状态
     * @param integer $TrialStartTime 限免开启时间
     * @param integer $TrialDuration 限免持续时间
     * @param integer $TrialCloseTime 限免关闭时间
     * @param integer $TrialDescribeLogHours 限免期查询日志时长
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuditTask",$param) and $param["AuditTask"] !== null) {
            $this->AuditTask = $param["AuditTask"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("LowLogExpireDay",$param) and $param["LowLogExpireDay"] !== null) {
            $this->LowLogExpireDay = $param["LowLogExpireDay"];
        }

        if (array_key_exists("BillingAmount",$param) and $param["BillingAmount"] !== null) {
            $this->BillingAmount = $param["BillingAmount"];
        }

        if (array_key_exists("HighRealStorage",$param) and $param["HighRealStorage"] !== null) {
            $this->HighRealStorage = $param["HighRealStorage"];
        }

        if (array_key_exists("LowRealStorage",$param) and $param["LowRealStorage"] !== null) {
            $this->LowRealStorage = $param["LowRealStorage"];
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new AuditInstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("RealStorage",$param) and $param["RealStorage"] !== null) {
            $this->RealStorage = $param["RealStorage"];
        }

        if (array_key_exists("OldRule",$param) and $param["OldRule"] !== null) {
            $this->OldRule = $param["OldRule"];
        }

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("TrialStatus",$param) and $param["TrialStatus"] !== null) {
            $this->TrialStatus = $param["TrialStatus"];
        }

        if (array_key_exists("TrialStartTime",$param) and $param["TrialStartTime"] !== null) {
            $this->TrialStartTime = $param["TrialStartTime"];
        }

        if (array_key_exists("TrialDuration",$param) and $param["TrialDuration"] !== null) {
            $this->TrialDuration = $param["TrialDuration"];
        }

        if (array_key_exists("TrialCloseTime",$param) and $param["TrialCloseTime"] !== null) {
            $this->TrialCloseTime = $param["TrialCloseTime"];
        }

        if (array_key_exists("TrialDescribeLogHours",$param) and $param["TrialDescribeLogHours"] !== null) {
            $this->TrialDescribeLogHours = $param["TrialDescribeLogHours"];
        }
    }
}
