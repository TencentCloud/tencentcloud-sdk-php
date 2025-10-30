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
 * ModifyAsset请求参数结构体
 *
 * @method boolean getAll() 获取同步全部普通节点
 * @method void setAll(boolean $All) 设置同步全部普通节点
 * @method array getHosts() 获取要同步的主机列表uuid 
 * @method void setHosts(array $Hosts) 设置要同步的主机列表uuid 
 * @method boolean getAllSuperHost() 获取同步全部超级节点
 * @method void setAllSuperHost(boolean $AllSuperHost) 设置同步全部超级节点
 * @method array getNodeUniqueIds() 获取要同步的超级节点唯一id
 * @method void setNodeUniqueIds(array $NodeUniqueIds) 设置要同步的超级节点唯一id
 * @method integer getTimeoutSec() 获取超时时间(秒) 最低3600s
 * @method void setTimeoutSec(integer $TimeoutSec) 设置超时时间(秒) 最低3600s
 */
class ModifyAssetRequest extends AbstractModel
{
    /**
     * @var boolean 同步全部普通节点
     */
    public $All;

    /**
     * @var array 要同步的主机列表uuid 
     */
    public $Hosts;

    /**
     * @var boolean 同步全部超级节点
     */
    public $AllSuperHost;

    /**
     * @var array 要同步的超级节点唯一id
     */
    public $NodeUniqueIds;

    /**
     * @var integer 超时时间(秒) 最低3600s
     */
    public $TimeoutSec;

    /**
     * @param boolean $All 同步全部普通节点
     * @param array $Hosts 要同步的主机列表uuid 
     * @param boolean $AllSuperHost 同步全部超级节点
     * @param array $NodeUniqueIds 要同步的超级节点唯一id
     * @param integer $TimeoutSec 超时时间(秒) 最低3600s
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("AllSuperHost",$param) and $param["AllSuperHost"] !== null) {
            $this->AllSuperHost = $param["AllSuperHost"];
        }

        if (array_key_exists("NodeUniqueIds",$param) and $param["NodeUniqueIds"] !== null) {
            $this->NodeUniqueIds = $param["NodeUniqueIds"];
        }

        if (array_key_exists("TimeoutSec",$param) and $param["TimeoutSec"] !== null) {
            $this->TimeoutSec = $param["TimeoutSec"];
        }
    }
}
