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
 * 磁盘信息
 *
 * @method string getDiskType() 获取数据盘类型，创建EMR容器集群实例可选
<li> SSD云盘: CLOUD_SSD</li>
<li>高效云盘: CLOUD_PREMIUM</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置数据盘类型，创建EMR容器集群实例可选
<li> SSD云盘: CLOUD_SSD</li>
<li>高效云盘: CLOUD_PREMIUM</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskCapacity() 获取单块大小GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskCapacity(integer $DiskCapacity) 设置单块大小GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskNumber() 获取数据盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskNumber(integer $DiskNumber) 设置数据盘数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class Disk extends AbstractModel
{
    /**
     * @var string 数据盘类型，创建EMR容器集群实例可选
<li> SSD云盘: CLOUD_SSD</li>
<li>高效云盘: CLOUD_PREMIUM</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var integer 单块大小GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskCapacity;

    /**
     * @var integer 数据盘数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskNumber;

    /**
     * @param string $DiskType 数据盘类型，创建EMR容器集群实例可选
<li> SSD云盘: CLOUD_SSD</li>
<li>高效云盘: CLOUD_PREMIUM</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskCapacity 单块大小GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskNumber 数据盘数量
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskCapacity",$param) and $param["DiskCapacity"] !== null) {
            $this->DiskCapacity = $param["DiskCapacity"];
        }

        if (array_key_exists("DiskNumber",$param) and $param["DiskNumber"] !== null) {
            $this->DiskNumber = $param["DiskNumber"];
        }
    }
}
