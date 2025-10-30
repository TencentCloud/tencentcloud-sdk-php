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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChannelOrganizations返回参数结构体
 *
 * @method array getChannelOrganizationInfos() 获取满足查询条件的企业信息列表。
 * @method void setChannelOrganizationInfos(array $ChannelOrganizationInfos) 设置满足查询条件的企业信息列表。
 * @method integer getOffset() 获取指定分页返回第几页的数据。页码从 0 开始，即首页为 0，最大20000。
 * @method void setOffset(integer $Offset) 设置指定分页返回第几页的数据。页码从 0 开始，即首页为 0，最大20000。
 * @method integer getLimit() 获取指定分页每页返回的数据条数，单页最大支持 200。
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，单页最大支持 200。
 * @method integer getTotal() 获取满足查询条件的企业总数量。
 * @method void setTotal(integer $Total) 设置满足查询条件的企业总数量。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeChannelOrganizationsResponse extends AbstractModel
{
    /**
     * @var array 满足查询条件的企业信息列表。
     */
    public $ChannelOrganizationInfos;

    /**
     * @var integer 指定分页返回第几页的数据。页码从 0 开始，即首页为 0，最大20000。
     */
    public $Offset;

    /**
     * @var integer 指定分页每页返回的数据条数，单页最大支持 200。
     */
    public $Limit;

    /**
     * @var integer 满足查询条件的企业总数量。
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ChannelOrganizationInfos 满足查询条件的企业信息列表。
     * @param integer $Offset 指定分页返回第几页的数据。页码从 0 开始，即首页为 0，最大20000。
     * @param integer $Limit 指定分页每页返回的数据条数，单页最大支持 200。
     * @param integer $Total 满足查询条件的企业总数量。
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
        if (array_key_exists("ChannelOrganizationInfos",$param) and $param["ChannelOrganizationInfos"] !== null) {
            $this->ChannelOrganizationInfos = [];
            foreach ($param["ChannelOrganizationInfos"] as $key => $value){
                $obj = new ChannelOrganizationInfo();
                $obj->deserialize($value);
                array_push($this->ChannelOrganizationInfos, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
