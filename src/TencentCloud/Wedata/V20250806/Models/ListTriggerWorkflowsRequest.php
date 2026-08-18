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
 * ListTriggerWorkflows请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method integer getPageNumber() 获取<p>请求的数据页数。默认值为1，取值大于等于1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>请求的数据页数。默认值为1，取值大于等于1</p>
 * @method integer getPageSize() 获取<p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
 * @method string getKeyword() 获取<p>搜索关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索关键词</p>
 * @method string getParentFolderPath() 获取<p>工作流所属文件夹</p>
 * @method void setParentFolderPath(string $ParentFolderPath) 设置<p>工作流所属文件夹</p>
 * @method string getBundleId() 获取<p>bundleId项</p>
 * @method void setBundleId(string $BundleId) 设置<p>bundleId项</p>
 * @method string getOwnerUin() 获取<p>负责人ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>负责人ID</p>
 * @method string getCreateUserUin() 获取<p>创建人ID</p>
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人ID</p>
 * @method string getExecuteUserUin() 获取<p>运行账号ID</p>
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置<p>运行账号ID</p>
 * @method array getModifyTime() 获取<p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 * @method void setModifyTime(array $ModifyTime) 设置<p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 * @method array getCreateTime() 获取<p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 * @method void setCreateTime(array $CreateTime) 设置<p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 */
class ListTriggerWorkflowsRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>请求的数据页数。默认值为1，取值大于等于1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
     */
    public $PageSize;

    /**
     * @var string <p>搜索关键词</p>
     */
    public $Keyword;

    /**
     * @var string <p>工作流所属文件夹</p>
     */
    public $ParentFolderPath;

    /**
     * @var string <p>bundleId项</p>
     */
    public $BundleId;

    /**
     * @var string <p>负责人ID</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>创建人ID</p>
     */
    public $CreateUserUin;

    /**
     * @var string <p>运行账号ID</p>
     */
    public $ExecuteUserUin;

    /**
     * @var array <p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
     */
    public $ModifyTime;

    /**
     * @var array <p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
     */
    public $CreateTime;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param integer $PageNumber <p>请求的数据页数。默认值为1，取值大于等于1</p>
     * @param integer $PageSize <p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
     * @param string $Keyword <p>搜索关键词</p>
     * @param string $ParentFolderPath <p>工作流所属文件夹</p>
     * @param string $BundleId <p>bundleId项</p>
     * @param string $OwnerUin <p>负责人ID</p>
     * @param string $CreateUserUin <p>创建人ID</p>
     * @param string $ExecuteUserUin <p>运行账号ID</p>
     * @param array $ModifyTime <p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
     * @param array $CreateTime <p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
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

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
