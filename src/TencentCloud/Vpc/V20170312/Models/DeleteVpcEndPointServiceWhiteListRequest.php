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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVpcEndPointServiceWhiteList请求参数结构体
 *
 * @method array getUserUin() 获取用户UIN数组。登录 腾讯云账号中心控制台
 * @method void setUserUin(array $UserUin) 设置用户UIN数组。登录 腾讯云账号中心控制台
 * @method string getEndPointServiceId() 获取终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 */
class DeleteVpcEndPointServiceWhiteListRequest extends AbstractModel
{
    /**
     * @var array 用户UIN数组。登录 腾讯云账号中心控制台
     */
    public $UserUin;

    /**
     * @var string 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
     */
    public $EndPointServiceId;

    /**
     * @param array $UserUin 用户UIN数组。登录 腾讯云账号中心控制台
     * @param string $EndPointServiceId 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }
    }
}
