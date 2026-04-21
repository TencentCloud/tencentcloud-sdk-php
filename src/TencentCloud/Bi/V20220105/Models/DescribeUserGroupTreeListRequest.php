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
 * DescribeUserGroupTreeList请求参数结构体
 *
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method integer getAllPage() 获取是否分页
 * @method void setAllPage(integer $AllPage) 设置是否分页
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method array getTagValueList() 获取标签过滤条件
 * @method void setTagValueList(array $TagValueList) 设置标签过滤条件
 * @method array getNodes() 获取节点集合
 * @method void setNodes(array $Nodes) 设置节点集合
 * @method array getGroupIds() 获取用户组id集合
 * @method void setGroupIds(array $GroupIds) 设置用户组id集合
 * @method boolean getQueryNextNode() 获取查询下一个code
 * @method void setQueryNextNode(boolean $QueryNextNode) 设置查询下一个code
 * @method array getParentIds() 获取父id集合
 * @method void setParentIds(array $ParentIds) 设置父id集合
 * @method boolean getQueryAllNode() 获取是否查询所有节点
 * @method void setQueryAllNode(boolean $QueryAllNode) 设置是否查询所有节点
 * @method array getFilterGroupIds() 获取过滤组id集合
 * @method void setFilterGroupIds(array $FilterGroupIds) 设置过滤组id集合
 * @method string getKeyword() 获取模糊搜索关键字
 * @method void setKeyword(string $Keyword) 设置模糊搜索关键字
 */
class DescribeUserGroupTreeListRequest extends AbstractModel
{
    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 是否分页
     */
    public $AllPage;

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
     * @var array 节点集合
     */
    public $Nodes;

    /**
     * @var array 用户组id集合
     */
    public $GroupIds;

    /**
     * @var boolean 查询下一个code
     */
    public $QueryNextNode;

    /**
     * @var array 父id集合
     */
    public $ParentIds;

    /**
     * @var boolean 是否查询所有节点
     */
    public $QueryAllNode;

    /**
     * @var array 过滤组id集合
     */
    public $FilterGroupIds;

    /**
     * @var string 模糊搜索关键字
     */
    public $Keyword;

    /**
     * @param integer $ProjectId 项目Id
     * @param integer $AllPage 是否分页
     * @param integer $PageNo 页码
     * @param integer $PageSize 每页条数
     * @param array $TagValueList 标签过滤条件
     * @param array $Nodes 节点集合
     * @param array $GroupIds 用户组id集合
     * @param boolean $QueryNextNode 查询下一个code
     * @param array $ParentIds 父id集合
     * @param boolean $QueryAllNode 是否查询所有节点
     * @param array $FilterGroupIds 过滤组id集合
     * @param string $Keyword 模糊搜索关键字
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

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
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

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new UserGroupTreeNodeDTO();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("QueryNextNode",$param) and $param["QueryNextNode"] !== null) {
            $this->QueryNextNode = $param["QueryNextNode"];
        }

        if (array_key_exists("ParentIds",$param) and $param["ParentIds"] !== null) {
            $this->ParentIds = $param["ParentIds"];
        }

        if (array_key_exists("QueryAllNode",$param) and $param["QueryAllNode"] !== null) {
            $this->QueryAllNode = $param["QueryAllNode"];
        }

        if (array_key_exists("FilterGroupIds",$param) and $param["FilterGroupIds"] !== null) {
            $this->FilterGroupIds = $param["FilterGroupIds"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
