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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateCABindedProducts请求参数结构体
 *
 * @method string getCertName() 获取证书名称
 * @method void setCertName(string $CertName) 设置证书名称
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询的数据量，默认为20， 最大为200
 * @method void setLimit(integer $Limit) 设置查询的数据量，默认为20， 最大为200
 */
class DescribePrivateCABindedProductsRequest extends AbstractModel
{
    /**
     * @var string 证书名称
     */
    public $CertName;

    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 查询的数据量，默认为20， 最大为200
     */
    public $Limit;

    /**
     * @param string $CertName 证书名称
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询的数据量，默认为20， 最大为200
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
