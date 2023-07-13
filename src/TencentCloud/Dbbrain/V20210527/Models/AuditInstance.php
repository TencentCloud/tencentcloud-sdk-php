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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详细信息
 *
 * @method string getAuditStatus() 获取审计状态，已开通审计为：YES，未开通审计为：ON。
 * @method void setAuditStatus(string $AuditStatus) 设置审计状态，已开通审计为：YES，未开通审计为：ON。
 * @method integer getBillingAmount() 获取审计日志大小，为兼容老版本用。
 * @method void setBillingAmount(integer $BillingAmount) 设置审计日志大小，为兼容老版本用。
 * @method integer getBillingConfirmed() 获取计费确认状态，0-未确认；1-已确认。
 * @method void setBillingConfirmed(integer $BillingConfirmed) 设置计费确认状态，0-未确认；1-已确认。
 * @method integer getColdLogExpireDay() 获取低频存储时长。
 * @method void setColdLogExpireDay(integer $ColdLogExpireDay) 设置低频存储时长。
 * @method integer getColdLogSize() 获取低频日志存储量单位MB。
 * @method void setColdLogSize(integer $ColdLogSize) 设置低频日志存储量单位MB。
 * @method integer getHotLogExpireDay() 获取高频日志存储天数。
 * @method void setHotLogExpireDay(integer $HotLogExpireDay) 设置高频日志存储天数。
 * @method integer getHotLogSize() 获取高频日志存储量，单位MB。
 * @method void setHotLogSize(integer $HotLogSize) 设置高频日志存储量，单位MB。
 * @method string getInstanceId() 获取实例Id。
 * @method void setInstanceId(string $InstanceId) 设置实例Id。
 * @method integer getLogExpireDay() 获取日志保存总天数，为高频存储时长+低频存储时长。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置日志保存总天数，为高频存储时长+低频存储时长。
 * @method string getCreateTime() 获取实例创建时间。
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间。
 * @method AuditInstanceInfo getInstanceInfo() 获取实例详细信息。
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) 设置实例详细信息。
 */
class AuditInstance extends AbstractModel
{
    /**
     * @var string 审计状态，已开通审计为：YES，未开通审计为：ON。
     */
    public $AuditStatus;

    /**
     * @var integer 审计日志大小，为兼容老版本用。
     */
    public $BillingAmount;

    /**
     * @var integer 计费确认状态，0-未确认；1-已确认。
     */
    public $BillingConfirmed;

    /**
     * @var integer 低频存储时长。
     */
    public $ColdLogExpireDay;

    /**
     * @var integer 低频日志存储量单位MB。
     */
    public $ColdLogSize;

    /**
     * @var integer 高频日志存储天数。
     */
    public $HotLogExpireDay;

    /**
     * @var integer 高频日志存储量，单位MB。
     */
    public $HotLogSize;

    /**
     * @var string 实例Id。
     */
    public $InstanceId;

    /**
     * @var integer 日志保存总天数，为高频存储时长+低频存储时长。
     */
    public $LogExpireDay;

    /**
     * @var string 实例创建时间。
     */
    public $CreateTime;

    /**
     * @var AuditInstanceInfo 实例详细信息。
     */
    public $InstanceInfo;

    /**
     * @param string $AuditStatus 审计状态，已开通审计为：YES，未开通审计为：ON。
     * @param integer $BillingAmount 审计日志大小，为兼容老版本用。
     * @param integer $BillingConfirmed 计费确认状态，0-未确认；1-已确认。
     * @param integer $ColdLogExpireDay 低频存储时长。
     * @param integer $ColdLogSize 低频日志存储量单位MB。
     * @param integer $HotLogExpireDay 高频日志存储天数。
     * @param integer $HotLogSize 高频日志存储量，单位MB。
     * @param string $InstanceId 实例Id。
     * @param integer $LogExpireDay 日志保存总天数，为高频存储时长+低频存储时长。
     * @param string $CreateTime 实例创建时间。
     * @param AuditInstanceInfo $InstanceInfo 实例详细信息。
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
        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("BillingAmount",$param) and $param["BillingAmount"] !== null) {
            $this->BillingAmount = $param["BillingAmount"];
        }

        if (array_key_exists("BillingConfirmed",$param) and $param["BillingConfirmed"] !== null) {
            $this->BillingConfirmed = $param["BillingConfirmed"];
        }

        if (array_key_exists("ColdLogExpireDay",$param) and $param["ColdLogExpireDay"] !== null) {
            $this->ColdLogExpireDay = $param["ColdLogExpireDay"];
        }

        if (array_key_exists("ColdLogSize",$param) and $param["ColdLogSize"] !== null) {
            $this->ColdLogSize = $param["ColdLogSize"];
        }

        if (array_key_exists("HotLogExpireDay",$param) and $param["HotLogExpireDay"] !== null) {
            $this->HotLogExpireDay = $param["HotLogExpireDay"];
        }

        if (array_key_exists("HotLogSize",$param) and $param["HotLogSize"] !== null) {
            $this->HotLogSize = $param["HotLogSize"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new AuditInstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }
    }
}
