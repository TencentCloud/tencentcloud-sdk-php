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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色资源
 *
 * @method boolean getCluster() 获取<p>是否集群级资源</p>
 * @method void setCluster(boolean $Cluster) 设置<p>是否集群级资源</p>
 * @method string getDatabase() 获取<p>db名</p>
 * @method void setDatabase(string $Database) 设置<p>db名</p>
 * @method string getCollection() 获取<p>collection名</p>
 * @method void setCollection(string $Collection) 设置<p>collection名</p>
 */
class RoleResource extends AbstractModel
{
    /**
     * @var boolean <p>是否集群级资源</p>
     */
    public $Cluster;

    /**
     * @var string <p>db名</p>
     */
    public $Database;

    /**
     * @var string <p>collection名</p>
     */
    public $Collection;

    /**
     * @param boolean $Cluster <p>是否集群级资源</p>
     * @param string $Database <p>db名</p>
     * @param string $Collection <p>collection名</p>
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
        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Collection",$param) and $param["Collection"] !== null) {
            $this->Collection = $param["Collection"];
        }
    }
}
