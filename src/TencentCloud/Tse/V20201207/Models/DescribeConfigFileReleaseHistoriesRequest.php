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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigFileReleaseHistories请求参数结构体
 *
 * @method string getInstanceId() 获取<p>TSE实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>TSE实例id</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getGroup() 获取<p>组</p>
 * @method void setGroup(string $Group) 设置<p>组</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method integer getEndId() 获取<p>发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续</p>
 * @method void setEndId(integer $EndId) 设置<p>发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续</p>
 * @method string getConfigFileId() 获取<p>配置文件ID</p>
 * @method void setConfigFileId(string $ConfigFileId) 设置<p>配置文件ID</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 */
class DescribeConfigFileReleaseHistoriesRequest extends AbstractModel
{
    /**
     * @var string <p>TSE实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>组</p>
     */
    public $Group;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var integer <p>发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续</p>
     */
    public $EndId;

    /**
     * @var string <p>配置文件ID</p>
     */
    public $ConfigFileId;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>TSE实例id</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $Group <p>组</p>
     * @param string $Name <p>名称</p>
     * @param integer $EndId <p>发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续</p>
     * @param string $ConfigFileId <p>配置文件ID</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EndId",$param) and $param["EndId"] !== null) {
            $this->EndId = $param["EndId"];
        }

        if (array_key_exists("ConfigFileId",$param) and $param["ConfigFileId"] !== null) {
            $this->ConfigFileId = $param["ConfigFileId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
