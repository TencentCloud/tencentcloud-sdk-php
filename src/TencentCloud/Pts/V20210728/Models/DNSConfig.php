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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 施压机 DNS 配置
 *
 * @method array getNameservers() 获取DNS IP 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameservers(array $Nameservers) 设置DNS IP 列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DNSConfig extends AbstractModel
{
    /**
     * @var array DNS IP 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nameservers;

    /**
     * @param array $Nameservers DNS IP 列表
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
    }
}
