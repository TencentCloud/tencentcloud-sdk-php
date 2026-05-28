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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIgOrderList请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method integer getPageSize() 获取<p>每页数目</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目</p>
 * @method string getProductType() 获取<p>产品类型</p><p>枚举值：</p><ul><li>ig： 导诊</li><li>ipc： 预问诊</li></ul><p>默认值：ig</p>
 * @method void setProductType(string $ProductType) 设置<p>产品类型</p><p>枚举值：</p><ul><li>ig： 导诊</li><li>ipc： 预问诊</li></ul><p>默认值：ig</p>
 * @method integer getOrderStatus() 获取<p>订单状态</p><p>枚举值：</p><ul><li>0： 无状态</li><li>1： 未激活</li><li>2： 使用中</li><li>3： 暂停使用</li><li>4： 已到期</li><li>5： 已删除</li><li>6： 已失效</li></ul><p>默认值：0</p>
 * @method void setOrderStatus(integer $OrderStatus) 设置<p>订单状态</p><p>枚举值：</p><ul><li>0： 无状态</li><li>1： 未激活</li><li>2： 使用中</li><li>3： 暂停使用</li><li>4： 已到期</li><li>5： 已删除</li><li>6： 已失效</li></ul><p>默认值：0</p>
 * @method string getKeyWord() 获取<p>搜索关键字</p>
 * @method void setKeyWord(string $KeyWord) 设置<p>搜索关键字</p>
 */
class DescribeIgOrderListRequest extends AbstractModel
{
    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数目</p>
     */
    public $PageSize;

    /**
     * @var string <p>产品类型</p><p>枚举值：</p><ul><li>ig： 导诊</li><li>ipc： 预问诊</li></ul><p>默认值：ig</p>
     */
    public $ProductType;

    /**
     * @var integer <p>订单状态</p><p>枚举值：</p><ul><li>0： 无状态</li><li>1： 未激活</li><li>2： 使用中</li><li>3： 暂停使用</li><li>4： 已到期</li><li>5： 已删除</li><li>6： 已失效</li></ul><p>默认值：0</p>
     */
    public $OrderStatus;

    /**
     * @var string <p>搜索关键字</p>
     */
    public $KeyWord;

    /**
     * @param integer $PageNumber <p>页码</p>
     * @param integer $PageSize <p>每页数目</p>
     * @param string $ProductType <p>产品类型</p><p>枚举值：</p><ul><li>ig： 导诊</li><li>ipc： 预问诊</li></ul><p>默认值：ig</p>
     * @param integer $OrderStatus <p>订单状态</p><p>枚举值：</p><ul><li>0： 无状态</li><li>1： 未激活</li><li>2： 使用中</li><li>3： 暂停使用</li><li>4： 已到期</li><li>5： 已删除</li><li>6： 已失效</li></ul><p>默认值：0</p>
     * @param string $KeyWord <p>搜索关键字</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }
    }
}
