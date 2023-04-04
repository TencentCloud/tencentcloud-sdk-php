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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchDeletePolicy请求参数结构体
 *
 * @method string getProjectId() 获取删除权限配置的项目ID
 * @method void setProjectId(string $ProjectId) 设置删除权限配置的项目ID
 * @method array getRemoteDeviceIds() 获取删除权限配置的远端设备ID列表
 * @method void setRemoteDeviceIds(array $RemoteDeviceIds) 设置删除权限配置的远端设备ID列表
 * @method string getPolicyMode() 获取删除权限配置的权限模式, black为黑名单，white为白名单
 * @method void setPolicyMode(string $PolicyMode) 设置删除权限配置的权限模式, black为黑名单，white为白名单
 */
class BatchDeletePolicyRequest extends AbstractModel
{
    /**
     * @var string 删除权限配置的项目ID
     */
    public $ProjectId;

    /**
     * @var array 删除权限配置的远端设备ID列表
     */
    public $RemoteDeviceIds;

    /**
     * @var string 删除权限配置的权限模式, black为黑名单，white为白名单
     */
    public $PolicyMode;

    /**
     * @param string $ProjectId 删除权限配置的项目ID
     * @param array $RemoteDeviceIds 删除权限配置的远端设备ID列表
     * @param string $PolicyMode 删除权限配置的权限模式, black为黑名单，white为白名单
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RemoteDeviceIds",$param) and $param["RemoteDeviceIds"] !== null) {
            $this->RemoteDeviceIds = $param["RemoteDeviceIds"];
        }

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }
    }
}
