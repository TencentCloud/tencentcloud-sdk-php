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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlackWhiteIpList返回参数结构体
 *
 * @method array getBlackIpList() 获取黑名单IP列表
 * @method void setBlackIpList(array $BlackIpList) 设置黑名单IP列表
 * @method array getWhiteIpList() 获取白名单IP列表
 * @method void setWhiteIpList(array $WhiteIpList) 设置白名单IP列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBlackWhiteIpListResponse extends AbstractModel
{
    /**
     * @var array 黑名单IP列表
     */
    public $BlackIpList;

    /**
     * @var array 白名单IP列表
     */
    public $WhiteIpList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BlackIpList 黑名单IP列表
     * @param array $WhiteIpList 白名单IP列表
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
        if (array_key_exists("BlackIpList",$param) and $param["BlackIpList"] !== null) {
            $this->BlackIpList = $param["BlackIpList"];
        }

        if (array_key_exists("WhiteIpList",$param) and $param["WhiteIpList"] !== null) {
            $this->WhiteIpList = $param["WhiteIpList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
