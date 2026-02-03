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
 * LibraDB 版本信息
 *
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method string getTag() 获取版本tag
 * @method void setTag(string $Tag) 设置版本tag
 * @method boolean getHasPermission() 获取是否可以使用该版本
 * @method void setHasPermission(boolean $HasPermission) 设置是否可以使用该版本
 */
class LibraDBVersion extends AbstractModel
{
    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var string 版本tag
     */
    public $Tag;

    /**
     * @var boolean 是否可以使用该版本
     */
    public $HasPermission;

    /**
     * @param string $Version 版本号
     * @param string $Tag 版本tag
     * @param boolean $HasPermission 是否可以使用该版本
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("HasPermission",$param) and $param["HasPermission"] !== null) {
            $this->HasPermission = $param["HasPermission"];
        }
    }
}
