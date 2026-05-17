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
 * cos ak 集合
 *
 * @method integer getAppId() 获取ak所属appid
 * @method void setAppId(integer $AppId) 设置ak所属appid
 * @method array getAkNameSet() 获取ak名称集合
 * @method void setAkNameSet(array $AkNameSet) 设置ak名称集合
 */
class CosAkSet extends AbstractModel
{
    /**
     * @var integer ak所属appid
     */
    public $AppId;

    /**
     * @var array ak名称集合
     */
    public $AkNameSet;

    /**
     * @param integer $AppId ak所属appid
     * @param array $AkNameSet ak名称集合
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

        if (array_key_exists("AkNameSet",$param) and $param["AkNameSet"] !== null) {
            $this->AkNameSet = $param["AkNameSet"];
        }
    }
}
