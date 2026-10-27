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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取需要重置的实例id列表
 * @method void setInstanceIds(array $InstanceIds) 设置需要重置的实例id列表
 * @method string getImageId() 获取重置的目标镜像id
 * @method void setImageId(string $ImageId) 设置重置的目标镜像id
 * @method string getInstanceRegion() 获取重置实例的区域
 * @method void setInstanceRegion(string $InstanceRegion) 设置重置实例的区域
 * @method boolean getIsUnbind() 获取是否解绑机器原有绑定关系
 * @method void setIsUnbind(boolean $IsUnbind) 设置是否解绑机器原有绑定关系
 */
class ResetInstancesRequest extends AbstractModel
{
    /**
     * @var array 需要重置的实例id列表
     */
    public $InstanceIds;

    /**
     * @var string 重置的目标镜像id
     */
    public $ImageId;

    /**
     * @var string 重置实例的区域
     */
    public $InstanceRegion;

    /**
     * @var boolean 是否解绑机器原有绑定关系
     */
    public $IsUnbind;

    /**
     * @param array $InstanceIds 需要重置的实例id列表
     * @param string $ImageId 重置的目标镜像id
     * @param string $InstanceRegion 重置实例的区域
     * @param boolean $IsUnbind 是否解绑机器原有绑定关系
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("IsUnbind",$param) and $param["IsUnbind"] !== null) {
            $this->IsUnbind = $param["IsUnbind"];
        }
    }
}
