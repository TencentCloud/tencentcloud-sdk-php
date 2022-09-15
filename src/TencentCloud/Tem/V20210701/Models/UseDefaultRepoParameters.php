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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建应用，创建仓库参数
 *
 * @method string getEnterpriseInstanceName() 获取企业版实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnterpriseInstanceName(string $EnterpriseInstanceName) 设置企业版实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnterpriseInstanceChargeType() 获取企业版收费类型  0 按量收费   1 包年包月
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnterpriseInstanceChargeType(integer $EnterpriseInstanceChargeType) 设置企业版收费类型  0 按量收费   1 包年包月
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnterpriseInstanceType() 获取企业版规格：basic-基础班 ，standard-标准版，premium-高级版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnterpriseInstanceType(string $EnterpriseInstanceType) 设置企业版规格：basic-基础班 ，standard-标准版，premium-高级版
注意：此字段可能返回 null，表示取不到有效值。
 */
class UseDefaultRepoParameters extends AbstractModel
{
    /**
     * @var string 企业版实例名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnterpriseInstanceName;

    /**
     * @var integer 企业版收费类型  0 按量收费   1 包年包月
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnterpriseInstanceChargeType;

    /**
     * @var string 企业版规格：basic-基础班 ，standard-标准版，premium-高级版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnterpriseInstanceType;

    /**
     * @param string $EnterpriseInstanceName 企业版实例名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnterpriseInstanceChargeType 企业版收费类型  0 按量收费   1 包年包月
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnterpriseInstanceType 企业版规格：basic-基础班 ，standard-标准版，premium-高级版
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
        if (array_key_exists("EnterpriseInstanceName",$param) and $param["EnterpriseInstanceName"] !== null) {
            $this->EnterpriseInstanceName = $param["EnterpriseInstanceName"];
        }

        if (array_key_exists("EnterpriseInstanceChargeType",$param) and $param["EnterpriseInstanceChargeType"] !== null) {
            $this->EnterpriseInstanceChargeType = $param["EnterpriseInstanceChargeType"];
        }

        if (array_key_exists("EnterpriseInstanceType",$param) and $param["EnterpriseInstanceType"] !== null) {
            $this->EnterpriseInstanceType = $param["EnterpriseInstanceType"];
        }
    }
}
