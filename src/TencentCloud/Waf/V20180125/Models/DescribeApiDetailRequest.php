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
 * DescribeApiDetail请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getApiName() 获取Api名称
 * @method void setApiName(string $ApiName) 设置Api名称
 * @method string getMethod() 获取请求方法
 * @method void setMethod(string $Method) 设置请求方法
 * @method integer getIsSensitive() 获取是否仅查询敏感的，1表示查询，0表示不查询
 * @method void setIsSensitive(integer $IsSensitive) 设置是否仅查询敏感的，1表示查询，0表示不查询
 * @method integer getIsPan() 获取是否仅查询泛化的，1表示查询，0表示不查询
 * @method void setIsPan(integer $IsPan) 设置是否仅查询泛化的，1表示查询，0表示不查询
 */
class DescribeApiDetailRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string Api名称
     */
    public $ApiName;

    /**
     * @var string 请求方法
     */
    public $Method;

    /**
     * @var integer 是否仅查询敏感的，1表示查询，0表示不查询
     */
    public $IsSensitive;

    /**
     * @var integer 是否仅查询泛化的，1表示查询，0表示不查询
     */
    public $IsPan;

    /**
     * @param string $Domain 域名
     * @param string $ApiName Api名称
     * @param string $Method 请求方法
     * @param integer $IsSensitive 是否仅查询敏感的，1表示查询，0表示不查询
     * @param integer $IsPan 是否仅查询泛化的，1表示查询，0表示不查询
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

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("IsSensitive",$param) and $param["IsSensitive"] !== null) {
            $this->IsSensitive = $param["IsSensitive"];
        }

        if (array_key_exists("IsPan",$param) and $param["IsPan"] !== null) {
            $this->IsPan = $param["IsPan"];
        }
    }
}
