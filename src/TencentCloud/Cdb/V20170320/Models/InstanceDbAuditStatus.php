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
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getAuditStatus() 获取<p>审计状态。ON-表示审计已开启，OFF-表示审计关闭</p>
 * @method void setAuditStatus(string $AuditStatus) 设置<p>审计状态。ON-表示审计已开启，OFF-表示审计关闭</p>
 * @method integer getAuditTask() 获取<p>任务状态。0-无任务；1-审计开启中，2-审计关闭中。</p>
 * @method void setAuditTask(integer $AuditTask) 设置<p>任务状态。0-无任务；1-审计开启中，2-审计关闭中。</p>
 * @method integer getLogExpireDay() 获取<p>日志保留时长。支持值包括：<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>日志保留时长。支持值包括：<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
 * @method integer getHighLogExpireDay() 获取<p>高频存储时长。支持值包括：<br>3 - 3天；<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置<p>高频存储时长。支持值包括：<br>3 - 3天；<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
 * @method integer getLowLogExpireDay() 获取<p>低频存储时长。单位：天，等于日志保存时长减去高频存储时长。</p>
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) 设置<p>低频存储时长。单位：天，等于日志保存时长减去高频存储时长。</p>
 * @method float getBillingAmount() 获取<p>日志存储量(单位：GB)。</p>
 * @method void setBillingAmount(float $BillingAmount) 设置<p>日志存储量(单位：GB)。</p>
 * @method float getHighRealStorage() 获取<p>高频存储量(单位：GB)。</p>
 * @method void setHighRealStorage(float $HighRealStorage) 设置<p>高频存储量(单位：GB)。</p>
 * @method float getLowRealStorage() 获取<p>低频存储量(单位：GB)。</p>
 * @method void setLowRealStorage(float $LowRealStorage) 设置<p>低频存储量(单位：GB)。</p>
 * @method boolean getAuditAll() 获取<p>是否为全审计（true-表示全审计）</p>
 * @method void setAuditAll(boolean $AuditAll) 设置<p>是否为全审计（true-表示全审计）</p>
 * @method string getCreateAt() 获取<p>审计开通时间。</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>审计开通时间。</p>
 * @method AuditInstanceInfo getInstanceInfo() 获取<p>实例相关信息</p>
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) 设置<p>实例相关信息</p>
 * @method float getRealStorage() 获取<p>总存储量(单位：GB)。</p>
 * @method void setRealStorage(float $RealStorage) 设置<p>总存储量(单位：GB)。</p>
 * @method boolean getOldRule() 获取<p>是否包含审计策略</p>
 * @method void setOldRule(boolean $OldRule) 设置<p>是否包含审计策略</p>
 * @method array getRuleTemplateIds() 获取<p>实例所应用的规则模板。</p>
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置<p>实例所应用的规则模板。</p>
 * @method string getTrialStatus() 获取<p>限免状态</p>
 * @method void setTrialStatus(string $TrialStatus) 设置<p>限免状态</p>
 * @method integer getTrialStartTime() 获取<p>限免开启时间</p>
 * @method void setTrialStartTime(integer $TrialStartTime) 设置<p>限免开启时间</p>
 * @method integer getTrialDuration() 获取<p>限免持续时间</p>
 * @method void setTrialDuration(integer $TrialDuration) 设置<p>限免持续时间</p>
 * @method integer getTrialCloseTime() 获取<p>限免关闭时间</p>
 * @method void setTrialCloseTime(integer $TrialCloseTime) 设置<p>限免关闭时间</p>
 * @method integer getTrialDescribeLogHours() 获取<p>限免期查询日志时长</p>
 * @method void setTrialDescribeLogHours(integer $TrialDescribeLogHours) 设置<p>限免期查询日志时长</p>
 * @method array getDeliverSummary() 获取<p>投递信息</p>
 * @method void setDeliverSummary(array $DeliverSummary) 设置<p>投递信息</p>
 * @method string getDeliver() 获取<p>是否开启了投递，ON：开启，OFF：关闭</p>
 * @method void setDeliver(string $Deliver) 设置<p>是否开启了投递，ON：开启，OFF：关闭</p>
 */
