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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGatewayVersions返回参数结构体
 *
 * @method string getGatewayId() 获取网关id
 * @method void setGatewayId(string $GatewayId) 设置网关id
 * @method integer getTotalCount() 获取版本总数
 * @method void setTotalCount(integer $TotalCount) 设置版本总数
 * @method array getGatewayVersionItems() 获取版本信息详情
 * @method void setGatewayVersionItems(array $GatewayVersionItems) 设置版本信息详情
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGatewayVersionsResponse extends AbstractModel
{
    /**
     * @var string 网关id
     */
    public $GatewayId;

    /**
     * @var integer 版本总数
     */
    public $TotalCount;

    /**
     * @var array 版本信息详情
     */
    public $GatewayVersionItems;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GatewayId 网关id
     * @param integer $TotalCount 版本总数
     * @param array $GatewayVersionItems 版本信息详情
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("GatewayVersionItems",$param) and $param["GatewayVersionItems"] !== null) {
            $this->GatewayVersionItems = [];
            foreach ($param["GatewayVersionItems"] as $key => $value){
                $obj = new GatewayVersionItem();
                $obj->deserialize($value);
                array_push($this->GatewayVersionItems, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
