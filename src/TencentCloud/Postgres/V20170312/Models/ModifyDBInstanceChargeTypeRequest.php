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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceChargeType请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-6fego161
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-6fego161
 * @method string getInstanceChargeType() 获取实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。默认值：PREPAID。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。默认值：PREPAID。
 * @method integer getPeriod() 获取购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method integer getAutoRenewFlag() 获取续费标记：0-正常续费（默认）；1-自动续费。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费标记：0-正常续费（默认）；1-自动续费。
 * @method integer getAutoVoucher() 获取是否自动使用代金券,1是,0否，默认不使用
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券,1是,0否，默认不使用
 */
class ModifyDBInstanceChargeTypeRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-6fego161
     */
    public $DBInstanceId;

    /**
     * @var string 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。默认值：PREPAID。
     */
    public $InstanceChargeType;

    /**
     * @var integer 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     */
    public $Period;

    /**
     * @var integer 续费标记：0-正常续费（默认）；1-自动续费。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否自动使用代金券,1是,0否，默认不使用
     */
    public $AutoVoucher;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-6fego161
     * @param string $InstanceChargeType 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。默认值：PREPAID。
     * @param integer $Period 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     * @param integer $AutoRenewFlag 续费标记：0-正常续费（默认）；1-自动续费。
     * @param integer $AutoVoucher 是否自动使用代金券,1是,0否，默认不使用
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
