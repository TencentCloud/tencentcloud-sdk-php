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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 协议封禁相关信息
 *
 * @method ProtocolBlockConfig getProtocolBlockConfig() 获取协议封禁配置
 * @method void setProtocolBlockConfig(ProtocolBlockConfig $ProtocolBlockConfig) 设置协议封禁配置
 * @method array getInstanceDetailList() 获取协议封禁配置所属的实例
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置协议封禁配置所属的实例
 */
class ProtocolBlockRelation extends AbstractModel
{
    /**
     * @var ProtocolBlockConfig 协议封禁配置
     */
    public $ProtocolBlockConfig;

    /**
     * @var array 协议封禁配置所属的实例
     */
    public $InstanceDetailList;

    /**
     * @param ProtocolBlockConfig $ProtocolBlockConfig 协议封禁配置
     * @param array $InstanceDetailList 协议封禁配置所属的实例
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
        if (array_key_exists("ProtocolBlockConfig",$param) and $param["ProtocolBlockConfig"] !== null) {
            $this->ProtocolBlockConfig = new ProtocolBlockConfig();
            $this->ProtocolBlockConfig->deserialize($param["ProtocolBlockConfig"]);
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }
    }
}
