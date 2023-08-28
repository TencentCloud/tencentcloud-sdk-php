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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListGatewayDevices请求参数结构体
 *
 * @method string getGatewayId() 获取网关索引ID（从获取网关列表接口ListGateways中获取）
 * @method void setGatewayId(string $GatewayId) 设置网关索引ID（从获取网关列表接口ListGateways中获取）
 * @method integer getPageNumber() 获取分页页数
 * @method void setPageNumber(integer $PageNumber) 设置分页页数
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 */
class ListGatewayDevicesRequest extends AbstractModel
{
    /**
     * @var string 网关索引ID（从获取网关列表接口ListGateways中获取）
     */
    public $GatewayId;

    /**
     * @var integer 分页页数
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @param string $GatewayId 网关索引ID（从获取网关列表接口ListGateways中获取）
     * @param integer $PageNumber 分页页数
     * @param integer $PageSize 分页大小
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
