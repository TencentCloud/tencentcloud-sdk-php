<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachCamRole请求参数结构体
 *
 * @method string getInstanceId() 获取服务器ID
 * @method void setInstanceId(string $InstanceId) 设置服务器ID
 * @method string getRoleName() 获取角色名称。
 * @method void setRoleName(string $RoleName) 设置角色名称。
 */
class AttachCamRoleRequest extends AbstractModel
{
    /**
     * @var string 服务器ID
     */
    public $InstanceId;

    /**
     * @var string 角色名称。
     */
    public $RoleName;

    /**
     * @param string $InstanceId 服务器ID
     * @param string $RoleName 角色名称。
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
        if (array_key_exists('InstanceId',$param) and $param['InstanceId'] !== null) {
            $this->InstanceId = $param['InstanceId'];
        }

        if (array_key_exists('RoleName',$param) and $param['RoleName'] !== null) {
            $this->RoleName = $param['RoleName'];
        }
    }
}
