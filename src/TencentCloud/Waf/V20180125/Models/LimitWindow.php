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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流窗口大小
 *
 * @method integer getSecond() 获取每秒允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecond(integer $Second) 设置每秒允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinute() 获取每分钟允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinute(integer $Minute) 设置每分钟允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHour() 获取每小时允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHour(integer $Hour) 设置每小时允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getQuotaShare() 获取是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaShare(boolean $QuotaShare) 设置是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
注意：此字段可能返回 null，表示取不到有效值。
 */
class LimitWindow extends AbstractModel
{
    /**
     * @var integer 每秒允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Second;

    /**
     * @var integer 每分钟允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Minute;

    /**
     * @var integer 每小时允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hour;

    /**
     * @var boolean 是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaShare;

    /**
     * @param integer $Second 每秒允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Minute 每分钟允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Hour 每小时允许通过的最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $QuotaShare 是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
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
        if (array_key_exists("Second",$param) and $param["Second"] !== null) {
            $this->Second = $param["Second"];
        }

        if (array_key_exists("Minute",$param) and $param["Minute"] !== null) {
            $this->Minute = $param["Minute"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("QuotaShare",$param) and $param["QuotaShare"] !== null) {
            $this->QuotaShare = $param["QuotaShare"];
        }
    }
}
