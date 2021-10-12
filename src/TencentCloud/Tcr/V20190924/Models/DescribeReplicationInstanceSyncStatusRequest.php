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
 * DescribeReplicationInstanceSyncStatus请求参数结构体
 *
 * @method string getRegistryId() 获取主实例Id
 * @method void setRegistryId(string $RegistryId) 设置主实例Id
 * @method string getReplicationRegistryId() 获取复制实例Id
 * @method void setReplicationRegistryId(string $ReplicationRegistryId) 设置复制实例Id
 * @method integer getReplicationRegionId() 获取复制实例的地域Id
 * @method void setReplicationRegionId(integer $ReplicationRegionId) 设置复制实例的地域Id
 * @method boolean getShowReplicationLog() 获取是否显示同步日志
 * @method void setShowReplicationLog(boolean $ShowReplicationLog) 设置是否显示同步日志
 * @method integer getOffset() 获取日志页号, 默认0
 * @method void setOffset(integer $Offset) 设置日志页号, 默认0
 * @method integer getLimit() 获取最大输出条数，默认5，最大为20
 * @method void setLimit(integer $Limit) 设置最大输出条数，默认5，最大为20
 */
class DescribeReplicationInstanceSyncStatusRequest extends AbstractModel
{
    /**
     * @var string 主实例Id
     */
    public $RegistryId;

    /**
     * @var string 复制实例Id
     */
    public $ReplicationRegistryId;

    /**
     * @var integer 复制实例的地域Id
     */
    public $ReplicationRegionId;

    /**
     * @var boolean 是否显示同步日志
     */
    public $ShowReplicationLog;

    /**
     * @var integer 日志页号, 默认0
     */
    public $Offset;

    /**
     * @var integer 最大输出条数，默认5，最大为20
     */
    public $Limit;

    /**
     * @param string $RegistryId 主实例Id
     * @param string $ReplicationRegistryId 复制实例Id
     * @param integer $ReplicationRegionId 复制实例的地域Id
     * @param boolean $ShowReplicationLog 是否显示同步日志
     * @param integer $Offset 日志页号, 默认0
     * @param integer $Limit 最大输出条数，默认5，最大为20
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

        if (array_key_exists("ShowReplicationLog",$param) and $param["ShowReplicationLog"] !== null) {
            $this->ShowReplicationLog = $param["ShowReplicationLog"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
