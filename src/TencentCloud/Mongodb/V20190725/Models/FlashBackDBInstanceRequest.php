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
 * FlashBackDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取开启按 Key 回档的实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置开启按 Key 回档的实例 ID。
 * @method string getTargetFlashbackTime() 获取源数据想恢复到的时间。
 * @method void setTargetFlashbackTime(string $TargetFlashbackTime) 设置源数据想恢复到的时间。
 * @method array getTargetDatabases() 获取源数据所在的库表信息。
 * @method void setTargetDatabases(array $TargetDatabases) 设置源数据所在的库表信息。
 * @method string getTargetInstanceId() 获取数据最终写入的实例 ID。
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置数据最终写入的实例 ID。
 */
class FlashBackDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 开启按 Key 回档的实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 源数据想恢复到的时间。
     */
    public $TargetFlashbackTime;

    /**
     * @var array 源数据所在的库表信息。
     */
    public $TargetDatabases;

    /**
     * @var string 数据最终写入的实例 ID。
     */
    public $TargetInstanceId;

    /**
     * @param string $InstanceId 开启按 Key 回档的实例 ID。
     * @param string $TargetFlashbackTime 源数据想恢复到的时间。
     * @param array $TargetDatabases 源数据所在的库表信息。
     * @param string $TargetInstanceId 数据最终写入的实例 ID。
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

        if (array_key_exists("TargetFlashbackTime",$param) and $param["TargetFlashbackTime"] !== null) {
            $this->TargetFlashbackTime = $param["TargetFlashbackTime"];
        }

        if (array_key_exists("TargetDatabases",$param) and $param["TargetDatabases"] !== null) {
            $this->TargetDatabases = [];
            foreach ($param["TargetDatabases"] as $key => $value){
                $obj = new FlashbackDatabase();
                $obj->deserialize($value);
                array_push($this->TargetDatabases, $obj);
            }
        }

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }
    }
}
