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
 * DeleteReplicationInstance请求参数结构体
 *
 * @method string getRegistryId() 获取实例id
 * @method void setRegistryId(string $RegistryId) 设置实例id
 * @method string getReplicationRegistryId() 获取复制实例ID
 * @method void setReplicationRegistryId(string $ReplicationRegistryId) 设置复制实例ID
 * @method integer getReplicationRegionId() 获取复制实例地域Id
 * @method void setReplicationRegionId(integer $ReplicationRegionId) 设置复制实例地域Id
 */
class DeleteReplicationInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $RegistryId;

    /**
     * @var string 复制实例ID
     */
    public $ReplicationRegistryId;

    /**
     * @var integer 复制实例地域Id
     */
    public $ReplicationRegionId;

    /**
     * @param string $RegistryId 实例id
     * @param string $ReplicationRegistryId 复制实例ID
     * @param integer $ReplicationRegionId 复制实例地域Id
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

        if (array_key_exists("ReplicationRegistryId",$param) and $param["ReplicationRegistryId"] !== null) {
            $this->ReplicationRegistryId = $param["ReplicationRegistryId"];
        }

        if (array_key_exists("ReplicationRegionId",$param) and $param["ReplicationRegionId"] !== null) {
            $this->ReplicationRegionId = $param["ReplicationRegionId"];
        }
    }
}
