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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeliveryConfigs请求参数结构体
 *
 * @method string getSearchWord() 获取关键字
 * @method void setSearchWord(string $SearchWord) 设置关键字
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取搜索条数
 * @method void setLimit(integer $Limit) 设置搜索条数
 */
class DescribeDeliveryConfigsRequest extends AbstractModel
{
    /**
     * @var string 关键字
     */
    public $SearchWord;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 搜索条数
     */
    public $Limit;

    /**
     * @param string $SearchWord 关键字
     * @param integer $Offset 偏移
     * @param integer $Limit 搜索条数
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
