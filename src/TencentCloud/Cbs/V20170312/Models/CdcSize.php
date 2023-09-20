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
 * 显示独享集群的大小
 *
 * @method integer getDiskTotal() 获取独享集群的总容量大小，单位GiB
 * @method void setDiskTotal(integer $DiskTotal) 设置独享集群的总容量大小，单位GiB
 * @method integer getDiskAvailable() 获取独享集群的可用容量大小，单位GiB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskAvailable(integer $DiskAvailable) 设置独享集群的可用容量大小，单位GiB
注意：此字段可能返回 null，表示取不到有效值。
 */
class CdcSize extends AbstractModel
{
    /**
     * @var integer 独享集群的总容量大小，单位GiB
     */
    public $DiskTotal;

    /**
     * @var integer 独享集群的可用容量大小，单位GiB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskAvailable;

    /**
     * @param integer $DiskTotal 独享集群的总容量大小，单位GiB
     * @param integer $DiskAvailable 独享集群的可用容量大小，单位GiB
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
        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }
    }
}
