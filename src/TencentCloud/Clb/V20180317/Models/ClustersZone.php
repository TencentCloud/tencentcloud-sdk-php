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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群所在的可用区。
 *
 * @method array getMasterZone() 获取集群所在的主可用区。
 * @method void setMasterZone(array $MasterZone) 设置集群所在的主可用区。
 * @method array getSlaveZone() 获取集群所在的备可用区。
 * @method void setSlaveZone(array $SlaveZone) 设置集群所在的备可用区。
 */
class ClustersZone extends AbstractModel
{
    /**
     * @var array 集群所在的主可用区。
     */
    public $MasterZone;

    /**
     * @var array 集群所在的备可用区。
     */
    public $SlaveZone;

    /**
     * @param array $MasterZone 集群所在的主可用区。
     * @param array $SlaveZone 集群所在的备可用区。
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
        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }
    }
}
