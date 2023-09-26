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
 * DescribeUserRoleList请求参数结构体
 *
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取页数
 * @method void setPageSize(integer $PageSize) 设置页数
 * @method boolean getAllPage() 获取全部页码
 * @method void setAllPage(boolean $AllPage) 设置全部页码
 * @method string getUserType() 获取0 企业用户 1 访客 不填表示所有用户
 * @method void setUserType(string $UserType) 设置0 企业用户 1 访客 不填表示所有用户
 * @method string getKeyword() 获取模糊搜索的关键字
 * @method void setKeyword(string $Keyword) 设置模糊搜索的关键字
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 */
class DescribeUserRoleListRequest extends AbstractModel
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
     * @var boolean 全部页码
     */
    public $AllPage;

    /**
     * @var string 0 企业用户 1 访客 不填表示所有用户
     */
    public $UserType;

    /**
     * @var string 模糊搜索的关键字
     */
    public $Keyword;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @param integer $PageNo 页码
     * @param integer $PageSize 页数
     * @param boolean $AllPage 全部页码
     * @param string $UserType 0 企业用户 1 访客 不填表示所有用户
     * @param string $Keyword 模糊搜索的关键字
     * @param string $ProjectId 项目id
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
    }
}
