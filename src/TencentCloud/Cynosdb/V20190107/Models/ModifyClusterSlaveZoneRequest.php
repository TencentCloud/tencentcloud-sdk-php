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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterSlaveZone请求参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getOldSlaveZone() 获取旧从可用区
 * @method void setOldSlaveZone(string $OldSlaveZone) 设置旧从可用区
 * @method string getNewSlaveZone() 获取新从可用区
 * @method void setNewSlaveZone(string $NewSlaveZone) 设置新从可用区
 */
class ModifyClusterSlaveZoneRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 旧从可用区
     */
    public $OldSlaveZone;

    /**
     * @var string 新从可用区
     */
    public $NewSlaveZone;

    /**
     * @param string $ClusterId 集群Id
     * @param string $OldSlaveZone 旧从可用区
     * @param string $NewSlaveZone 新从可用区
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OldSlaveZone",$param) and $param["OldSlaveZone"] !== null) {
            $this->OldSlaveZone = $param["OldSlaveZone"];
        }

        if (array_key_exists("NewSlaveZone",$param) and $param["NewSlaveZone"] !== null) {
            $this->NewSlaveZone = $param["NewSlaveZone"];
        }
    }
}
