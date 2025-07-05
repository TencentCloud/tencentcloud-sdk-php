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
 * 服务治理引擎绑定的kubernetes信息
 *
 * @method string getBoundClusterId() 获取绑定的kubernetes集群ID
 * @method void setBoundClusterId(string $BoundClusterId) 设置绑定的kubernetes集群ID
 * @method string getBoundClusterType() 获取绑定的kubernetes的集群类型，分tke和eks两种
 * @method void setBoundClusterType(string $BoundClusterType) 设置绑定的kubernetes的集群类型，分tke和eks两种
 * @method string getSyncMode() 获取服务同步模式，all为全量同步，demand为按需同步
 * @method void setSyncMode(string $SyncMode) 设置服务同步模式，all为全量同步，demand为按需同步
 * @method string getBindRegion() 获取绑定的kubernetes集群所在地域
 * @method void setBindRegion(string $BindRegion) 设置绑定的kubernetes集群所在地域
 */
class BoundK8SInfo extends AbstractModel
{
    /**
     * @var string 绑定的kubernetes集群ID
     */
    public $BoundClusterId;

    /**
     * @var string 绑定的kubernetes的集群类型，分tke和eks两种
     */
    public $BoundClusterType;

    /**
     * @var string 服务同步模式，all为全量同步，demand为按需同步
     */
    public $SyncMode;

    /**
     * @var string 绑定的kubernetes集群所在地域
     */
    public $BindRegion;

    /**
     * @param string $BoundClusterId 绑定的kubernetes集群ID
     * @param string $BoundClusterType 绑定的kubernetes的集群类型，分tke和eks两种
     * @param string $SyncMode 服务同步模式，all为全量同步，demand为按需同步
     * @param string $BindRegion 绑定的kubernetes集群所在地域
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
        if (array_key_exists("BoundClusterId",$param) and $param["BoundClusterId"] !== null) {
            $this->BoundClusterId = $param["BoundClusterId"];
        }

        if (array_key_exists("BoundClusterType",$param) and $param["BoundClusterType"] !== null) {
            $this->BoundClusterType = $param["BoundClusterType"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("BindRegion",$param) and $param["BindRegion"] !== null) {
            $this->BindRegion = $param["BindRegion"];
        }
    }
}
