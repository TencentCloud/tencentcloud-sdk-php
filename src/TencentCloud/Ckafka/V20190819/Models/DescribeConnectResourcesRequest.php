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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConnectResources请求参数结构体
 *
 * @method string getType() 获取<p>连接源类型</p>
 * @method void setType(string $Type) 设置<p>连接源类型</p>
 * @method string getSearchWord() 获取<p>连接源名称的关键字查询,支持模糊匹配</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>连接源名称的关键字查询,支持模糊匹配</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为0</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为1000 (超过1000,则限制为1000)</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为1000 (超过1000,则限制为1000)</p>
 * @method string getResourceRegion() 获取<p>连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)</p>
 * @method void setResourceRegion(string $ResourceRegion) 设置<p>连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)</p>
 */
class DescribeConnectResourcesRequest extends AbstractModel
{
    /**
     * @var string <p>连接源类型</p>
     */
    public $Type;

    /**
     * @var string <p>连接源名称的关键字查询,支持模糊匹配</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>分页偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为1000 (超过1000,则限制为1000)</p>
     */
    public $Limit;

    /**
     * @var string <p>连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)</p>
     */
    public $ResourceRegion;

    /**
     * @param string $Type <p>连接源类型</p>
     * @param string $SearchWord <p>连接源名称的关键字查询,支持模糊匹配</p>
     * @param integer $Offset <p>分页偏移量，默认为0</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为1000 (超过1000,则限制为1000)</p>
     * @param string $ResourceRegion <p>连接源的关键字查询, 根据地域查询本地域内连接管理列表中的连接(仅支持包含region输入的连接源)</p>
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
