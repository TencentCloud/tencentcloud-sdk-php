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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUser请求参数结构体
 *
 * @method string getUserId() 获取用户Id。
 * @method void setUserId(string $UserId) 设置用户Id。
 * @method string getOriginId() 获取客户端用户 id,如果未指定则为用户 id。
 * @method void setOriginId(string $OriginId) 设置客户端用户 id,如果未指定则为用户 id。
 */
class DescribeUserRequest extends AbstractModel
{
    /**
     * @var string 用户Id。
     */
    public $UserId;

    /**
     * @var string 客户端用户 id,如果未指定则为用户 id。
     */
    public $OriginId;

    /**
     * @param string $UserId 用户Id。
     * @param string $OriginId 客户端用户 id,如果未指定则为用户 id。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }
    }
}
