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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryExceedingInfo请求参数结构体
 *
 * @method string getTimeStr() 获取超额日期。格式为yyyy-MM-dd。
 * @method void setTimeStr(string $TimeStr) 设置超额日期。格式为yyyy-MM-dd。
 * @method string getDimension() 获取维度。目前支持三个维度: AGENT, ANCHOR, ORDER。不填默认使用AGENT维度。
 * @method void setDimension(string $Dimension) 设置维度。目前支持三个维度: AGENT, ANCHOR, ORDER。不填默认使用AGENT维度。
 * @method Paging getPageNumber() 获取分页信息。不填默认Index为1，Count为100。
 * @method void setPageNumber(Paging $PageNumber) 设置分页信息。不填默认Index为1，Count为100。
 */
class QueryExceedingInfoRequest extends AbstractModel
{
    /**
     * @var string 超额日期。格式为yyyy-MM-dd。
     */
    public $TimeStr;

    /**
     * @var string 维度。目前支持三个维度: AGENT, ANCHOR, ORDER。不填默认使用AGENT维度。
     */
    public $Dimension;

    /**
     * @var Paging 分页信息。不填默认Index为1，Count为100。
     */
    public $PageNumber;

    /**
     * @param string $TimeStr 超额日期。格式为yyyy-MM-dd。
     * @param string $Dimension 维度。目前支持三个维度: AGENT, ANCHOR, ORDER。不填默认使用AGENT维度。
     * @param Paging $PageNumber 分页信息。不填默认Index为1，Count为100。
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
        if (array_key_exists("TimeStr",$param) and $param["TimeStr"] !== null) {
            $this->TimeStr = $param["TimeStr"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = new Paging();
            $this->PageNumber->deserialize($param["PageNumber"]);
        }
    }
}
