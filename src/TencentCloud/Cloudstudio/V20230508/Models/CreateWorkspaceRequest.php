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
namespace TencentCloud\Cloudstudio\V20230508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkspace请求参数结构体
 *
 * @method string getName() 获取工作空间名称, 长度限制 2~64
 * @method void setName(string $Name) 设置工作空间名称, 长度限制 2~64
 * @method string getDescription() 获取工作空间描述, 长度限制 0~255
 * @method void setDescription(string $Description) 设置工作空间描述, 长度限制 0~255
 * @method string getSpecs() 获取工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。
 * @method void setSpecs(string $Specs) 设置工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。
 * @method string getImage() 获取工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255
 * @method void setImage(string $Image) 设置工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255
 * @method GitRepository getRepository() 获取Git 仓库. 工作空间启动时会自动克隆该仓库
 * @method void setRepository(GitRepository $Repository) 设置Git 仓库. 工作空间启动时会自动克隆该仓库
 * @method array getEnvs() 获取环境变量. 会被注入到工作空间中
 * @method void setEnvs(array $Envs) 设置环境变量. 会被注入到工作空间中
 * @method array getExtensions() 获取预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10
 * @method void setExtensions(array $Extensions) 设置预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10
 * @method LifeCycle getLifecycle() 获取工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
 * @method void setLifecycle(LifeCycle $Lifecycle) 设置工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
 * @method integer getTenantAppId() 获取应用名称
 * @method void setTenantAppId(integer $TenantAppId) 设置应用名称
 * @method string getTenantUin() 获取用户UIN
 * @method void setTenantUin(string $TenantUin) 设置用户UIN
 * @method string getTenantUniqVpcId() 获取VPCID
 * @method void setTenantUniqVpcId(string $TenantUniqVpcId) 设置VPCID
 * @method string getTenantSubnetId() 获取子网ID
 * @method void setTenantSubnetId(string $TenantSubnetId) 设置子网ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 */
class CreateWorkspaceRequest extends AbstractModel
{
    /**
     * @var string 工作空间名称, 长度限制 2~64
     */
    public $Name;

    /**
     * @var string 工作空间描述, 长度限制 0~255
     */
    public $Description;

    /**
     * @var string 工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。
     */
    public $Specs;

    /**
     * @var string 工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255
     */
    public $Image;

    /**
     * @var GitRepository Git 仓库. 工作空间启动时会自动克隆该仓库
     */
    public $Repository;

    /**
     * @var array 环境变量. 会被注入到工作空间中
     */
    public $Envs;

    /**
     * @var array 预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10
     */
    public $Extensions;

    /**
     * @var LifeCycle 工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
     */
    public $Lifecycle;

    /**
     * @var integer 应用名称
     */
    public $TenantAppId;

    /**
     * @var string 用户UIN
     */
    public $TenantUin;

    /**
     * @var string VPCID
     */
    public $TenantUniqVpcId;

    /**
     * @var string 子网ID
     */
    public $TenantSubnetId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @param string $Name 工作空间名称, 长度限制 2~64
     * @param string $Description 工作空间描述, 长度限制 0~255
     * @param string $Specs 工作空间规格。Standard: 2C4G, Calculation: 4C8G, Profession: 8C16G. 默认是 Standard。
     * @param string $Image 工作空间基础镜像名称, 默认会使用 All In One 镜像, 长度限制 1~255
     * @param GitRepository $Repository Git 仓库. 工作空间启动时会自动克隆该仓库
     * @param array $Envs 环境变量. 会被注入到工作空间中
     * @param array $Extensions 预装插件. 工作空间启动时, 会自动安装这些插件。长度限制: 0~10
     * @param LifeCycle $Lifecycle 工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
     * @param integer $TenantAppId 应用名称
     * @param string $TenantUin 用户UIN
     * @param string $TenantUniqVpcId VPCID
     * @param string $TenantSubnetId 子网ID
     * @param string $Region 地域
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
