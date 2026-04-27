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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogFiles请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getProduct() 获取<p>产品名称</p><p>入参限制：postgres</p>
 * @method void setProduct(string $Product) 设置<p>产品名称</p><p>入参限制：postgres</p>
 * @method string getFileName() 获取<p>日志文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>日志文件名称</p>
 * @method integer getLimit() 获取<p>查询限制</p><p>取值范围：[1, 300]</p>
 * @method void setLimit(integer $Limit) 设置<p>查询限制</p><p>取值范围：[1, 300]</p>
 * @method integer getOffset() 获取<p>偏移量</p><p>取值范围：[0, 1000]</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p><p>取值范围：[0, 1000]</p>
 */
class DescribeAuditLogFilesRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>产品名称</p><p>入参限制：postgres</p>
     */
    public $Product;

    /**
     * @var string <p>日志文件名称</p>
     */
    public $FileName;

    /**
     * @var integer <p>查询限制</p><p>取值范围：[1, 300]</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p><p>取值范围：[0, 1000]</p>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Product <p>产品名称</p><p>入参限制：postgres</p>
     * @param string $FileName <p>日志文件名称</p>
     * @param integer $Limit <p>查询限制</p><p>取值范围：[1, 300]</p>
     * @param integer $Offset <p>偏移量</p><p>取值范围：[0, 1000]</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
