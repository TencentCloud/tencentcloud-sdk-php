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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLivePadStreamList返回参数结构体
 *
 * @method array getStreamInfoList() 获取当前正在拉取垫片的流信息列表。
 * @method void setStreamInfoList(array $StreamInfoList) 设置当前正在拉取垫片的流信息列表。
 * @method integer getPageNum() 获取传入的分页页数。
 * @method void setPageNum(integer $PageNum) 设置传入的分页页数。
 * @method integer getPageSize() 获取传入的分页个数。
 * @method void setPageSize(integer $PageSize) 设置传入的分页个数。
 * @method integer getTotalNum() 获取查询到的总个数。
 * @method void setTotalNum(integer $TotalNum) 设置查询到的总个数。
 * @method integer getTotalPage() 获取可以分的总页数。
 * @method void setTotalPage(integer $TotalPage) 设置可以分的总页数。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLivePadStreamListResponse extends AbstractModel
{
    /**
     * @var array 当前正在拉取垫片的流信息列表。
     */
    public $StreamInfoList;

    /**
     * @var integer 传入的分页页数。
     */
    public $PageNum;

    /**
     * @var integer 传入的分页个数。
     */
    public $PageSize;

    /**
     * @var integer 查询到的总个数。
     */
    public $TotalNum;

    /**
     * @var integer 可以分的总页数。
     */
    public $TotalPage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $StreamInfoList 当前正在拉取垫片的流信息列表。
     * @param integer $PageNum 传入的分页页数。
     * @param integer $PageSize 传入的分页个数。
     * @param integer $TotalNum 查询到的总个数。
     * @param integer $TotalPage 可以分的总页数。
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
        if (array_key_exists("StreamInfoList",$param) and $param["StreamInfoList"] !== null) {
            $this->StreamInfoList = [];
            foreach ($param["StreamInfoList"] as $key => $value){
                $obj = new PadStreamInfo();
                $obj->deserialize($value);
                array_push($this->StreamInfoList, $obj);
            }
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
