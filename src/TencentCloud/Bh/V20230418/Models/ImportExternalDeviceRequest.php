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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportExternalDevice请求参数结构体
 *
 * @method array getDeviceSet() 获取资产参数列表
 * @method void setDeviceSet(array $DeviceSet) 设置资产参数列表
 */
class ImportExternalDeviceRequest extends AbstractModel
{
    /**
     * @var array 资产参数列表
     */
    public $DeviceSet;

    /**
     * @param array $DeviceSet 资产参数列表
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
        if (array_key_exists("DeviceSet",$param) and $param["DeviceSet"] !== null) {
            $this->DeviceSet = [];
            foreach ($param["DeviceSet"] as $key => $value){
                $obj = new ExternalDevice();
                $obj->deserialize($value);
                array_push($this->DeviceSet, $obj);
            }
        }
    }
}
