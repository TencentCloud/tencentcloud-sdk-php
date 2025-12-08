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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPackageDomain请求参数结构体
 *
 * @method string getOperation() 获取操作类型：change: 套餐换域名；unbind: 解绑套餐域名；bind: 套餐绑定域名。
 * @method void setOperation(string $Operation) 设置操作类型：change: 套餐换域名；unbind: 解绑套餐域名；bind: 套餐绑定域名。
 * @method integer getDomainId() 获取域名ID。Operation为change时必传，代表更换前的域名。
 * @method void setDomainId(integer $DomainId) 设置域名ID。Operation为change时必传，代表更换前的域名。
 * @method integer getNewDomainId() 获取域名ID。Operation为change或bind时必传，代表更换后或要绑定的域名。
 * @method void setNewDomainId(integer $NewDomainId) 设置域名ID。Operation为change或bind时必传，代表更换后或要绑定的域名。
 * @method string getResourceId() 获取套餐资源ID。Operation为bind或unbind时必传，代表将要操作的套餐资源。
 * @method void setResourceId(string $ResourceId) 设置套餐资源ID。Operation为bind或unbind时必传，代表将要操作的套餐资源。
 */
class ModifyPackageDomainRequest extends AbstractModel
{
    /**
     * @var string 操作类型：change: 套餐换域名；unbind: 解绑套餐域名；bind: 套餐绑定域名。
     */
    public $Operation;

    /**
     * @var integer 域名ID。Operation为change时必传，代表更换前的域名。
     */
    public $DomainId;

    /**
     * @var integer 域名ID。Operation为change或bind时必传，代表更换后或要绑定的域名。
     */
    public $NewDomainId;

    /**
     * @var string 套餐资源ID。Operation为bind或unbind时必传，代表将要操作的套餐资源。
     */
    public $ResourceId;

    /**
     * @param string $Operation 操作类型：change: 套餐换域名；unbind: 解绑套餐域名；bind: 套餐绑定域名。
     * @param integer $DomainId 域名ID。Operation为change时必传，代表更换前的域名。
     * @param integer $NewDomainId 域名ID。Operation为change或bind时必传，代表更换后或要绑定的域名。
     * @param string $ResourceId 套餐资源ID。Operation为bind或unbind时必传，代表将要操作的套餐资源。
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("NewDomainId",$param) and $param["NewDomainId"] !== null) {
            $this->NewDomainId = $param["NewDomainId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
