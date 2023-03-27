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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAPIService请求参数结构体
 *
 * @method string getService() 获取目前支持的Service为cos:GetService，cdn:DescribeDomainsConfig
 * @method void setService(string $Service) 设置目前支持的Service为cos:GetService，cdn:DescribeDomainsConfig
 * @method string getData() 获取JSON格式的请求参数
 * @method void setData(string $Data) 设置JSON格式的请求参数
 */
class DescribeAPIServiceRequest extends AbstractModel
{
    /**
     * @var string 目前支持的Service为cos:GetService，cdn:DescribeDomainsConfig
     */
    public $Service;

    /**
     * @var string JSON格式的请求参数
     */
    public $Data;

    /**
     * @param string $Service 目前支持的Service为cos:GetService，cdn:DescribeDomainsConfig
     * @param string $Data JSON格式的请求参数
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
