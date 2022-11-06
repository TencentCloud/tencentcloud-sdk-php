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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlows返回参数结构体
 *
 * @method array getInfos() 获取流的配置信息列表。
 * @method void setInfos(array $Infos) 设置流的配置信息列表。
 * @method integer getPageNum() 获取当前页数。
 * @method void setPageNum(integer $PageNum) 设置当前页数。
 * @method integer getPageSize() 获取每页大小。
 * @method void setPageSize(integer $PageSize) 设置每页大小。
 * @method integer getTotalNum() 获取总数量。
 * @method void setTotalNum(integer $TotalNum) 设置总数量。
 * @method integer getTotalPage() 获取总页数。
 * @method void setTotalPage(integer $TotalPage) 设置总页数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStreamLinkFlowsResponse extends AbstractModel
{
    /**
     * @var array 流的配置信息列表。
     */
    public $Infos;

    /**
     * @var integer 当前页数。
     */
    public $PageNum;

    /**
     * @var integer 每页大小。
     */
    public $PageSize;

    /**
     * @var integer 总数量。
     */
    public $TotalNum;

    /**
     * @var integer 总页数。
     */
    public $TotalPage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Infos 流的配置信息列表。
     * @param integer $PageNum 当前页数。
     * @param integer $PageSize 每页大小。
     * @param integer $TotalNum 总数量。
     * @param integer $TotalPage 总页数。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new DescribeFlow();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
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
