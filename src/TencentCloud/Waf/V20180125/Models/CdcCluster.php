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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC场景下负载均衡WAF的集群信息
 *
 * @method string getId() 获取cdc的集群id
 * @method void setId(string $Id) 设置cdc的集群id
 * @method string getName() 获取cdc的集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置cdc的集群名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class CdcCluster extends AbstractModel
{
    /**
     * @var string cdc的集群id
     */
    public $Id;

    /**
     * @var string cdc的集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $Id cdc的集群id
     * @param string $Name cdc的集群名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
