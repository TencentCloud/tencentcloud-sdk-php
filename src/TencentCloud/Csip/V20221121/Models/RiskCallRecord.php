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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险调用记录详情
 *
 * @method string getEventName() 获取接口名称
 * @method void setEventName(string $EventName) 设置接口名称
 * @method string getEventDescCN() 获取接口中文描述
 * @method void setEventDescCN(string $EventDescCN) 设置接口中文描述
 * @method string getEventDescEN() 获取接口英文描述
 * @method void setEventDescEN(string $EventDescEN) 设置接口英文描述
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getProductNameCN() 获取产品中文名称
 * @method void setProductNameCN(string $ProductNameCN) 设置产品中文名称
 * @method integer getCallCount() 获取调用次数
 * @method void setCallCount(integer $CallCount) 设置调用次数
 */
class RiskCallRecord extends AbstractModel
{
    /**
     * @var string 接口名称
     */
    public $EventName;

    /**
     * @var string 接口中文描述
     */
    public $EventDescCN;

    /**
     * @var string 接口英文描述
     */
    public $EventDescEN;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 产品中文名称
     */
    public $ProductNameCN;

    /**
     * @var integer 调用次数
     */
    public $CallCount;

    /**
     * @param string $EventName 接口名称
     * @param string $EventDescCN 接口中文描述
     * @param string $EventDescEN 接口英文描述
     * @param string $ProductName 产品名称
     * @param string $ProductNameCN 产品中文名称
     * @param integer $CallCount 调用次数
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventDescCN",$param) and $param["EventDescCN"] !== null) {
            $this->EventDescCN = $param["EventDescCN"];
        }

        if (array_key_exists("EventDescEN",$param) and $param["EventDescEN"] !== null) {
            $this->EventDescEN = $param["EventDescEN"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductNameCN",$param) and $param["ProductNameCN"] !== null) {
            $this->ProductNameCN = $param["ProductNameCN"];
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }
    }
}
