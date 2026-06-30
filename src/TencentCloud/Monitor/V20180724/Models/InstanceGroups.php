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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警对象所属实例组
 *
 * @method integer getId() 获取<p>实例组 Id</p>
 * @method void setId(integer $Id) 设置<p>实例组 Id</p>
 * @method string getName() 获取<p>实例组名称</p>
 * @method void setName(string $Name) 设置<p>实例组名称</p>
 */
class InstanceGroups extends AbstractModel
{
    /**
     * @var integer <p>实例组 Id</p>
     */
    public $Id;

    /**
     * @var string <p>实例组名称</p>
     */
    public $Name;

    /**
     * @param integer $Id <p>实例组 Id</p>
     * @param string $Name <p>实例组名称</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
