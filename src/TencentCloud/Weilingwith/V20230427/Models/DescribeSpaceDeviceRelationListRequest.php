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
 * DescribeSpaceDeviceRelationList请求参数结构体
 *
 * @method array getElementIds() 获取构件id列表
 * @method void setElementIds(array $ElementIds) 设置构件id列表
 * @method boolean getIsCascade() 获取是否级联
 * @method void setIsCascade(boolean $IsCascade) 设置是否级联
 * @method string getWorkspaceId() 获取项目空间id
 * @method void setWorkspaceId(string $WorkspaceId) 设置项目空间id
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页容量
 * @method void setPageSize(integer $PageSize) 设置页容量
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 */
class DescribeSpaceDeviceRelationListRequest extends AbstractModel
{
    /**
     * @var array 构件id列表
     */
    public $ElementIds;

    /**
     * @var boolean 是否级联
     */
    public $IsCascade;

    /**
     * @var string 项目空间id
     */
    public $WorkspaceId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页容量
     */
    public $PageSize;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @param array $ElementIds 构件id列表
     * @param boolean $IsCascade 是否级联
     * @param string $WorkspaceId 项目空间id
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页容量
     * @param string $ApplicationToken 应用token
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
        if (array_key_exists("ElementIds",$param) and $param["ElementIds"] !== null) {
            $this->ElementIds = $param["ElementIds"];
        }

        if (array_key_exists("IsCascade",$param) and $param["IsCascade"] !== null) {
            $this->IsCascade = $param["IsCascade"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }
    }
}
