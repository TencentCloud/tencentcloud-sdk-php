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
 * CreateCustomErrorPage请求参数结构体
 *
 * @method string getZoneId() 获取站点Id。
 * @method void setZoneId(string $ZoneId) 设置站点Id。
 * @method string getEntity() 获取子域名。
 * @method void setEntity(string $Entity) 设置子域名。
 * @method string getName() 获取自定义页面的文件名。
 * @method void setName(string $Name) 设置自定义页面的文件名。
 * @method string getContent() 获取自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
 * @method void setContent(string $Content) 设置自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
 */
class CreateCustomErrorPageRequest extends AbstractModel
{
    /**
     * @var string 站点Id。
     */
    public $ZoneId;

    /**
     * @var string 子域名。
     */
    public $Entity;

    /**
     * @var string 自定义页面的文件名。
     */
    public $Name;

    /**
     * @var string 自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
     */
    public $Content;

    /**
     * @param string $ZoneId 站点Id。
     * @param string $Entity 子域名。
     * @param string $Name 自定义页面的文件名。
     * @param string $Content 自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
