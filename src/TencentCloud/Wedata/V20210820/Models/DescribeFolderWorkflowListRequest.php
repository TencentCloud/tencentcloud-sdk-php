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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFolderWorkflowList请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getParentsFolderId() 获取父文件夹ID
 * @method void setParentsFolderId(string $ParentsFolderId) 设置父文件夹ID
 * @method string getKeyWords() 获取关键字
 * @method void setKeyWords(string $KeyWords) 设置关键字
 * @method integer getPageNumber() 获取页码，默认1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认1
 * @method integer getPageSize() 获取页大小，默认10
 * @method void setPageSize(integer $PageSize) 设置页大小，默认10
 */
class DescribeFolderWorkflowListRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 父文件夹ID
     */
    public $ParentsFolderId;

    /**
     * @var string 关键字
     */
    public $KeyWords;

    /**
     * @var integer 页码，默认1
     */
    public $PageNumber;

    /**
     * @var integer 页大小，默认10
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目Id
     * @param string $ParentsFolderId 父文件夹ID
     * @param string $KeyWords 关键字
     * @param integer $PageNumber 页码，默认1
     * @param integer $PageSize 页大小，默认10
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

        if (array_key_exists("ParentsFolderId",$param) and $param["ParentsFolderId"] !== null) {
            $this->ParentsFolderId = $param["ParentsFolderId"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
