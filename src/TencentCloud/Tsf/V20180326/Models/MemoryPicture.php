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
 * Jvm监控内存数据封装
 *
 * @method array getMax() 获取内存最大值
 * @method void setMax(array $Max) 设置内存最大值
 * @method array getUsed() 获取已用内存大小
 * @method void setUsed(array $Used) 设置已用内存大小
 * @method array getCommitted() 获取系统分配内存大小
 * @method void setCommitted(array $Committed) 设置系统分配内存大小
 */
class MemoryPicture extends AbstractModel
{
    /**
     * @var array 内存最大值
     */
    public $Max;

    /**
     * @var array 已用内存大小
     */
    public $Used;

    /**
     * @var array 系统分配内存大小
     */
    public $Committed;

    /**
     * @param array $Max 内存最大值
     * @param array $Used 已用内存大小
     * @param array $Committed 系统分配内存大小
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
        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = [];
            foreach ($param["Max"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->Max, $obj);
            }
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = [];
            foreach ($param["Used"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->Used, $obj);
            }
        }

        if (array_key_exists("Committed",$param) and $param["Committed"] !== null) {
            $this->Committed = [];
            foreach ($param["Committed"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->Committed, $obj);
            }
        }
    }
}
