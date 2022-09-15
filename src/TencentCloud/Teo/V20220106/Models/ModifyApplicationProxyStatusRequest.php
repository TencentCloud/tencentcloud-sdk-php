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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplicationProxyStatus请求参数结构体
 *
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getProxyId() 获取代理ID
 * @method void setProxyId(string $ProxyId) 设置代理ID
 * @method string getStatus() 获取状态
offline: 停用
online: 启用
 * @method void setStatus(string $Status) 设置状态
offline: 停用
online: 启用
 */
class ModifyApplicationProxyStatusRequest extends AbstractModel
{
    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 代理ID
     */
    public $ProxyId;

    /**
     * @var string 状态
offline: 停用
online: 启用
     */
    public $Status;

    /**
     * @param string $ZoneId 站点ID
     * @param string $ProxyId 代理ID
     * @param string $Status 状态
offline: 停用
online: 启用
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
