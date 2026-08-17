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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理模型接入goosefs参数
 *
 * @method string getClusterId() 获取<p>goosefs集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>goosefs集群id</p>
 * @method string getGooseFSPath() 获取<p>goosefs命名空间名称</p>
 * @method void setGooseFSPath(string $GooseFSPath) 设置<p>goosefs命名空间名称</p>
 * @method array getMasterAddresses() 获取<p>主从节点信息</p>
 * @method void setMasterAddresses(array $MasterAddresses) 设置<p>主从节点信息</p>
 */
class GooseFSConfig extends AbstractModel
{
    /**
     * @var string <p>goosefs集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>goosefs命名空间名称</p>
     */
    public $GooseFSPath;

    /**
     * @var array <p>主从节点信息</p>
     */
    public $MasterAddresses;

    /**
     * @param string $ClusterId <p>goosefs集群id</p>
     * @param string $GooseFSPath <p>goosefs命名空间名称</p>
     * @param array $MasterAddresses <p>主从节点信息</p>
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

        if (array_key_exists("GooseFSPath",$param) and $param["GooseFSPath"] !== null) {
            $this->GooseFSPath = $param["GooseFSPath"];
        }

        if (array_key_exists("MasterAddresses",$param) and $param["MasterAddresses"] !== null) {
            $this->MasterAddresses = $param["MasterAddresses"];
        }
    }
}
