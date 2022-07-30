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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 施压机的域名解析相关配置
 *
 * @method array getHostAliases() 获取域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostAliases(array $HostAliases) 设置域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method DNSConfig getDNSConfig() 获取DNS 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDNSConfig(DNSConfig $DNSConfig) 设置DNS 配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainNameConfig extends AbstractModel
{
    /**
     * @var array 域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostAliases;

    /**
     * @var DNSConfig DNS 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DNSConfig;

    /**
     * @param array $HostAliases 域名绑定配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param DNSConfig $DNSConfig DNS 配置
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
        if (array_key_exists("HostAliases",$param) and $param["HostAliases"] !== null) {
            $this->HostAliases = [];
            foreach ($param["HostAliases"] as $key => $value){
                $obj = new HostAlias();
                $obj->deserialize($value);
                array_push($this->HostAliases, $obj);
            }
        }

        if (array_key_exists("DNSConfig",$param) and $param["DNSConfig"] !== null) {
            $this->DNSConfig = new DNSConfig();
            $this->DNSConfig->deserialize($param["DNSConfig"]);
        }
    }
}
