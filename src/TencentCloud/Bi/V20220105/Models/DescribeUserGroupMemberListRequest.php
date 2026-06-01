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
 * DescribeUserGroupMemberList请求参数结构体
 *
 * @method array getGroupIds() 获取<p>用户组id集合</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>用户组id集合</p>
 * @method string getCreatedOnOrder() 获取<p>asc正序,desc倒序</p>
 * @method void setCreatedOnOrder(string $CreatedOnOrder) 设置<p>asc正序,desc倒序</p>
 * @method string getKeyword() 获取<p>搜索关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索关键字</p>
 * @method integer getPageSize() 获取<p>分页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小</p>
 * @method integer getPageNo() 获取<p>分页页码</p>
 * @method void setPageNo(integer $PageNo) 设置<p>分页页码</p>
 * @method boolean getAllPage() 获取<p>是否需要分页</p>
 * @method void setAllPage(boolean $AllPage) 设置<p>是否需要分页</p>
 */
class DescribeUserGroupMemberListRequest extends AbstractModel
{
    /**
     * @var array <p>用户组id集合</p>
     */
    public $GroupIds;

    /**
     * @var string <p>asc正序,desc倒序</p>
     */
    public $CreatedOnOrder;

    /**
     * @var string <p>搜索关键字</p>
     */
    public $Keyword;

    /**
     * @var integer <p>分页大小</p>
     */
    public $PageSize;

    /**
     * @var integer <p>分页页码</p>
     */
    public $PageNo;

    /**
     * @var boolean <p>是否需要分页</p>
     */
    public $AllPage;

    /**
     * @param array $GroupIds <p>用户组id集合</p>
     * @param string $CreatedOnOrder <p>asc正序,desc倒序</p>
     * @param string $Keyword <p>搜索关键字</p>
     * @param integer $PageSize <p>分页大小</p>
     * @param integer $PageNo <p>分页页码</p>
     * @param boolean $AllPage <p>是否需要分页</p>
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("CreatedOnOrder",$param) and $param["CreatedOnOrder"] !== null) {
            $this->CreatedOnOrder = $param["CreatedOnOrder"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }
    }
}
