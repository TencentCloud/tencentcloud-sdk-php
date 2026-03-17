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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 反弹shell列表数据详情
 *
 * @method integer getPolicyId() 获取策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(integer $PolicyId) 设置策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyType() 获取0 系统策略, 1 用户自定义策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyType(integer $PolicyType) 设置0 系统策略, 1 用户自定义策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyDesc() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyDesc(string $PolicyDesc) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyAction() 获取策略动作[0:告警,1:放行,2:拦截+告警]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyAction(integer $PolicyAction) 设置策略动作[0:告警,1:放行,2:拦截+告警]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsEnabled() 获取0 开启, 1关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEnabled(integer $IsEnabled) 设置0 开启, 1关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostScope() 获取主机范围:[0: 一组quuid 1: 所有专业版 2: 旗舰版 3: 所有主机]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostScope(integer $HostScope) 设置主机范围:[0: 一组quuid 1: 所有专业版 2: 旗舰版 3: 所有主机]
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShellPolicyList extends AbstractModel
{
    /**
     * @var integer 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var integer 0 系统策略, 1 用户自定义策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyType;

    /**
     * @var string 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyDesc;

    /**
     * @var integer 策略动作[0:告警,1:放行,2:拦截+告警]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyAction;

    /**
     * @var integer 0 开启, 1关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEnabled;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 主机范围:[0: 一组quuid 1: 所有专业版 2: 旗舰版 3: 所有主机]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostScope;

    /**
     * @param integer $PolicyId 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyType 0 系统策略, 1 用户自定义策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyDesc 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyAction 策略动作[0:告警,1:放行,2:拦截+告警]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsEnabled 0 开启, 1关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostScope 主机范围:[0: 一组quuid 1: 所有专业版 2: 旗舰版 3: 所有主机]
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyDesc",$param) and $param["PolicyDesc"] !== null) {
            $this->PolicyDesc = $param["PolicyDesc"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostScope",$param) and $param["HostScope"] !== null) {
            $this->HostScope = $param["HostScope"];
        }
    }
}
