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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConnectResources请求参数结构体
 *
 * @method string getType() 获取连接源类型
 * @method void setType(string $Type) 设置连接源类型
 * @method string getSearchWord() 获取连接源名称的关键字查询
 * @method void setSearchWord(string $SearchWord) 设置连接源名称的关键字查询
 * @method integer getOffset() 获取分页偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100
 * @method string getResourceRegion() 获取连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)
 * @method void setResourceRegion(string $ResourceRegion) 设置连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)
 */
class DescribeConnectResourcesRequest extends AbstractModel
{
    /**
     * @var string 连接源类型
     */
    public $Type;

    /**
     * @var string 连接源名称的关键字查询
     */
    public $SearchWord;

    /**
     * @var integer 分页偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var string 连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)
     */
    public $ResourceRegion;

    /**
     * @param string $Type 连接源类型
     * @param string $SearchWord 连接源名称的关键字查询
     * @param integer $Offset 分页偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，最大值为100
     * @param string $ResourceRegion 连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }
    }
}
