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
 * CreatePositionFence请求参数结构体
 *
 * @method string getSpaceId() 获取位置空间Id
 * @method void setSpaceId(string $SpaceId) 设置位置空间Id
 * @method string getFenceName() 获取围栏名称
 * @method void setFenceName(string $FenceName) 设置围栏名称
 * @method string getFenceArea() 获取围栏区域信息，采用 GeoJSON 格式
 * @method void setFenceArea(string $FenceArea) 设置围栏区域信息，采用 GeoJSON 格式
 * @method string getFenceDesc() 获取围栏描述
 * @method void setFenceDesc(string $FenceDesc) 设置围栏描述
 */
class CreatePositionFenceRequest extends AbstractModel
{
    /**
     * @var string 位置空间Id
     */
    public $SpaceId;

    /**
     * @var string 围栏名称
     */
    public $FenceName;

    /**
     * @var string 围栏区域信息，采用 GeoJSON 格式
     */
    public $FenceArea;

    /**
     * @var string 围栏描述
     */
    public $FenceDesc;

    /**
     * @param string $SpaceId 位置空间Id
     * @param string $FenceName 围栏名称
     * @param string $FenceArea 围栏区域信息，采用 GeoJSON 格式
     * @param string $FenceDesc 围栏描述
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FenceName",$param) and $param["FenceName"] !== null) {
            $this->FenceName = $param["FenceName"];
        }

        if (array_key_exists("FenceArea",$param) and $param["FenceArea"] !== null) {
            $this->FenceArea = $param["FenceArea"];
        }

        if (array_key_exists("FenceDesc",$param) and $param["FenceDesc"] !== null) {
            $this->FenceDesc = $param["FenceDesc"];
        }
    }
}
