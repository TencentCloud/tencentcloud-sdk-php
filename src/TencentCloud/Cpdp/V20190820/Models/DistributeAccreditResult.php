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
 * 授权申请响应对象
 *
 * @method string getContractUrl() 获取合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractUrl(string $ContractUrl) 设置合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantNo() 获取系统商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantNo(string $MerchantNo) 设置系统商户号
注意：此字段可能返回 null，表示取不到有效值。
 */
class DistributeAccreditResult extends AbstractModel
{
    /**
     * @var string 合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractUrl;

    /**
     * @var string 系统商户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantNo;

    /**
     * @param string $ContractUrl 合同h5地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantNo 系统商户号
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
        if (array_key_exists("ContractUrl",$param) and $param["ContractUrl"] !== null) {
            $this->ContractUrl = $param["ContractUrl"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }
    }
}
