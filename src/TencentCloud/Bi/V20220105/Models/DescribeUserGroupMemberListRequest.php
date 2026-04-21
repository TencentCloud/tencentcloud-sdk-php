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
 * @method array getGroupIds() 获取用户组id集合
 * @method void setGroupIds(array $GroupIds) 设置用户组id集合
 * @method string getCreatedOnOrder() 获取asc正序,desc倒序
 * @method void setCreatedOnOrder(string $CreatedOnOrder) 设置asc正序,desc倒序
 * @method string getKeyword() 获取搜索关键字
 * @method void setKeyword(string $Keyword) 设置搜索关键字
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getPageNo() 获取分页页码
 * @method void setPageNo(integer $PageNo) 设置分页页码
 * @method boolean getAllPage() 获取是否需要分页
 * @method void setAllPage(boolean $AllPage) 设置是否需要分页
 */
class DescribeUserGroupMemberListRequest extends AbstractModel
{
    /**
     * @var array 用户组id集合
     */
    public $GroupIds;

    /**
     * @var string asc正序,desc倒序
     */
    public $CreatedOnOrder;

    /**
     * @var string 搜索关键字
     */
    public $Keyword;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 分页页码
     */
    public $PageNo;

    /**
     * @var boolean 是否需要分页
     */
    public $AllPage;

    /**
     * @param array $GroupIds 用户组id集合
     * @param string $CreatedOnOrder asc正序,desc倒序
     * @param string $Keyword 搜索关键字
     * @param integer $PageSize 分页大小
     * @param integer $PageNo 分页页码
     * @param boolean $AllPage 是否需要分页
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
