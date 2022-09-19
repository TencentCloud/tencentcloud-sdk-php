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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用镜像模板列表
 *
 * @method string getId() 获取镜像模板ID
 * @method void setId(string $Id) 设置镜像模板ID
 * @method string getName() 获取镜像模板名称
 * @method void setName(string $Name) 设置镜像模板名称
 * @method string getTag() 获取Tag时间
 * @method void setTag(string $Tag) 设置Tag时间
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getDescriptionCN() 获取中文描述
 * @method void setDescriptionCN(string $DescriptionCN) 设置中文描述
 * @method string getIconUrl() 获取图标地址
 * @method void setIconUrl(string $IconUrl) 设置图标地址
 * @method string getAuthor() 获取创建人
 * @method void setAuthor(string $Author) 设置创建人
 * @method string getVisible() 获取访问状态
 * @method void setVisible(string $Visible) 设置访问状态
 * @method integer getWorkspaceVersion() 获取版本
 * @method void setWorkspaceVersion(integer $WorkspaceVersion) 设置版本
 * @method integer getSort() 获取分类
 * @method void setSort(integer $Sort) 设置分类
 */
class ImageUserDTO extends AbstractModel
{
    /**
     * @var string 镜像模板ID
     */
    public $Id;

    /**
     * @var string 镜像模板名称
     */
    public $Name;

    /**
     * @var string Tag时间
     */
    public $Tag;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 中文描述
     */
    public $DescriptionCN;

    /**
     * @var string 图标地址
     */
    public $IconUrl;

    /**
     * @var string 创建人
     */
    public $Author;

    /**
     * @var string 访问状态
     */
    public $Visible;

    /**
     * @var integer 版本
     */
    public $WorkspaceVersion;

    /**
     * @var integer 分类
     */
    public $Sort;

    /**
     * @param string $Id 镜像模板ID
     * @param string $Name 镜像模板名称
     * @param string $Tag Tag时间
     * @param string $Description 描述
     * @param string $DescriptionCN 中文描述
     * @param string $IconUrl 图标地址
     * @param string $Author 创建人
     * @param string $Visible 访问状态
     * @param integer $WorkspaceVersion 版本
     * @param integer $Sort 分类
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DescriptionCN",$param) and $param["DescriptionCN"] !== null) {
            $this->DescriptionCN = $param["DescriptionCN"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Visible",$param) and $param["Visible"] !== null) {
            $this->Visible = $param["Visible"];
        }

        if (array_key_exists("WorkspaceVersion",$param) and $param["WorkspaceVersion"] !== null) {
            $this->WorkspaceVersion = $param["WorkspaceVersion"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
