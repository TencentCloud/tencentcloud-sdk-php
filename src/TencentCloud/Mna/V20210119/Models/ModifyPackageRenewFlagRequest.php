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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPackageRenewFlag请求参数结构体
 *
 * @method string getResourceId() 获取<p>流量包的唯一资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>流量包的唯一资源ID</p>
 * @method boolean getRenewFlag() 获取<p>自动续费标识。true代表自动续费，false代表不自动续费</p>
 * @method void setRenewFlag(boolean $RenewFlag) 设置<p>自动续费标识。true代表自动续费，false代表不自动续费</p>
 */
class ModifyPackageRenewFlagRequest extends AbstractModel
{
    /**
     * @var string <p>流量包的唯一资源ID</p>
     */
    public $ResourceId;

    /**
     * @var boolean <p>自动续费标识。true代表自动续费，false代表不自动续费</p>
     */
    public $RenewFlag;

    /**
     * @param string $ResourceId <p>流量包的唯一资源ID</p>
     * @param boolean $RenewFlag <p>自动续费标识。true代表自动续费，false代表不自动续费</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
