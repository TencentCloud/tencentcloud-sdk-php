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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientSwitchTraTaskInfo返回参数结构体
 *
 * @method string getClientUin() 获取客户UIN
 * @method void setClientUin(string $ClientUin) 设置客户UIN
 * @method string getSwitchType() 获取切换类型：代理,代采
 * @method void setSwitchType(string $SwitchType) 设置切换类型：代理,代采
 * @method string getResult() 获取ok，符合，fail，不符合
 * @method void setResult(string $Result) 设置ok，符合，fail，不符合
 * @method string getSwitchUrl() 获取切换链接
 * @method void setSwitchUrl(string $SwitchUrl) 设置切换链接
 * @method string getResultMsg() 获取不符合的原因
 * @method void setResultMsg(string $ResultMsg) 设置不符合的原因
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClientSwitchTraTaskInfoResponse extends AbstractModel
{
    /**
     * @var string 客户UIN
     */
    public $ClientUin;

    /**
     * @var string 切换类型：代理,代采
     */
    public $SwitchType;

    /**
     * @var string ok，符合，fail，不符合
     */
    public $Result;

    /**
     * @var string 切换链接
     */
    public $SwitchUrl;

    /**
     * @var string 不符合的原因
     */
    public $ResultMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClientUin 客户UIN
     * @param string $SwitchType 切换类型：代理,代采
     * @param string $Result ok，符合，fail，不符合
     * @param string $SwitchUrl 切换链接
     * @param string $ResultMsg 不符合的原因
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("SwitchUrl",$param) and $param["SwitchUrl"] !== null) {
            $this->SwitchUrl = $param["SwitchUrl"];
        }

        if (array_key_exists("ResultMsg",$param) and $param["ResultMsg"] !== null) {
            $this->ResultMsg = $param["ResultMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
