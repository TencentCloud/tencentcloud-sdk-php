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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVideoSnapshotTemplate请求参数结构体
 *
 * @method string getName() 获取<p>模板名称</p>
 * @method void setName(string $Name) 设置<p>模板名称</p>
 * @method integer getType() 获取<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method void setType(integer $Type) 设置<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method string getSort() 获取<p>排序参数</p><p>默认值：update_time</p>
 * @method void setSort(string $Sort) 设置<p>排序参数</p><p>默认值：update_time</p>
 * @method string getOrder() 获取<p>排序顺序</p><p>枚举值：</p><ul><li>desc： 降序</li><li>asc： 生序</li></ul><p>默认值：desc</p>
 * @method void setOrder(string $Order) 设置<p>排序顺序</p><p>枚举值：</p><ul><li>desc： 降序</li><li>asc： 生序</li></ul><p>默认值：desc</p>
 * @method integer getPageNumber() 获取<p>页码</p><p>默认值：1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p><p>默认值：1</p>
 * @method integer getPageSize() 获取<p>每页数目</p><p>默认值：20</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目</p><p>默认值：20</p>
 */
class ListVideoSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>模板名称</p>
     */
    public $Name;

    /**
     * @var integer <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     */
    public $Type;

    /**
     * @var string <p>排序参数</p><p>默认值：update_time</p>
     */
    public $Sort;

    /**
     * @var string <p>排序顺序</p><p>枚举值：</p><ul><li>desc： 降序</li><li>asc： 生序</li></ul><p>默认值：desc</p>
     */
    public $Order;

    /**
     * @var integer <p>页码</p><p>默认值：1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数目</p><p>默认值：20</p>
     */
    public $PageSize;

    /**
     * @param string $Name <p>模板名称</p>
     * @param integer $Type <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     * @param string $Sort <p>排序参数</p><p>默认值：update_time</p>
     * @param string $Order <p>排序顺序</p><p>枚举值：</p><ul><li>desc： 降序</li><li>asc： 生序</li></ul><p>默认值：desc</p>
     * @param integer $PageNumber <p>页码</p><p>默认值：1</p>
     * @param integer $PageSize <p>每页数目</p><p>默认值：20</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
