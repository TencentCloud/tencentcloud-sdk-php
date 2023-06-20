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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Spark监控数据
 *
 * @method integer getShuffleWriteBytesCos() 获取shuffle写溢出到COS数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShuffleWriteBytesCos(integer $ShuffleWriteBytesCos) 设置shuffle写溢出到COS数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShuffleWriteBytesTotal() 获取shuffle写数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShuffleWriteBytesTotal(integer $ShuffleWriteBytesTotal) 设置shuffle写数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 */
class SparkMonitorMetrics extends AbstractModel
{
    /**
     * @var integer shuffle写溢出到COS数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShuffleWriteBytesCos;

    /**
     * @var integer shuffle写数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShuffleWriteBytesTotal;

    /**
     * @param integer $ShuffleWriteBytesCos shuffle写溢出到COS数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShuffleWriteBytesTotal shuffle写数据量，单位：byte
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
        if (array_key_exists("ShuffleWriteBytesCos",$param) and $param["ShuffleWriteBytesCos"] !== null) {
            $this->ShuffleWriteBytesCos = $param["ShuffleWriteBytesCos"];
        }

        if (array_key_exists("ShuffleWriteBytesTotal",$param) and $param["ShuffleWriteBytesTotal"] !== null) {
            $this->ShuffleWriteBytesTotal = $param["ShuffleWriteBytesTotal"];
        }
    }
}
