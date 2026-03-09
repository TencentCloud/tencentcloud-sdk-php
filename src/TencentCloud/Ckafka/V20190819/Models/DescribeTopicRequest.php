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
 * DescribeTopic请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method string getSearchWord() 获取<p>过滤条件，按照 topicName 过滤，支持模糊查询</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>过滤条件，按照 topicName 过滤，支持模糊查询</p>
 * @method integer getOffset() 获取<p>偏移量，不填默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，不填默认为0</p>
 * @method integer getLimit() 获取<p>返回数量，不填则默认为20，最大值为50</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，不填则默认为20，最大值为50</p>
 * @method string getAclRuleName() 获取<p>Acl预设策略名称</p>
 * @method void setAclRuleName(string $AclRuleName) 设置<p>Acl预设策略名称</p>
 */
class DescribeTopicRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>过滤条件，按照 topicName 过滤，支持模糊查询</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>偏移量，不填默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，不填则默认为20，最大值为50</p>
     */
    public $Limit;

    /**
     * @var string <p>Acl预设策略名称</p>
     */
    public $AclRuleName;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param string $SearchWord <p>过滤条件，按照 topicName 过滤，支持模糊查询</p>
     * @param integer $Offset <p>偏移量，不填默认为0</p>
     * @param integer $Limit <p>返回数量，不填则默认为20，最大值为50</p>
     * @param string $AclRuleName <p>Acl预设策略名称</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AclRuleName",$param) and $param["AclRuleName"] !== null) {
            $this->AclRuleName = $param["AclRuleName"];
        }
    }
}
