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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResizeDataDisks请求参数结构体
 *
 * @method string getInstanceId() 获取EMR集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置EMR集群实例ID
 * @method integer getDiskSize() 获取需要扩充的容量值，容量值需要大于原容量，并且为10的整数倍
 * @method void setDiskSize(integer $DiskSize) 设置需要扩充的容量值，容量值需要大于原容量，并且为10的整数倍
 * @method array getCvmInstanceIds() 获取需要扩容的节点ID列表
 * @method void setCvmInstanceIds(array $CvmInstanceIds) 设置需要扩容的节点ID列表
 * @method array getDiskIds() 获取需要扩容的云盘ID
 * @method void setDiskIds(array $DiskIds) 设置需要扩容的云盘ID
 * @method boolean getResizeAll() 获取是否扩容全部云硬盘
 * @method void setResizeAll(boolean $ResizeAll) 设置是否扩容全部云硬盘
 */
class ResizeDataDisksRequest extends AbstractModel
{
    /**
     * @var string EMR集群实例ID
     */
    public $InstanceId;

    /**
     * @var integer 需要扩充的容量值，容量值需要大于原容量，并且为10的整数倍
     */
    public $DiskSize;

    /**
     * @var array 需要扩容的节点ID列表
     */
    public $CvmInstanceIds;

    /**
     * @var array 需要扩容的云盘ID
     */
    public $DiskIds;

    /**
     * @var boolean 是否扩容全部云硬盘
     */
    public $ResizeAll;

    /**
     * @param string $InstanceId EMR集群实例ID
     * @param integer $DiskSize 需要扩充的容量值，容量值需要大于原容量，并且为10的整数倍
     * @param array $CvmInstanceIds 需要扩容的节点ID列表
     * @param array $DiskIds 需要扩容的云盘ID
     * @param boolean $ResizeAll 是否扩容全部云硬盘
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("ResizeAll",$param) and $param["ResizeAll"] !== null) {
            $this->ResizeAll = $param["ResizeAll"];
        }
    }
}
