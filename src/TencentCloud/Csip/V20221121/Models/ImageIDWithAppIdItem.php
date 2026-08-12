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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像ID和对应的appid账号信息
 *
 * @method integer getAppId() 获取<p>账号ID</p>
 * @method void setAppId(integer $AppId) 设置<p>账号ID</p>
 * @method string getImageID() 获取<p>容器镜像ID</p>
 * @method void setImageID(string $ImageID) 设置<p>容器镜像ID</p>
 */
class ImageIDWithAppIdItem extends AbstractModel
{
    /**
     * @var integer <p>账号ID</p>
     */
    public $AppId;

    /**
     * @var string <p>容器镜像ID</p>
     */
    public $ImageID;

    /**
     * @param integer $AppId <p>账号ID</p>
     * @param string $ImageID <p>容器镜像ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }
    }
}
