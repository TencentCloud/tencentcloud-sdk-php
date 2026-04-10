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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用详情
 *
 * @method string getApplicationId() 获取<p>应用ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用ID</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getType() 获取<p>类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
 * @method void setType(string $Type) 设置<p>类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
 * @method string getEntrypoint() 获取<p>代码入口</p>
 * @method void setEntrypoint(string $Entrypoint) 设置<p>代码入口</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getCreator() 获取<p>创建人</p>
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
 * @method string getCreatorId() 获取<p>创建人ID</p>
 * @method void setCreatorId(string $CreatorId) 设置<p>创建人ID</p>
 * @method integer getVersionCount() 获取<p>版本数量</p>
 * @method void setVersionCount(integer $VersionCount) 设置<p>版本数量</p>
 * @method array getVersions() 获取<p>版本列表</p>
 * @method void setVersions(array $Versions) 设置<p>版本列表</p>
 * @method GitInfo getGitSource() 获取<p>GIT信息</p>
 * @method void setGitSource(GitInfo $GitSource) 设置<p>GIT信息</p>
 * @method RunConstraints getRunConstraints() 获取<p>运行限制</p>
 * @method void setRunConstraints(RunConstraints $RunConstraints) 设置<p>运行限制</p>
 * @method CosFileInfo getCosSource() 获取<p>应用COS文件信息</p>
 * @method void setCosSource(CosFileInfo $CosSource) 设置<p>应用COS文件信息</p>
 * @method integer getSortOrder() 获取<p>排序顺序</p>
 * @method void setSortOrder(integer $SortOrder) 设置<p>排序顺序</p>
 */
class Application extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
     */
    public $Type;

    /**
     * @var string <p>代码入口</p>
     */
    public $Entrypoint;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>创建人</p>
     */
    public $Creator;

    /**
     * @var string <p>创建人ID</p>
     */
    public $CreatorId;

    /**
     * @var integer <p>版本数量</p>
     */
    public $VersionCount;

    /**
     * @var array <p>版本列表</p>
     */
    public $Versions;

    /**
     * @var GitInfo <p>GIT信息</p>
     */
    public $GitSource;

    /**
     * @var RunConstraints <p>运行限制</p>
     */
    public $RunConstraints;

    /**
     * @var CosFileInfo <p>应用COS文件信息</p>
     */
    public $CosSource;

    /**
     * @var integer <p>排序顺序</p>
     */
    public $SortOrder;

    /**
     * @param string $ApplicationId <p>应用ID</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param string $Name <p>名称</p>
     * @param string $Description <p>描述</p>
     * @param string $Type <p>类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
     * @param string $Entrypoint <p>代码入口</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Creator <p>创建人</p>
     * @param string $CreatorId <p>创建人ID</p>
     * @param integer $VersionCount <p>版本数量</p>
     * @param array $Versions <p>版本列表</p>
     * @param GitInfo $GitSource <p>GIT信息</p>
     * @param RunConstraints $RunConstraints <p>运行限制</p>
     * @param CosFileInfo $CosSource <p>应用COS文件信息</p>
     * @param integer $SortOrder <p>排序顺序</p>
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("VersionCount",$param) and $param["VersionCount"] !== null) {
            $this->VersionCount = $param["VersionCount"];
        }

        if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
            $this->Versions = [];
            foreach ($param["Versions"] as $key => $value){
                $obj = new ApplicationVersion();
                $obj->deserialize($value);
                array_push($this->Versions, $obj);
            }
        }

        if (array_key_exists("GitSource",$param) and $param["GitSource"] !== null) {
            $this->GitSource = new GitInfo();
            $this->GitSource->deserialize($param["GitSource"]);
        }

        if (array_key_exists("RunConstraints",$param) and $param["RunConstraints"] !== null) {
            $this->RunConstraints = new RunConstraints();
            $this->RunConstraints->deserialize($param["RunConstraints"]);
        }

        if (array_key_exists("CosSource",$param) and $param["CosSource"] !== null) {
            $this->CosSource = new CosFileInfo();
            $this->CosSource->deserialize($param["CosSource"]);
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
