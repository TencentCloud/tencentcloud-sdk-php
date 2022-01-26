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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopySnapshotCrossRegions请求参数结构体
 *
 * @method array getDestinationRegions() 获取快照需要复制到的目标地域，各地域的标准取值可通过接口[DescribeRegions](https://cloud.tencent.com/document/product/213/9456)查询，且只能传入支持快照的地域。
 * @method void setDestinationRegions(array $DestinationRegions) 设置快照需要复制到的目标地域，各地域的标准取值可通过接口[DescribeRegions](https://cloud.tencent.com/document/product/213/9456)查询，且只能传入支持快照的地域。
 * @method string getSnapshotId() 获取需要跨地域复制的源快照ID，可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method void setSnapshotId(string $SnapshotId) 设置需要跨地域复制的源快照ID，可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method string getSnapshotName() 获取新复制快照的名称，如果不传，则默认取值为“Copied 源快照ID from 地域名”。
 * @method void setSnapshotName(string $SnapshotName) 设置新复制快照的名称，如果不传，则默认取值为“Copied 源快照ID from 地域名”。
 */
class CopySnapshotCrossRegionsRequest extends AbstractModel
{
    /**
     * @var array 快照需要复制到的目标地域，各地域的标准取值可通过接口[DescribeRegions](https://cloud.tencent.com/document/product/213/9456)查询，且只能传入支持快照的地域。
     */
    public $DestinationRegions;

    /**
     * @var string 需要跨地域复制的源快照ID，可通过[DescribeSnapshots](/document/product/362/15647)查询。
     */
    public $SnapshotId;

    /**
     * @var string 新复制快照的名称，如果不传，则默认取值为“Copied 源快照ID from 地域名”。
     */
    public $SnapshotName;

    /**
     * @param array $DestinationRegions 快照需要复制到的目标地域，各地域的标准取值可通过接口[DescribeRegions](https://cloud.tencent.com/document/product/213/9456)查询，且只能传入支持快照的地域。
     * @param string $SnapshotId 需要跨地域复制的源快照ID，可通过[DescribeSnapshots](/document/product/362/15647)查询。
     * @param string $SnapshotName 新复制快照的名称，如果不传，则默认取值为“Copied 源快照ID from 地域名”。
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
        if (array_key_exists("DestinationRegions",$param) and $param["DestinationRegions"] !== null) {
            $this->DestinationRegions = $param["DestinationRegions"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
