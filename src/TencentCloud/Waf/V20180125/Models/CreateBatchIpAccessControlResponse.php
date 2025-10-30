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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBatchIpAccessControl返回参数结构体
 *
 * @method array getFailed() 获取添加失败的域名列表，如果非空则表示有域名添加失败，整个批量规则添加失败，否则则表示批量规则添加成功。
 * @method void setFailed(array $Failed) 设置添加失败的域名列表，如果非空则表示有域名添加失败，整个批量规则添加失败，否则则表示批量规则添加成功。
 * @method integer getRuleId() 获取添加成功的批量规则ID
 * @method void setRuleId(integer $RuleId) 设置添加成功的批量规则ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateBatchIpAccessControlResponse extends AbstractModel
{
    /**
     * @var array 添加失败的域名列表，如果非空则表示有域名添加失败，整个批量规则添加失败，否则则表示批量规则添加成功。
     */
    public $Failed;

    /**
     * @var integer 添加成功的批量规则ID
     */
    public $RuleId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Failed 添加失败的域名列表，如果非空则表示有域名添加失败，整个批量规则添加失败，否则则表示批量规则添加成功。
     * @param integer $RuleId 添加成功的批量规则ID
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
        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = [];
            foreach ($param["Failed"] as $key => $value){
                $obj = new BatchDomainResult();
                $obj->deserialize($value);
                array_push($this->Failed, $obj);
            }
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
