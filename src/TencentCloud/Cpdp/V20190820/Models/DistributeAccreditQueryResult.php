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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分账授权申请查询响应对象
 *
 * @method string getStatus() 获取状态（0-未开通，1-已开通，2-商户主动关闭，3-待审核，4-冻结，5-注销，6-待签合同）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态（0-未开通，1-已开通，2-商户主动关闭，3-待审核，4-冻结，5-注销，6-待签合同）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractUrl() 获取合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractUrl(string $ContractUrl) 设置合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明
注意：此字段可能返回 null，表示取不到有效值。
 */
class DistributeAccreditQueryResult extends AbstractModel
{
    /**
     * @var string 状态（0-未开通，1-已开通，2-商户主动关闭，3-待审核，4-冻结，5-注销，6-待签合同）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractUrl;

    /**
     * @var string 说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $Status 状态（0-未开通，1-已开通，2-商户主动关闭，3-待审核，4-冻结，5-注销，6-待签合同）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractUrl 合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 说明
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ContractUrl",$param) and $param["ContractUrl"] !== null) {
            $this->ContractUrl = $param["ContractUrl"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
