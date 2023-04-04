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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicy请求参数结构体
 *
 * @method string getProjectId() 获取查看权限的项目ID
 * @method void setProjectId(string $ProjectId) 设置查看权限的项目ID
 * @method string getPolicyMode() 获取查看的权限模式，black为黑名单，white为白名单，不填默认为当前项目生效的权限模式
 * @method void setPolicyMode(string $PolicyMode) 设置查看的权限模式，black为黑名单，white为白名单，不填默认为当前项目生效的权限模式
 * @method string getSearchMode() 获取模糊匹配模式，remoteMatch为远端设备ID匹配，fieldMatch为现场ID匹配，不填默认为remoteMatch
 * @method void setSearchMode(string $SearchMode) 设置模糊匹配模式，remoteMatch为远端设备ID匹配，fieldMatch为现场ID匹配，不填默认为remoteMatch
 * @method string getSearchWords() 获取模糊匹配关键字，不填默认不进行模糊匹配
 * @method void setSearchWords(string $SearchWords) 设置模糊匹配关键字，不填默认不进行模糊匹配
 * @method integer getPageSize() 获取每页返回的最大数量，不填默认为10
 * @method void setPageSize(integer $PageSize) 设置每页返回的最大数量，不填默认为10
 * @method integer getPageNumber() 获取当前页码，不填默认为1（首页）
 * @method void setPageNumber(integer $PageNumber) 设置当前页码，不填默认为1（首页）
 */
class DescribePolicyRequest extends AbstractModel
{
    /**
     * @var string 查看权限的项目ID
     */
    public $ProjectId;

    /**
     * @var string 查看的权限模式，black为黑名单，white为白名单，不填默认为当前项目生效的权限模式
     */
    public $PolicyMode;

    /**
     * @var string 模糊匹配模式，remoteMatch为远端设备ID匹配，fieldMatch为现场ID匹配，不填默认为remoteMatch
     */
    public $SearchMode;

    /**
     * @var string 模糊匹配关键字，不填默认不进行模糊匹配
     */
    public $SearchWords;

    /**
     * @var integer 每页返回的最大数量，不填默认为10
     */
    public $PageSize;

    /**
     * @var integer 当前页码，不填默认为1（首页）
     */
    public $PageNumber;

    /**
     * @param string $ProjectId 查看权限的项目ID
     * @param string $PolicyMode 查看的权限模式，black为黑名单，white为白名单，不填默认为当前项目生效的权限模式
     * @param string $SearchMode 模糊匹配模式，remoteMatch为远端设备ID匹配，fieldMatch为现场ID匹配，不填默认为remoteMatch
     * @param string $SearchWords 模糊匹配关键字，不填默认不进行模糊匹配
     * @param integer $PageSize 每页返回的最大数量，不填默认为10
     * @param integer $PageNumber 当前页码，不填默认为1（首页）
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

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }

        if (array_key_exists("SearchMode",$param) and $param["SearchMode"] !== null) {
            $this->SearchMode = $param["SearchMode"];
        }

        if (array_key_exists("SearchWords",$param) and $param["SearchWords"] !== null) {
            $this->SearchWords = $param["SearchWords"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
