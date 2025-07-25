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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogs返回参数结构体
 *
 * @method string getData() 获取日志列表
 * @method void setData(string $Data) 设置日志列表
 * @method integer getTotal() 获取总条数
 * @method void setTotal(integer $Total) 设置总条数
 * @method integer getReturnCode() 获取返回状态码 0 成功 非0不成功
 * @method void setReturnCode(integer $ReturnCode) 设置返回状态码 0 成功 非0不成功
 * @method string getReturnMsg() 获取返回信息  success 成功 其他 不成功
 * @method void setReturnMsg(string $ReturnMsg) 设置返回信息  success 成功 其他 不成功
 * @method array getAppProtocolList() 获取七层协议，NTA日志有效
 * @method void setAppProtocolList(array $AppProtocolList) 设置七层协议，NTA日志有效
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogsResponse extends AbstractModel
{
    /**
     * @var string 日志列表
     */
    public $Data;

    /**
     * @var integer 总条数
     */
    public $Total;

    /**
     * @var integer 返回状态码 0 成功 非0不成功
     */
    public $ReturnCode;

    /**
     * @var string 返回信息  success 成功 其他 不成功
     */
    public $ReturnMsg;

    /**
     * @var array 七层协议，NTA日志有效
     */
    public $AppProtocolList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Data 日志列表
     * @param integer $Total 总条数
     * @param integer $ReturnCode 返回状态码 0 成功 非0不成功
     * @param string $ReturnMsg 返回信息  success 成功 其他 不成功
     * @param array $AppProtocolList 七层协议，NTA日志有效
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("AppProtocolList",$param) and $param["AppProtocolList"] !== null) {
            $this->AppProtocolList = $param["AppProtocolList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
