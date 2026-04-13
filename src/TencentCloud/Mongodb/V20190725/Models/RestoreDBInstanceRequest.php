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
 * RestoreDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method string getRestoreTime() 获取<p>指定回档的目标时间点。该时间必须处于实例的备份保留期内。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setRestoreTime(string $RestoreTime) 设置<p>指定回档的目标时间点。该时间必须处于实例的备份保留期内。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method array getDatabases() 获取<p>回档的库表信息。</p>
 * @method void setDatabases(array $Databases) 设置<p>回档的库表信息。</p>
 */
class RestoreDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>指定回档的目标时间点。该时间必须处于实例的备份保留期内。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $RestoreTime;

    /**
     * @var array <p>回档的库表信息。</p>
     */
    public $Databases;

    /**
     * @param string $InstanceId <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param string $RestoreTime <p>指定回档的目标时间点。该时间必须处于实例的备份保留期内。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param array $Databases <p>回档的库表信息。</p>
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

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new RestoreDatabases();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }
    }
}
