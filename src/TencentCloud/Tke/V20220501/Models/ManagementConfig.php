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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管节点池Management配置
 *
 * @method array getNameservers() 获取dns 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameservers(array $Nameservers) 设置dns 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHosts() 获取hosts 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHosts(array $Hosts) 设置hosts 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKernelArgs() 获取内核参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKernelArgs(array $KernelArgs) 设置内核参数配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManagementConfig extends AbstractModel
{
    /**
     * @var array dns 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nameservers;

    /**
     * @var array hosts 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hosts;

    /**
     * @var array 内核参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KernelArgs;

    /**
     * @param array $Nameservers dns 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Hosts hosts 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KernelArgs 内核参数配置
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
        if (array_key_exists("Nameservers",$param) and $param["Nameservers"] !== null) {
            $this->Nameservers = $param["Nameservers"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("KernelArgs",$param) and $param["KernelArgs"] !== null) {
            $this->KernelArgs = $param["KernelArgs"];
        }
    }
}
