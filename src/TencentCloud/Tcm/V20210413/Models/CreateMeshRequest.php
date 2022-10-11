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
 * CreateMesh请求参数结构体
 *
 * @method string getDisplayName() 获取Mesh名称
 * @method void setDisplayName(string $DisplayName) 设置Mesh名称
 * @method string getMeshVersion() 获取Mesh版本
 * @method void setMeshVersion(string $MeshVersion) 设置Mesh版本
 * @method string getType() 获取Mesh类型，取值范围：
- HOSTED：托管网格
 * @method void setType(string $Type) 设置Mesh类型，取值范围：
- HOSTED：托管网格
 * @method MeshConfig getConfig() 获取Mesh配置
 * @method void setConfig(MeshConfig $Config) 设置Mesh配置
 * @method array getClusterList() 获取关联集群
 * @method void setClusterList(array $ClusterList) 设置关联集群
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 */
class CreateMeshRequest extends AbstractModel
{
    /**
     * @var string Mesh名称
     */
    public $DisplayName;

    /**
     * @var string Mesh版本
     */
    public $MeshVersion;

    /**
     * @var string Mesh类型，取值范围：
- HOSTED：托管网格
     */
    public $Type;

    /**
     * @var MeshConfig Mesh配置
     */
    public $Config;

    /**
     * @var array 关联集群
     */
    public $ClusterList;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @param string $DisplayName Mesh名称
     * @param string $MeshVersion Mesh版本
     * @param string $Type Mesh类型，取值范围：
- HOSTED：托管网格
     * @param MeshConfig $Config Mesh配置
     * @param array $ClusterList 关联集群
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("MeshVersion",$param) and $param["MeshVersion"] !== null) {
            $this->MeshVersion = $param["MeshVersion"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new MeshConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("ClusterList",$param) and $param["ClusterList"] !== null) {
            $this->ClusterList = [];
            foreach ($param["ClusterList"] as $key => $value){
                $obj = new Cluster();
                $obj->deserialize($value);
                array_push($this->ClusterList, $obj);
            }
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
