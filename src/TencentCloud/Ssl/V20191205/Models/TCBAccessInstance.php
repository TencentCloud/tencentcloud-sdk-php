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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TCB访问服务实例
 *
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnionStatus() 获取统一域名状态

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnionStatus(integer $UnionStatus) 设置统一域名状态

注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPreempted() 获取是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPreempted(boolean $IsPreempted) 设置是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getICPStatus() 获取icp黑名单封禁状态，0-未封禁，1-封禁

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setICPStatus(integer $ICPStatus) 设置icp黑名单封禁状态，0-未封禁，1-封禁

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldCertificateId() 获取已绑定证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldCertificateId(string $OldCertificateId) 设置已绑定证书ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TCBAccessInstance extends AbstractModel
{
    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 统一域名状态

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnionStatus;

    /**
     * @var boolean 是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPreempted;

    /**
     * @var integer icp黑名单封禁状态，0-未封禁，1-封禁

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ICPStatus;

    /**
     * @var string 已绑定证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldCertificateId;

    /**
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnionStatus 统一域名状态

注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPreempted 是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ICPStatus icp黑名单封禁状态，0-未封禁，1-封禁

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldCertificateId 已绑定证书ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UnionStatus",$param) and $param["UnionStatus"] !== null) {
            $this->UnionStatus = $param["UnionStatus"];
        }

        if (array_key_exists("IsPreempted",$param) and $param["IsPreempted"] !== null) {
            $this->IsPreempted = $param["IsPreempted"];
        }

        if (array_key_exists("ICPStatus",$param) and $param["ICPStatus"] !== null) {
            $this->ICPStatus = $param["ICPStatus"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }
    }
}
