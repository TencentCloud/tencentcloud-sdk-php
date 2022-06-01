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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindDeviceResource请求参数结构体
 *
 * @method array getDeviceIdSet() 获取资产ID集合
 * @method void setDeviceIdSet(array $DeviceIdSet) 设置资产ID集合
 * @method string getResourceId() 获取堡垒机服务ID
 * @method void setResourceId(string $ResourceId) 设置堡垒机服务ID
 */
class BindDeviceResourceRequest extends AbstractModel
{
    /**
     * @var array 资产ID集合
     */
    public $DeviceIdSet;

    /**
     * @var string 堡垒机服务ID
     */
    public $ResourceId;

    /**
     * @param array $DeviceIdSet 资产ID集合
     * @param string $ResourceId 堡垒机服务ID
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
