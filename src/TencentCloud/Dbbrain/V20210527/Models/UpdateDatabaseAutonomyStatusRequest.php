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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDatabaseAutonomyStatus请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。</p>
 * @method string getProduct() 获取<p>服务产品类型。取值：mongodb（云数据库 MongoDB）。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型。取值：mongodb（云数据库 MongoDB）。</p>
 * @method string getType() 获取<p>自治功能类型。取值：AutoIndexAdvice（索引推荐）。</p>
 * @method void setType(string $Type) 设置<p>自治功能类型。取值：AutoIndexAdvice（索引推荐）。</p>
 * @method integer getStatus() 获取<p>开关状态。取值：0（关闭）、1（开启）。</p>
 * @method void setStatus(integer $Status) 设置<p>开关状态。取值：0（关闭）、1（开启）。</p>
 */
class UpdateDatabaseAutonomyStatusRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型。取值：mongodb（云数据库 MongoDB）。</p>
     */
    public $Product;

    /**
     * @var string <p>自治功能类型。取值：AutoIndexAdvice（索引推荐）。</p>
     */
    public $Type;

    /**
     * @var integer <p>开关状态。取值：0（关闭）、1（开启）。</p>
     */
    public $Status;

    /**
     * @param string $InstanceId <p>实例 ID。</p>
     * @param string $Product <p>服务产品类型。取值：mongodb（云数据库 MongoDB）。</p>
     * @param string $Type <p>自治功能类型。取值：AutoIndexAdvice（索引推荐）。</p>
     * @param integer $Status <p>开关状态。取值：0（关闭）、1（开启）。</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
