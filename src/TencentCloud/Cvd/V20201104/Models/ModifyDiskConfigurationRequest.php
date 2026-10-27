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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiskConfiguration请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method Disk getNewSystemDisk() 获取<p>新系统盘配置</p>
 * @method void setNewSystemDisk(Disk $NewSystemDisk) 设置<p>新系统盘配置</p>
 * @method array getNewDataDisks() 获取<p>新数据盘配置</p>
 * @method void setNewDataDisks(array $NewDataDisks) 设置<p>新数据盘配置</p>
 */
class ModifyDiskConfigurationRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var Disk <p>新系统盘配置</p>
     */
    public $NewSystemDisk;

    /**
     * @var array <p>新数据盘配置</p>
     */
    public $NewDataDisks;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param Disk $NewSystemDisk <p>新系统盘配置</p>
     * @param array $NewDataDisks <p>新数据盘配置</p>
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

        if (array_key_exists("NewSystemDisk",$param) and $param["NewSystemDisk"] !== null) {
            $this->NewSystemDisk = new Disk();
            $this->NewSystemDisk->deserialize($param["NewSystemDisk"]);
        }

        if (array_key_exists("NewDataDisks",$param) and $param["NewDataDisks"] !== null) {
            $this->NewDataDisks = [];
            foreach ($param["NewDataDisks"] as $key => $value){
                $obj = new Disk();
                $obj->deserialize($value);
                array_push($this->NewDataDisks, $obj);
            }
        }
    }
}
