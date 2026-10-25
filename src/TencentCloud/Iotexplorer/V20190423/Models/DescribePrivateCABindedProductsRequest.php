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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateCABindedProducts请求参数结构体
 *
 * @method string getCertName() 获取<p>证书名称，长度 1~32 个字符。</p>
 * @method void setCertName(string $CertName) 设置<p>证书名称，长度 1~32 个字符。</p>
 * @method integer getOffset() 获取<p>分页偏移量。</p><p>取值范围：[0, 5000000]</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。</p><p>取值范围：[0, 5000000]</p>
 * @method integer getLimit() 获取<p>单次返回的数量。</p><p>取值范围：[1, 200]</p>
 * @method void setLimit(integer $Limit) 设置<p>单次返回的数量。</p><p>取值范围：[1, 200]</p>
 */
class DescribePrivateCABindedProductsRequest extends AbstractModel
{
    /**
     * @var string <p>证书名称，长度 1~32 个字符。</p>
     */
    public $CertName;

    /**
     * @var integer <p>分页偏移量。</p><p>取值范围：[0, 5000000]</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次返回的数量。</p><p>取值范围：[1, 200]</p>
     */
    public $Limit;

    /**
     * @param string $CertName <p>证书名称，长度 1~32 个字符。</p>
     * @param integer $Offset <p>分页偏移量。</p><p>取值范围：[0, 5000000]</p>
     * @param integer $Limit <p>单次返回的数量。</p><p>取值范围：[1, 200]</p>
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
