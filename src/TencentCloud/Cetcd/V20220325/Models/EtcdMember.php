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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * etcd集群成员信息
 *
 * @method string getName() 获取节点名字
 * @method void setName(string $Name) 设置节点名字
 * @method string getVersion() 获取节点当前版本
 * @method void setVersion(string $Version) 设置节点当前版本
 * @method string getZone() 获取所属可用区
 * @method void setZone(string $Zone) 设置所属可用区
 * @method string getStatus() 获取节点状态
 * @method void setStatus(string $Status) 设置节点状态
 */
class EtcdMember extends AbstractModel
{
    /**
     * @var string 节点名字
     */
    public $Name;

    /**
     * @var string 节点当前版本
     */
    public $Version;

    /**
     * @var string 所属可用区
     */
    public $Zone;

    /**
     * @var string 节点状态
     */
    public $Status;

    /**
     * @param string $Name 节点名字
     * @param string $Version 节点当前版本
     * @param string $Zone 所属可用区
     * @param string $Status 节点状态
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
