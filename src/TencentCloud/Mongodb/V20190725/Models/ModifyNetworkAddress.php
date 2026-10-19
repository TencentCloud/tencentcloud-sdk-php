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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改数据库地址
 *
 * @method string getNewIPAddress() 获取<p>新IP地址。</p>
 * @method void setNewIPAddress(string $NewIPAddress) 设置<p>新IP地址。</p>
 * @method string getOldIpAddress() 获取<p>原IP地址。</p>
 * @method void setOldIpAddress(string $OldIpAddress) 设置<p>原IP地址。</p>
 * @method string getNodeType() 获取<p>在副本集时，修改网络需要传此字段，用于标识该ip地址为主节点或者hidden节点</p><p>枚举值：</p><ul><li>PRIMARY： 主节点</li><li>HIDDEN： hidden节点</li></ul>
 * @method void setNodeType(string $NodeType) 设置<p>在副本集时，修改网络需要传此字段，用于标识该ip地址为主节点或者hidden节点</p><p>枚举值：</p><ul><li>PRIMARY： 主节点</li><li>HIDDEN： hidden节点</li></ul>
 */
class ModifyNetworkAddress extends AbstractModel
{
    /**
     * @var string <p>新IP地址。</p>
     */
    public $NewIPAddress;

    /**
     * @var string <p>原IP地址。</p>
     */
    public $OldIpAddress;

    /**
     * @var string <p>在副本集时，修改网络需要传此字段，用于标识该ip地址为主节点或者hidden节点</p><p>枚举值：</p><ul><li>PRIMARY： 主节点</li><li>HIDDEN： hidden节点</li></ul>
     */
    public $NodeType;

    /**
     * @param string $NewIPAddress <p>新IP地址。</p>
     * @param string $OldIpAddress <p>原IP地址。</p>
     * @param string $NodeType <p>在副本集时，修改网络需要传此字段，用于标识该ip地址为主节点或者hidden节点</p><p>枚举值：</p><ul><li>PRIMARY： 主节点</li><li>HIDDEN： hidden节点</li></ul>
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
        if (array_key_exists("NewIPAddress",$param) and $param["NewIPAddress"] !== null) {
            $this->NewIPAddress = $param["NewIPAddress"];
        }

        if (array_key_exists("OldIpAddress",$param) and $param["OldIpAddress"] !== null) {
            $this->OldIpAddress = $param["OldIpAddress"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
