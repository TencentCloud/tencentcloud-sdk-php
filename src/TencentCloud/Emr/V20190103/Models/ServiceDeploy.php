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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点部署配置信息，给tf侧同学使用
 *
 * @method string getSoftwareName() 获取<p>组件名称</p>
 * @method void setSoftwareName(string $SoftwareName) 设置<p>组件名称</p>
 * @method array getRoles() 获取<p>组件下角色名称</p>
 * @method void setRoles(array $Roles) 设置<p>组件下角色名称</p>
 */
class ServiceDeploy extends AbstractModel
{
    /**
     * @var string <p>组件名称</p>
     */
    public $SoftwareName;

    /**
     * @var array <p>组件下角色名称</p>
     */
    public $Roles;

    /**
     * @param string $SoftwareName <p>组件名称</p>
     * @param array $Roles <p>组件下角色名称</p>
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
        if (array_key_exists("SoftwareName",$param) and $param["SoftwareName"] !== null) {
            $this->SoftwareName = $param["SoftwareName"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }
    }
}
