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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayNodes请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getGroupId() 获取实例分组id
 * @method void setGroupId(string $GroupId) 设置实例分组id
 * @method integer getLimit() 获取翻页获取多少个
 * @method void setLimit(integer $Limit) 设置翻页获取多少个
 * @method integer getOffset() 获取翻页从第几个开始获取
 * @method void setOffset(integer $Offset) 设置翻页从第几个开始获取
 */
class DescribeCloudNativeAPIGatewayNodesRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 实例分组id
     */
    public $GroupId;

    /**
     * @var integer 翻页获取多少个
     */
    public $Limit;

    /**
     * @var integer 翻页从第几个开始获取
     */
    public $Offset;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $GroupId 实例分组id
     * @param integer $Limit 翻页获取多少个
     * @param integer $Offset 翻页从第几个开始获取
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
