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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesNew请求参数结构体
 *
 * @method string getSearchInstanceId() 获取搜索的集群id名称
 * @method void setSearchInstanceId(string $SearchInstanceId) 设置搜索的集群id名称
 * @method string getSearchInstanceName() 获取搜索的集群name
 * @method void setSearchInstanceName(string $SearchInstanceName) 设置搜索的集群name
 * @method integer getOffset() 获取分页参数，第一页为0，第二页为10
 * @method void setOffset(integer $Offset) 设置分页参数，第一页为0，第二页为10
 * @method integer getLimit() 获取分页参数，分页步长，默认为10
 * @method void setLimit(integer $Limit) 设置分页参数，分页步长，默认为10
 * @method array getSearchTags() 获取搜索标签列表
 * @method void setSearchTags(array $SearchTags) 设置搜索标签列表
 * @method boolean getIsSimple() 获取信息详细与否
 * @method void setIsSimple(boolean $IsSimple) 设置信息详细与否
 * @method array getVips() 获取vip列表
 * @method void setVips(array $Vips) 设置vip列表
 */
class DescribeInstancesNewRequest extends AbstractModel
{
    /**
     * @var string 搜索的集群id名称
     */
    public $SearchInstanceId;

    /**
     * @var string 搜索的集群name
     */
    public $SearchInstanceName;

    /**
     * @var integer 分页参数，第一页为0，第二页为10
     */
    public $Offset;

    /**
     * @var integer 分页参数，分页步长，默认为10
     */
    public $Limit;

    /**
     * @var array 搜索标签列表
     */
    public $SearchTags;

    /**
     * @var boolean 信息详细与否
     */
    public $IsSimple;

    /**
     * @var array vip列表
     */
    public $Vips;

    /**
     * @param string $SearchInstanceId 搜索的集群id名称
     * @param string $SearchInstanceName 搜索的集群name
     * @param integer $Offset 分页参数，第一页为0，第二页为10
     * @param integer $Limit 分页参数，分页步长，默认为10
     * @param array $SearchTags 搜索标签列表
     * @param boolean $IsSimple 信息详细与否
     * @param array $Vips vip列表
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
        if (array_key_exists("SearchInstanceId",$param) and $param["SearchInstanceId"] !== null) {
            $this->SearchInstanceId = $param["SearchInstanceId"];
        }

        if (array_key_exists("SearchInstanceName",$param) and $param["SearchInstanceName"] !== null) {
            $this->SearchInstanceName = $param["SearchInstanceName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchTags",$param) and $param["SearchTags"] !== null) {
            $this->SearchTags = [];
            foreach ($param["SearchTags"] as $key => $value){
                $obj = new SearchTags();
                $obj->deserialize($value);
                array_push($this->SearchTags, $obj);
            }
        }

        if (array_key_exists("IsSimple",$param) and $param["IsSimple"] !== null) {
            $this->IsSimple = $param["IsSimple"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }
    }
}
