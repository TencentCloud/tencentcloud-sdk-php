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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquireVmPrice请求参数结构体
 *
 * @method string getType() 获取服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
 * @method void setType(string $Type) 设置服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
 * @method string getLightHouseBundleId() 获取轻量云服务器套餐ID。
当Type=LightHouse时必传
 * @method void setLightHouseBundleId(string $LightHouseBundleId) 设置轻量云服务器套餐ID。
当Type=LightHouse时必传
 * @method string getLightHouseBlueprintId() 获取轻量云服务器镜像ID。当Type=LightHouse时必传
 * @method void setLightHouseBlueprintId(string $LightHouseBlueprintId) 设置轻量云服务器镜像ID。当Type=LightHouse时必传
 */
class InquireVmPriceRequest extends AbstractModel
{
    /**
     * @var string 服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
     */
    public $Type;

    /**
     * @var string 轻量云服务器套餐ID。
当Type=LightHouse时必传
     */
    public $LightHouseBundleId;

    /**
     * @var string 轻量云服务器镜像ID。当Type=LightHouse时必传
     */
    public $LightHouseBlueprintId;

    /**
     * @param string $Type 服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
     * @param string $LightHouseBundleId 轻量云服务器套餐ID。
当Type=LightHouse时必传
     * @param string $LightHouseBlueprintId 轻量云服务器镜像ID。当Type=LightHouse时必传
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LightHouseBundleId",$param) and $param["LightHouseBundleId"] !== null) {
            $this->LightHouseBundleId = $param["LightHouseBundleId"];
        }

        if (array_key_exists("LightHouseBlueprintId",$param) and $param["LightHouseBlueprintId"] !== null) {
            $this->LightHouseBlueprintId = $param["LightHouseBlueprintId"];
        }
    }
}
