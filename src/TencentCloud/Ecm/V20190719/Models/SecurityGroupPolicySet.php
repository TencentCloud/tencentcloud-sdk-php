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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组规则集合
 *
 * @method string getVersion() 获取安全组规则当前版本。用户每次更新安全规则版本会自动加1，防止更新的路由规则已过期，不填不考虑冲突。
 * @method void setVersion(string $Version) 设置安全组规则当前版本。用户每次更新安全规则版本会自动加1，防止更新的路由规则已过期，不填不考虑冲突。
 * @method array getEgress() 获取出站规则。其中出站规则和入站规则必须选一个。
 * @method void setEgress(array $Egress) 设置出站规则。其中出站规则和入站规则必须选一个。
 * @method array getIngress() 获取入站规则。其中出站规则和入站规则必须选一个。
 * @method void setIngress(array $Ingress) 设置入站规则。其中出站规则和入站规则必须选一个。
 */
class SecurityGroupPolicySet extends AbstractModel
{
    /**
     * @var string 安全组规则当前版本。用户每次更新安全规则版本会自动加1，防止更新的路由规则已过期，不填不考虑冲突。
     */
    public $Version;

    /**
     * @var array 出站规则。其中出站规则和入站规则必须选一个。
     */
    public $Egress;

    /**
     * @var array 入站规则。其中出站规则和入站规则必须选一个。
     */
    public $Ingress;

    /**
     * @param string $Version 安全组规则当前版本。用户每次更新安全规则版本会自动加1，防止更新的路由规则已过期，不填不考虑冲突。
     * @param array $Egress 出站规则。其中出站规则和入站规则必须选一个。
     * @param array $Ingress 入站规则。其中出站规则和入站规则必须选一个。
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = [];
            foreach ($param["Egress"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->Egress, $obj);
            }
        }

        if (array_key_exists("Ingress",$param) and $param["Ingress"] !== null) {
            $this->Ingress = [];
            foreach ($param["Ingress"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->Ingress, $obj);
            }
        }
    }
}
