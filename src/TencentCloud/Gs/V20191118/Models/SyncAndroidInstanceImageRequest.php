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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncAndroidInstanceImage请求参数结构体
 *
 * @method string getAndroidInstanceImageId() 获取安卓实例镜像 ID
 * @method void setAndroidInstanceImageId(string $AndroidInstanceImageId) 设置安卓实例镜像 ID
 * @method array getDestinationZones() 获取目的同步可用区列表
 * @method void setDestinationZones(array $DestinationZones) 设置目的同步可用区列表
 */
class SyncAndroidInstanceImageRequest extends AbstractModel
{
    /**
     * @var string 安卓实例镜像 ID
     */
    public $AndroidInstanceImageId;

    /**
     * @var array 目的同步可用区列表
     */
    public $DestinationZones;

    /**
     * @param string $AndroidInstanceImageId 安卓实例镜像 ID
     * @param array $DestinationZones 目的同步可用区列表
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
        if (array_key_exists("AndroidInstanceImageId",$param) and $param["AndroidInstanceImageId"] !== null) {
            $this->AndroidInstanceImageId = $param["AndroidInstanceImageId"];
        }

        if (array_key_exists("DestinationZones",$param) and $param["DestinationZones"] !== null) {
            $this->DestinationZones = $param["DestinationZones"];
        }
    }
}
