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
 * DescribeInstancesDetail请求参数结构体
 *
 * @method string getInstanceId() 获取（过滤条件）按照实例ID过滤
 * @method void setInstanceId(string $InstanceId) 设置（过滤条件）按照实例ID过滤
 * @method string getSearchWord() 获取（过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询
 * @method void setSearchWord(string $SearchWord) 设置（过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询
 * @method array getStatus() 获取（过滤条件）实例的状态。0：创建中，1：运行中，2：删除中，不填默认返回全部
 * @method void setStatus(array $Status) 设置（过滤条件）实例的状态。0：创建中，1：运行中，2：删除中，不填默认返回全部
 * @method integer getOffset() 获取偏移量，不填默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，不填默认为0。
 * @method integer getLimit() 获取返回数量，不填则默认10，最大值20。
 * @method void setLimit(integer $Limit) 设置返回数量，不填则默认10，最大值20。
 * @method string getTagKey() 获取匹配标签key值。
 * @method void setTagKey(string $TagKey) 设置匹配标签key值。
 * @method array getFilters() 获取过滤器。filter.Name 支持('Ip', 'VpcId', 'SubNetId', 'InstanceType','InstanceId') ,filter.Values最多传递10个值.
 * @method void setFilters(array $Filters) 设置过滤器。filter.Name 支持('Ip', 'VpcId', 'SubNetId', 'InstanceType','InstanceId') ,filter.Values最多传递10个值.
 * @method string getInstanceIds() 获取已经废弃， 使用InstanceIdList
 * @method void setInstanceIds(string $InstanceIds) 设置已经废弃， 使用InstanceIdList
 * @method array getInstanceIdList() 获取按照实例ID过滤
 * @method void setInstanceIdList(array $InstanceIdList) 设置按照实例ID过滤
 * @method array getTagList() 获取根据标签列表过滤实例（取交集）
 * @method void setTagList(array $TagList) 设置根据标签列表过滤实例（取交集）
 */
class DescribeInstancesDetailRequest extends AbstractModel
{
    /**
     * @var string （过滤条件）按照实例ID过滤
     */
    public $InstanceId;

    /**
     * @var string （过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询
     */
    public $SearchWord;

    /**
     * @var array （过滤条件）实例的状态。0：创建中，1：运行中，2：删除中，不填默认返回全部
     */
    public $Status;

    /**
     * @var integer 偏移量，不填默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，不填则默认10，最大值20。
     */
    public $Limit;

    /**
     * @var string 匹配标签key值。
     */
    public $TagKey;

    /**
     * @var array 过滤器。filter.Name 支持('Ip', 'VpcId', 'SubNetId', 'InstanceType','InstanceId') ,filter.Values最多传递10个值.
     */
    public $Filters;

    /**
     * @var string 已经废弃， 使用InstanceIdList
     */
    public $InstanceIds;

    /**
     * @var array 按照实例ID过滤
     */
    public $InstanceIdList;

    /**
     * @var array 根据标签列表过滤实例（取交集）
     */
    public $TagList;

    /**
     * @param string $InstanceId （过滤条件）按照实例ID过滤
     * @param string $SearchWord （过滤条件）按照实例名,实例Id,可用区,私有网络id,子网id 过滤，支持模糊查询
     * @param array $Status （过滤条件）实例的状态。0：创建中，1：运行中，2：删除中，不填默认返回全部
     * @param integer $Offset 偏移量，不填默认为0。
     * @param integer $Limit 返回数量，不填则默认10，最大值20。
     * @param string $TagKey 匹配标签key值。
     * @param array $Filters 过滤器。filter.Name 支持('Ip', 'VpcId', 'SubNetId', 'InstanceType','InstanceId') ,filter.Values最多传递10个值.
     * @param string $InstanceIds 已经废弃， 使用InstanceIdList
     * @param array $InstanceIdList 按照实例ID过滤
     * @param array $TagList 根据标签列表过滤实例（取交集）
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
