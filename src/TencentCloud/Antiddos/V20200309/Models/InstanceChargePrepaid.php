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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * { 
        "Period": 12,
        "RenewFlag": "NOTIFY_AND_AUTO_RENEW"
}
 *
 * @method integer getPeriod() 获取购买时长：单位月
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(integer $Period) 设置购买时长：单位月
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewFlag() 获取NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费
NOTIFY_AND_AUTO_RENEW：到期通知且自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费
默认为：通知过期不自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(string $RenewFlag) 设置NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费
NOTIFY_AND_AUTO_RENEW：到期通知且自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费
默认为：通知过期不自动续费
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer 购买时长：单位月
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var string NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费
NOTIFY_AND_AUTO_RENEW：到期通知且自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费
默认为：通知过期不自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @param integer $Period 购买时长：单位月
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewFlag NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费
NOTIFY_AND_AUTO_RENEW：到期通知且自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费
默认为：通知过期不自动续费
注意：此字段可能返回 null，表示取不到有效值。
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
