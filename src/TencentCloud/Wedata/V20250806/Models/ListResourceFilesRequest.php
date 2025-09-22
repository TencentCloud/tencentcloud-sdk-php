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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListResourceFiles请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取数据页数，大于等于1。默认1
 * @method void setPageNumber(integer $PageNumber) 设置数据页数，大于等于1。默认1
 * @method integer getPageSize() 获取每页显示的数据条数，最小为10条，最大为200 条。默认10
 * @method void setPageSize(integer $PageSize) 设置每页显示的数据条数，最小为10条，最大为200 条。默认10
 * @method string getResourceName() 获取资源文件名称(模糊搜索关键词)
 * @method void setResourceName(string $ResourceName) 设置资源文件名称(模糊搜索关键词)
 * @method string getParentFolderPath() 获取资源文件所属文件夹路径(如/a/b/c，查询c文件夹下的资源文件)
 * @method void setParentFolderPath(string $ParentFolderPath) 设置资源文件所属文件夹路径(如/a/b/c，查询c文件夹下的资源文件)
 * @method string getCreateUserUin() 获取创建人ID, 可通过DescribeCurrentUserInfo接口获取
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID, 可通过DescribeCurrentUserInfo接口获取
 * @method string getModifyTimeStart() 获取更新时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
 * @method void setModifyTimeStart(string $ModifyTimeStart) 设置更新时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
 * @method string getModifyTimeEnd() 获取更新时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
 * @method void setModifyTimeEnd(string $ModifyTimeEnd) 设置更新时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
 * @method string getCreateTimeStart() 获取创建时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
 * @method void setCreateTimeStart(string $CreateTimeStart) 设置创建时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
 * @method string getCreateTimeEnd() 获取创建时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
 * @method void setCreateTimeEnd(string $CreateTimeEnd) 设置创建时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
 */
class ListResourceFilesRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 数据页数，大于等于1。默认1
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的数据条数，最小为10条，最大为200 条。默认10
     */
    public $PageSize;

    /**
     * @var string 资源文件名称(模糊搜索关键词)
     */
    public $ResourceName;

    /**
     * @var string 资源文件所属文件夹路径(如/a/b/c，查询c文件夹下的资源文件)
     */
    public $ParentFolderPath;

    /**
     * @var string 创建人ID, 可通过DescribeCurrentUserInfo接口获取
     */
    public $CreateUserUin;

    /**
     * @var string 更新时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
     */
    public $ModifyTimeStart;

    /**
     * @var string 更新时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
     */
    public $ModifyTimeEnd;

    /**
     * @var string 创建时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
     */
    public $CreateTimeStart;

    /**
     * @var string 创建时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
     */
    public $CreateTimeEnd;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 数据页数，大于等于1。默认1
     * @param integer $PageSize 每页显示的数据条数，最小为10条，最大为200 条。默认10
     * @param string $ResourceName 资源文件名称(模糊搜索关键词)
     * @param string $ParentFolderPath 资源文件所属文件夹路径(如/a/b/c，查询c文件夹下的资源文件)
     * @param string $CreateUserUin 创建人ID, 可通过DescribeCurrentUserInfo接口获取
     * @param string $ModifyTimeStart 更新时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
     * @param string $ModifyTimeEnd 更新时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
     * @param string $CreateTimeStart 创建时间范围,开始时间, 格式yyyy-MM-dd HH:mm:ss
     * @param string $CreateTimeEnd 创建时间范围,结束时间, 格式yyyy-MM-dd HH:mm:ss
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTimeStart",$param) and $param["ModifyTimeStart"] !== null) {
            $this->ModifyTimeStart = $param["ModifyTimeStart"];
        }

        if (array_key_exists("ModifyTimeEnd",$param) and $param["ModifyTimeEnd"] !== null) {
            $this->ModifyTimeEnd = $param["ModifyTimeEnd"];
        }

        if (array_key_exists("CreateTimeStart",$param) and $param["CreateTimeStart"] !== null) {
            $this->CreateTimeStart = $param["CreateTimeStart"];
        }

        if (array_key_exists("CreateTimeEnd",$param) and $param["CreateTimeEnd"] !== null) {
            $this->CreateTimeEnd = $param["CreateTimeEnd"];
        }
    }
}
