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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品支持情况
 *
 * @method string getServiceName() 获取产品名称:
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
 * @method void setServiceName(string $ServiceName) 设置产品名称:
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
 * @method integer getSupportHandledCount() 获取已处理的资产总数
 * @method void setSupportHandledCount(integer $SupportHandledCount) 设置已处理的资产总数
 * @method integer getSupportTotalCount() 获取支持的资产总数
 * @method void setSupportTotalCount(integer $SupportTotalCount) 设置支持的资产总数
 * @method boolean getIsSupport() 获取是否支持该产品1支持；0不支持
 * @method void setIsSupport(boolean $IsSupport) 设置是否支持该产品1支持；0不支持
 */
class ServiceSupport extends AbstractModel
{
    /**
     * @var string 产品名称:
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
     */
    public $ServiceName;

    /**
     * @var integer 已处理的资产总数
     */
    public $SupportHandledCount;

    /**
     * @var integer 支持的资产总数
     */
    public $SupportTotalCount;

    /**
     * @var boolean 是否支持该产品1支持；0不支持
     */
    public $IsSupport;

    /**
     * @param string $ServiceName 产品名称:
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
     * @param integer $SupportHandledCount 已处理的资产总数
     * @param integer $SupportTotalCount 支持的资产总数
     * @param boolean $IsSupport 是否支持该产品1支持；0不支持
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("SupportHandledCount",$param) and $param["SupportHandledCount"] !== null) {
            $this->SupportHandledCount = $param["SupportHandledCount"];
        }

        if (array_key_exists("SupportTotalCount",$param) and $param["SupportTotalCount"] !== null) {
            $this->SupportTotalCount = $param["SupportTotalCount"];
        }

        if (array_key_exists("IsSupport",$param) and $param["IsSupport"] !== null) {
            $this->IsSupport = $param["IsSupport"];
        }
    }
}
