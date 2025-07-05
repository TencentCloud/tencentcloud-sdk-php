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
 * 数据接入tke数据源
 *
 * @method string getVpcId() 获取数据源所属vpc id，创建后不允许修改
 * @method void setVpcId(string $VpcId) 设置数据源所属vpc id，创建后不允许修改
 * @method string getTkeId() 获取tke实例id，创建后不允许修改
 * @method void setTkeId(string $TkeId) 设置tke实例id，创建后不允许修改
 * @method array getIncludeNamespaces() 获取tke包含的命名空间
 * @method void setIncludeNamespaces(array $IncludeNamespaces) 设置tke包含的命名空间
 * @method array getExcludeNamespaces() 获取tke不包含的命名空间
 * @method void setExcludeNamespaces(array $ExcludeNamespaces) 设置tke不包含的命名空间
 * @method string getContainerName() 获取tke容器名称
 * @method void setContainerName(string $ContainerName) 设置tke容器名称
 * @method string getLogFilters() 获取tke日志内容过滤
 * @method void setLogFilters(string $LogFilters) 设置tke日志内容过滤
 * @method string getConfigContent() 获取tke beats配置项
 * @method void setConfigContent(string $ConfigContent) 设置tke beats配置项
 * @method array getPodLabel() 获取tke pod标签
 * @method void setPodLabel(array $PodLabel) 设置tke pod标签
 * @method string getInputType() 获取/
 * @method void setInputType(string $InputType) 设置/
 * @method string getInputPath() 获取tke 日志采集路径
 * @method void setInputPath(string $InputPath) 设置tke 日志采集路径
 */
class DiSourceTke extends AbstractModel
{
    /**
     * @var string 数据源所属vpc id，创建后不允许修改
     */
    public $VpcId;

    /**
     * @var string tke实例id，创建后不允许修改
     */
    public $TkeId;

    /**
     * @var array tke包含的命名空间
     */
    public $IncludeNamespaces;

    /**
     * @var array tke不包含的命名空间
     */
    public $ExcludeNamespaces;

    /**
     * @var string tke容器名称
     */
    public $ContainerName;

    /**
     * @var string tke日志内容过滤
     */
    public $LogFilters;

    /**
     * @var string tke beats配置项
     */
    public $ConfigContent;

    /**
     * @var array tke pod标签
     */
    public $PodLabel;

    /**
     * @var string /
     */
    public $InputType;

    /**
     * @var string tke 日志采集路径
     */
    public $InputPath;

    /**
     * @param string $VpcId 数据源所属vpc id，创建后不允许修改
     * @param string $TkeId tke实例id，创建后不允许修改
     * @param array $IncludeNamespaces tke包含的命名空间
     * @param array $ExcludeNamespaces tke不包含的命名空间
     * @param string $ContainerName tke容器名称
     * @param string $LogFilters tke日志内容过滤
     * @param string $ConfigContent tke beats配置项
     * @param array $PodLabel tke pod标签
     * @param string $InputType /
     * @param string $InputPath tke 日志采集路径
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TkeId",$param) and $param["TkeId"] !== null) {
            $this->TkeId = $param["TkeId"];
        }

        if (array_key_exists("IncludeNamespaces",$param) and $param["IncludeNamespaces"] !== null) {
            $this->IncludeNamespaces = $param["IncludeNamespaces"];
        }

        if (array_key_exists("ExcludeNamespaces",$param) and $param["ExcludeNamespaces"] !== null) {
            $this->ExcludeNamespaces = $param["ExcludeNamespaces"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("LogFilters",$param) and $param["LogFilters"] !== null) {
            $this->LogFilters = $param["LogFilters"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("PodLabel",$param) and $param["PodLabel"] !== null) {
            $this->PodLabel = [];
            foreach ($param["PodLabel"] as $key => $value){
                $obj = new DiSourceTkePodLabel();
                $obj->deserialize($value);
                array_push($this->PodLabel, $obj);
            }
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputPath",$param) and $param["InputPath"] !== null) {
            $this->InputPath = $param["InputPath"];
        }
    }
}
