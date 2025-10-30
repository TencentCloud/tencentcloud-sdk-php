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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不同类型的应用的容器部署组，部署时的额外资源要求
 *
 * @method ContainerAdditionalResourceRequirement getM() 获取Mesh 应用部署时需要的额外资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setM(ContainerAdditionalResourceRequirement $M) 设置Mesh 应用部署时需要的额外资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContainerAdditionalResourceRequirement getN() 获取普通应用部署时需要的额外资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setN(ContainerAdditionalResourceRequirement $N) 设置普通应用部署时需要的额外资源
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerAdditionalResourceRequirementMap extends AbstractModel
{
    /**
     * @var ContainerAdditionalResourceRequirement Mesh 应用部署时需要的额外资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $M;

    /**
     * @var ContainerAdditionalResourceRequirement 普通应用部署时需要的额外资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $N;

    /**
     * @param ContainerAdditionalResourceRequirement $M Mesh 应用部署时需要的额外资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContainerAdditionalResourceRequirement $N 普通应用部署时需要的额外资源
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
        if (array_key_exists("M",$param) and $param["M"] !== null) {
            $this->M = new ContainerAdditionalResourceRequirement();
            $this->M->deserialize($param["M"]);
        }

        if (array_key_exists("N",$param) and $param["N"] !== null) {
            $this->N = new ContainerAdditionalResourceRequirement();
            $this->N->deserialize($param["N"]);
        }
    }
}
