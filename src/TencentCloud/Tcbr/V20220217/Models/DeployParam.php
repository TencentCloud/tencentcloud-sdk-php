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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署参数
 *
 * @method string getDeployType() 获取部署类型：package/image/repository/pipeline/jar/war
 * @method void setDeployType(string $DeployType) 设置部署类型：package/image/repository/pipeline/jar/war
 * @method string getImageUrl() 获取部署类型为image时传入
 * @method void setImageUrl(string $ImageUrl) 设置部署类型为image时传入
 * @method string getPackageName() 获取部署类型为package时传入
 * @method void setPackageName(string $PackageName) 设置部署类型为package时传入
 * @method string getPackageVersion() 获取部署类型为package时传入
 * @method void setPackageVersion(string $PackageVersion) 设置部署类型为package时传入
 * @method string getDeployRemark() 获取部署备注
 * @method void setDeployRemark(string $DeployRemark) 设置部署备注
 * @method RepositoryInfo getRepoInfo() 获取代码仓库信息
 * @method void setRepoInfo(RepositoryInfo $RepoInfo) 设置代码仓库信息
 * @method BuildPacksInfo getBuildPacks() 获取无Dockerfile时填写
 * @method void setBuildPacks(BuildPacksInfo $BuildPacks) 设置无Dockerfile时填写
 * @method string getReleaseType() 获取发布类型 GRAY | FULL
 * @method void setReleaseType(string $ReleaseType) 设置发布类型 GRAY | FULL
 */
class DeployParam extends AbstractModel
{
    /**
     * @var string 部署类型：package/image/repository/pipeline/jar/war
     */
    public $DeployType;

    /**
     * @var string 部署类型为image时传入
     */
    public $ImageUrl;

    /**
     * @var string 部署类型为package时传入
     */
    public $PackageName;

    /**
     * @var string 部署类型为package时传入
     */
    public $PackageVersion;

    /**
     * @var string 部署备注
     */
    public $DeployRemark;

    /**
     * @var RepositoryInfo 代码仓库信息
     */
    public $RepoInfo;

    /**
     * @var BuildPacksInfo 无Dockerfile时填写
     */
    public $BuildPacks;

    /**
     * @var string 发布类型 GRAY | FULL
     */
    public $ReleaseType;

    /**
     * @param string $DeployType 部署类型：package/image/repository/pipeline/jar/war
     * @param string $ImageUrl 部署类型为image时传入
     * @param string $PackageName 部署类型为package时传入
     * @param string $PackageVersion 部署类型为package时传入
     * @param string $DeployRemark 部署备注
     * @param RepositoryInfo $RepoInfo 代码仓库信息
     * @param BuildPacksInfo $BuildPacks 无Dockerfile时填写
     * @param string $ReleaseType 发布类型 GRAY | FULL
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
        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("DeployRemark",$param) and $param["DeployRemark"] !== null) {
            $this->DeployRemark = $param["DeployRemark"];
        }

        if (array_key_exists("RepoInfo",$param) and $param["RepoInfo"] !== null) {
            $this->RepoInfo = new RepositoryInfo();
            $this->RepoInfo->deserialize($param["RepoInfo"]);
        }

        if (array_key_exists("BuildPacks",$param) and $param["BuildPacks"] !== null) {
            $this->BuildPacks = new BuildPacksInfo();
            $this->BuildPacks->deserialize($param["BuildPacks"]);
        }

        if (array_key_exists("ReleaseType",$param) and $param["ReleaseType"] !== null) {
            $this->ReleaseType = $param["ReleaseType"];
        }
    }
}
