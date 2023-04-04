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
 * 权限信息
 *
 * @method string getRemoteDeviceId() 获取远端设备ID
 * @method void setRemoteDeviceId(string $RemoteDeviceId) 设置远端设备ID
 * @method array getFieldDeviceIds() 获取关联的现场设备ID
 * @method void setFieldDeviceIds(array $FieldDeviceIds) 设置关联的现场设备ID
 * @method string getModifyTime() 获取最近添加时间
 * @method void setModifyTime(string $ModifyTime) 设置最近添加时间
 */
class PolicyInfo extends AbstractModel
{
    /**
     * @var string 远端设备ID
     */
    public $RemoteDeviceId;

    /**
     * @var array 关联的现场设备ID
     */
    public $FieldDeviceIds;

    /**
     * @var string 最近添加时间
     */
    public $ModifyTime;

    /**
     * @param string $RemoteDeviceId 远端设备ID
     * @param array $FieldDeviceIds 关联的现场设备ID
     * @param string $ModifyTime 最近添加时间
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
        if (array_key_exists("RemoteDeviceId",$param) and $param["RemoteDeviceId"] !== null) {
            $this->RemoteDeviceId = $param["RemoteDeviceId"];
        }

        if (array_key_exists("FieldDeviceIds",$param) and $param["FieldDeviceIds"] !== null) {
            $this->FieldDeviceIds = $param["FieldDeviceIds"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
