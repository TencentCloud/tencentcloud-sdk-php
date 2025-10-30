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
 * ListWorkflows请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取请求的数据页数。默认值为1，取值大于等于1
 * @method void setPageNumber(integer $PageNumber) 设置请求的数据页数。默认值为1，取值大于等于1
 * @method integer getPageSize() 获取每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
 * @method void setPageSize(integer $PageSize) 设置每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
 * @method string getKeyword() 获取搜索关键词
 * @method void setKeyword(string $Keyword) 设置搜索关键词
 * @method string getParentFolderPath() 获取工作流所属文件夹
 * @method void setParentFolderPath(string $ParentFolderPath) 设置工作流所属文件夹
 * @method string getWorkflowType() 获取工作流类型，cycle和manual
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型，cycle和manual
 * @method string getBundleId() 获取bundleId项
 * @method void setBundleId(string $BundleId) 设置bundleId项
 * @method string getOwnerUin() 获取负责人ID
 * @method void setOwnerUin(string $OwnerUin) 设置负责人ID
 * @method string getCreateUserUin() 获取创建人ID
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
 * @method array getModifyTime() 获取修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 * @method void setModifyTime(array $ModifyTime) 设置修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 * @method array getCreateTime() 获取创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 * @method void setCreateTime(array $CreateTime) 设置创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 */
class ListWorkflowsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 请求的数据页数。默认值为1，取值大于等于1
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
     */
    public $PageSize;

    /**
     * @var string 搜索关键词
     */
    public $Keyword;

    /**
     * @var string 工作流所属文件夹
     */
    public $ParentFolderPath;

    /**
     * @var string 工作流类型，cycle和manual
     */
    public $WorkflowType;

    /**
     * @var string bundleId项
     */
    public $BundleId;

    /**
     * @var string 负责人ID
     */
    public $OwnerUin;

    /**
     * @var string 创建人ID
     */
    public $CreateUserUin;

    /**
     * @var array 修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
     */
    public $ModifyTime;

    /**
     * @var array 创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
     */
    public $CreateTime;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 请求的数据页数。默认值为1，取值大于等于1
     * @param integer $PageSize 每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
     * @param string $Keyword 搜索关键词
     * @param string $ParentFolderPath 工作流所属文件夹
     * @param string $WorkflowType 工作流类型，cycle和manual
     * @param string $BundleId bundleId项
     * @param string $OwnerUin 负责人ID
     * @param string $CreateUserUin 创建人ID
     * @param array $ModifyTime 修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
     * @param array $CreateTime 创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
