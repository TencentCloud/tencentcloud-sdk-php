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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOpenPorts返回参数结构体
 *
 * @method integer getTotalCount() 获取端口列表记录总数。
 * @method void setTotalCount(integer $TotalCount) 设置端口列表记录总数。
 * @method array getOpenPorts() 获取端口列表。
 * @method void setOpenPorts(array $OpenPorts) 设置端口列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOpenPortsResponse extends AbstractModel
{
    /**
     * @var integer 端口列表记录总数。
     */
    public $TotalCount;

    /**
     * @var array 端口列表。
     */
    public $OpenPorts;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 端口列表记录总数。
     * @param array $OpenPorts 端口列表。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("OpenPorts",$param) and $param["OpenPorts"] !== null) {
            $this->OpenPorts = [];
            foreach ($param["OpenPorts"] as $key => $value){
                $obj = new OpenPort();
                $obj->deserialize($value);
                array_push($this->OpenPorts, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
