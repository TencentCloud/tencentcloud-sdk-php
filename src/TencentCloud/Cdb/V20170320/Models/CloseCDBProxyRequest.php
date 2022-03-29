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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseCDBProxy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getProxyGroupId() 获取代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组ID
 * @method boolean getOnlyCloseRW() 获取是否只关闭读写分离，取值："true" | "false"，默认为"false"
 * @method void setOnlyCloseRW(boolean $OnlyCloseRW) 设置是否只关闭读写分离，取值："true" | "false"，默认为"false"
 */
class CloseCDBProxyRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var boolean 是否只关闭读写分离，取值："true" | "false"，默认为"false"
     */
    public $OnlyCloseRW;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ProxyGroupId 代理组ID
     * @param boolean $OnlyCloseRW 是否只关闭读写分离，取值："true" | "false"，默认为"false"
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("OnlyCloseRW",$param) and $param["OnlyCloseRW"] !== null) {
            $this->OnlyCloseRW = $param["OnlyCloseRW"];
        }
    }
}
