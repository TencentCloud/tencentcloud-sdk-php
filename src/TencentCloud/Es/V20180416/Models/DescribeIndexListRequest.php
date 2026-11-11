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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIndexList请求参数结构体
 *
 * @method string getIndexType() 获取<p>索引类型。auto：自治索引；normal：普通索引</p>
 * @method void setIndexType(string $IndexType) 设置<p>索引类型。auto：自治索引；normal：普通索引</p>
 * @method string getInstanceId() 获取<p>ES集群ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ES集群ID</p>
 * @method string getIndexName() 获取<p>索引名，若填空则获取所有索引</p>
 * @method void setIndexName(string $IndexName) 设置<p>索引名，若填空则获取所有索引</p>
 * @method string getUsername() 获取<p>集群访问用户名</p>
 * @method void setUsername(string $Username) 设置<p>集群访问用户名</p>
 * @method string getPassword() 获取<p>集群访问密码</p>
 * @method void setPassword(string $Password) 设置<p>集群访问密码</p>
 * @method integer getOffset() 获取<p>分页起始位置</p>
 * @method void setOffset(integer $Offset) 设置<p>分页起始位置</p>
 * @method integer getLimit() 获取<p>一页展示数量</p>
 * @method void setLimit(integer $Limit) 设置<p>一页展示数量</p>
 * @method string getOrderBy() 获取<p>排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime</p>
 * @method array getIndexStatusList() 获取<p>过滤索引状态</p>
 * @method void setIndexStatusList(array $IndexStatusList) 设置<p>过滤索引状态</p>
 * @method string getOrder() 获取<p>排序顺序，支持asc、desc，默认为desc 数据格式&quot;asc&quot;,&quot;desc&quot;</p>
 * @method void setOrder(string $Order) 设置<p>排序顺序，支持asc、desc，默认为desc 数据格式&quot;asc&quot;,&quot;desc&quot;</p>
 * @method array getFilterIndexNames() 获取<p>索引名称过滤列表。仅返回列表中指定的索引，常用于事件中心跳转时筛选受影响的索引；不填返回全部索引。单次最多支持100个索引名称。</p>
 * @method void setFilterIndexNames(array $FilterIndexNames) 设置<p>索引名称过滤列表。仅返回列表中指定的索引，常用于事件中心跳转时筛选受影响的索引；不填返回全部索引。单次最多支持100个索引名称。</p>
 */
class DescribeIndexListRequest extends AbstractModel
{
    /**
     * @var string <p>索引类型。auto：自治索引；normal：普通索引</p>
     */
    public $IndexType;

    /**
     * @var string <p>ES集群ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>索引名，若填空则获取所有索引</p>
     */
    public $IndexName;

    /**
     * @var string <p>集群访问用户名</p>
     */
    public $Username;

    /**
     * @var string <p>集群访问密码</p>
     */
    public $Password;

    /**
     * @var integer <p>分页起始位置</p>
     */
    public $Offset;

    /**
     * @var integer <p>一页展示数量</p>
     */
    public $Limit;

    /**
     * @var string <p>排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime</p>
     */
    public $OrderBy;

    /**
     * @var array <p>过滤索引状态</p>
     */
    public $IndexStatusList;

    /**
     * @var string <p>排序顺序，支持asc、desc，默认为desc 数据格式&quot;asc&quot;,&quot;desc&quot;</p>
     */
    public $Order;

    /**
     * @var array <p>索引名称过滤列表。仅返回列表中指定的索引，常用于事件中心跳转时筛选受影响的索引；不填返回全部索引。单次最多支持100个索引名称。</p>
     */
    public $FilterIndexNames;

    /**
     * @param string $IndexType <p>索引类型。auto：自治索引；normal：普通索引</p>
     * @param string $InstanceId <p>ES集群ID</p>
     * @param string $IndexName <p>索引名，若填空则获取所有索引</p>
     * @param string $Username <p>集群访问用户名</p>
     * @param string $Password <p>集群访问密码</p>
     * @param integer $Offset <p>分页起始位置</p>
     * @param integer $Limit <p>一页展示数量</p>
     * @param string $OrderBy <p>排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime</p>
     * @param array $IndexStatusList <p>过滤索引状态</p>
     * @param string $Order <p>排序顺序，支持asc、desc，默认为desc 数据格式&quot;asc&quot;,&quot;desc&quot;</p>
     * @param array $FilterIndexNames <p>索引名称过滤列表。仅返回列表中指定的索引，常用于事件中心跳转时筛选受影响的索引；不填返回全部索引。单次最多支持100个索引名称。</p>
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
        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("IndexStatusList",$param) and $param["IndexStatusList"] !== null) {
            $this->IndexStatusList = $param["IndexStatusList"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("FilterIndexNames",$param) and $param["FilterIndexNames"] !== null) {
            $this->FilterIndexNames = $param["FilterIndexNames"];
        }
    }
}
