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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例启动模板，通过该参数可使用实例模板中的预设参数创建实例。
 *
 * @method string getLaunchTemplateId() 获取实例启动模板ID，通过该参数可使用实例模板中的预设参数创建实例。
 * @method void setLaunchTemplateId(string $LaunchTemplateId) 设置实例启动模板ID，通过该参数可使用实例模板中的预设参数创建实例。
 * @method integer getLaunchTemplateVersion() 获取实例启动模板版本号，若给定，新实例启动模板将基于给定的版本号创建
 * @method void setLaunchTemplateVersion(integer $LaunchTemplateVersion) 设置实例启动模板版本号，若给定，新实例启动模板将基于给定的版本号创建
 */
class LaunchTemplate extends AbstractModel
{
    /**
     * @var string 实例启动模板ID，通过该参数可使用实例模板中的预设参数创建实例。
     */
    public $LaunchTemplateId;

    /**
     * @var integer 实例启动模板版本号，若给定，新实例启动模板将基于给定的版本号创建
     */
    public $LaunchTemplateVersion;

    /**
     * @param string $LaunchTemplateId 实例启动模板ID，通过该参数可使用实例模板中的预设参数创建实例。
     * @param integer $LaunchTemplateVersion 实例启动模板版本号，若给定，新实例启动模板将基于给定的版本号创建
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
        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateVersion",$param) and $param["LaunchTemplateVersion"] !== null) {
            $this->LaunchTemplateVersion = $param["LaunchTemplateVersion"];
        }
    }
}
