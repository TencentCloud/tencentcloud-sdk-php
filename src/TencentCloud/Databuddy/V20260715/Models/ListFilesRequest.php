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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListFiles请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间id</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间id</p>
 * @method FolderLocator getParent() 获取<p>父目录，不填默认查询根节点</p>
 * @method void setParent(FolderLocator $Parent) 设置<p>父目录，不填默认查询根节点</p>
 * @method array getFileTypes() 获取<p>按文件类型过滤</p>
 * @method void setFileTypes(array $FileTypes) 设置<p>按文件类型过滤</p>
 * @method string getNameKeyword() 获取<p>文件名模糊匹配</p>
 * @method void setNameKeyword(string $NameKeyword) 设置<p>文件名模糊匹配</p>
 * @method array getOwnerUserUins() 获取<p>按所有者UIN过滤，多值为或关系</p>
 * @method void setOwnerUserUins(array $OwnerUserUins) 设置<p>按所有者UIN过滤，多值为或关系</p>
 * @method boolean getOnlyFolder() 获取<p>是否只列出文件夹，默认 false</p>
 * @method void setOnlyFolder(boolean $OnlyFolder) 设置<p>是否只列出文件夹，默认 false</p>
 * @method array getOrderBys() 获取<p>排序字段列表，如创建时间 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}]，文件名称 [{Name: &#39;Name&#39;, Direction: &#39;ASC&#39;}]</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>排序字段列表，如创建时间 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}]，文件名称 [{Name: &#39;Name&#39;, Direction: &#39;ASC&#39;}]</p>
 * @method integer getPageNumber() 获取<p>页码，默认1，最小值1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，默认1，最小值1</p>
 * @method integer getPageSize() 获取<p>每页条数，默认10，最小值10，最大值100</p><p>取值范围：[10, 100]</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页条数，默认10，最小值10，最大值100</p><p>取值范围：[10, 100]</p>
 */
class ListFilesRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间id</p>
     */
    public $WorkspaceId;

    /**
     * @var FolderLocator <p>父目录，不填默认查询根节点</p>
     */
    public $Parent;

    /**
     * @var array <p>按文件类型过滤</p>
     */
    public $FileTypes;

    /**
     * @var string <p>文件名模糊匹配</p>
     */
    public $NameKeyword;

    /**
     * @var array <p>按所有者UIN过滤，多值为或关系</p>
     */
    public $OwnerUserUins;

    /**
     * @var boolean <p>是否只列出文件夹，默认 false</p>
     */
    public $OnlyFolder;

    /**
     * @var array <p>排序字段列表，如创建时间 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}]，文件名称 [{Name: &#39;Name&#39;, Direction: &#39;ASC&#39;}]</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>页码，默认1，最小值1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页条数，默认10，最小值10，最大值100</p><p>取值范围：[10, 100]</p>
     */
    public $PageSize;

    /**
     * @param string $WorkspaceId <p>工作空间id</p>
     * @param FolderLocator $Parent <p>父目录，不填默认查询根节点</p>
     * @param array $FileTypes <p>按文件类型过滤</p>
     * @param string $NameKeyword <p>文件名模糊匹配</p>
     * @param array $OwnerUserUins <p>按所有者UIN过滤，多值为或关系</p>
     * @param boolean $OnlyFolder <p>是否只列出文件夹，默认 false</p>
     * @param array $OrderBys <p>排序字段列表，如创建时间 [{Name: &#39;CreateTime&#39;, Direction: &#39;DESC&#39;}]，文件名称 [{Name: &#39;Name&#39;, Direction: &#39;ASC&#39;}]</p>
     * @param integer $PageNumber <p>页码，默认1，最小值1</p>
     * @param integer $PageSize <p>每页条数，默认10，最小值10，最大值100</p><p>取值范围：[10, 100]</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Parent",$param) and $param["Parent"] !== null) {
            $this->Parent = new FolderLocator();
            $this->Parent->deserialize($param["Parent"]);
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            $this->NameKeyword = $param["NameKeyword"];
        }

        if (array_key_exists("OwnerUserUins",$param) and $param["OwnerUserUins"] !== null) {
            $this->OwnerUserUins = $param["OwnerUserUins"];
        }

        if (array_key_exists("OnlyFolder",$param) and $param["OnlyFolder"] !== null) {
            $this->OnlyFolder = $param["OnlyFolder"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
