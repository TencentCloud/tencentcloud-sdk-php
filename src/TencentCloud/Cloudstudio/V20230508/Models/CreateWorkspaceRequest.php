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
namespace TencentCloud\Cloudstudio\V20230508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkspace请求参数结构体
 *
 * @method string getName() 获取<p>工作空间名称, 长度限制 2~64</p>
 * @method void setName(string $Name) 设置<p>工作空间名称, 长度限制 2~64</p>
 * @method string getDescription() 获取<p>工作空间描述, 长度限制 0~255</p>
 * @method void setDescription(string $Description) 设置<p>工作空间描述, 长度限制 0~255</p>
 * @method string getSpecs() 获取<p>工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。</p>
 * @method void setSpecs(string $Specs) 设置<p>工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。</p>
 * @method string getImage() 获取<p>工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255</p>
 * @method void setImage(string $Image) 设置<p>工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255</p>
 * @method GitRepository getRepository() 获取<p>Git 仓库. 工作空间启动时会自动克隆该仓库</p>
 * @method void setRepository(GitRepository $Repository) 设置<p>Git 仓库. 工作空间启动时会自动克隆该仓库</p>
 * @method array getEnvs() 获取<p>环境变量. 会被注入到工作空间中</p>
 * @method void setEnvs(array $Envs) 设置<p>环境变量. 会被注入到工作空间中</p>
 * @method array getExtensions() 获取<p>预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10</p>
 * @method void setExtensions(array $Extensions) 设置<p>预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10</p>
 * @method LifeCycle getLifecycle() 获取<p>工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令.</p>
 * @method void setLifecycle(LifeCycle $Lifecycle) 设置<p>工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令.</p>
 * @method integer getTenantAppId() 获取<p>应用名称</p>
 * @method void setTenantAppId(integer $TenantAppId) 设置<p>应用名称</p>
 * @method string getTenantUin() 获取<p>用户UIN</p>
 * @method void setTenantUin(string $TenantUin) 设置<p>用户UIN</p>
 * @method string getTenantUniqVpcId() 获取<p>VPCID</p>
 * @method void setTenantUniqVpcId(string $TenantUniqVpcId) 设置<p>VPCID</p>
 * @method string getTenantSubnetId() 获取<p>子网ID</p>
 * @method void setTenantSubnetId(string $TenantSubnetId) 设置<p>子网ID</p>
 */
class CreateWorkspaceRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间名称, 长度限制 2~64</p>
     */
    public $Name;

    /**
     * @var string <p>工作空间描述, 长度限制 0~255</p>
     */
    public $Description;

    /**
     * @var string <p>工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。</p>
     */
    public $Specs;

    /**
     * @var string <p>工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255</p>
     */
    public $Image;

    /**
     * @var GitRepository <p>Git 仓库. 工作空间启动时会自动克隆该仓库</p>
     */
    public $Repository;

    /**
     * @var array <p>环境变量. 会被注入到工作空间中</p>
     */
    public $Envs;

    /**
     * @var array <p>预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10</p>
     */
    public $Extensions;

    /**
     * @var LifeCycle <p>工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令.</p>
     */
    public $Lifecycle;

    /**
     * @var integer <p>应用名称</p>
     */
    public $TenantAppId;

    /**
     * @var string <p>用户UIN</p>
     */
    public $TenantUin;

    /**
     * @var string <p>VPCID</p>
     */
    public $TenantUniqVpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $TenantSubnetId;

    /**
     * @param string $Name <p>工作空间名称, 长度限制 2~64</p>
     * @param string $Description <p>工作空间描述, 长度限制 0~255</p>
     * @param string $Specs <p>工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。</p>
     * @param string $Image <p>工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255</p>
     * @param GitRepository $Repository <p>Git 仓库. 工作空间启动时会自动克隆该仓库</p>
     * @param array $Envs <p>环境变量. 会被注入到工作空间中</p>
     * @param array $Extensions <p>预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10</p>
     * @param LifeCycle $Lifecycle <p>工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令.</p>
     * @param integer $TenantAppId <p>应用名称</p>
     * @param string $TenantUin <p>用户UIN</p>
     * @param string $TenantUniqVpcId <p>VPCID</p>
     * @param string $TenantSubnetId <p>子网ID</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Specs",$param) and $param["Specs"] !== null) {
            $this->Specs = $param["Specs"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Repository",$param) and $param["Repository"] !== null) {
            $this->Repository = new GitRepository();
            $this->Repository->deserialize($param["Repository"]);
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new LifeCycle();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("TenantAppId",$param) and $param["TenantAppId"] !== null) {
            $this->TenantAppId = $param["TenantAppId"];
        }

        if (array_key_exists("TenantUin",$param) and $param["TenantUin"] !== null) {
            $this->TenantUin = $param["TenantUin"];
        }

        if (array_key_exists("TenantUniqVpcId",$param) and $param["TenantUniqVpcId"] !== null) {
            $this->TenantUniqVpcId = $param["TenantUniqVpcId"];
        }

        if (array_key_exists("TenantSubnetId",$param) and $param["TenantSubnetId"] !== null) {
            $this->TenantSubnetId = $param["TenantSubnetId"];
        }
    }
}
