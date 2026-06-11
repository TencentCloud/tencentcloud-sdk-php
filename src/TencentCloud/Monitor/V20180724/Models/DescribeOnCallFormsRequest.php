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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOnCallForms请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method integer getOffset() 获取分页查询起始位
 * @method void setOffset(integer $Offset) 设置分页查询起始位
 * @method integer getLimit() 获取分页查询页数
 * @method void setLimit(integer $Limit) 设置分页查询页数
 * @method array getOnCallFormStaffIDs() 获取支持userId进行检索
 * @method void setOnCallFormStaffIDs(array $OnCallFormStaffIDs) 设置支持userId进行检索
 * @method string getRotationType() 获取值班类型
 * @method void setRotationType(string $RotationType) 设置值班类型
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 * @method string getOnCallFormName() 获取支持id、name进行检索
 * @method void setOnCallFormName(string $OnCallFormName) 设置支持id、name进行检索
 */
class DescribeOnCallFormsRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var integer 分页查询起始位
     */
    public $Offset;

    /**
     * @var integer 分页查询页数
     */
    public $Limit;

    /**
     * @var array 支持userId进行检索
     */
    public $OnCallFormStaffIDs;

    /**
     * @var string 值班类型
     */
    public $RotationType;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @var string 支持id、name进行检索
     */
    public $OnCallFormName;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $Offset 分页查询起始位
     * @param integer $Limit 分页查询页数
     * @param array $OnCallFormStaffIDs 支持userId进行检索
     * @param string $RotationType 值班类型
     * @param string $Order 排序方式
     * @param string $OnCallFormName 支持id、name进行检索
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OnCallFormStaffIDs",$param) and $param["OnCallFormStaffIDs"] !== null) {
            $this->OnCallFormStaffIDs = $param["OnCallFormStaffIDs"];
        }

        if (array_key_exists("RotationType",$param) and $param["RotationType"] !== null) {
            $this->RotationType = $param["RotationType"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OnCallFormName",$param) and $param["OnCallFormName"] !== null) {
            $this->OnCallFormName = $param["OnCallFormName"];
        }
    }
}
