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
 * DescribeThrottleRules请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method string getSearchWord() 获取<p>关键字</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>关键字</p>
 * @method integer getLimit() 获取<p>返回数量，不填则默认为20，最大值200</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，不填则默认为20，最大值200</p>
 * @method integer getOffset() 获取<p>偏移数，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移数，默认为0</p>
 * @method integer getThrottleDimension() 获取<p>限流维度</p><p>枚举值：</p><ul><li>1： 实例维度限流</li><li>2： topic维度限流</li></ul><p>默认值：1</p>
 * @method void setThrottleDimension(integer $ThrottleDimension) 设置<p>限流维度</p><p>枚举值：</p><ul><li>1： 实例维度限流</li><li>2： topic维度限流</li></ul><p>默认值：1</p>
 */
class DescribeThrottleRulesRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>关键字</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>返回数量，不填则默认为20，最大值200</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移数，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>限流维度</p><p>枚举值：</p><ul><li>1： 实例维度限流</li><li>2： topic维度限流</li></ul><p>默认值：1</p>
     */
    public $ThrottleDimension;

    /**
     * @param string $InstanceId <p>实例Id</p>
     * @param string $SearchWord <p>关键字</p>
     * @param integer $Limit <p>返回数量，不填则默认为20，最大值200</p>
     * @param integer $Offset <p>偏移数，默认为0</p>
     * @param integer $ThrottleDimension <p>限流维度</p><p>枚举值：</p><ul><li>1： 实例维度限流</li><li>2： topic维度限流</li></ul><p>默认值：1</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ThrottleDimension",$param) and $param["ThrottleDimension"] !== null) {
            $this->ThrottleDimension = $param["ThrottleDimension"];
        }
    }
}
