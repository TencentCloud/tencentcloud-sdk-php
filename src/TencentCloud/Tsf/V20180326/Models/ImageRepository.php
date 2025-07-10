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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库
 *
 * @method string getReponame() 获取仓库名,含命名空间,如tsf/nginx
 * @method void setReponame(string $Reponame) 设置仓库名,含命名空间,如tsf/nginx
 * @method string getRepotype() 获取仓库类型
 * @method void setRepotype(string $Repotype) 设置仓库类型
 * @method integer getTagCount() 获取镜像版本数
 * @method void setTagCount(integer $TagCount) 设置镜像版本数
 * @method integer getIsPublic() 获取是否公共,1:公有,0:私有
 * @method void setIsPublic(integer $IsPublic) 设置是否公共,1:公有,0:私有
 * @method boolean getIsUserFavor() 获取是否被用户收藏。true：是，false：否
 * @method void setIsUserFavor(boolean $IsUserFavor) 设置是否被用户收藏。true：是，false：否
 * @method boolean getIsQcloudOfficial() 获取是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
 * @method void setIsQcloudOfficial(boolean $IsQcloudOfficial) 设置是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
 * @method integer getFavorCount() 获取被所有用户收藏次数
 * @method void setFavorCount(integer $FavorCount) 设置被所有用户收藏次数
 * @method integer getPullCount() 获取拉取次数
 * @method void setPullCount(integer $PullCount) 设置拉取次数
 * @method string getDescription() 获取描述内容
 * @method void setDescription(string $Description) 设置描述内容
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method TcrRepoInfo getTcrRepoInfo() 获取TcrRepoInfo值
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置TcrRepoInfo值
 * @method integer getTcrBindingId() 获取TcrBindingId值
 * @method void setTcrBindingId(integer $TcrBindingId) 设置TcrBindingId值
 * @method string getApplicationId() 获取applicationid值
 * @method void setApplicationId(string $ApplicationId) 设置applicationid值
 * @method ScalableRule getApplicationName() 获取ApplicationName值（废弃）
 * @method void setApplicationName(ScalableRule $ApplicationName) 设置ApplicationName值（废弃）
 * @method string getApplicationNameReal() 获取ApplicationName值
 * @method void setApplicationNameReal(string $ApplicationNameReal) 设置ApplicationName值
 * @method integer getPublic() 获取是否公共,1:公有,0:私有
 * @method void setPublic(integer $Public) 设置是否公共,1:公有,0:私有
 * @method string getCreateMode() 获取创建方式：manual | automatic
 * @method void setCreateMode(string $CreateMode) 设置创建方式：manual | automatic
 * @method string getRepoName() 获取仓库名，等同reponame字段
 * @method void setRepoName(string $RepoName) 设置仓库名，等同reponame字段
 * @method string getRepoType() 获取仓库类型
 * @method void setRepoType(string $RepoType) 设置仓库类型
 */
class ImageRepository extends AbstractModel
{
    /**
     * @var string 仓库名,含命名空间,如tsf/nginx
     */
    public $Reponame;

    /**
     * @var string 仓库类型
     */
    public $Repotype;

    /**
     * @var integer 镜像版本数
     */
    public $TagCount;

    /**
     * @var integer 是否公共,1:公有,0:私有
     */
    public $IsPublic;

    /**
     * @var boolean 是否被用户收藏。true：是，false：否
     */
    public $IsUserFavor;

    /**
     * @var boolean 是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
     */
    public $IsQcloudOfficial;

    /**
     * @var integer 被所有用户收藏次数
     */
    public $FavorCount;

    /**
     * @var integer 拉取次数
     */
    public $PullCount;

    /**
     * @var string 描述内容
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var TcrRepoInfo TcrRepoInfo值
     */
    public $TcrRepoInfo;

    /**
     * @var integer TcrBindingId值
     */
    public $TcrBindingId;

    /**
     * @var string applicationid值
     */
    public $ApplicationId;

    /**
     * @var ScalableRule ApplicationName值（废弃）
     * @deprecated
     */
    public $ApplicationName;

    /**
     * @var string ApplicationName值
     */
    public $ApplicationNameReal;

    /**
     * @var integer 是否公共,1:公有,0:私有
     */
    public $Public;

    /**
     * @var string 创建方式：manual | automatic
     */
    public $CreateMode;

    /**
     * @var string 仓库名，等同reponame字段
     */
    public $RepoName;

    /**
     * @var string 仓库类型
     */
    public $RepoType;

    /**
     * @param string $Reponame 仓库名,含命名空间,如tsf/nginx
     * @param string $Repotype 仓库类型
     * @param integer $TagCount 镜像版本数
     * @param integer $IsPublic 是否公共,1:公有,0:私有
     * @param boolean $IsUserFavor 是否被用户收藏。true：是，false：否
     * @param boolean $IsQcloudOfficial 是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
     * @param integer $FavorCount 被所有用户收藏次数
     * @param integer $PullCount 拉取次数
     * @param string $Description 描述内容
     * @param string $CreationTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param TcrRepoInfo $TcrRepoInfo TcrRepoInfo值
     * @param integer $TcrBindingId TcrBindingId值
     * @param string $ApplicationId applicationid值
     * @param ScalableRule $ApplicationName ApplicationName值（废弃）
     * @param string $ApplicationNameReal ApplicationName值
     * @param integer $Public 是否公共,1:公有,0:私有
     * @param string $CreateMode 创建方式：manual | automatic
     * @param string $RepoName 仓库名，等同reponame字段
     * @param string $RepoType 仓库类型
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
        if (array_key_exists("Reponame",$param) and $param["Reponame"] !== null) {
            $this->Reponame = $param["Reponame"];
        }

        if (array_key_exists("Repotype",$param) and $param["Repotype"] !== null) {
            $this->Repotype = $param["Repotype"];
        }

        if (array_key_exists("TagCount",$param) and $param["TagCount"] !== null) {
            $this->TagCount = $param["TagCount"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("IsUserFavor",$param) and $param["IsUserFavor"] !== null) {
            $this->IsUserFavor = $param["IsUserFavor"];
        }

        if (array_key_exists("IsQcloudOfficial",$param) and $param["IsQcloudOfficial"] !== null) {
            $this->IsQcloudOfficial = $param["IsQcloudOfficial"];
        }

        if (array_key_exists("FavorCount",$param) and $param["FavorCount"] !== null) {
            $this->FavorCount = $param["FavorCount"];
        }

        if (array_key_exists("PullCount",$param) and $param["PullCount"] !== null) {
            $this->PullCount = $param["PullCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TcrRepoInfo",$param) and $param["TcrRepoInfo"] !== null) {
            $this->TcrRepoInfo = new TcrRepoInfo();
            $this->TcrRepoInfo->deserialize($param["TcrRepoInfo"]);
        }

        if (array_key_exists("TcrBindingId",$param) and $param["TcrBindingId"] !== null) {
            $this->TcrBindingId = $param["TcrBindingId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = new ScalableRule();
            $this->ApplicationName->deserialize($param["ApplicationName"]);
        }

        if (array_key_exists("ApplicationNameReal",$param) and $param["ApplicationNameReal"] !== null) {
            $this->ApplicationNameReal = $param["ApplicationNameReal"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }
    }
}
