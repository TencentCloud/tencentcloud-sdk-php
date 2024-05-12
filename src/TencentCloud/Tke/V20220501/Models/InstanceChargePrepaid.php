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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 包年包月配置
 *
 * @method integer getPeriod() 获取后付费计费周期，单位（月）：
1，2，3，4，5，，6，7， 8，9，10，11，12，24，36，48，60
 * @method void setPeriod(integer $Period) 设置后付费计费周期，单位（月）：
1，2，3，4，5，，6，7， 8，9，10，11，12，24，36，48，60
 * @method string getRenewFlag() 获取预付费续费方式：
- NOTIFY_AND_AUTO_RENEW：通知用户过期，且自动续费 (默认）
- NOTIFY_AND_MANUAL_RENEW：通知用户过期，但不不自动续费
- DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知用户过期，也不自动续费

 * @method void setRenewFlag(string $RenewFlag) 设置预付费续费方式：
- NOTIFY_AND_AUTO_RENEW：通知用户过期，且自动续费 (默认）
- NOTIFY_AND_MANUAL_RENEW：通知用户过期，但不不自动续费
- DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知用户过期，也不自动续费
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer 后付费计费周期，单位（月）：
1，2，3，4，5，，6，7， 8，9，10，11，12，24，36，48，60
     */
    public $Period;

    /**
     * @var string 预付费续费方式：
- NOTIFY_AND_AUTO_RENEW：通知用户过期，且自动续费 (默认）
- NOTIFY_AND_MANUAL_RENEW：通知用户过期，但不不自动续费
- DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知用户过期，也不自动续费

     */
    public $RenewFlag;

    /**
     * @param integer $Period 后付费计费周期，单位（月）：
1，2，3，4，5，，6，7， 8，9，10，11，12，24，36，48，60
     * @param string $RenewFlag 预付费续费方式：
- NOTIFY_AND_AUTO_RENEW：通知用户过期，且自动续费 (默认）
- NOTIFY_AND_MANUAL_RENEW：通知用户过期，但不不自动续费
- DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知用户过期，也不自动续费
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
    }
}
