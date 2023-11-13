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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationList请求参数结构体
 *
 * @method integer getWorkspaceId() 获取项目空间id，本次查询返回的应用均关联至该空间
 * @method void setWorkspaceId(integer $WorkspaceId) 设置项目空间id，本次查询返回的应用均关联至该空间
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method array getApplicationId() 获取应用id数组，可选，填了则表示根据id批量查询
 * @method void setApplicationId(array $ApplicationId) 设置应用id数组，可选，填了则表示根据id批量查询
 * @method integer getPageNumber() 获取请求页号
 * @method void setPageNumber(integer $PageNumber) 设置请求页号
 * @method integer getPageSize() 获取页容量，默认为10
 * @method void setPageSize(integer $PageSize) 设置页容量，默认为10
 */
class DescribeApplicationListRequest extends AbstractModel
{
    /**
     * @var integer 项目空间id，本次查询返回的应用均关联至该空间
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var array 应用id数组，可选，填了则表示根据id批量查询
     */
    public $ApplicationId;

    /**
     * @var integer 请求页号
     */
    public $PageNumber;

    /**
     * @var integer 页容量，默认为10
     */
    public $PageSize;

    /**
     * @param integer $WorkspaceId 项目空间id，本次查询返回的应用均关联至该空间
     * @param string $ApplicationToken 应用token
     * @param array $ApplicationId 应用id数组，可选，填了则表示根据id批量查询
     * @param integer $PageNumber 请求页号
     * @param integer $PageSize 页容量，默认为10
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
