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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisTopBigKeys返回参数结构体
 *
 * @method array getTopKeys() 获取top key列表。
 * @method void setTopKeys(array $TopKeys) 设置top key列表。
 * @method integer getTimestamp() 获取采集时间戳（秒）。
 * @method void setTimestamp(integer $Timestamp) 设置采集时间戳（秒）。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRedisTopBigKeysResponse extends AbstractModel
{
    /**
     * @var array top key列表。
     */
    public $TopKeys;

    /**
     * @var integer 采集时间戳（秒）。
     */
    public $Timestamp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TopKeys top key列表。
     * @param integer $Timestamp 采集时间戳（秒）。
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
        if (array_key_exists("TopKeys",$param) and $param["TopKeys"] !== null) {
            $this->TopKeys = [];
            foreach ($param["TopKeys"] as $key => $value){
                $obj = new RedisKeySpaceData();
                $obj->deserialize($value);
                array_push($this->TopKeys, $obj);
            }
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
