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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络集群策略自定义规则
 *
 * @method string getPeerType() 获取对象类型：

命名空间：NamespaceSelector，代表NamespaceSelector有值

pod类型：PodSelector，代表NamespaceSelector和PodSelector都有值

ip类型：IPBlock，代表只有IPBlock有值
 * @method void setPeerType(string $PeerType) 设置对象类型：

命名空间：NamespaceSelector，代表NamespaceSelector有值

pod类型：PodSelector，代表NamespaceSelector和PodSelector都有值

ip类型：IPBlock，代表只有IPBlock有值
 * @method string getNamespaceSelector() 获取空间选择器
 * @method void setNamespaceSelector(string $NamespaceSelector) 设置空间选择器
 * @method string getPodSelector() 获取pod选择器
 * @method void setPodSelector(string $PodSelector) 设置pod选择器
 * @method string getIPBlock() 获取Ip选择器
 * @method void setIPBlock(string $IPBlock) 设置Ip选择器
 */
class NetworkPeer extends AbstractModel
{
    /**
     * @var string 对象类型：

命名空间：NamespaceSelector，代表NamespaceSelector有值

pod类型：PodSelector，代表NamespaceSelector和PodSelector都有值

ip类型：IPBlock，代表只有IPBlock有值
     */
    public $PeerType;

    /**
     * @var string 空间选择器
     */
    public $NamespaceSelector;

    /**
     * @var string pod选择器
     */
    public $PodSelector;

    /**
     * @var string Ip选择器
     */
    public $IPBlock;

    /**
     * @param string $PeerType 对象类型：

命名空间：NamespaceSelector，代表NamespaceSelector有值

pod类型：PodSelector，代表NamespaceSelector和PodSelector都有值

ip类型：IPBlock，代表只有IPBlock有值
     * @param string $NamespaceSelector 空间选择器
     * @param string $PodSelector pod选择器
     * @param string $IPBlock Ip选择器
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
        if (array_key_exists("PeerType",$param) and $param["PeerType"] !== null) {
            $this->PeerType = $param["PeerType"];
        }

        if (array_key_exists("NamespaceSelector",$param) and $param["NamespaceSelector"] !== null) {
            $this->NamespaceSelector = $param["NamespaceSelector"];
        }

        if (array_key_exists("PodSelector",$param) and $param["PodSelector"] !== null) {
            $this->PodSelector = $param["PodSelector"];
        }

        if (array_key_exists("IPBlock",$param) and $param["IPBlock"] !== null) {
            $this->IPBlock = $param["IPBlock"];
        }
    }
}
