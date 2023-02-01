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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网限速实例锁对象，该对象特用于运营端使用，用于封禁实例流量。
 *
 * @method string getCcnId() 获取带宽所属的云联网ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnId(string $CcnId) 设置带宽所属的云联网ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAccountID() 获取实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAccountID(string $UserAccountID) 设置实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionFlowControlId() 获取带宽实例的唯一ID。作为`UnlockCcnBandwidths`接口和`LockCcnBandwidths`接口的入参时，该字段必传。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionFlowControlId(string $RegionFlowControlId) 设置带宽实例的唯一ID。作为`UnlockCcnBandwidths`接口和`LockCcnBandwidths`接口的入参时，该字段必传。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CcnFlowLock extends AbstractModel
{
    /**
     * @var string 带宽所属的云联网ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnId;

    /**
     * @var string 实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAccountID;

    /**
     * @var string 带宽实例的唯一ID。作为`UnlockCcnBandwidths`接口和`LockCcnBandwidths`接口的入参时，该字段必传。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionFlowControlId;

    /**
     * @param string $CcnId 带宽所属的云联网ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAccountID 实例所属用户主账号ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionFlowControlId 带宽实例的唯一ID。作为`UnlockCcnBandwidths`接口和`LockCcnBandwidths`接口的入参时，该字段必传。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("UserAccountID",$param) and $param["UserAccountID"] !== null) {
            $this->UserAccountID = $param["UserAccountID"];
        }

        if (array_key_exists("RegionFlowControlId",$param) and $param["RegionFlowControlId"] !== null) {
            $this->RegionFlowControlId = $param["RegionFlowControlId"];
        }
    }
}
