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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例节点信息，包括节点类型、节点所在可用区。
 *
 * @method string getRole() 获取节点类型，值可以为：
Primary，代表主节点；
Standby，代表备节点。
 * @method void setRole(string $Role) 设置节点类型，值可以为：
Primary，代表主节点；
Standby，代表备节点。
 * @method string getZone() 获取节点所在可用区，例如 ap-guangzhou-1。
 * @method void setZone(string $Zone) 设置节点所在可用区，例如 ap-guangzhou-1。
 */
class DBNode extends AbstractModel
{
    /**
     * @var string 节点类型，值可以为：
Primary，代表主节点；
Standby，代表备节点。
     */
    public $Role;

    /**
     * @var string 节点所在可用区，例如 ap-guangzhou-1。
     */
    public $Zone;

    /**
     * @param string $Role 节点类型，值可以为：
Primary，代表主节点；
Standby，代表备节点。
     * @param string $Zone 节点所在可用区，例如 ap-guangzhou-1。
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
