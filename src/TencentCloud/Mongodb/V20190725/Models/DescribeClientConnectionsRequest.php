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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientConnections请求参数结构体
 *
 * @method string getInstanceId() 获取指定待查询的实例ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定待查询的实例ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method integer getLimit() 获取单次请求返回的数量。最小值为1，最大值为1000，默认值为1000。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量。最小值为1，最大值为1000，默认值为1000。
 * @method integer getOffset() 获取偏移量，默认值为0。Offset=Limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。Offset=Limit*(页码-1)。
 */
class DescribeClientConnectionsRequest extends AbstractModel
{
    /**
     * @var string 指定待查询的实例ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var integer 单次请求返回的数量。最小值为1，最大值为1000，默认值为1000。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认值为0。Offset=Limit*(页码-1)。
     */
    public $Offset;

    /**
     * @param string $InstanceId 指定待查询的实例ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     * @param integer $Limit 单次请求返回的数量。最小值为1，最大值为1000，默认值为1000。
     * @param integer $Offset 偏移量，默认值为0。Offset=Limit*(页码-1)。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
