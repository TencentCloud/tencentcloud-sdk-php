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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示容器资产专属的详情。
 *
 * @method string getContainerId() 获取容器在主机上的ID。
 * @method void setContainerId(string $ContainerId) 设置容器在主机上的ID。
 * @method string getPodName() 获取容器所属的Pod的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置容器所属的Pod的名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComplianceContainerDetailInfo extends AbstractModel
{
    /**
     * @var string 容器在主机上的ID。
     */
    public $ContainerId;

    /**
     * @var string 容器所属的Pod的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @param string $ContainerId 容器在主机上的ID。
     * @param string $PodName 容器所属的Pod的名称。
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
        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }
    }
}
