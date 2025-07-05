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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全策略
 *
 * @method string getRoute() 获取ip或者网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoute(string $Route) 设置ip或者网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPolicy() 获取策略 true就是允许，白名单或者 false 拒绝 黑名单

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicy(boolean $Policy) 设置策略 true就是允许，白名单或者 false 拒绝 黑名单

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var string ip或者网段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Route;

    /**
     * @var boolean 策略 true就是允许，白名单或者 false 拒绝 黑名单

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Policy;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $Route ip或者网段
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Policy 策略 true就是允许，白名单或者 false 拒绝 黑名单

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
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
        if (array_key_exists("Route",$param) and $param["Route"] !== null) {
            $this->Route = $param["Route"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
