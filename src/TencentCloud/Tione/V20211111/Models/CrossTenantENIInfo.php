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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨租户弹性网卡下Pod调用信息
 *
 * @method string getPrimaryIP() 获取Pod IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrimaryIP(string $PrimaryIP) 设置Pod IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取Pod Port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置Pod Port
注意：此字段可能返回 null，表示取不到有效值。
 */
class CrossTenantENIInfo extends AbstractModel
{
    /**
     * @var string Pod IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrimaryIP;

    /**
     * @var string Pod Port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @param string $PrimaryIP Pod IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port Pod Port
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
        if (array_key_exists("PrimaryIP",$param) and $param["PrimaryIP"] !== null) {
            $this->PrimaryIP = $param["PrimaryIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
