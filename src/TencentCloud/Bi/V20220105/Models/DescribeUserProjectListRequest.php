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
 * DescribeUserProjectList请求参数结构体
 *
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method boolean getAllPage() 获取<p>无</p>
 * @method void setAllPage(boolean $AllPage) 设置<p>无</p>
 * @method integer getPageNo() 获取<p>无</p>
 * @method void setPageNo(integer $PageNo) 设置<p>无</p>
 * @method integer getPageSize() 获取<p>无</p>
 * @method void setPageSize(integer $PageSize) 设置<p>无</p>
 * @method boolean getIsFilterPerAuthUser() 获取<p>是否过滤掉企业管理员</p>
 * @method void setIsFilterPerAuthUser(boolean $IsFilterPerAuthUser) 设置<p>是否过滤掉企业管理员</p>
 * @method boolean getIsFilterCurrentUser() 获取<p>是否过滤掉当前用户</p>
 * @method void setIsFilterCurrentUser(boolean $IsFilterCurrentUser) 设置<p>是否过滤掉当前用户</p>
 * @method string getKeyword() 获取<p>关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字</p>
 */
class DescribeUserProjectListRequest extends AbstractModel
{
    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var boolean <p>无</p>
     */
    public $AllPage;

    /**
     * @var integer <p>无</p>
     */
    public $PageNo;

    /**
     * @var integer <p>无</p>
     */
    public $PageSize;

    /**
     * @var boolean <p>是否过滤掉企业管理员</p>
     */
    public $IsFilterPerAuthUser;

    /**
     * @var boolean <p>是否过滤掉当前用户</p>
     */
    public $IsFilterCurrentUser;

    /**
     * @var string <p>关键字</p>
     */
    public $Keyword;

    /**
     * @param integer $ProjectId <p>项目ID</p>
     * @param boolean $AllPage <p>无</p>
     * @param integer $PageNo <p>无</p>
     * @param integer $PageSize <p>无</p>
     * @param boolean $IsFilterPerAuthUser <p>是否过滤掉企业管理员</p>
     * @param boolean $IsFilterCurrentUser <p>是否过滤掉当前用户</p>
     * @param string $Keyword <p>关键字</p>
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
