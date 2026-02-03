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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分析引擎同步对象
 *
 * @method string getSrcInstanceType() 获取源端实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcInstanceType(string $SrcInstanceType) 设置源端实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcClusterId() 获取源端集群Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcClusterId(string $SrcClusterId) 设置源端集群Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcInstanceId() 获取源端实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源端实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplicationJobId() 获取复制任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicationJobId(string $ReplicationJobId) 设置复制任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method MigrateOpt getMigrateObjects() 获取同步对象详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrateObjects(MigrateOpt $MigrateObjects) 设置同步对象详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReplicationObject extends AbstractModel
{
    /**
     * @var string 源端实例类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcInstanceType;

    /**
     * @var string 源端集群Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcClusterId;

    /**
     * @var string 源端实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcInstanceId;

    /**
     * @var string 复制任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicationJobId;

    /**
     * @var MigrateOpt 同步对象详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrateObjects;

    /**
     * @param string $SrcInstanceType 源端实例类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcClusterId 源端集群Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcInstanceId 源端实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplicationJobId 复制任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param MigrateOpt $MigrateObjects 同步对象详情
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
        if (array_key_exists("SrcInstanceType",$param) and $param["SrcInstanceType"] !== null) {
            $this->SrcInstanceType = $param["SrcInstanceType"];
        }

        if (array_key_exists("SrcClusterId",$param) and $param["SrcClusterId"] !== null) {
            $this->SrcClusterId = $param["SrcClusterId"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("ReplicationJobId",$param) and $param["ReplicationJobId"] !== null) {
            $this->ReplicationJobId = $param["ReplicationJobId"];
        }

        if (array_key_exists("MigrateObjects",$param) and $param["MigrateObjects"] !== null) {
            $this->MigrateObjects = new MigrateOpt();
            $this->MigrateObjects->deserialize($param["MigrateObjects"]);
        }
    }
}
