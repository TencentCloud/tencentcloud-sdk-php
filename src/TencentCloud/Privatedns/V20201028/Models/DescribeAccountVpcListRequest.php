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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountVpcList请求参数结构体
 *
 * @method string getAccountUin() 获取关联账号的uin
 * @method void setAccountUin(string $AccountUin) 设置关联账号的uin
 * @method integer getOffset() 获取分页偏移量，从0开始
 * @method void setOffset(integer $Offset) 设置分页偏移量，从0开始
 * @method integer getLimit() 获取分页限制数目， 最大100，默认20
 * @method void setLimit(integer $Limit) 设置分页限制数目， 最大100，默认20
 * @method array getFilters() 获取过滤参数
 * @method void setFilters(array $Filters) 设置过滤参数
 */
class DescribeAccountVpcListRequest extends AbstractModel
{
    /**
     * @var string 关联账号的uin
     */
    public $AccountUin;

    /**
     * @var integer 分页偏移量，从0开始
     */
    public $Offset;

    /**
     * @var integer 分页限制数目， 最大100，默认20
     */
    public $Limit;

    /**
     * @var array 过滤参数
     */
    public $Filters;

    /**
     * @param string $AccountUin 关联账号的uin
     * @param integer $Offset 分页偏移量，从0开始
     * @param integer $Limit 分页限制数目， 最大100，默认20
     * @param array $Filters 过滤参数
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
        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
