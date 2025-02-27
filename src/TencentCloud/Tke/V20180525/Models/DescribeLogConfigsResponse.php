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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogConfigs返回参数结构体
 *
 * @method integer getTotal() 获取分页查找时返回采集规则总数
 * @method void setTotal(integer $Total) 设置分页查找时返回采集规则总数
 * @method string getMessage() 获取指定采集规则名称查找，部分失败时返回失败采集规则名称及最后一个失败原因
 * @method void setMessage(string $Message) 设置指定采集规则名称查找，部分失败时返回失败采集规则名称及最后一个失败原因
 * @method string getLogConfigs() 获取采集规则查询结果
 * @method void setLogConfigs(string $LogConfigs) 设置采集规则查询结果
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogConfigsResponse extends AbstractModel
{
    /**
     * @var integer 分页查找时返回采集规则总数
     */
    public $Total;

    /**
     * @var string 指定采集规则名称查找，部分失败时返回失败采集规则名称及最后一个失败原因
     */
    public $Message;

    /**
     * @var string 采集规则查询结果
     */
    public $LogConfigs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 分页查找时返回采集规则总数
     * @param string $Message 指定采集规则名称查找，部分失败时返回失败采集规则名称及最后一个失败原因
     * @param string $LogConfigs 采集规则查询结果
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("LogConfigs",$param) and $param["LogConfigs"] !== null) {
            $this->LogConfigs = $param["LogConfigs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
