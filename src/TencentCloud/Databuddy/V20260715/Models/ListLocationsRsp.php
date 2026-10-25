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
 * @method array getLocations() 获取存储位置详情列表
 * @method void setLocations(array $Locations) 设置存储位置详情列表
 * @method integer getTotalCount() 获取结果总条数
 * @method void setTotalCount(integer $TotalCount) 设置结果总条数
 * @method string getSnapshotId() 获取快照ID
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID
 */
class ListLocationsRsp extends AbstractModel
{
    /**
     * @var array 存储位置详情列表
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
     * @param array $Locations 存储位置详情列表
     * @param integer $TotalCount 结果总条数
     * @param string $SnapshotId 快照ID
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
    }
}
