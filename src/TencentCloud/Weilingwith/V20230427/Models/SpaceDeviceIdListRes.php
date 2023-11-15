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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询指定空间id列表响应
 *
 * @method array getDeviceIds() 获取设备id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceIds(array $DeviceIds) 设置设备id列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpaceDeviceIdListRes extends AbstractModel
{
    /**
     * @var array 设备id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceIds;

    /**
     * @param array $DeviceIds 设备id列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }
    }
}
