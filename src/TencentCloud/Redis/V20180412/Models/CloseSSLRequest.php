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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseSSL请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getAddressType() 获取<p>SSL地址类型。</p><p>枚举值：</p><ul><li>0：  不限。</li><li>1： 内网IPv4。</li><li>2：  内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul><p>默认值：0</p>
 * @method void setAddressType(integer $AddressType) 设置<p>SSL地址类型。</p><p>枚举值：</p><ul><li>0：  不限。</li><li>1： 内网IPv4。</li><li>2：  内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul><p>默认值：0</p>
 */
class CloseSSLRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>SSL地址类型。</p><p>枚举值：</p><ul><li>0：  不限。</li><li>1： 内网IPv4。</li><li>2：  内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul><p>默认值：0</p>
     */
    public $AddressType;

    /**
     * @param string $InstanceId <p>实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $AddressType <p>SSL地址类型。</p><p>枚举值：</p><ul><li>0：  不限。</li><li>1： 内网IPv4。</li><li>2：  内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul><p>默认值：0</p>
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

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
