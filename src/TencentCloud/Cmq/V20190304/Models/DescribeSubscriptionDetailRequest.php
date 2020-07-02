<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscriptionDetail请求参数结构体
 *
 * @method string getTopicName() 获取主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
 * @method void setTopicName(string $TopicName) 设置主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
 * @method integer getOffset() 获取分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
 * @method void setOffset(integer $Offset) 设置分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
 * @method integer getLimit() 获取分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method void setLimit(integer $Limit) 设置分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method array getFilters() 获取筛选参数，目前只支持SubscriptionName，且仅支持一个关键字。
 * @method void setFilters(array $Filters) 设置筛选参数，目前只支持SubscriptionName，且仅支持一个关键字。
 */
class DescribeSubscriptionDetailRequest extends AbstractModel
{
    /**
     * @var string 主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
     */
    public $TopicName;

    /**
     * @var integer 分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
     */
    public $Offset;

    /**
     * @var integer 分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     */
    public $Limit;

    /**
     * @var array 筛选参数，目前只支持SubscriptionName，且仅支持一个关键字。
     */
    public $Filters;

    /**
     * @param string $TopicName 主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线（-）。
     * @param integer $Offset 分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
     * @param integer $Limit 分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     * @param array $Filters 筛选参数，目前只支持SubscriptionName，且仅支持一个关键字。
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
        if (array_key_exists('TopicName',$param) and $param['TopicName'] !== null) {
            $this->TopicName = $param['TopicName'];
        }

        if (array_key_exists('Offset',$param) and $param['Offset'] !== null) {
            $this->Offset = $param['Offset'];
        }

        if (array_key_exists('Limit',$param) and $param['Limit'] !== null) {
            $this->Limit = $param['Limit'];
        }

        if (array_key_exists('Filters',$param) and $param['Filters'] !== null) {
            $this->Filters = [];
            foreach ($param['Filters'] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
