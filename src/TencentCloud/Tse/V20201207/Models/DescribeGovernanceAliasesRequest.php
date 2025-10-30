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
 * DescribeGovernanceAliases请求参数结构体
 *
 * @method string getInstanceId() 获取tse实例id。
 * @method void setInstanceId(string $InstanceId) 设置tse实例id。
 * @method string getService() 获取服务别名所指向的服务名。
 * @method void setService(string $Service) 设置服务别名所指向的服务名。
 * @method string getNamespace() 获取服务别名所指向的命名空间名。
 * @method void setNamespace(string $Namespace) 设置服务别名所指向的命名空间名。
 * @method string getAlias() 获取服务别名。
 * @method void setAlias(string $Alias) 设置服务别名。
 * @method string getAliasNamespace() 获取服务别名命名空间。
 * @method void setAliasNamespace(string $AliasNamespace) 设置服务别名命名空间。
 * @method string getComment() 获取服务别名描述。
 * @method void setComment(string $Comment) 设置服务别名描述。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeGovernanceAliasesRequest extends AbstractModel
{
    /**
     * @var string tse实例id。
     */
    public $InstanceId;

    /**
     * @var string 服务别名所指向的服务名。
     */
    public $Service;

    /**
     * @var string 服务别名所指向的命名空间名。
     */
    public $Namespace;

    /**
     * @var string 服务别名。
     */
    public $Alias;

    /**
     * @var string 服务别名命名空间。
     */
    public $AliasNamespace;

    /**
     * @var string 服务别名描述。
     */
    public $Comment;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param string $InstanceId tse实例id。
     * @param string $Service 服务别名所指向的服务名。
     * @param string $Namespace 服务别名所指向的命名空间名。
     * @param string $Alias 服务别名。
     * @param string $AliasNamespace 服务别名命名空间。
     * @param string $Comment 服务别名描述。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
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

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("AliasNamespace",$param) and $param["AliasNamespace"] !== null) {
            $this->AliasNamespace = $param["AliasNamespace"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
