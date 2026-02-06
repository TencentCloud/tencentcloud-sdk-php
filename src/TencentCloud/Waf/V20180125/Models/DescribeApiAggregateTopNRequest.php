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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiAggregateTopN请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getTopN() 获取需要的Top数，默认5， 最大值100
 * @method void setTopN(integer $TopN) 设置需要的Top数，默认5， 最大值100
 * @method integer getStartTs() 获取开始时间
 * @method void setStartTs(integer $StartTs) 设置开始时间
 * @method integer getEndTs() 获取结束时间
 * @method void setEndTs(integer $EndTs) 设置结束时间
 * @method string getDimension() 获取需要查询TOP的维度名
 * @method void setDimension(string $Dimension) 设置需要查询TOP的维度名
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method boolean getGlobalFlag() 获取是否查询全域名的三个特殊图标
 * @method void setGlobalFlag(boolean $GlobalFlag) 设置是否查询全域名的三个特殊图标
 */
class DescribeApiAggregateTopNRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 需要的Top数，默认5， 最大值100
     */
    public $TopN;

    /**
     * @var integer 开始时间
     */
    public $StartTs;

    /**
     * @var integer 结束时间
     */
    public $EndTs;

    /**
     * @var string 需要查询TOP的维度名
     */
    public $Dimension;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var boolean 是否查询全域名的三个特殊图标
     */
    public $GlobalFlag;

    /**
     * @param string $Domain 域名
     * @param integer $TopN 需要的Top数，默认5， 最大值100
     * @param integer $StartTs 开始时间
     * @param integer $EndTs 结束时间
     * @param string $Dimension 需要查询TOP的维度名
     * @param array $Filters 过滤条件
     * @param boolean $GlobalFlag 是否查询全域名的三个特殊图标
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }

        if (array_key_exists("StartTs",$param) and $param["StartTs"] !== null) {
            $this->StartTs = $param["StartTs"];
        }

        if (array_key_exists("EndTs",$param) and $param["EndTs"] !== null) {
            $this->EndTs = $param["EndTs"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new BotDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GlobalFlag",$param) and $param["GlobalFlag"] !== null) {
            $this->GlobalFlag = $param["GlobalFlag"];
        }
    }
}
