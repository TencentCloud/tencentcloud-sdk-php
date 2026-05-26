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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PostgreSQL资源信息结构体
 *
 * @method string getName() 获取<p>数据库名称</p>
 * @method void setName(string $Name) 设置<p>数据库名称</p>
 * @method string getInstanceName() 获取<p>实例id</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例id</p>
 * @method integer getStatus() 获取<p>实例状态</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getVersion() 获取<p>数据库引擎版本</p>
 * @method void setVersion(string $Version) 设置<p>数据库引擎版本</p>
 */
class PostgreSQLInfo extends AbstractModel
{
    /**
     * @var string <p>数据库名称</p>
     */
    public $Name;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例状态</p>
     */
    public $Status;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>数据库引擎版本</p>
     */
    public $Version;

    /**
     * @param string $Name <p>数据库名称</p>
     * @param string $InstanceName <p>实例id</p>
     * @param integer $Status <p>实例状态</p>
     * @param string $Region <p>地域</p>
     * @param string $Version <p>数据库引擎版本</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
