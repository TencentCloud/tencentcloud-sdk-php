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
 * PublishConfigFiles请求参数结构体
 *
 * @method string getInstanceId() 获取TSE实例id
 * @method void setInstanceId(string $InstanceId) 设置TSE实例id
 * @method ConfigFileRelease getConfigFileReleases() 获取配置文件发布
 * @method void setConfigFileReleases(ConfigFileRelease $ConfigFileReleases) 设置配置文件发布
 * @method boolean getStrictEnable() 获取控制开启校验配置版本是否已经存在
 * @method void setStrictEnable(boolean $StrictEnable) 设置控制开启校验配置版本是否已经存在
 */
class PublishConfigFilesRequest extends AbstractModel
{
    /**
     * @var string TSE实例id
     */
    public $InstanceId;

    /**
     * @var ConfigFileRelease 配置文件发布
     */
    public $ConfigFileReleases;

    /**
     * @var boolean 控制开启校验配置版本是否已经存在
     */
    public $StrictEnable;

    /**
     * @param string $InstanceId TSE实例id
     * @param ConfigFileRelease $ConfigFileReleases 配置文件发布
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

        if (array_key_exists("ConfigFileReleases",$param) and $param["ConfigFileReleases"] !== null) {
            $this->ConfigFileReleases = new ConfigFileRelease();
            $this->ConfigFileReleases->deserialize($param["ConfigFileReleases"]);
        }

        if (array_key_exists("StrictEnable",$param) and $param["StrictEnable"] !== null) {
            $this->StrictEnable = $param["StrictEnable"];
        }
    }
}
