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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时任务同步速度趋势
 *
 * @method array getRecordsSpeedList() 获取同步速度条/s列表
 * @method void setRecordsSpeedList(array $RecordsSpeedList) 设置同步速度条/s列表
 * @method array getBytesSpeedList() 获取同步速度字节/s列表
 * @method void setBytesSpeedList(array $BytesSpeedList) 设置同步速度字节/s列表
 * @method array getRecordsLogSpeed() 获取日志条数速度
 * @method void setRecordsLogSpeed(array $RecordsLogSpeed) 设置日志条数速度
 * @method array getBytesLogSpeed() 获取日志大小速度
 * @method void setBytesLogSpeed(array $BytesLogSpeed) 设置日志大小速度
 */
class RealTimeTaskSpeed extends AbstractModel
{
    /**
     * @var array 同步速度条/s列表
     */
    public $RecordsSpeedList;

    /**
     * @var array 同步速度字节/s列表
     */
    public $BytesSpeedList;

    /**
     * @var array 日志条数速度
     */
    public $RecordsLogSpeed;

    /**
     * @var array 日志大小速度
     */
    public $BytesLogSpeed;

    /**
     * @param array $RecordsSpeedList 同步速度条/s列表
     * @param array $BytesSpeedList 同步速度字节/s列表
     * @param array $RecordsLogSpeed 日志条数速度
     * @param array $BytesLogSpeed 日志大小速度
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
        if (array_key_exists("RecordsSpeedList",$param) and $param["RecordsSpeedList"] !== null) {
            $this->RecordsSpeedList = [];
            foreach ($param["RecordsSpeedList"] as $key => $value){
                $obj = new RecordsSpeed();
                $obj->deserialize($value);
                array_push($this->RecordsSpeedList, $obj);
            }
        }

        if (array_key_exists("BytesSpeedList",$param) and $param["BytesSpeedList"] !== null) {
            $this->BytesSpeedList = [];
            foreach ($param["BytesSpeedList"] as $key => $value){
                $obj = new BytesSpeed();
                $obj->deserialize($value);
                array_push($this->BytesSpeedList, $obj);
            }
        }

        if (array_key_exists("RecordsLogSpeed",$param) and $param["RecordsLogSpeed"] !== null) {
            $this->RecordsLogSpeed = [];
            foreach ($param["RecordsLogSpeed"] as $key => $value){
                $obj = new RecordsSpeed();
                $obj->deserialize($value);
                array_push($this->RecordsLogSpeed, $obj);
            }
        }

        if (array_key_exists("BytesLogSpeed",$param) and $param["BytesLogSpeed"] !== null) {
            $this->BytesLogSpeed = [];
            foreach ($param["BytesLogSpeed"] as $key => $value){
                $obj = new BytesSpeed();
                $obj->deserialize($value);
                array_push($this->BytesLogSpeed, $obj);
            }
        }
    }
}
