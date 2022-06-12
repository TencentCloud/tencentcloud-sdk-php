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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReplicationInstance请求参数结构体
 *
 * @method string getRegistryId() 获取主实例iD
 * @method void setRegistryId(string $RegistryId) 设置主实例iD
 * @method integer getReplicationRegionId() 获取复制实例地域ID
 * @method void setReplicationRegionId(integer $ReplicationRegionId) 设置复制实例地域ID
 * @method string getReplicationRegionName() 获取复制实例地域名称
 * @method void setReplicationRegionName(string $ReplicationRegionName) 设置复制实例地域名称
 * @method boolean getSyncTag() 获取是否同步TCR云标签至生成的COS Bucket
 * @method void setSyncTag(boolean $SyncTag) 设置是否同步TCR云标签至生成的COS Bucket
 */
class CreateReplicationInstanceRequest extends AbstractModel
{
    /**
     * @var string 主实例iD
     */
    public $RegistryId;

    /**
     * @var integer 复制实例地域ID
     */
    public $ReplicationRegionId;

    /**
     * @var string 复制实例地域名称
     */
    public $ReplicationRegionName;

    /**
     * @var boolean 是否同步TCR云标签至生成的COS Bucket
     */
    public $SyncTag;

    /**
     * @param string $RegistryId 主实例iD
     * @param integer $ReplicationRegionId 复制实例地域ID
     * @param string $ReplicationRegionName 复制实例地域名称
     * @param boolean $SyncTag 是否同步TCR云标签至生成的COS Bucket
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("ReplicationRegionId",$param) and $param["ReplicationRegionId"] !== null) {
            $this->ReplicationRegionId = $param["ReplicationRegionId"];
        }

        if (array_key_exists("ReplicationRegionName",$param) and $param["ReplicationRegionName"] !== null) {
            $this->ReplicationRegionName = $param["ReplicationRegionName"];
        }

        if (array_key_exists("SyncTag",$param) and $param["SyncTag"] !== null) {
            $this->SyncTag = $param["SyncTag"];
        }
    }
}
