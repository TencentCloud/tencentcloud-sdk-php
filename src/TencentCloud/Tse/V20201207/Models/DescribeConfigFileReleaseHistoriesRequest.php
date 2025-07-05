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
 * @method string getInstanceId() 获取TSE实例id
 * @method void setInstanceId(string $InstanceId) 设置TSE实例id
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getGroup() 获取组
 * @method void setGroup(string $Group) 设置组
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getEndId() 获取发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续
 * @method void setEndId(integer $EndId) 设置发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续
 * @method string getConfigFileId() 获取配置文件ID
 * @method void setConfigFileId(string $ConfigFileId) 设置配置文件ID
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。	
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。	
 * @method integer getOffset() 获取偏移量，默认为0。	
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。	
 */
class DescribeConfigFileReleaseHistoriesRequest extends AbstractModel
{
    /**
     * @var string TSE实例id
     */
    public $InstanceId;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 组
     */
    public $Group;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续
     */
    public $EndId;

    /**
     * @var string 配置文件ID
     */
    public $ConfigFileId;

    /**
     * @var integer 返回数量，默认为20，最大值为100。	
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。	
     */
    public $Offset;

    /**
     * @param string $InstanceId TSE实例id
     * @param string $Namespace 命名空间
     * @param string $Group 组
     * @param string $Name 名称
     * @param integer $EndId 发布历史记录id，用于分页优化，一般指定 EndId，就不用指定 Offset，否则分页可能不连续
     * @param string $ConfigFileId 配置文件ID
     * @param integer $Limit 返回数量，默认为20，最大值为100。	
     * @param integer $Offset 偏移量，默认为0。	
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
