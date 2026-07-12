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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务级包年包月入参
 *
 * @method integer getPeriod() 获取<p>购买时长，默认1</p>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，默认1</p>
 * @method string getTimeUnit() 获取<p>时长单位：MONTH(月)/DAY(天)</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时长单位：MONTH(月)/DAY(天)</p>
 * @method string getRenewFlag() 获取<p>自动续费：NOTIFY_AND_AUTO_RENEW/NOTIFY_AND_MANUAL_RENEW/DISABLE_NOTIFY_AND_MANUAL_RENEW</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费：NOTIFY_AND_AUTO_RENEW/NOTIFY_AND_MANUAL_RENEW/DISABLE_NOTIFY_AND_MANUAL_RENEW</p>
 */
class ServiceChargePrepaid extends AbstractModel
{
    /**
     * @var integer <p>购买时长，默认1</p>
     */
    public $Period;

    /**
     * @var string <p>时长单位：MONTH(月)/DAY(天)</p>
     */
    public $TimeUnit;

    /**
     * @var string <p>自动续费：NOTIFY_AND_AUTO_RENEW/NOTIFY_AND_MANUAL_RENEW/DISABLE_NOTIFY_AND_MANUAL_RENEW</p>
     */
    public $RenewFlag;

    /**
     * @param integer $Period <p>购买时长，默认1</p>
     * @param string $TimeUnit <p>时长单位：MONTH(月)/DAY(天)</p>
     * @param string $RenewFlag <p>自动续费：NOTIFY_AND_AUTO_RENEW/NOTIFY_AND_MANUAL_RENEW/DISABLE_NOTIFY_AND_MANUAL_RENEW</p>
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

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
