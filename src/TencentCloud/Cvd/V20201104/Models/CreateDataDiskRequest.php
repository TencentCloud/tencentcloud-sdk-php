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
 * CreateDataDisk请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getDiskType() 获取数据盘类型，有效值CLOUD_SSD/CLOUD_PREMIUM
 * @method void setDiskType(string $DiskType) 设置数据盘类型，有效值CLOUD_SSD/CLOUD_PREMIUM
 * @method integer getDiskSize() 获取数据盘大小
 * @method void setDiskSize(integer $DiskSize) 设置数据盘大小
 * @method string getSnapShotId() 获取硬盘快照id
 * @method void setSnapShotId(string $SnapShotId) 设置硬盘快照id
 */
class CreateDataDiskRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 数据盘类型，有效值CLOUD_SSD/CLOUD_PREMIUM
     */
    public $DiskType;

    /**
     * @var integer 数据盘大小
     */
    public $DiskSize;

    /**
     * @var string 硬盘快照id
     */
    public $SnapShotId;

    /**
     * @param string $InstanceId 实例id
     * @param string $DiskType 数据盘类型，有效值CLOUD_SSD/CLOUD_PREMIUM
     * @param integer $DiskSize 数据盘大小
     * @param string $SnapShotId 硬盘快照id
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapShotId",$param) and $param["SnapShotId"] !== null) {
            $this->SnapShotId = $param["SnapShotId"];
        }
    }
}
