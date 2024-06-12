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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWechatDeviceTicket请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取产品名称
 * @method void setDeviceName(string $DeviceName) 设置产品名称
 * @method integer getIsThirdApp() 获取是否第三方小程序
 * @method void setIsThirdApp(integer $IsThirdApp) 设置是否第三方小程序
 * @method string getModelId() 获取模板ID
 * @method void setModelId(string $ModelId) 设置模板ID
 * @method string getMiniProgramAppId() 获取小程序APPID
 * @method void setMiniProgramAppId(string $MiniProgramAppId) 设置小程序APPID
 */
class GetWechatDeviceTicketRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $DeviceName;

    /**
     * @var integer 是否第三方小程序
     */
    public $IsThirdApp;

    /**
     * @var string 模板ID
     */
    public $ModelId;

    /**
     * @var string 小程序APPID
     */
    public $MiniProgramAppId;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 产品名称
     * @param integer $IsThirdApp 是否第三方小程序
     * @param string $ModelId 模板ID
     * @param string $MiniProgramAppId 小程序APPID
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("IsThirdApp",$param) and $param["IsThirdApp"] !== null) {
            $this->IsThirdApp = $param["IsThirdApp"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("MiniProgramAppId",$param) and $param["MiniProgramAppId"] !== null) {
            $this->MiniProgramAppId = $param["MiniProgramAppId"];
        }
    }
}
