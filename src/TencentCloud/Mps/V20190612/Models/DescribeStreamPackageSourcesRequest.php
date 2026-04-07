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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageSources请求参数结构体
 *
 * @method integer getPageNum() 获取页数，取值范围为[1, 1000]。
 * @method void setPageNum(integer $PageNum) 设置页数，取值范围为[1, 1000]。
 * @method integer getPageSize() 获取每页大小，取值范围为[1, 1000]。
 * @method void setPageSize(integer $PageSize) 设置每页大小，取值范围为[1, 1000]。
 * @method string getLocationId() 获取Location Id，查询该location下面所有source。
 * @method void setLocationId(string $LocationId) 设置Location Id，查询该location下面所有source。
 * @method string getType() 获取Source的类型，分直播Live和点播VOD。
 * @method void setType(string $Type) 设置Source的类型，分直播Live和点播VOD。
 */
class DescribeStreamPackageSourcesRequest extends AbstractModel
{
    /**
     * @var integer 页数，取值范围为[1, 1000]。
     */
    public $PageNum;

    /**
     * @var integer 每页大小，取值范围为[1, 1000]。
     */
    public $PageSize;

    /**
     * @var string Location Id，查询该location下面所有source。
     */
    public $LocationId;

    /**
     * @var string Source的类型，分直播Live和点播VOD。
     */
    public $Type;

    /**
     * @param integer $PageNum 页数，取值范围为[1, 1000]。
     * @param integer $PageSize 每页大小，取值范围为[1, 1000]。
     * @param string $LocationId Location Id，查询该location下面所有source。
     * @param string $Type Source的类型，分直播Live和点播VOD。
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
