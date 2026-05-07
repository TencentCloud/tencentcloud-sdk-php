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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSmsSignList请求参数结构体
 *
 * @method integer getInternational() 获取<p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
 * @method void setInternational(integer $International) 设置<p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
 * @method array getSignIdSet() 获取<p>签名 ID 数组。<br>注：默认数组最大长度100。</p>
 * @method void setSignIdSet(array $SignIdSet) 设置<p>签名 ID 数组。<br>注：默认数组最大长度100。</p>
 * @method integer getLimit() 获取<p>最大上限，最多100。注：默认为10，SignIdSet 为空时启用。</p>
 * @method void setLimit(integer $Limit) 设置<p>最大上限，最多100。注：默认为10，SignIdSet 为空时启用。</p>
 * @method integer getOffset() 获取<p>偏移量。注：默认为0，SignIdSet 为空时启用。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量。注：默认为0，SignIdSet 为空时启用。</p>
 */
class DescribeSmsSignListRequest extends AbstractModel
{
    /**
     * @var integer <p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
     */
    public $International;

    /**
     * @var array <p>签名 ID 数组。<br>注：默认数组最大长度100。</p>
     */
    public $SignIdSet;

    /**
     * @var integer <p>最大上限，最多100。注：默认为10，SignIdSet 为空时启用。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量。注：默认为0，SignIdSet 为空时启用。</p>
     */
    public $Offset;

    /**
     * @param integer $International <p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
     * @param array $SignIdSet <p>签名 ID 数组。<br>注：默认数组最大长度100。</p>
     * @param integer $Limit <p>最大上限，最多100。注：默认为10，SignIdSet 为空时启用。</p>
     * @param integer $Offset <p>偏移量。注：默认为0，SignIdSet 为空时启用。</p>
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
        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("SignIdSet",$param) and $param["SignIdSet"] !== null) {
            $this->SignIdSet = $param["SignIdSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
