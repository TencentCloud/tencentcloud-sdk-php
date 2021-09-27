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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理Web应用插件详情
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getLink() 获取链接
 * @method void setLink(string $Link) 设置链接
 */
class AssetWebAppPluginInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 链接
     */
    public $Link;

    /**
     * @param string $Name 名称
     * @param string $Desc 描述
     * @param string $Version 版本
     * @param string $Link 链接
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Link",$param) and $param["Link"] !== null) {
            $this->Link = $param["Link"];
        }
    }
}
