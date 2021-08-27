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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDevicesEnableState请求参数结构体
 *
 * @method array getDevicesItems() 获取多个设备标识
 * @method void setDevicesItems(array $DevicesItems) 设置多个设备标识
 * @method integer getStatus() 获取1：启用；0：禁用
 * @method void setStatus(integer $Status) 设置1：启用；0：禁用
 */
class UpdateDevicesEnableStateRequest extends AbstractModel
{
    /**
     * @var array 多个设备标识
     */
    public $DevicesItems;

    /**
     * @var integer 1：启用；0：禁用
     */
    public $Status;

    /**
     * @param array $DevicesItems 多个设备标识
     * @param integer $Status 1：启用；0：禁用
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
        if (array_key_exists("DevicesItems",$param) and $param["DevicesItems"] !== null) {
            $this->DevicesItems = [];
            foreach ($param["DevicesItems"] as $key => $value){
                $obj = new DevicesItem();
                $obj->deserialize($value);
                array_push($this->DevicesItems, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
