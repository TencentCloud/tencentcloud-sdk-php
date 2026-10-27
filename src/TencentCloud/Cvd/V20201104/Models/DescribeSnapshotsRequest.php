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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshots请求参数结构体
 *
 * @method string getSnapshotRegion() 获取<p>快照所在的地域</p>
 * @method void setSnapshotRegion(string $SnapshotRegion) 设置<p>快照所在的地域</p>
 * @method integer getPageNumber() 获取<p>页号</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页号</p>
 * @method integer getPageSize() 获取<p>每页大小，最大100，默认20</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，最大100，默认20</p>
 * @method array getFilters() 获取<p>检索条件，Filter的name取值：<br>InstanceId：实例ID，返回当前实例挂载的云硬盘关联的快照信息<br>DiskId：云硬盘ID，返回当前云硬盘关联的快照信息</p>
 * @method void setFilters(array $Filters) 设置<p>检索条件，Filter的name取值：<br>InstanceId：实例ID，返回当前实例挂载的云硬盘关联的快照信息<br>DiskId：云硬盘ID，返回当前云硬盘关联的快照信息</p>
 */
class DescribeSnapshotsRequest extends AbstractModel
{
    /**
     * @var string <p>快照所在的地域</p>
     */
    public $SnapshotRegion;

    /**
     * @var integer <p>页号</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小，最大100，默认20</p>
     */
    public $PageSize;

    /**
     * @var array <p>检索条件，Filter的name取值：<br>InstanceId：实例ID，返回当前实例挂载的云硬盘关联的快照信息<br>DiskId：云硬盘ID，返回当前云硬盘关联的快照信息</p>
     */
    public $Filters;

    /**
     * @param string $SnapshotRegion <p>快照所在的地域</p>
     * @param integer $PageNumber <p>页号</p>
     * @param integer $PageSize <p>每页大小，最大100，默认20</p>
     * @param array $Filters <p>检索条件，Filter的name取值：<br>InstanceId：实例ID，返回当前实例挂载的云硬盘关联的快照信息<br>DiskId：云硬盘ID，返回当前云硬盘关联的快照信息</p>
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
        if (array_key_exists("SnapshotRegion",$param) and $param["SnapshotRegion"] !== null) {
            $this->SnapshotRegion = $param["SnapshotRegion"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
