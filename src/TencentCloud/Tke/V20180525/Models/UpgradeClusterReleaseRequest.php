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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeClusterRelease请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getName() 获取自定义的应用名称
 * @method void setName(string $Name) 设置自定义的应用名称
 * @method string getNamespace() 获取应用命名空间
 * @method void setNamespace(string $Namespace) 设置应用命名空间
 * @method string getChart() 获取制品名称或从第三方repo 安装chart时，制品压缩包下载地址, 不支持重定向类型chart 地址，结尾为*.tgz
 * @method void setChart(string $Chart) 设置制品名称或从第三方repo 安装chart时，制品压缩包下载地址, 不支持重定向类型chart 地址，结尾为*.tgz
 * @method ReleaseValues getValues() 获取自定义参数，覆盖chart 中values.yaml 中的参数
 * @method void setValues(ReleaseValues $Values) 设置自定义参数，覆盖chart 中values.yaml 中的参数
 * @method string getChartFrom() 获取制品来源，范围：tke-market 或 other
 * @method void setChartFrom(string $ChartFrom) 设置制品来源，范围：tke-market 或 other
 * @method string getChartVersion() 获取制品版本( 从第三安装时，不传这个参数）
 * @method void setChartVersion(string $ChartVersion) 设置制品版本( 从第三安装时，不传这个参数）
 * @method string getChartRepoURL() 获取制品仓库URL地址
 * @method void setChartRepoURL(string $ChartRepoURL) 设置制品仓库URL地址
 * @method string getUsername() 获取制品访问用户名
 * @method void setUsername(string $Username) 设置制品访问用户名
 * @method string getPassword() 获取制品访问密码
 * @method void setPassword(string $Password) 设置制品访问密码
 * @method string getChartNamespace() 获取制品命名空间
 * @method void setChartNamespace(string $ChartNamespace) 设置制品命名空间
 * @method string getClusterType() 获取集群类型，支持传 tke, eks, tkeedge, exernal(注册集群）
 * @method void setClusterType(string $ClusterType) 设置集群类型，支持传 tke, eks, tkeedge, exernal(注册集群）
 */
class UpgradeClusterReleaseRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 自定义的应用名称
     */
    public $Name;

    /**
     * @var string 应用命名空间
     */
    public $Namespace;

    /**
     * @var string 制品名称或从第三方repo 安装chart时，制品压缩包下载地址, 不支持重定向类型chart 地址，结尾为*.tgz
     */
    public $Chart;

    /**
     * @var ReleaseValues 自定义参数，覆盖chart 中values.yaml 中的参数
     */
    public $Values;

    /**
     * @var string 制品来源，范围：tke-market 或 other
     */
    public $ChartFrom;

    /**
     * @var string 制品版本( 从第三安装时，不传这个参数）
     */
    public $ChartVersion;

    /**
     * @var string 制品仓库URL地址
     */
    public $ChartRepoURL;

    /**
     * @var string 制品访问用户名
     */
    public $Username;

    /**
     * @var string 制品访问密码
     */
    public $Password;

    /**
     * @var string 制品命名空间
     */
    public $ChartNamespace;

    /**
     * @var string 集群类型，支持传 tke, eks, tkeedge, exernal(注册集群）
     */
    public $ClusterType;

    /**
     * @param string $ClusterId 集群ID
     * @param string $Name 自定义的应用名称
     * @param string $Namespace 应用命名空间
     * @param string $Chart 制品名称或从第三方repo 安装chart时，制品压缩包下载地址, 不支持重定向类型chart 地址，结尾为*.tgz
     * @param ReleaseValues $Values 自定义参数，覆盖chart 中values.yaml 中的参数
     * @param string $ChartFrom 制品来源，范围：tke-market 或 other
     * @param string $ChartVersion 制品版本( 从第三安装时，不传这个参数）
     * @param string $ChartRepoURL 制品仓库URL地址
     * @param string $Username 制品访问用户名
     * @param string $Password 制品访问密码
     * @param string $ChartNamespace 制品命名空间
     * @param string $ClusterType 集群类型，支持传 tke, eks, tkeedge, exernal(注册集群）
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Chart",$param) and $param["Chart"] !== null) {
            $this->Chart = $param["Chart"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = new ReleaseValues();
            $this->Values->deserialize($param["Values"]);
        }

        if (array_key_exists("ChartFrom",$param) and $param["ChartFrom"] !== null) {
            $this->ChartFrom = $param["ChartFrom"];
        }

        if (array_key_exists("ChartVersion",$param) and $param["ChartVersion"] !== null) {
            $this->ChartVersion = $param["ChartVersion"];
        }

        if (array_key_exists("ChartRepoURL",$param) and $param["ChartRepoURL"] !== null) {
            $this->ChartRepoURL = $param["ChartRepoURL"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ChartNamespace",$param) and $param["ChartNamespace"] !== null) {
            $this->ChartNamespace = $param["ChartNamespace"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
