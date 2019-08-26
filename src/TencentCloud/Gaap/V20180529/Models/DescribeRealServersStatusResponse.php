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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取返回源站查询结果的个数
 * @method void setTotalCount(integer $TotalCount) 设置返回源站查询结果的个数
 * @method array getRealServerStatusSet() 获取源站被绑定状态列表
 * @method void setRealServerStatusSet(array $RealServerStatusSet) 设置源站被绑定状态列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeRealServersStatus返回参数结构体
 */
class DescribeRealServersStatusResponse extends AbstractModel
{
    /**
     * @var integer 返回源站查询结果的个数
     */
    public $TotalCount;

    /**
     * @var array 源站被绑定状态列表
     */
    public $RealServerStatusSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 返回源站查询结果的个数
     * @param array $RealServerStatusSet 源站被绑定状态列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RealServerStatusSet",$param) and $param["RealServerStatusSet"] !== null) {
            $this->RealServerStatusSet = [];
            foreach ($param["RealServerStatusSet"] as $key => $value){
                $obj = new RealServerStatus();
                $obj->deserialize($value);
                array_push($this->RealServerStatusSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
