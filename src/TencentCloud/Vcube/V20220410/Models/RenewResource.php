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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动续期资源info
 *
 * @method string getResourceId() 获取资源Id
 * @method void setResourceId(string $ResourceId) 设置资源Id
 * @method integer getAutoRenewFlag() 获取自动续期标记，0：默认，1：自动续期，2：不续期
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续期标记，0：默认，1：自动续期，2：不续期
 * @method string getIsolatedTimestamp() 获取资源冻结时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTimestamp(string $IsolatedTimestamp) 设置资源冻结时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRefund() 获取资源销毁状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefund(boolean $Refund) 设置资源销毁状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductCode() 获取子产品码
 * @method void setSubProductCode(string $SubProductCode) 设置子产品码
 * @method string getEndTime() 获取资源到期时间
 * @method void setEndTime(string $EndTime) 设置资源到期时间
 */
class RenewResource extends AbstractModel
{
    /**
     * @var string 资源Id
     */
    public $ResourceId;

    /**
     * @var integer 自动续期标记，0：默认，1：自动续期，2：不续期
     */
    public $AutoRenewFlag;

    /**
     * @var string 资源冻结时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTimestamp;

    /**
     * @var boolean 资源销毁状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Refund;

    /**
     * @var string 子产品码
     */
    public $SubProductCode;

    /**
     * @var string 资源到期时间
     */
    public $EndTime;

    /**
     * @param string $ResourceId 资源Id
     * @param integer $AutoRenewFlag 自动续期标记，0：默认，1：自动续期，2：不续期
     * @param string $IsolatedTimestamp 资源冻结时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Refund 资源销毁状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductCode 子产品码
     * @param string $EndTime 资源到期时间
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("IsolatedTimestamp",$param) and $param["IsolatedTimestamp"] !== null) {
            $this->IsolatedTimestamp = $param["IsolatedTimestamp"];
        }

        if (array_key_exists("Refund",$param) and $param["Refund"] !== null) {
            $this->Refund = $param["Refund"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
