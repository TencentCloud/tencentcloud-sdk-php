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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAvailableModelList请求参数结构体
 *
 * @method integer getIdcId() 获取机房ID
 * @method void setIdcId(integer $IdcId) 设置机房ID
 * @method string getDeviceType() 获取server 服务器，netDevice 网络设备
 * @method void setDeviceType(string $DeviceType) 设置server 服务器，netDevice 网络设备
 */
class DescribeAvailableModelListRequest extends AbstractModel
{
    /**
     * @var integer 机房ID
     */
    public $IdcId;

    /**
     * @var string server 服务器，netDevice 网络设备
     */
    public $DeviceType;

    /**
     * @param integer $IdcId 机房ID
     * @param string $DeviceType server 服务器，netDevice 网络设备
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
        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
