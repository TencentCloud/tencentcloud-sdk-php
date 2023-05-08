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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云硬盘包年包月相关参数设置
 *
 * @method integer getPeriod() 获取新购周期。
 * @method void setPeriod(integer $Period) 设置新购周期。
 * @method string getRenewFlag() 获取自动续费标识。取值范围：

NOTIFY_AND_AUTO_RENEW：通知过期且自动续费。
NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费，用户需要手动续费。
DISABLE_NOTIFY_AND_AUTO_RENEW：不自动续费，且不通知。

默认取值：NOTIFY_AND_MANUAL_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，云盘到期后将按月自动续费。
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：

NOTIFY_AND_AUTO_RENEW：通知过期且自动续费。
NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费，用户需要手动续费。
DISABLE_NOTIFY_AND_AUTO_RENEW：不自动续费，且不通知。

默认取值：NOTIFY_AND_MANUAL_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，云盘到期后将按月自动续费。
 * @method string getTimeUnit() 获取新购单位. 默认值: "m"。
 * @method void setTimeUnit(string $TimeUnit) 设置新购单位. 默认值: "m"。
 */
class DiskChargePrepaid extends AbstractModel
{
    /**
     * @var integer 新购周期。
     */
    public $Period;

    /**
     * @var string 自动续费标识。取值范围：

NOTIFY_AND_AUTO_RENEW：通知过期且自动续费。
NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费，用户需要手动续费。
DISABLE_NOTIFY_AND_AUTO_RENEW：不自动续费，且不通知。

默认取值：NOTIFY_AND_MANUAL_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，云盘到期后将按月自动续费。
     */
    public $RenewFlag;

    /**
     * @var string 新购单位. 默认值: "m"。
     */
    public $TimeUnit;

    /**
     * @param integer $Period 新购周期。
     * @param string $RenewFlag 自动续费标识。取值范围：

NOTIFY_AND_AUTO_RENEW：通知过期且自动续费。
NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费，用户需要手动续费。
DISABLE_NOTIFY_AND_AUTO_RENEW：不自动续费，且不通知。

默认取值：NOTIFY_AND_MANUAL_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，云盘到期后将按月自动续费。
     * @param string $TimeUnit 新购单位. 默认值: "m"。
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
