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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用性能监控产品中应用信息
 *
 * @method string getInstanceId() 获取业务ID
 * @method void setInstanceId(string $InstanceId) 设置业务ID
 * @method array getServiceNameList() 获取应用名称
 * @method void setServiceNameList(array $ServiceNameList) 设置应用名称
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 */
class ApmServiceInfo extends AbstractModel
{
    /**
     * @var string 业务ID
     */
    public $InstanceId;

    /**
     * @var array 应用名称
     */
    public $ServiceNameList;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @param string $InstanceId 业务ID
     * @param array $ServiceNameList 应用名称
     * @param integer $RegionId 地域ID
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

        if (array_key_exists("ServiceNameList",$param) and $param["ServiceNameList"] !== null) {
            $this->ServiceNameList = $param["ServiceNameList"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
