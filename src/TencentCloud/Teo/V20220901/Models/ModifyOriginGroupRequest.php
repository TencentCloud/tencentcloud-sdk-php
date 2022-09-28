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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOriginGroup请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getOriginGroupId() 获取源站组ID。
 * @method void setOriginGroupId(string $OriginGroupId) 设置源站组ID。
 * @method string getOriginType() 获取源站类型，取值有：
<li>self：自有源站；</li>
<li>third_party：第三方源站；</li>
<li>cos：腾讯云COS源站。</li>
 * @method void setOriginType(string $OriginType) 设置源站类型，取值有：
<li>self：自有源站；</li>
<li>third_party：第三方源站；</li>
<li>cos：腾讯云COS源站。</li>
 * @method string getOriginGroupName() 获取源站组名称。
 * @method void setOriginGroupName(string $OriginGroupName) 设置源站组名称。
 * @method string getConfigurationType() 获取源站配置类型，当OriginType=self时，取值有：
<li>area：按区域配置；</li>
<li>weight： 按权重配置；</li>
<li>proto： 按HTTP协议配置。</li>当OriginType=third_party/cos时放空。
 * @method void setConfigurationType(string $ConfigurationType) 设置源站配置类型，当OriginType=self时，取值有：
<li>area：按区域配置；</li>
<li>weight： 按权重配置；</li>
<li>proto： 按HTTP协议配置。</li>当OriginType=third_party/cos时放空。
 * @method array getOriginRecords() 获取源站记录信息。
 * @method void setOriginRecords(array $OriginRecords) 设置源站记录信息。
 * @method string getHostHeader() 获取回源Host，仅当OriginType=self时可以设置。
不填写，表示使用已有配置。
 * @method void setHostHeader(string $HostHeader) 设置回源Host，仅当OriginType=self时可以设置。
不填写，表示使用已有配置。
 */
class ModifyOriginGroupRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 源站组ID。
     */
    public $OriginGroupId;

    /**
     * @var string 源站类型，取值有：
<li>self：自有源站；</li>
<li>third_party：第三方源站；</li>
<li>cos：腾讯云COS源站。</li>
     */
    public $OriginType;

    /**
     * @var string 源站组名称。
     */
    public $OriginGroupName;

    /**
     * @var string 源站配置类型，当OriginType=self时，取值有：
<li>area：按区域配置；</li>
<li>weight： 按权重配置；</li>
<li>proto： 按HTTP协议配置。</li>当OriginType=third_party/cos时放空。
     */
    public $ConfigurationType;

    /**
     * @var array 源站记录信息。
     */
    public $OriginRecords;

    /**
     * @var string 回源Host，仅当OriginType=self时可以设置。
不填写，表示使用已有配置。
     */
    public $HostHeader;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $OriginGroupId 源站组ID。
     * @param string $OriginType 源站类型，取值有：
<li>self：自有源站；</li>
<li>third_party：第三方源站；</li>
<li>cos：腾讯云COS源站。</li>
     * @param string $OriginGroupName 源站组名称。
     * @param string $ConfigurationType 源站配置类型，当OriginType=self时，取值有：
<li>area：按区域配置；</li>
<li>weight： 按权重配置；</li>
<li>proto： 按HTTP协议配置。</li>当OriginType=third_party/cos时放空。
     * @param array $OriginRecords 源站记录信息。
     * @param string $HostHeader 回源Host，仅当OriginType=self时可以设置。
不填写，表示使用已有配置。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginGroupName",$param) and $param["OriginGroupName"] !== null) {
            $this->OriginGroupName = $param["OriginGroupName"];
        }

        if (array_key_exists("ConfigurationType",$param) and $param["ConfigurationType"] !== null) {
            $this->ConfigurationType = $param["ConfigurationType"];
        }

        if (array_key_exists("OriginRecords",$param) and $param["OriginRecords"] !== null) {
            $this->OriginRecords = [];
            foreach ($param["OriginRecords"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->OriginRecords, $obj);
            }
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
