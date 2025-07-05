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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间资源池配置
 *
 * @method NamespaceResourceEnvTKE getTKE() 获取基于TKE集群的资源池
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTKE(NamespaceResourceEnvTKE $TKE) 设置基于TKE集群的资源池
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOFFLINE() 获取近离线计算类型的命名空间
 * @method void setOFFLINE(boolean $OFFLINE) 设置近离线计算类型的命名空间
 */
class NamespaceResourceEnv extends AbstractModel
{
    /**
     * @var NamespaceResourceEnvTKE 基于TKE集群的资源池
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TKE;

    /**
     * @var boolean 近离线计算类型的命名空间
     */
    public $OFFLINE;

    /**
     * @param NamespaceResourceEnvTKE $TKE 基于TKE集群的资源池
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OFFLINE 近离线计算类型的命名空间
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
        if (array_key_exists("TKE",$param) and $param["TKE"] !== null) {
            $this->TKE = new NamespaceResourceEnvTKE();
            $this->TKE->deserialize($param["TKE"]);
        }

        if (array_key_exists("OFFLINE",$param) and $param["OFFLINE"] !== null) {
            $this->OFFLINE = $param["OFFLINE"];
        }
    }
}
