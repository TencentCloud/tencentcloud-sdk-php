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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncBlueprint请求参数结构体
 *
 * @method string getBlueprintId() 获取镜像ID。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像ID。
 * @method array getDestinationRegions() 获取同步镜像的目的地域列表。
 * @method void setDestinationRegions(array $DestinationRegions) 设置同步镜像的目的地域列表。
 */
class SyncBlueprintRequest extends AbstractModel
{
    /**
     * @var string 镜像ID。
     */
    public $BlueprintId;

    /**
     * @var array 同步镜像的目的地域列表。
     */
    public $DestinationRegions;

    /**
     * @param string $BlueprintId 镜像ID。
     * @param array $DestinationRegions 同步镜像的目的地域列表。
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("DestinationRegions",$param) and $param["DestinationRegions"] !== null) {
            $this->DestinationRegions = $param["DestinationRegions"];
        }
    }
}
