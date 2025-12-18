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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBgpInstances请求参数结构体
 *
 * @method string getFilterRegion() 获取地域
 * @method void setFilterRegion(string $FilterRegion) 设置地域
 * @method array getFilterInstanceIdList() 获取["bgp-0000041i"]
 * @method void setFilterInstanceIdList(array $FilterInstanceIdList) 设置["bgp-0000041i"]
 * @method array getFilterTag() 获取[{}]
 * @method void setFilterTag(array $FilterTag) 设置[{}]
 * @method integer getLimit() 获取分页数量
 * @method void setLimit(integer $Limit) 设置分页数量
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeBgpInstancesRequest extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $FilterRegion;

    /**
     * @var array ["bgp-0000041i"]
     */
    public $FilterInstanceIdList;

    /**
     * @var array [{}]
     */
    public $FilterTag;

    /**
     * @var integer 分页数量
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param string $FilterRegion 地域
     * @param array $FilterInstanceIdList ["bgp-0000041i"]
     * @param array $FilterTag [{}]
     * @param integer $Limit 分页数量
     * @param integer $Offset 偏移量
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
        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("FilterInstanceIdList",$param) and $param["FilterInstanceIdList"] !== null) {
            $this->FilterInstanceIdList = $param["FilterInstanceIdList"];
        }

        if (array_key_exists("FilterTag",$param) and $param["FilterTag"] !== null) {
            $this->FilterTag = [];
            foreach ($param["FilterTag"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->FilterTag, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
