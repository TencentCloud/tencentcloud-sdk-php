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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询输出的RTMP配置信息。
 *
 * @method integer getIdleTimeout() 获取空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChunkSize() 获取Chunk大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChunkSize(integer $ChunkSize) 设置Chunk大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDestinations() 获取转推RTMP的目标地址信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinations(array $Destinations) 设置转推RTMP的目标地址信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeOutputRTMPSettings extends AbstractModel
{
    /**
     * @var integer 空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdleTimeout;

    /**
     * @var integer Chunk大小。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChunkSize;

    /**
     * @var array 转推RTMP的目标地址信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destinations;

    /**
     * @param integer $IdleTimeout 空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChunkSize Chunk大小。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Destinations 转推RTMP的目标地址信息列表。
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
        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("ChunkSize",$param) and $param["ChunkSize"] !== null) {
            $this->ChunkSize = $param["ChunkSize"];
        }

        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new RTMPAddressDestination();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }
    }
}
