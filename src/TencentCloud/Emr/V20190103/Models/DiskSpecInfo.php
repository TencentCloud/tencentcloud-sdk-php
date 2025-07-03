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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点磁盘信息
 *
 * @method integer getCount() 获取磁盘数量
 * @method void setCount(integer $Count) 设置磁盘数量
 * @method string getDiskType() 获取系统盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>

数据盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>
<li>CLOUD_HSSD：表示增强型SSD云硬盘。</li>
<li>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</li>
<li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
<li>CLOUD_BIGDATA：表示大数据型云硬盘。</li>
<li>CLOUD_HIGHIO：表示高IO型云硬盘。</li>
<li>CLOUD_BSSD：表示通用型SSD云硬盘。</li>
<li>REMOTE_SSD：表示远端SSD盘。</li>

 * @method void setDiskType(string $DiskType) 设置系统盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>

数据盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>
<li>CLOUD_HSSD：表示增强型SSD云硬盘。</li>
<li>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</li>
<li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
<li>CLOUD_BIGDATA：表示大数据型云硬盘。</li>
<li>CLOUD_HIGHIO：表示高IO型云硬盘。</li>
<li>CLOUD_BSSD：表示通用型SSD云硬盘。</li>
<li>REMOTE_SSD：表示远端SSD盘。</li>

 * @method integer getDiskSize() 获取数据容量，单位为GB
 * @method void setDiskSize(integer $DiskSize) 设置数据容量，单位为GB
 * @method integer getExtraPerformance() 获取额外性能
 * @method void setExtraPerformance(integer $ExtraPerformance) 设置额外性能
 */
class DiskSpecInfo extends AbstractModel
{
    /**
     * @var integer 磁盘数量
     */
    public $Count;

    /**
     * @var string 系统盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>

数据盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>
<li>CLOUD_HSSD：表示增强型SSD云硬盘。</li>
<li>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</li>
<li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
<li>CLOUD_BIGDATA：表示大数据型云硬盘。</li>
<li>CLOUD_HIGHIO：表示高IO型云硬盘。</li>
<li>CLOUD_BSSD：表示通用型SSD云硬盘。</li>
<li>REMOTE_SSD：表示远端SSD盘。</li>

     */
    public $DiskType;

    /**
     * @var integer 数据容量，单位为GB
     */
    public $DiskSize;

    /**
     * @var integer 额外性能
     */
    public $ExtraPerformance;

    /**
     * @param integer $Count 磁盘数量
     * @param string $DiskType 系统盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>

数据盘类型 取值范围：
<li>CLOUD_SSD：表示云SSD。</li>
<li>CLOUD_PREMIUM：表示高效云盘。</li>
<li>CLOUD_BASIC：表示云硬盘。</li>
<li>LOCAL_BASIC：表示本地盘。</li>
<li>LOCAL_SSD：表示本地SSD。</li>
<li>CLOUD_HSSD：表示增强型SSD云硬盘。</li>
<li>CLOUD_THROUGHPUT：表示吞吐型云硬盘。</li>
<li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
<li>CLOUD_BIGDATA：表示大数据型云硬盘。</li>
<li>CLOUD_HIGHIO：表示高IO型云硬盘。</li>
<li>CLOUD_BSSD：表示通用型SSD云硬盘。</li>
<li>REMOTE_SSD：表示远端SSD盘。</li>

     * @param integer $DiskSize 数据容量，单位为GB
     * @param integer $ExtraPerformance 额外性能
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("ExtraPerformance",$param) and $param["ExtraPerformance"] !== null) {
            $this->ExtraPerformance = $param["ExtraPerformance"];
        }
    }
}
