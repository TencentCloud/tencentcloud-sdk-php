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
 * ModifyNatFwVpcDnsSwitch请求参数结构体
 *
 * @method string getNatFwInsId() 获取<p>nat 防火墙 id</p>
 * @method void setNatFwInsId(string $NatFwInsId) 设置<p>nat 防火墙 id</p>
 * @method array getDnsVpcSwitchLst() 获取<p>DNS 开关切换列表</p>
 * @method void setDnsVpcSwitchLst(array $DnsVpcSwitchLst) 设置<p>DNS 开关切换列表</p>
 */
class ModifyNatFwVpcDnsSwitchRequest extends AbstractModel
{
    /**
     * @var string <p>nat 防火墙 id</p>
     */
    public $NatFwInsId;

    /**
     * @var array <p>DNS 开关切换列表</p>
     */
    public $DnsVpcSwitchLst;

    /**
     * @param string $NatFwInsId <p>nat 防火墙 id</p>
     * @param array $DnsVpcSwitchLst <p>DNS 开关切换列表</p>
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
        if (array_key_exists("NatFwInsId",$param) and $param["NatFwInsId"] !== null) {
            $this->NatFwInsId = $param["NatFwInsId"];
        }

        if (array_key_exists("DnsVpcSwitchLst",$param) and $param["DnsVpcSwitchLst"] !== null) {
            $this->DnsVpcSwitchLst = [];
            foreach ($param["DnsVpcSwitchLst"] as $key => $value){
                $obj = new DnsVpcSwitch();
                $obj->deserialize($value);
                array_push($this->DnsVpcSwitchLst, $obj);
            }
        }
    }
}
