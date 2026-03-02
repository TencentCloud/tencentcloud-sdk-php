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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances返回参数结构体
 *
 * @method array getDealNames() 获取<p>订单号列表。每个实例对应一个订单号。</p>
 * @method void setDealNames(array $DealNames) 设置<p>订单号列表。每个实例对应一个订单号。</p>
 * @method string getBillId() 获取<p>冻结流水号。</p>
 * @method void setBillId(string $BillId) 设置<p>冻结流水号。</p>
 * @method array getDBInstanceIdSet() 获取<p>创建成功的实例ID集合，只在后付费情景下有返回值。</p>
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) 设置<p>创建成功的实例ID集合，只在后付费情景下有返回值。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateInstancesResponse extends AbstractModel
{
    /**
     * @var array <p>订单号列表。每个实例对应一个订单号。</p>
     */
    public $DealNames;

    /**
     * @var string <p>冻结流水号。</p>
     */
    public $BillId;

    /**
     * @var array <p>创建成功的实例ID集合，只在后付费情景下有返回值。</p>
     */
    public $DBInstanceIdSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DealNames <p>订单号列表。每个实例对应一个订单号。</p>
     * @param string $BillId <p>冻结流水号。</p>
     * @param array $DBInstanceIdSet <p>创建成功的实例ID集合，只在后付费情景下有返回值。</p>
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
        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
