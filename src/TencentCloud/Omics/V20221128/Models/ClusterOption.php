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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算集群配置。
 *
 * @method string getZone() 获取计算集群可用区。
 * @method void setZone(string $Zone) 设置计算集群可用区。
 * @method string getType() 获取计算集群类型，取值范围：
- KUBERNETES
 * @method void setType(string $Type) 设置计算集群类型，取值范围：
- KUBERNETES
 */
class ClusterOption extends AbstractModel
{
    /**
     * @var string 计算集群可用区。
     */
    public $Zone;

    /**
     * @var string 计算集群类型，取值范围：
- KUBERNETES
     */
    public $Type;

    /**
     * @param string $Zone 计算集群可用区。
     * @param string $Type 计算集群类型，取值范围：
- KUBERNETES
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
