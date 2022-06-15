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
 * 特征过滤相关信息
 *
 * @method PacketFilterConfig getPacketFilterConfig() 获取特征过滤配置
 * @method void setPacketFilterConfig(PacketFilterConfig $PacketFilterConfig) 设置特征过滤配置
 * @method array getInstanceDetailList() 获取特征过滤配置所属的实例
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置特征过滤配置所属的实例
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class PacketFilterRelation extends AbstractModel
{
    /**
     * @var PacketFilterConfig 特征过滤配置
     */
    public $PacketFilterConfig;

    /**
     * @var array 特征过滤配置所属的实例
     */
    public $InstanceDetailList;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param PacketFilterConfig $PacketFilterConfig 特征过滤配置
     * @param array $InstanceDetailList 特征过滤配置所属的实例
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("PacketFilterConfig",$param) and $param["PacketFilterConfig"] !== null) {
            $this->PacketFilterConfig = new PacketFilterConfig();
            $this->PacketFilterConfig->deserialize($param["PacketFilterConfig"]);
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
