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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP SSL 配置信息
 *
 * @method string getOperation() 获取操作类型， 取值如下： <li>bind：绑定</li> <li>unbind：解绑</li>
 * @method void setOperation(string $Operation) 设置操作类型， 取值如下： <li>bind：绑定</li> <li>unbind：解绑</li>
 * @method string getAssociatedDomain() 获取要绑定的IP SSL的所属域名。
 * @method void setAssociatedDomain(string $AssociatedDomain) 设置要绑定的IP SSL的所属域名。
 */
class IPSSLSetting extends AbstractModel
{
    /**
     * @var string 操作类型， 取值如下： <li>bind：绑定</li> <li>unbind：解绑</li>
     */
    public $Operation;

    /**
     * @var string 要绑定的IP SSL的所属域名。
     */
    public $AssociatedDomain;

    /**
     * @param string $Operation 操作类型， 取值如下： <li>bind：绑定</li> <li>unbind：解绑</li>
     * @param string $AssociatedDomain 要绑定的IP SSL的所属域名。
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("AssociatedDomain",$param) and $param["AssociatedDomain"] !== null) {
            $this->AssociatedDomain = $param["AssociatedDomain"];
        }
    }
}
