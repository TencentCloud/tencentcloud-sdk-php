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
 * ListLocations请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>调用时所在workspace唯一id，必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>调用时所在workspace唯一id，必填</p>
 * @method string getLocationNamePattern() 获取<p>存储位置名匹配模式，支持SQL LIKE语法</p>
 * @method void setLocationNamePattern(string $LocationNamePattern) 设置<p>存储位置名匹配模式，支持SQL LIKE语法</p>
 * @method boolean getSnapshotBased() 获取<p>是否基于快照分页</p>
 * @method void setSnapshotBased(boolean $SnapshotBased) 设置<p>是否基于快照分页</p>
 * @method string getSnapshotId() 获取<p>快照ID</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>快照ID</p>
 * @method integer getPageNumber() 获取<p>页码，从1开始，可选，默认1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，可选，默认1</p>
 * @method integer getPageSize() 获取<p>每页大小，默认10，取值范围 1~500</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，默认10，取值范围 1~500</p>
 */
class ListLocationsRequest extends AbstractModel
{
    /**
     * @var string <p>调用时所在workspace唯一id，必填</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>存储位置名匹配模式，支持SQL LIKE语法</p>
     */
    public $LocationNamePattern;

    /**
     * @var boolean <p>是否基于快照分页</p>
     */
    public $SnapshotBased;

    /**
     * @var string <p>快照ID</p>
     */
    public $SnapshotId;

    /**
     * @var integer <p>页码，从1开始，可选，默认1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小，默认10，取值范围 1~500</p>
     */
    public $PageSize;

    /**
     * @param string $WorkspaceId <p>调用时所在workspace唯一id，必填</p>
     * @param string $LocationNamePattern <p>存储位置名匹配模式，支持SQL LIKE语法</p>
     * @param boolean $SnapshotBased <p>是否基于快照分页</p>
     * @param string $SnapshotId <p>快照ID</p>
     * @param integer $PageNumber <p>页码，从1开始，可选，默认1</p>
     * @param integer $PageSize <p>每页大小，默认10，取值范围 1~500</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("LocationNamePattern",$param) and $param["LocationNamePattern"] !== null) {
            $this->LocationNamePattern = $param["LocationNamePattern"];
        }

        if (array_key_exists("SnapshotBased",$param) and $param["SnapshotBased"] !== null) {
            $this->SnapshotBased = $param["SnapshotBased"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
