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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncDevicesToIOA请求参数结构体
 *
 * @method array getDeviceIdSet() 获取资产ID集合。资产必须已绑定支持IOA功能的堡垒机实例。每次最多同步200个资产。
 * @method void setDeviceIdSet(array $DeviceIdSet) 设置资产ID集合。资产必须已绑定支持IOA功能的堡垒机实例。每次最多同步200个资产。
 */
class SyncDevicesToIOARequest extends AbstractModel
{
    /**
     * @var array 资产ID集合。资产必须已绑定支持IOA功能的堡垒机实例。每次最多同步200个资产。
     */
    public $DeviceIdSet;

    /**
     * @param array $DeviceIdSet 资产ID集合。资产必须已绑定支持IOA功能的堡垒机实例。每次最多同步200个资产。
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
        if (array_key_exists("DeviceIdSet",$param) and $param["DeviceIdSet"] !== null) {
            $this->DeviceIdSet = $param["DeviceIdSet"];
        }
    }
}
