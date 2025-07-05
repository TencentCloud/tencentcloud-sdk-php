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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询租户楼栋数量和楼栋建筑面积相应体
 *
 * @method integer getBuildingCount() 获取总楼栋数量
 * @method void setBuildingCount(integer $BuildingCount) 设置总楼栋数量
 * @method float getBuildingArea() 获取总建筑面积
 * @method void setBuildingArea(float $BuildingArea) 设置总建筑面积
 */
class SpaceDataTotalStatsRes extends AbstractModel
{
    /**
     * @var integer 总楼栋数量
     */
    public $BuildingCount;

    /**
     * @var float 总建筑面积
     */
    public $BuildingArea;

    /**
     * @param integer $BuildingCount 总楼栋数量
     * @param float $BuildingArea 总建筑面积
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
        if (array_key_exists("BuildingCount",$param) and $param["BuildingCount"] !== null) {
            $this->BuildingCount = $param["BuildingCount"];
        }

        if (array_key_exists("BuildingArea",$param) and $param["BuildingArea"] !== null) {
            $this->BuildingArea = $param["BuildingArea"];
        }
    }
}
