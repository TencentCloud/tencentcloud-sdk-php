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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserRoleProjectList请求参数结构体
 *
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取页数
 * @method void setPageSize(integer $PageSize) 设置页数
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method boolean getIsOnlyBindAppUser() 获取是否只获取绑定企微应用的
 * @method void setIsOnlyBindAppUser(boolean $IsOnlyBindAppUser) 设置是否只获取绑定企微应用的
 * @method boolean getAllPage() 获取是否获取全部数据
 * @method void setAllPage(boolean $AllPage) 设置是否获取全部数据
 * @method string getRoleCode() 获取角色编码
 * @method void setRoleCode(string $RoleCode) 设置角色编码
 * @method array getUserIdList() 获取用户id列表
 * @method void setUserIdList(array $UserIdList) 设置用户id列表
 * @method string getKeyword() 获取搜索关键词
 * @method void setKeyword(string $Keyword) 设置搜索关键词
 */
class DescribeUserRoleProjectListRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 页数
     */
    public $PageSize;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var boolean 是否只获取绑定企微应用的
     */
    public $IsOnlyBindAppUser;

    /**
     * @var boolean 是否获取全部数据
     */
    public $AllPage;

    /**
     * @var string 角色编码
     */
    public $RoleCode;

    /**
     * @var array 用户id列表
     */
    public $UserIdList;

    /**
     * @var string 搜索关键词
     */
    public $Keyword;

    /**
     * @param integer $PageNo 页码
     * @param integer $PageSize 页数
     * @param integer $ProjectId 项目ID
     * @param boolean $IsOnlyBindAppUser 是否只获取绑定企微应用的
     * @param boolean $AllPage 是否获取全部数据
     * @param string $RoleCode 角色编码
     * @param array $UserIdList 用户id列表
     * @param string $Keyword 搜索关键词
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsOnlyBindAppUser",$param) and $param["IsOnlyBindAppUser"] !== null) {
            $this->IsOnlyBindAppUser = $param["IsOnlyBindAppUser"];
        }

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("RoleCode",$param) and $param["RoleCode"] !== null) {
            $this->RoleCode = $param["RoleCode"];
        }

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = $param["UserIdList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
