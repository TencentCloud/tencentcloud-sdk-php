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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HiveMetastoreInfo
 *
 * @method string getHiveMetastoreSerialId() 获取<p>hms serialId</p>
 * @method void setHiveMetastoreSerialId(string $HiveMetastoreSerialId) 设置<p>hms serialId</p>
 * @method string getClusterGroupSerialId() 获取<p>集群SerialId</p>
 * @method void setClusterGroupSerialId(string $ClusterGroupSerialId) 设置<p>集群SerialId</p>
 * @method integer getStatus() 获取<p>状态枚举</p><p>枚举值：</p><ul><li>3： 运行中</li><li>1： 初始化中</li><li>2： 部署中</li><li>-2： 已删除</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态枚举</p><p>枚举值：</p><ul><li>3： 运行中</li><li>1： 初始化中</li><li>2： 部署中</li><li>-2： 已删除</li></ul>
 * @method integer getCpu() 获取<p>使用核数</p><p>单位：cu</p>
 * @method void setCpu(integer $Cpu) 设置<p>使用核数</p><p>单位：cu</p>
 * @method integer getMemGB() 获取<p>使用内存资源</p><p>单位：GB</p>
 * @method void setMemGB(integer $MemGB) 设置<p>使用内存资源</p><p>单位：GB</p>
 * @method integer getReplica() 获取<p>副本数</p>
 * @method void setReplica(integer $Replica) 设置<p>副本数</p>
 * @method string getHiveUri() 获取<p>hms 访问uri</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHiveUri(string $HiveUri) 设置<p>hms 访问uri</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHiveNamespace() 获取<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHiveNamespace(string $HiveNamespace) 设置<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHiveMetastoreWarehouseDir() 获取<p>Warehouse地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHiveMetastoreWarehouseDir(string $HiveMetastoreWarehouseDir) 设置<p>Warehouse地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfig() 获取<p>高级参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(array $Config) 设置<p>高级参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class HiveMetastoreInfo extends AbstractModel
{
    /**
     * @var string <p>hms serialId</p>
     */
    public $HiveMetastoreSerialId;

    /**
     * @var string <p>集群SerialId</p>
     */
    public $ClusterGroupSerialId;

    /**
     * @var integer <p>状态枚举</p><p>枚举值：</p><ul><li>3： 运行中</li><li>1： 初始化中</li><li>2： 部署中</li><li>-2： 已删除</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>使用核数</p><p>单位：cu</p>
     */
    public $Cpu;

    /**
     * @var integer <p>使用内存资源</p><p>单位：GB</p>
     */
    public $MemGB;

    /**
     * @var integer <p>副本数</p>
     */
    public $Replica;

    /**
     * @var string <p>hms 访问uri</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HiveUri;

    /**
     * @var string <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HiveNamespace;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>Warehouse地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HiveMetastoreWarehouseDir;

    /**
     * @var array <p>高级参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @param string $HiveMetastoreSerialId <p>hms serialId</p>
     * @param string $ClusterGroupSerialId <p>集群SerialId</p>
     * @param integer $Status <p>状态枚举</p><p>枚举值：</p><ul><li>3： 运行中</li><li>1： 初始化中</li><li>2： 部署中</li><li>-2： 已删除</li></ul>
     * @param integer $Cpu <p>使用核数</p><p>单位：cu</p>
     * @param integer $MemGB <p>使用内存资源</p><p>单位：GB</p>
     * @param integer $Replica <p>副本数</p>
     * @param string $HiveUri <p>hms 访问uri</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HiveNamespace <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HiveMetastoreWarehouseDir <p>Warehouse地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Config <p>高级参数</p>
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
        if (array_key_exists("HiveMetastoreSerialId",$param) and $param["HiveMetastoreSerialId"] !== null) {
            $this->HiveMetastoreSerialId = $param["HiveMetastoreSerialId"];
        }

        if (array_key_exists("ClusterGroupSerialId",$param) and $param["ClusterGroupSerialId"] !== null) {
            $this->ClusterGroupSerialId = $param["ClusterGroupSerialId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MemGB",$param) and $param["MemGB"] !== null) {
            $this->MemGB = $param["MemGB"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("HiveUri",$param) and $param["HiveUri"] !== null) {
            $this->HiveUri = $param["HiveUri"];
        }

        if (array_key_exists("HiveNamespace",$param) and $param["HiveNamespace"] !== null) {
            $this->HiveNamespace = $param["HiveNamespace"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HiveMetastoreWarehouseDir",$param) and $param["HiveMetastoreWarehouseDir"] !== null) {
            $this->HiveMetastoreWarehouseDir = $param["HiveMetastoreWarehouseDir"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }
    }
}
