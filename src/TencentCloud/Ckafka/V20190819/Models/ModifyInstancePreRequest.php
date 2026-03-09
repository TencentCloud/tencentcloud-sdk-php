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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancePre请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method integer getDiskSize() 获取<p>磁盘大小 单位 GB     最大值为500000,步长100可以通过以下链接查看规格限制：https://cloud.tencent.com/document/product/597/122562</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>磁盘大小 单位 GB     最大值为500000,步长100可以通过以下链接查看规格限制：https://cloud.tencent.com/document/product/597/122562</p>
 * @method integer getBandWidth() 获取<p>峰值带宽 单位 MB/s可以通过以下链接查看规格限制及对应步长: https://cloud.tencent.com/document/product/597/11745</p>
 * @method void setBandWidth(integer $BandWidth) 设置<p>峰值带宽 单位 MB/s可以通过以下链接查看规格限制及对应步长: https://cloud.tencent.com/document/product/597/11745</p>
 * @method integer getPartition() 获取<p>分区上限 最大值: 40000, 步长: 100可以通过以下链接查看规格限制: https://cloud.tencent.com/document/product/597/122563</p>
 * @method void setPartition(integer $Partition) 设置<p>分区上限 最大值: 40000, 步长: 100可以通过以下链接查看规格限制: https://cloud.tencent.com/document/product/597/122563</p>
 */
class ModifyInstancePreRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>磁盘大小 单位 GB     最大值为500000,步长100可以通过以下链接查看规格限制：https://cloud.tencent.com/document/product/597/122562</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>峰值带宽 单位 MB/s可以通过以下链接查看规格限制及对应步长: https://cloud.tencent.com/document/product/597/11745</p>
     */
    public $BandWidth;

    /**
     * @var integer <p>分区上限 最大值: 40000, 步长: 100可以通过以下链接查看规格限制: https://cloud.tencent.com/document/product/597/122563</p>
     */
    public $Partition;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     * @param integer $DiskSize <p>磁盘大小 单位 GB     最大值为500000,步长100可以通过以下链接查看规格限制：https://cloud.tencent.com/document/product/597/122562</p>
     * @param integer $BandWidth <p>峰值带宽 单位 MB/s可以通过以下链接查看规格限制及对应步长: https://cloud.tencent.com/document/product/597/11745</p>
     * @param integer $Partition <p>分区上限 最大值: 40000, 步长: 100可以通过以下链接查看规格限制: https://cloud.tencent.com/document/product/597/122563</p>
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

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }
    }
}
