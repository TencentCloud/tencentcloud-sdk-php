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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrUpdateConfigFileAndRelease请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method ConfigFilePublishInfo getConfigFilePublishInfo() 获取配置文件列表详情	
 * @method void setConfigFilePublishInfo(ConfigFilePublishInfo $ConfigFilePublishInfo) 设置配置文件列表详情	
 * @method boolean getStrictEnable() 获取控制开启校验配置版本是否已经存在
 * @method void setStrictEnable(boolean $StrictEnable) 设置控制开启校验配置版本是否已经存在
 */
class CreateOrUpdateConfigFileAndReleaseRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var ConfigFilePublishInfo 配置文件列表详情	
     */
    public $ConfigFilePublishInfo;

    /**
     * @var boolean 控制开启校验配置版本是否已经存在
     */
    public $StrictEnable;

    /**
     * @param string $InstanceId 实例id
     * @param ConfigFilePublishInfo $ConfigFilePublishInfo 配置文件列表详情	
     * @param boolean $StrictEnable 控制开启校验配置版本是否已经存在
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

        if (array_key_exists("ConfigFilePublishInfo",$param) and $param["ConfigFilePublishInfo"] !== null) {
            $this->ConfigFilePublishInfo = new ConfigFilePublishInfo();
            $this->ConfigFilePublishInfo->deserialize($param["ConfigFilePublishInfo"]);
        }

        if (array_key_exists("StrictEnable",$param) and $param["StrictEnable"] !== null) {
            $this->StrictEnable = $param["StrictEnable"];
        }
    }
}
