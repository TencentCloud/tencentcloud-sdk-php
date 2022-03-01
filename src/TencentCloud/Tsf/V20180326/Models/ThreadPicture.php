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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * jvm监控数据线程数据封装
 *
 * @method array getThreadCount() 获取总线程数
 * @method void setThreadCount(array $ThreadCount) 设置总线程数
 * @method array getThreadActive() 获取活跃线程数
 * @method void setThreadActive(array $ThreadActive) 设置活跃线程数
 * @method array getDeamonThreadCount() 获取守护线程数
 * @method void setDeamonThreadCount(array $DeamonThreadCount) 设置守护线程数
 */
class ThreadPicture extends AbstractModel
{
    /**
     * @var array 总线程数
     */
    public $ThreadCount;

    /**
     * @var array 活跃线程数
     */
    public $ThreadActive;

    /**
     * @var array 守护线程数
     */
    public $DeamonThreadCount;

    /**
     * @param array $ThreadCount 总线程数
     * @param array $ThreadActive 活跃线程数
     * @param array $DeamonThreadCount 守护线程数
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
        if (array_key_exists("ThreadCount",$param) and $param["ThreadCount"] !== null) {
            $this->ThreadCount = [];
            foreach ($param["ThreadCount"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->ThreadCount, $obj);
            }
        }

        if (array_key_exists("ThreadActive",$param) and $param["ThreadActive"] !== null) {
            $this->ThreadActive = [];
            foreach ($param["ThreadActive"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->ThreadActive, $obj);
            }
        }

        if (array_key_exists("DeamonThreadCount",$param) and $param["DeamonThreadCount"] !== null) {
            $this->DeamonThreadCount = [];
            foreach ($param["DeamonThreadCount"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->DeamonThreadCount, $obj);
            }
        }
    }
}
