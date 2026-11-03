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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分页查询存储位置列表响应
 *
 * @method array getLocations() 获取存储位置详情列表（Deprecated: 请使用 Items，平铺含订阅状态；前端切换完成后移除）
 * @method void setLocations(array $Locations) 设置存储位置详情列表（Deprecated: 请使用 Items，平铺含订阅状态；前端切换完成后移除）
 * @method integer getTotalCount() 获取结果总条数
 * @method void setTotalCount(integer $TotalCount) 设置结果总条数
 * @method string getSnapshotId() 获取快照ID
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID
 * @method array getItems() 获取存储位置 + 订阅平铺列表（与 Locations 同序同长，前端优先使用本字段）；订阅状态判断：FileEventSubscription 非空即已开启
 * @method void setItems(array $Items) 设置存储位置 + 订阅平铺列表（与 Locations 同序同长，前端优先使用本字段）；订阅状态判断：FileEventSubscription 非空即已开启
 */
class ListLocationsRsp extends AbstractModel
{
    /**
     * @var array 存储位置详情列表（Deprecated: 请使用 Items，平铺含订阅状态；前端切换完成后移除）
     */
    public $Locations;

    /**
     * @var integer 结果总条数
     */
    public $TotalCount;

    /**
     * @var string 快照ID
     */
    public $SnapshotId;

    /**
     * @var array 存储位置 + 订阅平铺列表（与 Locations 同序同长，前端优先使用本字段）；订阅状态判断：FileEventSubscription 非空即已开启
     */
    public $Items;

    /**
     * @param array $Locations 存储位置详情列表（Deprecated: 请使用 Items，平铺含订阅状态；前端切换完成后移除）
     * @param integer $TotalCount 结果总条数
     * @param string $SnapshotId 快照ID
     * @param array $Items 存储位置 + 订阅平铺列表（与 Locations 同序同长，前端优先使用本字段）；订阅状态判断：FileEventSubscription 非空即已开启
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
        if (array_key_exists("Locations",$param) and $param["Locations"] !== null) {
            $this->Locations = [];
            foreach ($param["Locations"] as $key => $value){
                $obj = new LocationInfo();
                $obj->deserialize($value);
                array_push($this->Locations, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ListLocationItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
