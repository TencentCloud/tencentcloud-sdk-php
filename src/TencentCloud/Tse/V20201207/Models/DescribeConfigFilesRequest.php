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
 * DescribeConfigFiles请求参数结构体
 *
 * @method string getNamespace() 获取命名空间名称
 * @method void setNamespace(string $Namespace) 设置命名空间名称
 * @method string getInstanceId() 获取TSE实例id
 * @method void setInstanceId(string $InstanceId) 设置TSE实例id
 * @method string getGroup() 获取组名
 * @method void setGroup(string $Group) 设置组名
 * @method string getName() 获取配置文件名称
 * @method void setName(string $Name) 设置配置文件名称
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。	
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。	
 * @method integer getOffset() 获取偏移量，默认为0。	
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。	
 * @method string getId() 获取配置文件ID
 * @method void setId(string $Id) 设置配置文件ID
 */
class DescribeConfigFilesRequest extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $Namespace;

    /**
     * @var string TSE实例id
     */
    public $InstanceId;

    /**
     * @var string 组名
     */
    public $Group;

    /**
     * @var string 配置文件名称
     */
    public $Name;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var integer 返回数量，默认为20，最大值为100。	
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。	
     */
    public $Offset;

    /**
     * @var string 配置文件ID
     */
    public $Id;

    /**
     * @param string $Namespace 命名空间名称
     * @param string $InstanceId TSE实例id
     * @param string $Group 组名
     * @param string $Name 配置文件名称
     * @param array $Tags 标签列表
     * @param integer $Limit 返回数量，默认为20，最大值为100。	
     * @param integer $Offset 偏移量，默认为0。	
     * @param string $Id 配置文件ID
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ConfigFileTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
