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
 * DescribeLiveTranscodeDetailInfo返回参数结构体
 *
 * @method array getDataInfoList() 获取<p>统计数据列表。</p>
 * @method void setDataInfoList(array $DataInfoList) 设置<p>统计数据列表。</p>
 * @method integer getPageNum() 获取<p>页码。</p>
 * @method void setPageNum(integer $PageNum) 设置<p>页码。</p>
 * @method integer getPageSize() 获取<p>每页个数。</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页个数。</p>
 * @method integer getTotalNum() 获取<p>总个数。</p>
 * @method void setTotalNum(integer $TotalNum) 设置<p>总个数。</p>
 * @method integer getTotalPage() 获取<p>总页数。</p>
 * @method void setTotalPage(integer $TotalPage) 设置<p>总页数。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveTranscodeDetailInfoResponse extends AbstractModel
{
    /**
     * @var array <p>统计数据列表。</p>
     */
    public $DataInfoList;

    /**
     * @var integer <p>页码。</p>
     */
    public $PageNum;

    /**
     * @var integer <p>每页个数。</p>
     */
    public $PageSize;

    /**
     * @var integer <p>总个数。</p>
     */
    public $TotalNum;

    /**
     * @var integer <p>总页数。</p>
     */
    public $TotalPage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DataInfoList <p>统计数据列表。</p>
     * @param integer $PageNum <p>页码。</p>
     * @param integer $PageSize <p>每页个数。</p>
     * @param integer $TotalNum <p>总个数。</p>
     * @param integer $TotalPage <p>总页数。</p>
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
        if (array_key_exists("DataInfoList",$param) and $param["DataInfoList"] !== null) {
            $this->DataInfoList = [];
            foreach ($param["DataInfoList"] as $key => $value){
                $obj = new TranscodeDetailInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
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
