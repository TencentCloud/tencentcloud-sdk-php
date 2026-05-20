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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayConsumerList请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method integer getLimit() 获取页显示条数，最大20
 * @method void setLimit(integer $Limit) 设置页显示条数，最大20
 * @method integer getOffset() 获取起始位置
 * @method void setOffset(integer $Offset) 设置起始位置
 */
class DescribeCloudNativeAPIGatewayConsumerListRequest extends AbstractModel
{
    /**
     * @var string 网关实例id
     */
    public $GatewayId;

    /**
     * @var integer 页显示条数，最大20
     */
    public $Limit;

    /**
     * @var integer 起始位置
     */
    public $Offset;

    /**
     * @param string $GatewayId 网关实例id
     * @param integer $Limit 页显示条数，最大20
     * @param integer $Offset 起始位置
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
