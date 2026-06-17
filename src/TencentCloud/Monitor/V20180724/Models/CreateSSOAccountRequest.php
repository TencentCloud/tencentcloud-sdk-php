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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSSOAccount请求参数结构体
 *
 * @method string getInstanceId() 获取<p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
 * @method string getUserId() 获取<p>用户账号 ID ，例如：10000000</p>
 * @method void setUserId(string $UserId) 设置<p>用户账号 ID ，例如：10000000</p>
 * @method array getRole() 获取<p>权限(只取数组中的第一个，其中 Organization 暂未使用，可不填)</p>
 * @method void setRole(array $Role) 设置<p>权限(只取数组中的第一个，其中 Organization 暂未使用，可不填)</p>
 * @method string getNotes() 获取<p>备注</p>
 * @method void setNotes(string $Notes) 设置<p>备注</p>
 */
class CreateSSOAccountRequest extends AbstractModel
{
    /**
     * @var string <p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
     */
    public $InstanceId;

    /**
     * @var string <p>用户账号 ID ，例如：10000000</p>
     */
    public $UserId;

    /**
     * @var array <p>权限(只取数组中的第一个，其中 Organization 暂未使用，可不填)</p>
     */
    public $Role;

    /**
     * @var string <p>备注</p>
     */
    public $Notes;

    /**
     * @param string $InstanceId <p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
     * @param string $UserId <p>用户账号 ID ，例如：10000000</p>
     * @param array $Role <p>权限(只取数组中的第一个，其中 Organization 暂未使用，可不填)</p>
     * @param string $Notes <p>备注</p>
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = [];
            foreach ($param["Role"] as $key => $value){
                $obj = new GrafanaAccountRole();
                $obj->deserialize($value);
                array_push($this->Role, $obj);
            }
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }
    }
}
