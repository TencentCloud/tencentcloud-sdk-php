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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListGateways请求参数结构体
 *
 * @method integer getPageNumber() 获取页码，默认为1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认为1
 * @method integer getPageSize() 获取每页数量，默认为20
 * @method void setPageSize(integer $PageSize) 设置每页数量，默认为20
 * @method string getName() 获取网关名称
 * @method void setName(string $Name) 设置网关名称
 * @method string getClusterId() 获取服务节点ID
 * @method void setClusterId(string $ClusterId) 设置服务节点ID
 * @method integer getStatus() 获取网关状态（0：离线，1 ：在线）
 * @method void setStatus(integer $Status) 设置网关状态（0：离线，1 ：在线）
 */
class ListGatewaysRequest extends AbstractModel
{
    /**
     * @var integer 页码，默认为1
     */
    public $PageNumber;

    /**
     * @var integer 每页数量，默认为20
     */
    public $PageSize;

    /**
     * @var string 网关名称
     */
    public $Name;

    /**
     * @var string 服务节点ID
     */
    public $ClusterId;

    /**
     * @var integer 网关状态（0：离线，1 ：在线）
     */
    public $Status;

    /**
     * @param integer $PageNumber 页码，默认为1
     * @param integer $PageSize 每页数量，默认为20
     * @param string $Name 网关名称
     * @param string $ClusterId 服务节点ID
     * @param integer $Status 网关状态（0：离线，1 ：在线）
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
