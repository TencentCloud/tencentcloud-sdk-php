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
 * DescribeDatasourceList请求参数结构体
 *
 * @method integer getProjectId() 获取无
 * @method void setProjectId(integer $ProjectId) 设置无
 * @method boolean getAllPage() 获取返回所有页面，默认false
 * @method void setAllPage(boolean $AllPage) 设置返回所有页面，默认false
 * @method string getDbName() 获取数据库名称检索
 * @method void setDbName(string $DbName) 设置数据库名称检索
 * @method integer getPageNo() 获取无
 * @method void setPageNo(integer $PageNo) 设置无
 * @method integer getPageSize() 获取无
 * @method void setPageSize(integer $PageSize) 设置无
 * @method string getKeyword() 获取搜索关键词
 * @method void setKeyword(string $Keyword) 设置搜索关键词
 * @method integer getPermissionType() 获取过滤无权限列表的参数（0 全量，1 使用权限，2 编辑权限）
 * @method void setPermissionType(integer $PermissionType) 设置过滤无权限列表的参数（0 全量，1 使用权限，2 编辑权限）
 */
class DescribeDatasourceListRequest extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $ProjectId;

    /**
     * @var boolean 返回所有页面，默认false
     */
    public $AllPage;

    /**
     * @var string 数据库名称检索
     */
    public $DbName;

    /**
     * @var integer 无
     */
    public $PageNo;

    /**
     * @var integer 无
     */
    public $PageSize;

    /**
     * @var string 搜索关键词
     */
    public $Keyword;

    /**
     * @var integer 过滤无权限列表的参数（0 全量，1 使用权限，2 编辑权限）
     */
    public $PermissionType;

    /**
     * @param integer $ProjectId 无
     * @param boolean $AllPage 返回所有页面，默认false
     * @param string $DbName 数据库名称检索
     * @param integer $PageNo 无
     * @param integer $PageSize 无
     * @param string $Keyword 搜索关键词
     * @param integer $PermissionType 过滤无权限列表的参数（0 全量，1 使用权限，2 编辑权限）
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

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }
    }
}
