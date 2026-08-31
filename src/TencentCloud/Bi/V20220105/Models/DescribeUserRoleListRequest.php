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
 * DescribeUserRoleList请求参数结构体
 *
 * @method integer getPageNo() 获取<p>页码</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码</p>
 * @method integer getPageSize() 获取<p>页数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>页数</p>
 * @method boolean getAllPage() 获取<p>全部页码</p>
 * @method void setAllPage(boolean $AllPage) 设置<p>全部页码</p>
 * @method string getUserType() 获取<p>0 企业用户 1 访客 不填表示所有用户</p>
 * @method void setUserType(string $UserType) 设置<p>0 企业用户 1 访客 不填表示所有用户</p>
 * @method string getKeyword() 获取<p>模糊搜索的关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>模糊搜索的关键字</p>
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method boolean getIsOnlyBindAppUser() 获取<p>是否只获取绑定企微应用的</p>
 * @method void setIsOnlyBindAppUser(boolean $IsOnlyBindAppUser) 设置<p>是否只获取绑定企微应用的</p>
 * @method string getIdentityType() 获取<p>用户类型</p>
 * @method void setIdentityType(string $IdentityType) 设置<p>用户类型</p>
 */
class DescribeUserRoleListRequest extends AbstractModel
{
    /**
     * @var integer <p>页码</p>
     */
    public $PageNo;

    /**
     * @var integer <p>页数</p>
     */
    public $PageSize;

    /**
     * @var boolean <p>全部页码</p>
     */
    public $AllPage;

    /**
     * @var string <p>0 企业用户 1 访客 不填表示所有用户</p>
     */
    public $UserType;

    /**
     * @var string <p>模糊搜索的关键字</p>
     */
    public $Keyword;

    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var boolean <p>是否只获取绑定企微应用的</p>
     */
    public $IsOnlyBindAppUser;

    /**
     * @var string <p>用户类型</p>
     */
    public $IdentityType;

    /**
     * @param integer $PageNo <p>页码</p>
     * @param integer $PageSize <p>页数</p>
     * @param boolean $AllPage <p>全部页码</p>
     * @param string $UserType <p>0 企业用户 1 访客 不填表示所有用户</p>
     * @param string $Keyword <p>模糊搜索的关键字</p>
     * @param string $ProjectId <p>项目id</p>
     * @param boolean $IsOnlyBindAppUser <p>是否只获取绑定企微应用的</p>
     * @param string $IdentityType <p>用户类型</p>
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

        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsOnlyBindAppUser",$param) and $param["IsOnlyBindAppUser"] !== null) {
            $this->IsOnlyBindAppUser = $param["IsOnlyBindAppUser"];
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }
    }
}
