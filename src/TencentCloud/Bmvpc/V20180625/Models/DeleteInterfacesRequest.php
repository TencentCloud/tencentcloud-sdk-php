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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInterfaces请求参数结构体
 *
 * @method string getInstanceId() 获取物理机ID
 * @method void setInstanceId(string $InstanceId) 设置物理机ID
 * @method array getSubnetIds() 获取子网的唯一ID列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网的唯一ID列表
 */
class DeleteInterfacesRequest extends AbstractModel
{
    /**
     * @var string 物理机ID
     */
    public $InstanceId;

    /**
     * @var array 子网的唯一ID列表
     */
    public $SubnetIds;

    /**
     * @param string $InstanceId 物理机ID
     * @param array $SubnetIds 子网的唯一ID列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
