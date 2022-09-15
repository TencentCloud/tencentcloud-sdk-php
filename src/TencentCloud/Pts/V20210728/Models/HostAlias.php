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
 * 施压机域名绑定配置
 *
 * @method array getHostNames() 获取需绑定的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostNames(array $HostNames) 设置需绑定的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取需绑定的 IP 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置需绑定的 IP 地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostAlias extends AbstractModel
{
    /**
     * @var array 需绑定的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostNames;

    /**
     * @var string 需绑定的 IP 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @param array $HostNames 需绑定的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP 需绑定的 IP 地址
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
        if (array_key_exists("HostNames",$param) and $param["HostNames"] !== null) {
            $this->HostNames = $param["HostNames"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }
    }
}
