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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmSmsQuota返回参数结构体
 *
 * @method integer getTotal() 获取<p>配额总数</p>
 * @method void setTotal(integer $Total) 设置<p>配额总数</p>
 * @method integer getUsed() 获取<p>总使用量</p>
 * @method void setUsed(integer $Used) 设置<p>总使用量</p>
 * @method array getQuotaList() 获取<p>短信配额信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaList(array $QuotaList) 设置<p>短信配额信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAlarmSmsQuotaResponse extends AbstractModel
{
    /**
     * @var integer <p>配额总数</p>
     */
    public $Total;

    /**
     * @var integer <p>总使用量</p>
     */
    public $Used;

    /**
     * @var array <p>短信配额信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>配额总数</p>
     * @param integer $Used <p>总使用量</p>
     * @param array $QuotaList <p>短信配额信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("QuotaList",$param) and $param["QuotaList"] !== null) {
            $this->QuotaList = [];
            foreach ($param["QuotaList"] as $key => $value){
                $obj = new DescribeAlarmSmsQuotaQuota();
                $obj->deserialize($value);
                array_push($this->QuotaList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
