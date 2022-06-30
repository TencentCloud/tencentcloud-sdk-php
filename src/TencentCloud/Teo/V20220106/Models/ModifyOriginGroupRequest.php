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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOriginGroup请求参数结构体
 *
 * @method string getOriginId() 获取源站组ID
 * @method void setOriginId(string $OriginId) 设置源站组ID
 * @method string getOriginName() 获取源站组名称
 * @method void setOriginName(string $OriginName) 设置源站组名称
 * @method string getType() 获取配置类型，当OriginType=self 时，需要填写：
area: 按区域配置
weight: 按权重配置
当OriginType=third_party/cos 时，不需要填写
 * @method void setType(string $Type) 设置配置类型，当OriginType=self 时，需要填写：
area: 按区域配置
weight: 按权重配置
当OriginType=third_party/cos 时，不需要填写
 * @method array getRecord() 获取源站记录
 * @method void setRecord(array $Record) 设置源站记录
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getOriginType() 获取源站类型
self：自有源站
third_party：第三方源站
cos：腾讯云COS源站
 * @method void setOriginType(string $OriginType) 设置源站类型
self：自有源站
third_party：第三方源站
cos：腾讯云COS源站
 */
class ModifyOriginGroupRequest extends AbstractModel
{
    /**
     * @var string 源站组ID
     */
    public $OriginId;

    /**
     * @var string 源站组名称
     */
    public $OriginName;

    /**
     * @var string 配置类型，当OriginType=self 时，需要填写：
area: 按区域配置
weight: 按权重配置
当OriginType=third_party/cos 时，不需要填写
     */
    public $Type;

    /**
     * @var array 源站记录
     */
    public $Record;

    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 源站类型
self：自有源站
third_party：第三方源站
cos：腾讯云COS源站
     */
    public $OriginType;

    /**
     * @param string $OriginId 源站组ID
     * @param string $OriginName 源站组名称
     * @param string $Type 配置类型，当OriginType=self 时，需要填写：
area: 按区域配置
weight: 按权重配置
当OriginType=third_party/cos 时，不需要填写
     * @param array $Record 源站记录
     * @param string $ZoneId 站点ID
     * @param string $OriginType 源站类型
self：自有源站
third_party：第三方源站
cos：腾讯云COS源站
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
        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("OriginName",$param) and $param["OriginName"] !== null) {
            $this->OriginName = $param["OriginName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = [];
            foreach ($param["Record"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Record, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }
    }
}
