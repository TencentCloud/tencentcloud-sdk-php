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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceUserGroupPageList请求参数结构体
 *
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method integer getPageId() 获取页面Id
 * @method void setPageId(integer $PageId) 设置页面Id
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method integer getAllPage() 获取是否分页
 * @method void setAllPage(integer $AllPage) 设置是否分页
 * @method string getKeyword() 获取模糊搜索关键字
 * @method void setKeyword(string $Keyword) 设置模糊搜索关键字
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method array getTagValueList() 获取标签过滤条件
 * @method void setTagValueList(array $TagValueList) 设置标签过滤条件
 * @method string getModuleCollection() 获取角色
 * @method void setModuleCollection(string $ModuleCollection) 设置角色
 * @method string getResourceValue() 获取是否授权
 * @method void setResourceValue(string $ResourceValue) 设置是否授权
 * @method string getResourceName() 获取权限类型
 * @method void setResourceName(string $ResourceName) 设置权限类型
 * @method integer getParentId() 获取父id
 * @method void setParentId(integer $ParentId) 设置父id
 * @method integer getEntityId() 获取资源id
 * @method void setEntityId(integer $EntityId) 设置资源id
 */
class DescribeResourceUserGroupPageListRequest extends AbstractModel
{
    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 页面Id
     */
    public $PageId;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var integer 是否分页
     */
    public $AllPage;

    /**
     * @var string 模糊搜索关键字
     */
    public $Keyword;

    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 每页条数
     */
    public $PageSize;

    /**
     * @var array 标签过滤条件
     */
    public $TagValueList;

    /**
     * @var string 角色
     */
    public $ModuleCollection;

    /**
     * @var string 是否授权
     */
    public $ResourceValue;

    /**
     * @var string 权限类型
     */
    public $ResourceName;

    /**
     * @var integer 父id
     */
    public $ParentId;

    /**
     * @var integer 资源id
     */
    public $EntityId;

    /**
     * @param integer $ProjectId 项目Id
     * @param integer $PageId 页面Id
     * @param string $ResourceType 资源类型
     * @param integer $AllPage 是否分页
     * @param string $Keyword 模糊搜索关键字
     * @param integer $PageNo 页码
     * @param integer $PageSize 每页条数
     * @param array $TagValueList 标签过滤条件
     * @param string $ModuleCollection 角色
     * @param string $ResourceValue 是否授权
     * @param string $ResourceName 权限类型
     * @param integer $ParentId 父id
     * @param integer $EntityId 资源id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TagValueList",$param) and $param["TagValueList"] !== null) {
            $this->TagValueList = [];
            foreach ($param["TagValueList"] as $key => $value){
                $obj = new ResourceTagValue();
                $obj->deserialize($value);
                array_push($this->TagValueList, $obj);
            }
        }

        if (array_key_exists("ModuleCollection",$param) and $param["ModuleCollection"] !== null) {
            $this->ModuleCollection = $param["ModuleCollection"];
        }

        if (array_key_exists("ResourceValue",$param) and $param["ResourceValue"] !== null) {
            $this->ResourceValue = $param["ResourceValue"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }
    }
}
