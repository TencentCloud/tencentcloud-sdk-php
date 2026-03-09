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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobRecordDetails返回参数结构体
 *
 * @method integer getTotal() 获取<p>总数</p>
 * @method void setTotal(integer $Total) 设置<p>总数</p>
 * @method array getList() 获取<p>数组</p>
 * @method void setList(array $List) 设置<p>数组</p>
 * @method array getEnterpriseEquityPath() 获取<p>持股路径</p>
 * @method void setEnterpriseEquityPath(array $EnterpriseEquityPath) 设置<p>持股路径</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobRecordDetailsResponse extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $Total;

    /**
     * @var array <p>数组</p>
     */
    public $List;

    /**
     * @var array <p>持股路径</p>
     */
    public $EnterpriseEquityPath;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>总数</p>
     * @param array $List <p>数组</p>
     * @param array $EnterpriseEquityPath <p>持股路径</p>
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

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new DisplayJobRecordDetail();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("EnterpriseEquityPath",$param) and $param["EnterpriseEquityPath"] !== null) {
            $this->EnterpriseEquityPath = [];
            foreach ($param["EnterpriseEquityPath"] as $key => $value){
                $obj = new Equity();
                $obj->deserialize($value);
                array_push($this->EnterpriseEquityPath, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
