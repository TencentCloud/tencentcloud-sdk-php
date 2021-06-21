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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListBGPInstances请求参数结构体
 *
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method integer getLimit() 获取一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method void setLimit(integer $Limit) 设置一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method string getFilterIp() 获取IP搜索
 * @method void setFilterIp(string $FilterIp) 设置IP搜索
 * @method string getFilterInstanceId() 获取资产实例ID搜索，例如，bgp-00000001
 * @method void setFilterInstanceId(string $FilterInstanceId) 设置资产实例ID搜索，例如，bgp-00000001
 * @method string getFilterRegion() 获取地域搜索，例如，ap-guangzhou
 * @method void setFilterRegion(string $FilterRegion) 设置地域搜索，例如，ap-guangzhou
 * @method string getFilterName() 获取名称搜索
 * @method void setFilterName(string $FilterName) 设置名称搜索
 * @method integer getFilterLine() 获取按照线路搜索, 1: BGP; 2: 三网
 * @method void setFilterLine(integer $FilterLine) 设置按照线路搜索, 1: BGP; 2: 三网
 */
class DescribeListBGPInstancesRequest extends AbstractModel
{
    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var integer 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     */
    public $Limit;

    /**
     * @var string IP搜索
     */
    public $FilterIp;

    /**
     * @var string 资产实例ID搜索，例如，bgp-00000001
     */
    public $FilterInstanceId;

    /**
     * @var string 地域搜索，例如，ap-guangzhou
     */
    public $FilterRegion;

    /**
     * @var string 名称搜索
     */
    public $FilterName;

    /**
     * @var integer 按照线路搜索, 1: BGP; 2: 三网
     */
    public $FilterLine;

    /**
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param integer $Limit 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     * @param string $FilterIp IP搜索
     * @param string $FilterInstanceId 资产实例ID搜索，例如，bgp-00000001
     * @param string $FilterRegion 地域搜索，例如，ap-guangzhou
     * @param string $FilterName 名称搜索
     * @param integer $FilterLine 按照线路搜索, 1: BGP; 2: 三网
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

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterInstanceId",$param) and $param["FilterInstanceId"] !== null) {
            $this->FilterInstanceId = $param["FilterInstanceId"];
        }

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }

        if (array_key_exists("FilterLine",$param) and $param["FilterLine"] !== null) {
            $this->FilterLine = $param["FilterLine"];
        }
    }
}
