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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT集群模式开关信息
 *
 * @method string getNatInsId() 获取<p>nat网关ID</p>
 * @method void setNatInsId(string $NatInsId) 设置<p>nat网关ID</p>
 * @method string getNatInsName() 获取<p>nat网关名称</p>
 * @method void setNatInsName(string $NatInsName) 设置<p>nat网关名称</p>
 */
class NatClusterInfo extends AbstractModel
{
    /**
     * @var string <p>nat网关ID</p>
     */
    public $NatInsId;

    /**
     * @var string <p>nat网关名称</p>
     */
    public $NatInsName;

    /**
     * @param string $NatInsId <p>nat网关ID</p>
     * @param string $NatInsName <p>nat网关名称</p>
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
        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }

        if (array_key_exists("NatInsName",$param) and $param["NatInsName"] !== null) {
            $this->NatInsName = $param["NatInsName"];
        }
    }
}
