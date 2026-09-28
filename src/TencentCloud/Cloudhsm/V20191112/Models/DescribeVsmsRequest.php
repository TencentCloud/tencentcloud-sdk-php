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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVsms请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移</p>
 * @method integer getLimit() 获取<p>最大数量</p>
 * @method void setLimit(integer $Limit) 设置<p>最大数量</p>
 * @method string getSearchWord() 获取<p>资源ID或者资源名字模糊查询的关键字</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>资源ID或者资源名字模糊查询的关键字</p>
 * @method array getTagFilters() 获取<p>标签过滤条件</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤条件</p>
 * @method string getManufacturer() 获取<p>设备所属的厂商名称，根据厂商来进行筛选</p>
 * @method void setManufacturer(string $Manufacturer) 设置<p>设备所属的厂商名称，根据厂商来进行筛选</p>
 * @method string getHsmType() 获取<p>Hsm服务类型，可选virtualization、physical、GHSM、EHSM、SHSM、all</p>
 * @method void setHsmType(string $HsmType) 设置<p>Hsm服务类型，可选virtualization、physical、GHSM、EHSM、SHSM、all</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 */
class DescribeVsmsRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>最大数量</p>
     */
    public $Limit;

    /**
     * @var string <p>资源ID或者资源名字模糊查询的关键字</p>
     */
    public $SearchWord;

    /**
     * @var array <p>标签过滤条件</p>
     */
    public $TagFilters;

    /**
     * @var string <p>设备所属的厂商名称，根据厂商来进行筛选</p>
     */
    public $Manufacturer;

    /**
     * @var string <p>Hsm服务类型，可选virtualization、physical、GHSM、EHSM、SHSM、all</p>
     */
    public $HsmType;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @param integer $Offset <p>偏移</p>
     * @param integer $Limit <p>最大数量</p>
     * @param string $SearchWord <p>资源ID或者资源名字模糊查询的关键字</p>
     * @param array $TagFilters <p>标签过滤条件</p>
     * @param string $Manufacturer <p>设备所属的厂商名称，根据厂商来进行筛选</p>
     * @param string $HsmType <p>Hsm服务类型，可选virtualization、physical、GHSM、EHSM、SHSM、all</p>
     * @param string $ClusterId <p>集群id</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("HsmType",$param) and $param["HsmType"] !== null) {
            $this->HsmType = $param["HsmType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
