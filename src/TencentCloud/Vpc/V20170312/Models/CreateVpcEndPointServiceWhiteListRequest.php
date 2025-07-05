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
 * CreateVpcEndPointServiceWhiteList请求参数结构体
 *
 * @method string getUserUin() 获取UIN。腾讯云账号中心控制台获取。
 * @method void setUserUin(string $UserUin) 设置UIN。腾讯云账号中心控制台获取。
 * @method string getEndPointServiceId() 获取终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 * @method string getDescription() 获取白名单描述。长度不超过60个字符。
 * @method void setDescription(string $Description) 设置白名单描述。长度不超过60个字符。
 */
class CreateVpcEndPointServiceWhiteListRequest extends AbstractModel
{
    /**
     * @var string UIN。腾讯云账号中心控制台获取。
     */
    public $UserUin;

    /**
     * @var string 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
     */
    public $EndPointServiceId;

    /**
     * @var string 白名单描述。长度不超过60个字符。
     */
    public $Description;

    /**
     * @param string $UserUin UIN。腾讯云账号中心控制台获取。
     * @param string $EndPointServiceId 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
     * @param string $Description 白名单描述。长度不超过60个字符。
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
