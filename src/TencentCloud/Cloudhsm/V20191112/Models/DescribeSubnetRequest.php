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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubnet请求参数结构体
 *
 * @method integer getLimit() 获取返回数量。Limit需要在[1, 100]之间。
 * @method void setLimit(integer $Limit) 设置返回数量。Limit需要在[1, 100]之间。
 * @method integer getOffset() 获取偏移量。偏移量最小为0。
 * @method void setOffset(integer $Offset) 设置偏移量。偏移量最小为0。
 * @method string getVpcId() 获取查询指定VpcId下的子网信息。
 * @method void setVpcId(string $VpcId) 设置查询指定VpcId下的子网信息。
 * @method string getSearchWord() 获取过滤条件
 * @method void setSearchWord(string $SearchWord) 设置过滤条件
 */
class DescribeSubnetRequest extends AbstractModel
{
    /**
     * @var integer 返回数量。Limit需要在[1, 100]之间。
     */
    public $Limit;

    /**
     * @var integer 偏移量。偏移量最小为0。
     */
    public $Offset;

    /**
     * @var string 查询指定VpcId下的子网信息。
     */
    public $VpcId;

    /**
     * @var string 过滤条件
     */
    public $SearchWord;

    /**
     * @param integer $Limit 返回数量。Limit需要在[1, 100]之间。
     * @param integer $Offset 偏移量。偏移量最小为0。
     * @param string $VpcId 查询指定VpcId下的子网信息。
     * @param string $SearchWord 过滤条件
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
