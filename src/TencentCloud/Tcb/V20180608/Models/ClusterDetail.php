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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDSQL-C数据库详情
 *
 * @method boolean getIsOpenPubNetAccess() 获取是否开启公网访问
 * @method void setIsOpenPubNetAccess(boolean $IsOpenPubNetAccess) 设置是否开启公网访问
 * @method float getMaxCpu() 获取最大算力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxCpu(float $MaxCpu) 设置最大算力
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMinCpu() 获取最小算力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinCpu(float $MinCpu) 设置最小算力
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取TDSQL-C集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置TDSQL-C集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsedStorage() 获取存储用量（单位：MB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedStorage(integer $UsedStorage) 设置存储用量（单位：MB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageLimit() 获取最大存储量（单位：GB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageLimit(integer $StorageLimit) 设置最大存储量（单位：GB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method string getDbVersion() 获取数据库类型
 * @method void setDbVersion(string $DbVersion) 设置数据库类型
 * @method string getWanStatus() 获取公网访问状态；open开启，opening开启中，closed关闭，closing关闭中
 * @method void setWanStatus(string $WanStatus) 设置公网访问状态；open开启，opening开启中，closed关闭，closing关闭中
 * @method string getClusterStatus() 获取数据库集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStatus(string $ClusterStatus) 设置数据库集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerlessStatus() 获取serverless状态
 * @method void setServerlessStatus(string $ServerlessStatus) 设置serverless状态
 */
class ClusterDetail extends AbstractModel
{
    /**
     * @var boolean 是否开启公网访问
     */
    public $IsOpenPubNetAccess;

    /**
     * @var float 最大算力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxCpu;

    /**
     * @var float 最小算力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinCpu;

    /**
     * @var string TDSQL-C集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 存储用量（单位：MB）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedStorage;

    /**
     * @var integer 最大存储量（单位：GB）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageLimit;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var string 数据库类型
     */
    public $DbVersion;

    /**
     * @var string 公网访问状态；open开启，opening开启中，closed关闭，closing关闭中
     */
    public $WanStatus;

    /**
     * @var string 数据库集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStatus;

    /**
     * @var string serverless状态
     */
    public $ServerlessStatus;

    /**
     * @param boolean $IsOpenPubNetAccess 是否开启公网访问
     * @param float $MaxCpu 最大算力
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MinCpu 最小算力
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status TDSQL-C集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsedStorage 存储用量（单位：MB）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageLimit 最大存储量（单位：GB）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbType 数据库类型
     * @param string $DbVersion 数据库类型
     * @param string $WanStatus 公网访问状态；open开启，opening开启中，closed关闭，closing关闭中
     * @param string $ClusterStatus 数据库集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerlessStatus serverless状态
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
        if (array_key_exists("IsOpenPubNetAccess",$param) and $param["IsOpenPubNetAccess"] !== null) {
            $this->IsOpenPubNetAccess = $param["IsOpenPubNetAccess"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }
    }
}
