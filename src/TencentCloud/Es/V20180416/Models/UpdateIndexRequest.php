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
 * UpdateIndex请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ES集群ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ES集群ID</p>
 * @method string getIndexType() 获取<p>更新的索引类型。auto：自治索引；normal：普通索引</p>
 * @method void setIndexType(string $IndexType) 设置<p>更新的索引类型。auto：自治索引；normal：普通索引</p>
 * @method string getIndexName() 获取<p>更新的索引名</p>
 * @method void setIndexName(string $IndexName) 设置<p>更新的索引名</p>
 * @method string getUpdateMetaJson() 获取<p>更新的索引元数据JSON，如mappings、settings</p>
 * @method void setUpdateMetaJson(string $UpdateMetaJson) 设置<p>更新的索引元数据JSON，如mappings、settings</p>
 * @method string getUsername() 获取<p>集群访问用户名</p>
 * @method void setUsername(string $Username) 设置<p>集群访问用户名</p>
 * @method string getPassword() 获取<p>集群访问密码</p>
 * @method void setPassword(string $Password) 设置<p>集群访问密码</p>
 * @method boolean getRolloverBackingIndex() 获取<p>是否滚动后备索引</p>
 * @method void setRolloverBackingIndex(boolean $RolloverBackingIndex) 设置<p>是否滚动后备索引</p>
 * @method boolean getMountIndex() 获取<p>是否为取回完全卸载索引</p>
 * @method void setMountIndex(boolean $MountIndex) 设置<p>是否为取回完全卸载索引</p>
 * @method string getIndexUuid() 获取<p>索引Uuid</p>
 * @method void setIndexUuid(string $IndexUuid) 设置<p>索引Uuid</p>
 * @method string getBackingIndexName() 获取<p>后备索引名</p>
 * @method void setBackingIndexName(string $BackingIndexName) 设置<p>后备索引名</p>
 */
class UpdateIndexRequest extends AbstractModel
{
    /**
     * @var string <p>ES集群ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>更新的索引类型。auto：自治索引；normal：普通索引</p>
     */
    public $IndexType;

    /**
     * @var string <p>更新的索引名</p>
     */
    public $IndexName;

    /**
     * @var string <p>更新的索引元数据JSON，如mappings、settings</p>
     */
    public $UpdateMetaJson;

    /**
     * @var string <p>集群访问用户名</p>
     */
    public $Username;

    /**
     * @var string <p>集群访问密码</p>
     */
    public $Password;

    /**
     * @var boolean <p>是否滚动后备索引</p>
     */
    public $RolloverBackingIndex;

    /**
     * @var boolean <p>是否为取回完全卸载索引</p>
     */
    public $MountIndex;

    /**
     * @var string <p>索引Uuid</p>
     */
    public $IndexUuid;

    /**
     * @var string <p>后备索引名</p>
     */
    public $BackingIndexName;

    /**
     * @param string $InstanceId <p>ES集群ID</p>
     * @param string $IndexType <p>更新的索引类型。auto：自治索引；normal：普通索引</p>
     * @param string $IndexName <p>更新的索引名</p>
     * @param string $UpdateMetaJson <p>更新的索引元数据JSON，如mappings、settings</p>
     * @param string $Username <p>集群访问用户名</p>
     * @param string $Password <p>集群访问密码</p>
     * @param boolean $RolloverBackingIndex <p>是否滚动后备索引</p>
     * @param boolean $MountIndex <p>是否为取回完全卸载索引</p>
     * @param string $IndexUuid <p>索引Uuid</p>
     * @param string $BackingIndexName <p>后备索引名</p>
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

        if (array_key_exists("UpdateMetaJson",$param) and $param["UpdateMetaJson"] !== null) {
            $this->UpdateMetaJson = $param["UpdateMetaJson"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("RolloverBackingIndex",$param) and $param["RolloverBackingIndex"] !== null) {
            $this->RolloverBackingIndex = $param["RolloverBackingIndex"];
        }

        if (array_key_exists("MountIndex",$param) and $param["MountIndex"] !== null) {
            $this->MountIndex = $param["MountIndex"];
        }

        if (array_key_exists("IndexUuid",$param) and $param["IndexUuid"] !== null) {
            $this->IndexUuid = $param["IndexUuid"];
        }

        if (array_key_exists("BackingIndexName",$param) and $param["BackingIndexName"] !== null) {
            $this->BackingIndexName = $param["BackingIndexName"];
        }
    }
}
