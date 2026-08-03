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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateClusterGroup请求参数结构体
 *
 * @method string getId() 获取<p>集群组 ID（定位要更新的集群组）</p>
 * @method void setId(string $Id) 设置<p>集群组 ID（定位要更新的集群组）</p>
 * @method string getName() 获取<p>集群组名称（可选，为空则保持原名）</p>
 * @method void setName(string $Name) 设置<p>集群组名称（可选，为空则保持原名）</p>
 * @method string getDescription() 获取<p>集群组描述</p>
 * @method void setDescription(string $Description) 设置<p>集群组描述</p>
 * @method string getConfig() 获取<p>集群组配置</p>
 * @method void setConfig(string $Config) 设置<p>集群组配置</p>
 */
class UpdateClusterGroupRequest extends AbstractModel
{
    /**
     * @var string <p>集群组 ID（定位要更新的集群组）</p>
     */
    public $Id;

    /**
     * @var string <p>集群组名称（可选，为空则保持原名）</p>
     */
    public $Name;

    /**
     * @var string <p>集群组描述</p>
     */
    public $Description;

    /**
     * @var string <p>集群组配置</p>
     */
    public $Config;

    /**
     * @param string $Id <p>集群组 ID（定位要更新的集群组）</p>
     * @param string $Name <p>集群组名称（可选，为空则保持原名）</p>
     * @param string $Description <p>集群组描述</p>
     * @param string $Config <p>集群组配置</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
