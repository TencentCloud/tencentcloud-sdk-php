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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对外接口访问信息
 *
 * @method string getType() 获取<p>类型</p><p>枚举值：</p><ul><li>rest： rest</li><li>hiveserver2： hiveserver2</li><li>pg： pg</li></ul>
 * @method void setType(string $Type) 设置<p>类型</p><p>枚举值：</p><ul><li>rest： rest</li><li>hiveserver2： hiveserver2</li><li>pg： pg</li></ul>
 * @method string getAddress() 获取<p>地址</p>
 * @method void setAddress(string $Address) 设置<p>地址</p>
 * @method boolean getEnabled() 获取<p>是否开启</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启</p>
 * @method string getExtra() 获取<p>其他信息</p>
 * @method void setExtra(string $Extra) 设置<p>其他信息</p>
 */
class SqlGatewayEndpoint extends AbstractModel
{
    /**
     * @var string <p>类型</p><p>枚举值：</p><ul><li>rest： rest</li><li>hiveserver2： hiveserver2</li><li>pg： pg</li></ul>
     */
    public $Type;

    /**
     * @var string <p>地址</p>
     */
    public $Address;

    /**
     * @var boolean <p>是否开启</p>
     */
    public $Enabled;

    /**
     * @var string <p>其他信息</p>
     */
    public $Extra;

    /**
     * @param string $Type <p>类型</p><p>枚举值：</p><ul><li>rest： rest</li><li>hiveserver2： hiveserver2</li><li>pg： pg</li></ul>
     * @param string $Address <p>地址</p>
     * @param boolean $Enabled <p>是否开启</p>
     * @param string $Extra <p>其他信息</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
