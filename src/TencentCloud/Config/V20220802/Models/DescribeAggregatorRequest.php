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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAggregator请求参数结构体
 *
 * @method string getAccountGroupId() 获取<p>账号组ID</p>
 * @method void setAccountGroupId(string $AccountGroupId) 设置<p>账号组ID</p>
 * @method integer getOwnerUin() 获取<p>账号组创建者ID</p>
 * @method void setOwnerUin(integer $OwnerUin) 设置<p>账号组创建者ID</p>
 */
class DescribeAggregatorRequest extends AbstractModel
{
    /**
     * @var string <p>账号组ID</p>
     */
    public $AccountGroupId;

    /**
     * @var integer <p>账号组创建者ID</p>
     */
    public $OwnerUin;

    /**
     * @param string $AccountGroupId <p>账号组ID</p>
     * @param integer $OwnerUin <p>账号组创建者ID</p>
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
