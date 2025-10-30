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
 * 容器部署组相关的参数配置
 *
 * @method ContainerAdditionalResourceRequirementMap getAdditionalResourceRequirement() 获取不同类型的应用的容器部署组，部署时的额外资源要求
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalResourceRequirement(ContainerAdditionalResourceRequirementMap $AdditionalResourceRequirement) 设置不同类型的应用的容器部署组，部署时的额外资源要求
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerGroupResourceConfig extends AbstractModel
{
    /**
     * @var ContainerAdditionalResourceRequirementMap 不同类型的应用的容器部署组，部署时的额外资源要求
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalResourceRequirement;

    /**
     * @param ContainerAdditionalResourceRequirementMap $AdditionalResourceRequirement 不同类型的应用的容器部署组，部署时的额外资源要求
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
        if (array_key_exists("AdditionalResourceRequirement",$param) and $param["AdditionalResourceRequirement"] !== null) {
            $this->AdditionalResourceRequirement = new ContainerAdditionalResourceRequirementMap();
            $this->AdditionalResourceRequirement->deserialize($param["AdditionalResourceRequirement"]);
        }
    }
}
