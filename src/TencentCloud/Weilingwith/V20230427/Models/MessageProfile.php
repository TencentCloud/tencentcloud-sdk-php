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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上报消息概要
 *
 * @method string getAppType() 获取应用类型
 * @method void setAppType(string $AppType) 设置应用类型
 * @method string getModelId() 获取模型Id
 * @method void setModelId(string $ModelId) 设置模型Id
 * @method string getPoiCode() 获取设备类型
 * @method void setPoiCode(string $PoiCode) 设置设备类型
 */
class MessageProfile extends AbstractModel
{
    /**
     * @var string 应用类型
     */
    public $AppType;

    /**
     * @var string 模型Id
     */
    public $ModelId;

    /**
     * @var string 设备类型
     */
    public $PoiCode;

    /**
     * @param string $AppType 应用类型
     * @param string $ModelId 模型Id
     * @param string $PoiCode 设备类型
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("PoiCode",$param) and $param["PoiCode"] !== null) {
            $this->PoiCode = $param["PoiCode"];
        }
    }
}
