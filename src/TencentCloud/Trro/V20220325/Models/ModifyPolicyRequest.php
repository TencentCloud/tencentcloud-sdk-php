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
 * ModifyPolicy请求参数结构体
 *
 * @method string getProjectId() 获取修改权限配置的项目ID
 * @method void setProjectId(string $ProjectId) 设置修改权限配置的项目ID
 * @method string getRemoteDeviceId() 获取修改权限配置的远端设备ID
 * @method void setRemoteDeviceId(string $RemoteDeviceId) 设置修改权限配置的远端设备ID
 * @method array getFieldDeviceIds() 获取权限修改涉及的现场设备ID数组
 * @method void setFieldDeviceIds(array $FieldDeviceIds) 设置权限修改涉及的现场设备ID数组
 * @method string getPolicyMode() 获取修改的目标权限模式，black为黑名单，white为白名单
 * @method void setPolicyMode(string $PolicyMode) 设置修改的目标权限模式，black为黑名单，white为白名单
 * @method string getModifyMode() 获取修改模式，add为新增（添加现场设备I关联），remove为删除（解除现场设备关联），set为设置（更新现场设备关联）
 * @method void setModifyMode(string $ModifyMode) 设置修改模式，add为新增（添加现场设备I关联），remove为删除（解除现场设备关联），set为设置（更新现场设备关联）
 */
class ModifyPolicyRequest extends AbstractModel
{
    /**
     * @var string 修改权限配置的项目ID
     */
    public $ProjectId;

    /**
     * @var string 修改权限配置的远端设备ID
     */
    public $RemoteDeviceId;

    /**
     * @var array 权限修改涉及的现场设备ID数组
     */
    public $FieldDeviceIds;

    /**
     * @var string 修改的目标权限模式，black为黑名单，white为白名单
     */
    public $PolicyMode;

    /**
     * @var string 修改模式，add为新增（添加现场设备I关联），remove为删除（解除现场设备关联），set为设置（更新现场设备关联）
     */
    public $ModifyMode;

    /**
     * @param string $ProjectId 修改权限配置的项目ID
     * @param string $RemoteDeviceId 修改权限配置的远端设备ID
     * @param array $FieldDeviceIds 权限修改涉及的现场设备ID数组
     * @param string $PolicyMode 修改的目标权限模式，black为黑名单，white为白名单
     * @param string $ModifyMode 修改模式，add为新增（添加现场设备I关联），remove为删除（解除现场设备关联），set为设置（更新现场设备关联）
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

        if (array_key_exists("RemoteDeviceId",$param) and $param["RemoteDeviceId"] !== null) {
            $this->RemoteDeviceId = $param["RemoteDeviceId"];
        }

        if (array_key_exists("FieldDeviceIds",$param) and $param["FieldDeviceIds"] !== null) {
            $this->FieldDeviceIds = $param["FieldDeviceIds"];
        }

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }

        if (array_key_exists("ModifyMode",$param) and $param["ModifyMode"] !== null) {
            $this->ModifyMode = $param["ModifyMode"];
        }
    }
}
