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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询网关设备列表返回数据
 *
 * @method array getList() 获取网关下设备列表
 * @method void setList(array $List) 设置网关下设备列表
 * @method integer getTotalCount() 获取网关下设备总数
 * @method void setTotalCount(integer $TotalCount) 设置网关下设备总数
 */
class ListGatewayDevicesData extends AbstractModel
{
    /**
     * @var array 网关下设备列表
     */
    public $List;

    /**
     * @var integer 网关下设备总数
     */
    public $TotalCount;

    /**
     * @param array $List 网关下设备列表
     * @param integer $TotalCount 网关下设备总数
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new GatewayDevice();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
