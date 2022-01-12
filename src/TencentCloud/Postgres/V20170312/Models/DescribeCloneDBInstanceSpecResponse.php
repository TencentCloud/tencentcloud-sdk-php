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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloneDBInstanceSpec返回参数结构体
 *
 * @method string getMinSpecCode() 获取可购买的最小规格码。
 * @method void setMinSpecCode(string $MinSpecCode) 设置可购买的最小规格码。
 * @method integer getMinStorage() 获取可购买的最小磁盘容量，单位GB。
 * @method void setMinStorage(integer $MinStorage) 设置可购买的最小磁盘容量，单位GB。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloneDBInstanceSpecResponse extends AbstractModel
{
    /**
     * @var string 可购买的最小规格码。
     */
    public $MinSpecCode;

    /**
     * @var integer 可购买的最小磁盘容量，单位GB。
     */
    public $MinStorage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MinSpecCode 可购买的最小规格码。
     * @param integer $MinStorage 可购买的最小磁盘容量，单位GB。
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
        if (array_key_exists("MinSpecCode",$param) and $param["MinSpecCode"] !== null) {
            $this->MinSpecCode = $param["MinSpecCode"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
