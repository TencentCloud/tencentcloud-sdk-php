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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserCmds请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取数量限制
 * @method void setLimit(integer $Limit) 设置数量限制
 * @method string getOrderField() 获取排序字段，支持： OsType,CreateTime,ModifyTime
 * @method void setOrderField(string $OrderField) 设置排序字段，支持： OsType,CreateTime,ModifyTime
 * @method integer getOrder() 获取排序方式，取值: 1倒序，0顺序；默认倒序
 * @method void setOrder(integer $Order) 设置排序方式，取值: 1倒序，0顺序；默认倒序
 * @method string getSearchKey() 获取关键字搜索，可搜索ID或别名，支持模糊搜索
 * @method void setSearchKey(string $SearchKey) 设置关键字搜索，可搜索ID或别名，支持模糊搜索
 * @method string getCmdId() 获取查询的脚本ID
 * @method void setCmdId(string $CmdId) 设置查询的脚本ID
 */
class DescribeUserCmdsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 数量限制
     */
    public $Limit;

    /**
     * @var string 排序字段，支持： OsType,CreateTime,ModifyTime
     */
    public $OrderField;

    /**
     * @var integer 排序方式，取值: 1倒序，0顺序；默认倒序
     */
    public $Order;

    /**
     * @var string 关键字搜索，可搜索ID或别名，支持模糊搜索
     */
    public $SearchKey;

    /**
     * @var string 查询的脚本ID
     */
    public $CmdId;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 数量限制
     * @param string $OrderField 排序字段，支持： OsType,CreateTime,ModifyTime
     * @param integer $Order 排序方式，取值: 1倒序，0顺序；默认倒序
     * @param string $SearchKey 关键字搜索，可搜索ID或别名，支持模糊搜索
     * @param string $CmdId 查询的脚本ID
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
        if (array_key_exists('Offset',$param) and $param['Offset'] !== null) {
            $this->Offset = $param['Offset'];
        }

        if (array_key_exists('Limit',$param) and $param['Limit'] !== null) {
            $this->Limit = $param['Limit'];
        }

        if (array_key_exists('OrderField',$param) and $param['OrderField'] !== null) {
            $this->OrderField = $param['OrderField'];
        }

        if (array_key_exists('Order',$param) and $param['Order'] !== null) {
            $this->Order = $param['Order'];
        }

        if (array_key_exists('SearchKey',$param) and $param['SearchKey'] !== null) {
            $this->SearchKey = $param['SearchKey'];
        }

        if (array_key_exists('CmdId',$param) and $param['CmdId'] !== null) {
            $this->CmdId = $param['CmdId'];
        }
    }
}
