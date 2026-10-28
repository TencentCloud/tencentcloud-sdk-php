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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResizeDBCustomNodeDisk请求参数结构体
 *
 * @method string getNodeId() 获取<p>节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p>
 * @method string getDiskId() 获取<p>节点磁盘ID</p>
 * @method void setDiskId(string $DiskId) 设置<p>节点磁盘ID</p>
 * @method integer getDiskSize() 获取<p>调整后的磁盘容量大小</p><p>单位：GB</p><p>必须大于当前硬盘大小。系统盘小于2048，数据盘小于32000</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>调整后的磁盘容量大小</p><p>单位：GB</p><p>必须大于当前硬盘大小。系统盘小于2048，数据盘小于32000</p>
 */
class ResizeDBCustomNodeDiskRequest extends AbstractModel
{
    /**
     * @var string <p>节点ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点磁盘ID</p>
     */
    public $DiskId;

    /**
     * @var integer <p>调整后的磁盘容量大小</p><p>单位：GB</p><p>必须大于当前硬盘大小。系统盘小于2048，数据盘小于32000</p>
     */
    public $DiskSize;

    /**
     * @param string $NodeId <p>节点ID</p>
     * @param string $DiskId <p>节点磁盘ID</p>
     * @param integer $DiskSize <p>调整后的磁盘容量大小</p><p>单位：GB</p><p>必须大于当前硬盘大小。系统盘小于2048，数据盘小于32000</p>
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
