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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例审计详情信息
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getAuditStatus() 获取审计状态。ON-表示审计已开启，OFF-表示审计关闭。
 * @method void setAuditStatus(string $AuditStatus) 设置审计状态。ON-表示审计已开启，OFF-表示审计关闭。
 * @method integer getLogExpireDay() 获取日志保留时长。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置日志保留时长。
 * @method integer getHighLogExpireDay() 获取高频存储时长。
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置高频存储时长。
 * @method integer getLowLogExpireDay() 获取低频存储时长。
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) 设置低频存储时长。
 * @method float getBillingAmount() 获取日志存储量。
 * @method void setBillingAmount(float $BillingAmount) 设置日志存储量。
 * @method float getHighRealStorage() 获取高频存储量。
 * @method void setHighRealStorage(float $HighRealStorage) 设置高频存储量。
 * @method float getLowRealStorage() 获取低频存储量。
 * @method void setLowRealStorage(float $LowRealStorage) 设置低频存储量。
 * @method boolean getAuditAll() 获取是否为全审计。true-表示全审计。
 * @method void setAuditAll(boolean $AuditAll) 设置是否为全审计。true-表示全审计。
 * @method string getCreateAt() 获取审计开通时间。
 * @method void setCreateAt(string $CreateAt) 设置审计开通时间。
 * @method AuditInstanceInfo getInstanceInfo() 获取实例相关信息。
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) 设置实例相关信息。
 * @method float getRealStorage() 获取总存储量。
 * @method void setRealStorage(float $RealStorage) 设置总存储量。
 * @method array getRuleTemplateIds() 获取实例所应用的规则模板。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置实例所应用的规则模板。
 * @method string getDeliver() 获取是否开启日志投递：ON，OFF
 * @method void setDeliver(string $Deliver) 设置是否开启日志投递：ON，OFF
 * @method array getDeliverSummary() 获取日志投递类型
 * @method void setDeliverSummary(array $DeliverSummary) 设置日志投递类型
 */
class InstanceAuditStatus extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 审计状态。ON-表示审计已开启，OFF-表示审计关闭。
     */
    public $AuditStatus;

    /**
     * @var integer 日志保留时长。
     */
    public $LogExpireDay;

    /**
     * @var integer 高频存储时长。
     */
    public $HighLogExpireDay;

    /**
     * @var integer 低频存储时长。
     */
    public $LowLogExpireDay;

    /**
     * @var float 日志存储量。
     */
    public $BillingAmount;

    /**
     * @var float 高频存储量。
     */
    public $HighRealStorage;

    /**
     * @var float 低频存储量。
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
     * @var AuditInstanceInfo 实例相关信息。
     */
    public $InstanceInfo;

    /**
     * @var float 总存储量。
     */
    public $RealStorage;

    /**
     * @var array 实例所应用的规则模板。
     */
    public $RuleTemplateIds;

    /**
     * @var string 是否开启日志投递：ON，OFF
     */
    public $Deliver;

    /**
     * @var array 日志投递类型
     */
    public $DeliverSummary;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $AuditStatus 审计状态。ON-表示审计已开启，OFF-表示审计关闭。
     * @param integer $LogExpireDay 日志保留时长。
     * @param integer $HighLogExpireDay 高频存储时长。
     * @param integer $LowLogExpireDay 低频存储时长。
     * @param float $BillingAmount 日志存储量。
     * @param float $HighRealStorage 高频存储量。
     * @param float $LowRealStorage 低频存储量。
     * @param boolean $AuditAll 是否为全审计。true-表示全审计。
     * @param string $CreateAt 审计开通时间。
     * @param AuditInstanceInfo $InstanceInfo 实例相关信息。
     * @param float $RealStorage 总存储量。
     * @param array $RuleTemplateIds 实例所应用的规则模板。
     * @param string $Deliver 是否开启日志投递：ON，OFF
     * @param array $DeliverSummary 日志投递类型
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

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }

        if (array_key_exists("DeliverSummary",$param) and $param["DeliverSummary"] !== null) {
            $this->DeliverSummary = [];
            foreach ($param["DeliverSummary"] as $key => $value){
                $obj = new DeliverSummary();
                $obj->deserialize($value);
                array_push($this->DeliverSummary, $obj);
            }
        }
    }
}
