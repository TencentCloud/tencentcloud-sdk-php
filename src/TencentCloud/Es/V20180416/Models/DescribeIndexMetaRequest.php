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
 * DescribeIndexMeta请求参数结构体
 *
 * @method string getInstanceId() 获取ES集群ID
 * @method void setInstanceId(string $InstanceId) 设置ES集群ID
 * @method string getIndexType() 获取索引类型。auto：自治索引；normal：普通索引
 * @method void setIndexType(string $IndexType) 设置索引类型。auto：自治索引；normal：普通索引
 * @method string getIndexName() 获取索引名，若填空则获取所有索引
 * @method void setIndexName(string $IndexName) 设置索引名，若填空则获取所有索引
 * @method string getUsername() 获取集群访问用户名
 * @method void setUsername(string $Username) 设置集群访问用户名
 * @method string getPassword() 获取集群访问密码
 * @method void setPassword(string $Password) 设置集群访问密码
 */
class DescribeIndexMetaRequest extends AbstractModel
{
    /**
     * @var string ES集群ID
     */
    public $InstanceId;

    /**
     * @var string 索引类型。auto：自治索引；normal：普通索引
     */
    public $IndexType;

    /**
     * @var string 索引名，若填空则获取所有索引
     */
    public $IndexName;

    /**
     * @var string 集群访问用户名
     */
    public $Username;

    /**
     * @var string 集群访问密码
     */
    public $Password;

    /**
     * @param string $InstanceId ES集群ID
     * @param string $IndexType 索引类型。auto：自治索引；normal：普通索引
     * @param string $IndexName 索引名，若填空则获取所有索引
     * @param string $Username 集群访问用户名
     * @param string $Password 集群访问密码
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

        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
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
    }
}
