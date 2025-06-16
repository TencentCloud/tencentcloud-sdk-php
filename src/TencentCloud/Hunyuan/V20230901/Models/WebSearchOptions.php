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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识注入相关的参数信息
 *
 * @method array getKnowledge() 获取表示用户注入的知识信息
 * @method void setKnowledge(array $Knowledge) 设置表示用户注入的知识信息
 * @method UserLocation getUserLocation() 获取用户位置详细信息
 * @method void setUserLocation(UserLocation $UserLocation) 设置用户位置详细信息
 * @method boolean getProcesses() 获取打开开关，会返回搜索状态
 * @method void setProcesses(boolean $Processes) 设置打开开关，会返回搜索状态
 */
class WebSearchOptions extends AbstractModel
{
    /**
     * @var array 表示用户注入的知识信息
     */
    public $Knowledge;

    /**
     * @var UserLocation 用户位置详细信息
     */
    public $UserLocation;

    /**
     * @var boolean 打开开关，会返回搜索状态
     */
    public $Processes;

    /**
     * @param array $Knowledge 表示用户注入的知识信息
     * @param UserLocation $UserLocation 用户位置详细信息
     * @param boolean $Processes 打开开关，会返回搜索状态
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
        if (array_key_exists("Knowledge",$param) and $param["Knowledge"] !== null) {
            $this->Knowledge = [];
            foreach ($param["Knowledge"] as $key => $value){
                $obj = new Knowledge();
                $obj->deserialize($value);
                array_push($this->Knowledge, $obj);
            }
        }

        if (array_key_exists("UserLocation",$param) and $param["UserLocation"] !== null) {
            $this->UserLocation = new UserLocation();
            $this->UserLocation->deserialize($param["UserLocation"]);
        }

        if (array_key_exists("Processes",$param) and $param["Processes"] !== null) {
            $this->Processes = $param["Processes"];
        }
    }
}
