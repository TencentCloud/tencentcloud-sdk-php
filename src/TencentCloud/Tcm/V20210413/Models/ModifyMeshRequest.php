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
 * ModifyMesh请求参数结构体
 *
 * @method string getMeshId() 获取需要修改的网格Id
 * @method void setMeshId(string $MeshId) 设置需要修改的网格Id
 * @method string getDisplayName() 获取修改的网格名称
 * @method void setDisplayName(string $DisplayName) 设置修改的网格名称
 * @method MeshConfig getConfig() 获取修改的网格配置
 * @method void setConfig(MeshConfig $Config) 设置修改的网格配置
 * @method array getClusterList() 获取修改的集群配置
 * @method void setClusterList(array $ClusterList) 设置修改的集群配置
 */
class ModifyMeshRequest extends AbstractModel
{
    /**
     * @var string 需要修改的网格Id
     */
    public $MeshId;

    /**
     * @var string 修改的网格名称
     */
    public $DisplayName;

    /**
     * @var MeshConfig 修改的网格配置
     */
    public $Config;

    /**
     * @var array 修改的集群配置
     */
    public $ClusterList;

    /**
     * @param string $MeshId 需要修改的网格Id
     * @param string $DisplayName 修改的网格名称
     * @param MeshConfig $Config 修改的网格配置
     * @param array $ClusterList 修改的集群配置
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
    }
}
