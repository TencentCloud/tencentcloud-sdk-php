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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mesh信息
 *
 * @method string getMeshId() 获取Mesh实例Id
 * @method void setMeshId(string $MeshId) 设置Mesh实例Id
 * @method string getDisplayName() 获取Mesh名称
 * @method void setDisplayName(string $DisplayName) 设置Mesh名称
 * @method string getType() 获取Mesh类型，取值范围：
- STANDALONE：独立网格
- HOSTED：托管网格
 * @method void setType(string $Type) 设置Mesh类型，取值范围：
- STANDALONE：独立网格
- HOSTED：托管网格
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getState() 获取Mesh状态，取值范围：
- PENDING：等待中
- CREATING：创建中
- RUNNING：运行中
- ABNORMAL：异常
- UPGRADING：升级中
- CANARY_UPGRADED：升级灰度完成
- ROLLBACKING：升级回滚
- DELETING：删除中
- CREATE_FAILED：安装失败
- DELETE_FAILED：删除失败
- UPGRADE_FAILED：升级失败
- ROLLBACK_FAILED：回滚失败
 * @method void setState(string $State) 设置Mesh状态，取值范围：
- PENDING：等待中
- CREATING：创建中
- RUNNING：运行中
- ABNORMAL：异常
- UPGRADING：升级中
- CANARY_UPGRADED：升级灰度完成
- ROLLBACKING：升级回滚
- DELETING：删除中
- CREATE_FAILED：安装失败
- DELETE_FAILED：删除失败
- UPGRADE_FAILED：升级失败
- ROLLBACK_FAILED：回滚失败
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdatedTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterList() 获取集群列表
 * @method void setClusterList(array $ClusterList) 设置集群列表
 * @method MeshConfig getConfig() 获取Mesh配置
 * @method void setConfig(MeshConfig $Config) 设置Mesh配置
 * @method MeshStatus getStatus() 获取Mesh详细状态
 * @method void setStatus(MeshStatus $Status) 设置Mesh详细状态
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 */
class Mesh extends AbstractModel
{
    /**
     * @var string Mesh实例Id
     */
    public $MeshId;

    /**
     * @var string Mesh名称
     */
    public $DisplayName;

    /**
     * @var string Mesh类型，取值范围：
- STANDALONE：独立网格
- HOSTED：托管网格
     */
    public $Type;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string Mesh状态，取值范围：
- PENDING：等待中
- CREATING：创建中
- RUNNING：运行中
- ABNORMAL：异常
- UPGRADING：升级中
- CANARY_UPGRADED：升级灰度完成
- ROLLBACKING：升级回滚
- DELETING：删除中
- CREATE_FAILED：安装失败
- DELETE_FAILED：删除失败
- UPGRADE_FAILED：升级失败
- ROLLBACK_FAILED：回滚失败
     */
    public $State;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var array 集群列表
     */
    public $ClusterList;

    /**
     * @var MeshConfig Mesh配置
     */
    public $Config;

    /**
     * @var MeshStatus Mesh详细状态
     */
    public $Status;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @param string $MeshId Mesh实例Id
     * @param string $DisplayName Mesh名称
     * @param string $Type Mesh类型，取值范围：
- STANDALONE：独立网格
- HOSTED：托管网格
     * @param string $Region 地域
     * @param string $Version 版本
     * @param string $State Mesh状态，取值范围：
- PENDING：等待中
- CREATING：创建中
- RUNNING：运行中
- ABNORMAL：异常
- UPGRADING：升级中
- CANARY_UPGRADED：升级灰度完成
- ROLLBACKING：升级回滚
- DELETING：删除中
- CREATE_FAILED：安装失败
- DELETE_FAILED：删除失败
- UPGRADE_FAILED：升级失败
- ROLLBACK_FAILED：回滚失败
     * @param string $CreatedTime 创建时间
     * @param string $UpdatedTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterList 集群列表
     * @param MeshConfig $Config Mesh配置
     * @param MeshStatus $Status Mesh详细状态
     * @param array $TagList 标签列表
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
        if (array_key_exists("MeshId",$param) and $param["MeshId"] !== null) {
            $this->MeshId = $param["MeshId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("ClusterList",$param) and $param["ClusterList"] !== null) {
            $this->ClusterList = [];
            foreach ($param["ClusterList"] as $key => $value){
                $obj = new Cluster();
                $obj->deserialize($value);
                array_push($this->ClusterList, $obj);
            }
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new MeshConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new MeshStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
