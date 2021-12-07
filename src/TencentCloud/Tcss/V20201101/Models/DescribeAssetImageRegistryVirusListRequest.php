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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageRegistryVirusList请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>Level- String - 是否必填：否 - 漏洞级别筛选，</li>
<li>Name - String - 是否必填：否 - 漏洞名称</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Level- String - 是否必填：否 - 漏洞级别筛选，</li>
<li>Name - String - 是否必填：否 - 漏洞名称</li>
 * @method ImageInfo getImageInfo() 获取镜像信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息
 * @method integer getId() 获取镜像标识Id
 * @method void setId(integer $Id) 设置镜像标识Id
 */
class DescribeAssetImageRegistryVirusListRequest extends AbstractModel
{
    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>Level- String - 是否必填：否 - 漏洞级别筛选，</li>
<li>Name - String - 是否必填：否 - 漏洞名称</li>
     */
    public $Filters;

    /**
     * @var ImageInfo 镜像信息
     */
    public $ImageInfo;

    /**
     * @var integer 镜像标识Id
     */
    public $Id;

    /**
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>Level- String - 是否必填：否 - 漏洞级别筛选，</li>
<li>Name - String - 是否必填：否 - 漏洞名称</li>
     * @param ImageInfo $ImageInfo 镜像信息
     * @param integer $Id 镜像标识Id
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
