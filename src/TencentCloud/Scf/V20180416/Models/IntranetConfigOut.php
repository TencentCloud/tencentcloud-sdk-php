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
 * 内网配置
 *
 * @method string getIpFixed() 获取是否启用固定内网IP
ENABLE 为启用
DISABLE 为不启用
 * @method void setIpFixed(string $IpFixed) 设置是否启用固定内网IP
ENABLE 为启用
DISABLE 为不启用
 * @method array getIpAddress() 获取若已启用固定内网IP，则该字段返回使用的IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddress(array $IpAddress) 设置若已启用固定内网IP，则该字段返回使用的IP列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntranetConfigOut extends AbstractModel
{
    /**
     * @var string 是否启用固定内网IP
ENABLE 为启用
DISABLE 为不启用
     */
    public $IpFixed;

    /**
     * @var array 若已启用固定内网IP，则该字段返回使用的IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddress;

    /**
     * @param string $IpFixed 是否启用固定内网IP
ENABLE 为启用
DISABLE 为不启用
     * @param array $IpAddress 若已启用固定内网IP，则该字段返回使用的IP列表
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
        if (array_key_exists("IpFixed",$param) and $param["IpFixed"] !== null) {
            $this->IpFixed = $param["IpFixed"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }
    }
}
