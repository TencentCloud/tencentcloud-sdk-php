<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取模型名称
 * @method void setName(string $Name) 设置模型名称
 * @method string getCluster() 获取指定集群的名称
 * @method void setCluster(string $Cluster) 设置指定集群的名称
 * @method string getModel() 获取要部署模型的路径名
 * @method void setModel(string $Model) 设置要部署模型的路径名
 * @method string getDescription() 获取关于模型的描述
 * @method void setDescription(string $Description) 设置关于模型的描述
 * @method string getRuntimeVersion() 获取运行环境镜像的标签
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行环境镜像的标签
 * @method integer getReplicas() 获取要部署的模型副本数目
 * @method void setReplicas(integer $Replicas) 设置要部署的模型副本数目
 * @method string getExpose() 获取暴露外网或内网，默认暴露外网
 * @method void setExpose(string $Expose) 设置暴露外网或内网，默认暴露外网
 * @method string getServType() 获取要部署模型的机器配置
 * @method void setServType(string $ServType) 设置要部署模型的机器配置
 */

/**
 *CreateModel请求参数结构体
 */
class CreateModelRequest extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $Name;

    /**
     * @var string 指定集群的名称
     */
    public $Cluster;

    /**
     * @var string 要部署模型的路径名
     */
    public $Model;

    /**
     * @var string 关于模型的描述
     */
    public $Description;

    /**
     * @var string 运行环境镜像的标签
     */
    public $RuntimeVersion;

    /**
     * @var integer 要部署的模型副本数目
     */
    public $Replicas;

    /**
     * @var string 暴露外网或内网，默认暴露外网
     */
    public $Expose;

    /**
     * @var string 要部署模型的机器配置
     */
    public $ServType;
    /**
     * @param string $Name 模型名称
     * @param string $Cluster 指定集群的名称
     * @param string $Model 要部署模型的路径名
     * @param string $Description 关于模型的描述
     * @param string $RuntimeVersion 运行环境镜像的标签
     * @param integer $Replicas 要部署的模型副本数目
     * @param string $Expose 暴露外网或内网，默认暴露外网
     * @param string $ServType 要部署模型的机器配置
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Expose",$param) and $param["Expose"] !== null) {
            $this->Expose = $param["Expose"];
        }

        if (array_key_exists("ServType",$param) and $param["ServType"] !== null) {
            $this->ServType = $param["ServType"];
        }
    }
}
