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
 * 表示主机资产专属的详情。
 *
 * @method string getDockerVersion() 获取主机上的Docker版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDockerVersion(string $DockerVersion) 设置主机上的Docker版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getK8SVersion() 获取主机上的K8S的版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setK8SVersion(string $K8SVersion) 设置主机上的K8S的版本。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComplianceHostDetailInfo extends AbstractModel
{
    /**
     * @var string 主机上的Docker版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DockerVersion;

    /**
     * @var string 主机上的K8S的版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $K8SVersion;

    /**
     * @param string $DockerVersion 主机上的Docker版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $K8SVersion 主机上的K8S的版本。
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
        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }
    }
}
