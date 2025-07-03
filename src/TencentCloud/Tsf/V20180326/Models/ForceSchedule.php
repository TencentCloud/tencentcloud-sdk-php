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
 * 强制调度配置
 *
 * @method array getAffinityList() 获取-
 * @method void setAffinityList(array $AffinityList) 设置-
 * @method array getAntiAffinityList() 获取-
 * @method void setAntiAffinityList(array $AntiAffinityList) 设置-
 */
class ForceSchedule extends AbstractModel
{
    /**
     * @var array -
     */
    public $AffinityList;

    /**
     * @var array -
     */
    public $AntiAffinityList;

    /**
     * @param array $AffinityList -
     * @param array $AntiAffinityList -
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
        if (array_key_exists("AffinityList",$param) and $param["AffinityList"] !== null) {
            $this->AffinityList = [];
            foreach ($param["AffinityList"] as $key => $value){
                $obj = new Affinity();
                $obj->deserialize($value);
                array_push($this->AffinityList, $obj);
            }
        }

        if (array_key_exists("AntiAffinityList",$param) and $param["AntiAffinityList"] !== null) {
            $this->AntiAffinityList = [];
            foreach ($param["AntiAffinityList"] as $key => $value){
                $obj = new Affinity();
                $obj->deserialize($value);
                array_push($this->AntiAffinityList, $obj);
            }
        }
    }
}