class InstanceDbAuditStatus extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>审计状态。ON-表示审计已开启，OFF-表示审计关闭</p>
     */
    public $AuditStatus;

    /**
     * @var integer <p>任务状态。0-无任务；1-审计开启中，2-审计关闭中。</p>
     */
    public $AuditTask;

    /**
     * @var integer <p>日志保留时长。支持值包括：<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>高频存储时长。支持值包括：<br>3 - 3天；<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
     */
    public $HighLogExpireDay;

    /**
     * @var integer <p>低频存储时长。单位：天，等于日志保存时长减去高频存储时长。</p>
     */
    public $LowLogExpireDay;

    /**
     * @var float <p>日志存储量(单位：GB)。</p>
     */
    public $BillingAmount;

    /**
     * @var float <p>高频存储量(单位：GB)。</p>
     */
    public $HighRealStorage;

    /**
     * @var float <p>低频存储量(单位：GB)。</p>
     */
    public $LowRealStorage;

    /**
     * @var boolean <p>是否为全审计（true-表示全审计）</p>
     */
    public $AuditAll;

    /**
     * @var string <p>审计开通时间。</p>
     */
    public $CreateAt;

    /**
     * @var AuditInstanceInfo <p>实例相关信息</p>
     */
    public $InstanceInfo;

    /**
     * @var float <p>总存储量(单位：GB)。</p>
     */
    public $RealStorage;

    /**
     * @var boolean <p>是否包含审计策略</p>
     */
    public $OldRule;

    /**
     * @var array <p>实例所应用的规则模板。</p>
     */
    public $RuleTemplateIds;

    /**
     * @var string <p>限免状态</p>
     */
    public $TrialStatus;

    /**
     * @var integer <p>限免开启时间</p>
     */
    public $TrialStartTime;

    /**
     * @var integer <p>限免持续时间</p>
     */
    public $TrialDuration;

    /**
     * @var integer <p>限免关闭时间</p>
     */
    public $TrialCloseTime;

    /**
     * @var integer <p>限免期查询日志时长</p>
     */
    public $TrialDescribeLogHours;

    /**
     * @var array <p>投递信息</p>
     */
    public $DeliverSummary;

    /**
     * @var string <p>是否开启了投递，ON：开启，OFF：关闭</p>
     */
    public $Deliver;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $AuditStatus <p>审计状态。ON-表示审计已开启，OFF-表示审计关闭</p>
     * @param integer $AuditTask <p>任务状态。0-无任务；1-审计开启中，2-审计关闭中。</p>
     * @param integer $LogExpireDay <p>日志保留时长。支持值包括：<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
     * @param integer $HighLogExpireDay <p>高频存储时长。支持值包括：<br>3 - 3天；<br>7 - 一周；<br>30 - 一个月；<br>90 - 三个月；<br>180 - 六个月；<br>365 - 一年；<br>1095 - 三年；<br>1825 - 五年。</p>
     * @param integer $LowLogExpireDay <p>低频存储时长。单位：天，等于日志保存时长减去高频存储时长。</p>
     * @param float $BillingAmount <p>日志存储量(单位：GB)。</p>
     * @param float $HighRealStorage <p>高频存储量(单位：GB)。</p>
     * @param float $LowRealStorage <p>低频存储量(单位：GB)。</p>
     * @param boolean $AuditAll <p>是否为全审计（true-表示全审计）</p>
     * @param string $CreateAt <p>审计开通时间。</p>
     * @param AuditInstanceInfo $InstanceInfo <p>实例相关信息</p>
     * @param float $RealStorage <p>总存储量(单位：GB)。</p>
     * @param boolean $OldRule <p>是否包含审计策略</p>
     * @param array $RuleTemplateIds <p>实例所应用的规则模板。</p>
     * @param string $TrialStatus <p>限免状态</p>
     * @param integer $TrialStartTime <p>限免开启时间</p>
     * @param integer $TrialDuration <p>限免持续时间</p>
     * @param integer $TrialCloseTime <p>限免关闭时间</p>
     * @param integer $TrialDescribeLogHours <p>限免期查询日志时长</p>
     * @param array $DeliverSummary <p>投递信息</p>
     * @param string $Deliver <p>是否开启了投递，ON：开启，OFF：关闭</p>
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

        if (array_key_exists("DeliverSummary",$param) and $param["DeliverSummary"] !== null) {
            $this->DeliverSummary = [];
            foreach ($param["DeliverSummary"] as $key => $value){
                $obj = new DeliverSummary();
                $obj->deserialize($value);
                array_push($this->DeliverSummary, $obj);
            }
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }
    }
}
