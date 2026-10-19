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
 * DescribeOverviewResourceQuota返回参数结构体
 *
 * @method OverviewResourceQuotaDataLite getData() 获取<p>资源与配额详情数据</p><p>包含详情字段和能力标识，具体字段含义见关联数据结构说明。访问控制规则同时提供汇总字段及按互联网边界、NAT边界、VPC边界拆分的字段。</p>
 * @method void setData(OverviewResourceQuotaDataLite $Data) 设置<p>资源与配额详情数据</p><p>包含详情字段和能力标识，具体字段含义见关联数据结构说明。访问控制规则同时提供汇总字段及按互联网边界、NAT边界、VPC边界拆分的字段。</p>
 * @method integer getReturnCode() 获取<p>返回代码</p>
 * @method void setReturnCode(integer $ReturnCode) 设置<p>返回代码</p>
 * @method string getReturnMsg() 获取<p>返回状态字符</p>
 * @method void setReturnMsg(string $ReturnMsg) 设置<p>返回状态字符</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOverviewResourceQuotaResponse extends AbstractModel
{
    /**
     * @var OverviewResourceQuotaDataLite <p>资源与配额详情数据</p><p>包含详情字段和能力标识，具体字段含义见关联数据结构说明。访问控制规则同时提供汇总字段及按互联网边界、NAT边界、VPC边界拆分的字段。</p>
     */
    public $Data;

    /**
     * @var integer <p>返回代码</p>
     */
    public $ReturnCode;

    /**
     * @var string <p>返回状态字符</p>
     */
    public $ReturnMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param OverviewResourceQuotaDataLite $Data <p>资源与配额详情数据</p><p>包含详情字段和能力标识，具体字段含义见关联数据结构说明。访问控制规则同时提供汇总字段及按互联网边界、NAT边界、VPC边界拆分的字段。</p>
     * @param integer $ReturnCode <p>返回代码</p>
     * @param string $ReturnMsg <p>返回状态字符</p>
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
            $this->Data = new OverviewResourceQuotaDataLite();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
