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
 * 目标地域镜像信息。
 *
 * @method string getRegion() 获取目标地域。
 * @method void setRegion(string $Region) 设置目标地域。
 * @method string getBlueprintId() 获取目标地域镜像ID。
 * @method void setBlueprintId(string $BlueprintId) 设置目标地域镜像ID。
 */
class DestinationRegionBlueprint extends AbstractModel
{
    /**
     * @var string 目标地域。
     */
    public $Region;

    /**
     * @var string 目标地域镜像ID。
     */
    public $BlueprintId;

    /**
     * @param string $Region 目标地域。
     * @param string $BlueprintId 目标地域镜像ID。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }
    }
}
