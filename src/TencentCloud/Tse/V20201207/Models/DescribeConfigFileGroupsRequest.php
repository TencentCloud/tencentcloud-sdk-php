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
 * DescribeConfigFileGroups请求参数结构体
 *
 * @method string getInstanceId() 获取tse实例id
 * @method void setInstanceId(string $InstanceId) 设置tse实例id
 * @method string getNamespace() 获取根据命名空间过滤
 * @method void setNamespace(string $Namespace) 设置根据命名空间过滤
 * @method string getGroup() 获取根据配置文件组名过滤
 * @method void setGroup(string $Group) 设置根据配置文件组名过滤
 * @method string getFileName() 获取根据配置文件组名过滤
 * @method void setFileName(string $FileName) 设置根据配置文件组名过滤
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。	
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。	
 * @method integer getOffset() 获取偏移量，默认为0。	
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。	
 */
class DescribeConfigFileGroupsRequest extends AbstractModel
{
    /**
     * @var string tse实例id
     */
    public $InstanceId;

    /**
     * @var string 根据命名空间过滤
     */
    public $Namespace;

    /**
     * @var string 根据配置文件组名过滤
     */
    public $Group;

    /**
     * @var string 根据配置文件组名过滤
     */
    public $FileName;

    /**
     * @var integer 返回数量，默认为20，最大值为100。	
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。	
     */
    public $Offset;

    /**
     * @param string $InstanceId tse实例id
     * @param string $Namespace 根据命名空间过滤
     * @param string $Group 根据配置文件组名过滤
     * @param string $FileName 根据配置文件组名过滤
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
