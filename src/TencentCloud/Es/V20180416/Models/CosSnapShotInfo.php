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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 无
 *
 * @method string getCosBucket() 获取cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucket(string $CosBucket) 设置cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBasePath() 获取base path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasePath(string $BasePath) 设置base path
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotName() 获取快照名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取快照版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置快照版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCommonIndexArr() 获取普通[{"DataStreamName":"ilm-history-5","Is索引信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonIndexArr(array $CommonIndexArr) 设置普通[{"DataStreamName":"ilm-history-5","Is索引信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataStreamArr() 获取自治索引信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataStreamArr(array $DataStreamArr) 设置自治索引信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosSnapShotInfo extends AbstractModel
{
    /**
     * @var string cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucket;

    /**
     * @var string base path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasePath;

    /**
     * @var string 快照名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotName;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 快照版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var array 普通[{"DataStreamName":"ilm-history-5","Is索引信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonIndexArr;

    /**
     * @var array 自治索引信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataStreamArr;

    /**
     * @param string $CosBucket cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BasePath base path
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotName 快照名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 快照版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CommonIndexArr 普通[{"DataStreamName":"ilm-history-5","Is索引信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataStreamArr 自治索引信息列表
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CommonIndexArr",$param) and $param["CommonIndexArr"] !== null) {
            $this->CommonIndexArr = [];
            foreach ($param["CommonIndexArr"] as $key => $value){
                $obj = new CommonIndexInfo();
                $obj->deserialize($value);
                array_push($this->CommonIndexArr, $obj);
            }
        }

        if (array_key_exists("DataStreamArr",$param) and $param["DataStreamArr"] !== null) {
            $this->DataStreamArr = [];
            foreach ($param["DataStreamArr"] as $key => $value){
                $obj = new DataStreamInfo();
                $obj->deserialize($value);
                array_push($this->DataStreamArr, $obj);
            }
        }
    }
}
