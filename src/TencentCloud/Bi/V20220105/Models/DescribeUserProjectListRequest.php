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
 * DescribeUserProjectList请求参数结构体
 *
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method boolean getAllPage() 获取无
 * @method void setAllPage(boolean $AllPage) 设置无
 * @method integer getPageNo() 获取无
 * @method void setPageNo(integer $PageNo) 设置无
 * @method integer getPageSize() 获取无
 * @method void setPageSize(integer $PageSize) 设置无
 * @method boolean getIsFilterPerAuthUser() 获取是否过滤掉企业管理员
 * @method void setIsFilterPerAuthUser(boolean $IsFilterPerAuthUser) 设置是否过滤掉企业管理员
 * @method boolean getIsFilterCurrentUser() 获取是否过滤掉当前用户
 * @method void setIsFilterCurrentUser(boolean $IsFilterCurrentUser) 设置是否过滤掉当前用户
 * @method string getKeyword() 获取关键字
 * @method void setKeyword(string $Keyword) 设置关键字
 */
class DescribeUserProjectListRequest extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var boolean 无
     */
    public $AllPage;

    /**
     * @var integer 无
     */
    public $PageNo;

    /**
     * @var integer 无
     */
    public $PageSize;

    /**
     * @var boolean 是否过滤掉企业管理员
     */
    public $IsFilterPerAuthUser;

    /**
     * @var boolean 是否过滤掉当前用户
     */
    public $IsFilterCurrentUser;

    /**
     * @var string 关键字
     */
    public $Keyword;

    /**
     * @param integer $ProjectId 项目ID
     * @param boolean $AllPage 无
     * @param integer $PageNo 无
     * @param integer $PageSize 无
     * @param boolean $IsFilterPerAuthUser 是否过滤掉企业管理员
     * @param boolean $IsFilterCurrentUser 是否过滤掉当前用户
     * @param string $Keyword 关键字
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

        if (array_key_exists("IsFilterPerAuthUser",$param) and $param["IsFilterPerAuthUser"] !== null) {
            $this->IsFilterPerAuthUser = $param["IsFilterPerAuthUser"];
        }

        if (array_key_exists("IsFilterCurrentUser",$param) and $param["IsFilterCurrentUser"] !== null) {
            $this->IsFilterCurrentUser = $param["IsFilterCurrentUser"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
