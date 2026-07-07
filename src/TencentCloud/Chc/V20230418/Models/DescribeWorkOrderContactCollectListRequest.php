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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkOrderContactCollectList请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件，支持 contact-name（联系人姓名模糊匹配）、contact-phone（联系人电话模糊匹配）</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，支持 contact-name（联系人姓名模糊匹配）、contact-phone（联系人电话模糊匹配）</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100</p>
 */
class DescribeWorkOrderContactCollectListRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件，支持 contact-name（联系人姓名模糊匹配）、contact-phone（联系人电话模糊匹配）</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100</p>
     */
    public $Limit;

    /**
     * @param array $Filters <p>过滤条件，支持 contact-name（联系人姓名模糊匹配）、contact-phone（联系人电话模糊匹配）</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
