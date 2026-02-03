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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibraDBForwardConfig请求参数结构体
 *
 * @method string getInstanceId() 获取只读分析引擎实例Id
 * @method void setInstanceId(string $InstanceId) 设置只读分析引擎实例Id
 * @method string getForwardMode() 获取转发模式
 * @method void setForwardMode(string $ForwardMode) 设置转发模式
 * @method array getForwardList() 获取转发实例列表
 * @method void setForwardList(array $ForwardList) 设置转发实例列表
 */
class ModifyLibraDBForwardConfigRequest extends AbstractModel
{
    /**
     * @var string 只读分析引擎实例Id
     */
    public $InstanceId;

    /**
     * @var string 转发模式
     */
    public $ForwardMode;

    /**
     * @var array 转发实例列表
     */
    public $ForwardList;

    /**
     * @param string $InstanceId 只读分析引擎实例Id
     * @param string $ForwardMode 转发模式
     * @param array $ForwardList 转发实例列表
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

        if (array_key_exists("ForwardMode",$param) and $param["ForwardMode"] !== null) {
            $this->ForwardMode = $param["ForwardMode"];
        }

        if (array_key_exists("ForwardList",$param) and $param["ForwardList"] !== null) {
            $this->ForwardList = [];
            foreach ($param["ForwardList"] as $key => $value){
                $obj = new ForwardInstanceInfo();
                $obj->deserialize($value);
                array_push($this->ForwardList, $obj);
            }
        }
    }
}
