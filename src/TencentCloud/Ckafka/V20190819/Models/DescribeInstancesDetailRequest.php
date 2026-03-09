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
 * DescribeInstancesDetail请求参数结构体
 *
 * @method string getInstanceId() 获取<p>（过滤条件）按照实例ID过滤</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>（过滤条件）按照实例ID过滤</p>
 * @method string getSearchWord() 获取<p>（过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>（过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询</p>
 * @method array getStatus() 获取<p>（过滤条件）实例的状态，不填默认返回全部</p><p>枚举值：</p><ul><li>-1： 创建失败</li><li>0： 创建中</li><li>1： 运行中</li><li>2： 删除中</li><li>3： 已删除</li><li>4： 删除失败</li><li>5： 隔离中</li><li>7： 升级中</li></ul>
 * @method void setStatus(array $Status) 设置<p>（过滤条件）实例的状态，不填默认返回全部</p><p>枚举值：</p><ul><li>-1： 创建失败</li><li>0： 创建中</li><li>1： 运行中</li><li>2： 删除中</li><li>3： 已删除</li><li>4： 删除失败</li><li>5： 隔离中</li><li>7： 升级中</li></ul>
 * @method integer getOffset() 获取<p>偏移量，不填默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，不填默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量，不填则默认10，最大值20。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，不填则默认10，最大值20。</p>
 * @method string getTagKey() 获取<p>匹配标签key值。</p>
 * @method void setTagKey(string $TagKey) 设置<p>匹配标签key值。</p>
 * @method array getFilters() 获取<p>过滤器。filter.Name 支持(&#39;Ip&#39;, &#39;VpcId&#39;, &#39;SubNetId&#39;, &#39;InstanceType&#39;,&#39;InstanceId&#39;) ,filter.Values最多传递10个值.</p>
 * @method void setFilters(array $Filters) 设置<p>过滤器。filter.Name 支持(&#39;Ip&#39;, &#39;VpcId&#39;, &#39;SubNetId&#39;, &#39;InstanceType&#39;,&#39;InstanceId&#39;) ,filter.Values最多传递10个值.</p>
 * @method string getInstanceIds() 获取<p>已经废弃， 使用InstanceIdList</p>
 * @method void setInstanceIds(string $InstanceIds) 设置<p>已经废弃， 使用InstanceIdList</p>
 * @method array getInstanceIdList() 获取<p>按照实例ID过滤</p>
 * @method void setInstanceIdList(array $InstanceIdList) 设置<p>按照实例ID过滤</p>
 * @method array getTagList() 获取<p>根据标签列表过滤实例（取交集）</p>
 * @method void setTagList(array $TagList) 设置<p>根据标签列表过滤实例（取交集）</p>
 */
class DescribeInstancesDetailRequest extends AbstractModel
{
    /**
     * @var string <p>（过滤条件）按照实例ID过滤</p>
     */
    public $InstanceId;

    /**
     * @var string <p>（过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询</p>
     */
    public $SearchWord;

    /**
     * @var array <p>（过滤条件）实例的状态，不填默认返回全部</p><p>枚举值：</p><ul><li>-1： 创建失败</li><li>0： 创建中</li><li>1： 运行中</li><li>2： 删除中</li><li>3： 已删除</li><li>4： 删除失败</li><li>5： 隔离中</li><li>7： 升级中</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>偏移量，不填默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，不填则默认10，最大值20。</p>
     */
    public $Limit;

    /**
     * @var string <p>匹配标签key值。</p>
     */
    public $TagKey;

    /**
     * @var array <p>过滤器。filter.Name 支持(&#39;Ip&#39;, &#39;VpcId&#39;, &#39;SubNetId&#39;, &#39;InstanceType&#39;,&#39;InstanceId&#39;) ,filter.Values最多传递10个值.</p>
     */
    public $Filters;

    /**
     * @var string <p>已经废弃， 使用InstanceIdList</p>
     * @deprecated
     */
    public $InstanceIds;

    /**
     * @var array <p>按照实例ID过滤</p>
     */
    public $InstanceIdList;

    /**
     * @var array <p>根据标签列表过滤实例（取交集）</p>
     */
    public $TagList;

    /**
     * @param string $InstanceId <p>（过滤条件）按照实例ID过滤</p>
     * @param string $SearchWord <p>（过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询</p>
     * @param array $Status <p>（过滤条件）实例的状态，不填默认返回全部</p><p>枚举值：</p><ul><li>-1： 创建失败</li><li>0： 创建中</li><li>1： 运行中</li><li>2： 删除中</li><li>3： 已删除</li><li>4： 删除失败</li><li>5： 隔离中</li><li>7： 升级中</li></ul>
     * @param integer $Offset <p>偏移量，不填默认为0。</p>
     * @param integer $Limit <p>返回数量，不填则默认10，最大值20。</p>
     * @param string $TagKey <p>匹配标签key值。</p>
     * @param array $Filters <p>过滤器。filter.Name 支持(&#39;Ip&#39;, &#39;VpcId&#39;, &#39;SubNetId&#39;, &#39;InstanceType&#39;,&#39;InstanceId&#39;) ,filter.Values最多传递10个值.</p>
     * @param string $InstanceIds <p>已经废弃， 使用InstanceIdList</p>
     * @param array $InstanceIdList <p>按照实例ID过滤</p>
     * @param array $TagList <p>根据标签列表过滤实例（取交集）</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
