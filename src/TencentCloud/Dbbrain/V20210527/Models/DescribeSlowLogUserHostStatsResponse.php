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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogUserHostStats返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>来源地址数目。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>来源地址数目。</p>
 * @method array getItems() 获取<p>各来源地址的慢日志占比详情列表。</p>
 * @method void setItems(array $Items) 设置<p>各来源地址的慢日志占比详情列表。</p>
 * @method array getUserNameItems() 获取<p>各来源用户名的慢日志占比详情列表。</p>
 * @method void setUserNameItems(array $UserNameItems) 设置<p>各来源用户名的慢日志占比详情列表。</p>
 * @method integer getUserTotalCount() 获取<p>来源用户数目。</p>
 * @method void setUserTotalCount(integer $UserTotalCount) 设置<p>来源用户数目。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSlowLogUserHostStatsResponse extends AbstractModel
{
    /**
     * @var integer <p>来源地址数目。</p>
     */
    public $TotalCount;

    /**
     * @var array <p>各来源地址的慢日志占比详情列表。</p>
     */
    public $Items;

    /**
     * @var array <p>各来源用户名的慢日志占比详情列表。</p>
     */
    public $UserNameItems;

    /**
     * @var integer <p>来源用户数目。</p>
     */
    public $UserTotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>来源地址数目。</p>
     * @param array $Items <p>各来源地址的慢日志占比详情列表。</p>
     * @param array $UserNameItems <p>各来源用户名的慢日志占比详情列表。</p>
     * @param integer $UserTotalCount <p>来源用户数目。</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new SlowLogHost();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("UserNameItems",$param) and $param["UserNameItems"] !== null) {
            $this->UserNameItems = [];
            foreach ($param["UserNameItems"] as $key => $value){
                $obj = new SlowLogUser();
                $obj->deserialize($value);
                array_push($this->UserNameItems, $obj);
            }
        }

        if (array_key_exists("UserTotalCount",$param) and $param["UserTotalCount"] !== null) {
            $this->UserTotalCount = $param["UserTotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
