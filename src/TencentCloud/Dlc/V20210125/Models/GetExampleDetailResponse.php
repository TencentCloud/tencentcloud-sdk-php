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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetExampleDetail返回参数结构体
 *
 * @method integer getId() 获取<p>ID</p>
 * @method void setId(integer $Id) 设置<p>ID</p>
 * @method string getExampleId() 获取<p>案例ID</p>
 * @method void setExampleId(string $ExampleId) 设置<p>案例ID</p>
 * @method string getTitle() 获取<p>标题</p>
 * @method void setTitle(string $Title) 设置<p>标题</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getReadme() 获取<p>README</p>
 * @method void setReadme(string $Readme) 设置<p>README</p>
 * @method string getCodeArchiveUrl() 获取<p>案例归档URL</p>
 * @method void setCodeArchiveUrl(string $CodeArchiveUrl) 设置<p>案例归档URL</p>
 * @method string getImage() 获取<p>图片URL</p>
 * @method void setImage(string $Image) 设置<p>图片URL</p>
 * @method string getLabImage() 获取<p>实验室镜像</p>
 * @method void setLabImage(string $LabImage) 设置<p>实验室镜像</p>
 * @method string getResourceConfig() 获取<p>资源配置</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置</p>
 * @method string getCategory() 获取<p>分类</p>
 * @method void setCategory(string $Category) 设置<p>分类</p>
 * @method array getTags() 获取<p>案例标签</p>
 * @method void setTags(array $Tags) 设置<p>案例标签</p>
 * @method string getDifficulty() 获取<p>难度</p>
 * @method void setDifficulty(string $Difficulty) 设置<p>难度</p>
 * @method integer getEstimatedTime() 获取<p>预估时间（分钟）</p>
 * @method void setEstimatedTime(integer $EstimatedTime) 设置<p>预估时间（分钟）</p>
 * @method integer getSortOrder() 获取<p>排序</p>
 * @method void setSortOrder(integer $SortOrder) 设置<p>排序</p>
 * @method boolean getIsEnabled() 获取<p>是否启用</p>
 * @method void setIsEnabled(boolean $IsEnabled) 设置<p>是否启用</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method integer getDeleted() 获取<p>是否删除</p>
 * @method void setDeleted(integer $Deleted) 设置<p>是否删除</p>
 * @method integer getPopularity() 获取<p>案例热度</p>
 * @method void setPopularity(integer $Popularity) 设置<p>案例热度</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetExampleDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>ID</p>
     */
    public $Id;

    /**
     * @var string <p>案例ID</p>
     */
    public $ExampleId;

    /**
     * @var string <p>标题</p>
     */
    public $Title;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>README</p>
     */
    public $Readme;

    /**
     * @var string <p>案例归档URL</p>
     */
    public $CodeArchiveUrl;

    /**
     * @var string <p>图片URL</p>
     */
    public $Image;

    /**
     * @var string <p>实验室镜像</p>
     */
    public $LabImage;

    /**
     * @var string <p>资源配置</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>分类</p>
     */
    public $Category;

    /**
     * @var array <p>案例标签</p>
     */
    public $Tags;

    /**
     * @var string <p>难度</p>
     */
    public $Difficulty;

    /**
     * @var integer <p>预估时间（分钟）</p>
     */
    public $EstimatedTime;

    /**
     * @var integer <p>排序</p>
     */
    public $SortOrder;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $IsEnabled;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>是否删除</p>
     */
    public $Deleted;

    /**
     * @var integer <p>案例热度</p>
     */
    public $Popularity;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id <p>ID</p>
     * @param string $ExampleId <p>案例ID</p>
     * @param string $Title <p>标题</p>
     * @param string $Description <p>描述</p>
     * @param string $Readme <p>README</p>
     * @param string $CodeArchiveUrl <p>案例归档URL</p>
     * @param string $Image <p>图片URL</p>
     * @param string $LabImage <p>实验室镜像</p>
     * @param string $ResourceConfig <p>资源配置</p>
     * @param string $Category <p>分类</p>
     * @param array $Tags <p>案例标签</p>
     * @param string $Difficulty <p>难度</p>
     * @param integer $EstimatedTime <p>预估时间（分钟）</p>
     * @param integer $SortOrder <p>排序</p>
     * @param boolean $IsEnabled <p>是否启用</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param integer $Deleted <p>是否删除</p>
     * @param integer $Popularity <p>案例热度</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ExampleId",$param) and $param["ExampleId"] !== null) {
            $this->ExampleId = $param["ExampleId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Readme",$param) and $param["Readme"] !== null) {
            $this->Readme = $param["Readme"];
        }

        if (array_key_exists("CodeArchiveUrl",$param) and $param["CodeArchiveUrl"] !== null) {
            $this->CodeArchiveUrl = $param["CodeArchiveUrl"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("LabImage",$param) and $param["LabImage"] !== null) {
            $this->LabImage = $param["LabImage"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Difficulty",$param) and $param["Difficulty"] !== null) {
            $this->Difficulty = $param["Difficulty"];
        }

        if (array_key_exists("EstimatedTime",$param) and $param["EstimatedTime"] !== null) {
            $this->EstimatedTime = $param["EstimatedTime"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("Popularity",$param) and $param["Popularity"] !== null) {
            $this->Popularity = $param["Popularity"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
