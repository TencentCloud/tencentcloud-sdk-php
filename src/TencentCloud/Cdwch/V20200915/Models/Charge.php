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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群计费相关信息

 *
 * @method string getChargeType() 获取计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
 * @method void setChargeType(string $ChargeType) 设置计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
 * @method integer getRenewFlag() 获取PREPAID需要传递，是否自动续费，1表示自动续费开启
 * @method void setRenewFlag(integer $RenewFlag) 设置PREPAID需要传递，是否自动续费，1表示自动续费开启
 * @method integer getTimeSpan() 获取预付费需要传递，计费时间长度，多少个月
 * @method void setTimeSpan(integer $TimeSpan) 设置预付费需要传递，计费时间长度，多少个月
 */
class Charge extends AbstractModel
{
    /**
     * @var string 计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
     */
    public $ChargeType;

    /**
     * @var integer PREPAID需要传递，是否自动续费，1表示自动续费开启
     */
    public $RenewFlag;

    /**
     * @var integer 预付费需要传递，计费时间长度，多少个月
     */
    public $TimeSpan;

    /**
     * @param string $ChargeType 计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
     * @param integer $RenewFlag PREPAID需要传递，是否自动续费，1表示自动续费开启
     * @param integer $TimeSpan 预付费需要传递，计费时间长度，多少个月
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
