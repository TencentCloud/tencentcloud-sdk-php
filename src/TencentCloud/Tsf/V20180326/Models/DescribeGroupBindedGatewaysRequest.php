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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupBindedGateways请求参数结构体
 *
 * @method string getGroupId() 获取API 分组ID
 * @method void setGroupId(string $GroupId) 设置API 分组ID
 * @method integer getOffset() 获取翻页查询偏移量
 * @method void setOffset(integer $Offset) 设置翻页查询偏移量
 * @method integer getLimit() 获取翻页查询每页记录数
 * @method void setLimit(integer $Limit) 设置翻页查询每页记录数
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 */
class DescribeGroupBindedGatewaysRequest extends AbstractModel
{
    /**
     * @var string API 分组ID
     */
    public $GroupId;

    /**
     * @var integer 翻页查询偏移量
     */
    public $Offset;

    /**
     * @var integer 翻页查询每页记录数
     */
    public $Limit;

    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @param string $GroupId API 分组ID
     * @param integer $Offset 翻页查询偏移量
     * @param integer $Limit 翻页查询每页记录数
     * @param string $SearchWord 搜索关键字
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
