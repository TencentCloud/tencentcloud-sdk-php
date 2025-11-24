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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceOplog返回参数结构体
 *
 * @method integer getTotalCnt() 获取操作日志数量
 * @method void setTotalCnt(integer $TotalCnt) 设置操作日志数量
 * @method array getLogList() 获取操作日志列表
 * @method void setLogList(array $LogList) 设置操作日志列表
 * @method array getOperandList() 获取操作对象筛选项数组
 * @method void setOperandList(array $OperandList) 设置操作对象筛选项数组
 * @method array getSecurityLevelList() 获取安全级别筛选数组
 * @method void setSecurityLevelList(array $SecurityLevelList) 设置安全级别筛选数组
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceOplogResponse extends AbstractModel
{
    /**
     * @var integer 操作日志数量
     */
    public $TotalCnt;

    /**
     * @var array 操作日志列表
     */
    public $LogList;

    /**
     * @var array 操作对象筛选项数组
     */
    public $OperandList;

    /**
     * @var array 安全级别筛选数组
     */
    public $SecurityLevelList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt 操作日志数量
     * @param array $LogList 操作日志列表
     * @param array $OperandList 操作对象筛选项数组
     * @param array $SecurityLevelList 安全级别筛选数组
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("LogList",$param) and $param["LogList"] !== null) {
            $this->LogList = [];
            foreach ($param["LogList"] as $key => $value){
                $obj = new OperationLog();
                $obj->deserialize($value);
                array_push($this->LogList, $obj);
            }
        }

        if (array_key_exists("OperandList",$param) and $param["OperandList"] !== null) {
            $this->OperandList = $param["OperandList"];
        }

        if (array_key_exists("SecurityLevelList",$param) and $param["SecurityLevelList"] !== null) {
            $this->SecurityLevelList = $param["SecurityLevelList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
