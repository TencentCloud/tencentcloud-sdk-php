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
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method integer getOffset() 获取<p>分页查询起始位</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询起始位</p>
 * @method integer getLimit() 获取<p>分页查询页数</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询页数</p>
 * @method array getOnCallFormStaffIDs() 获取<p>支持userId进行检索</p>
 * @method void setOnCallFormStaffIDs(array $OnCallFormStaffIDs) 设置<p>支持userId进行检索</p>
 * @method string getRotationType() 获取<p>值班类型</p>
 * @method void setRotationType(string $RotationType) 设置<p>值班类型</p>
 * @method string getOrder() 获取<p>排序方式</p>
 * @method void setOrder(string $Order) 设置<p>排序方式</p>
 * @method string getOnCallFormName() 获取<p>支持id、name进行检索</p>
 * @method void setOnCallFormName(string $OnCallFormName) 设置<p>支持id、name进行检索</p>
 */
class DescribeOnCallFormsRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var integer <p>分页查询起始位</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页查询页数</p>
     */
    public $Limit;

    /**
     * @var array <p>支持userId进行检索</p>
     */
    public $OnCallFormStaffIDs;

    /**
     * @var string <p>值班类型</p>
     */
    public $RotationType;

    /**
     * @var string <p>排序方式</p>
     */
    public $Order;

    /**
     * @var string <p>支持id、name进行检索</p>
     */
    public $OnCallFormName;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param integer $Offset <p>分页查询起始位</p>
     * @param integer $Limit <p>分页查询页数</p>
     * @param array $OnCallFormStaffIDs <p>支持userId进行检索</p>
     * @param string $RotationType <p>值班类型</p>
     * @param string $Order <p>排序方式</p>
     * @param string $OnCallFormName <p>支持id、name进行检索</p>
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
