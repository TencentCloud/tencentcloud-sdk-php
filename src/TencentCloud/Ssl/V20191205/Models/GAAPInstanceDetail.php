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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GAAP实例详情
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getListenerList() 获取监听器列表
 * @method void setListenerList(array $ListenerList) 设置监听器列表
 * @method string getInstanceName() 获取加速实例名称
 * @method void setInstanceName(string $InstanceName) 设置加速实例名称
 */
class GAAPInstanceDetail extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 监听器列表
     */
    public $ListenerList;

    /**
     * @var string 加速实例名称
     */
    public $InstanceName;

    /**
     * @param string $InstanceId 实例ID
     * @param array $ListenerList 监听器列表
     * @param string $InstanceName 加速实例名称
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

        if (array_key_exists("ListenerList",$param) and $param["ListenerList"] !== null) {
            $this->ListenerList = [];
            foreach ($param["ListenerList"] as $key => $value){
                $obj = new GAAPListenerDetail();
                $obj->deserialize($value);
                array_push($this->ListenerList, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
