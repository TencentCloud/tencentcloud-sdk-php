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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomization请求参数结构体
 *
 * @method integer getBizId() 获取应用 ID，登录控制台创建应用得到的AppID
 * @method void setBizId(integer $BizId) 设置应用 ID，登录控制台创建应用得到的AppID
 * @method string getTextUrl() 获取文本文件
 * @method void setTextUrl(string $TextUrl) 设置文本文件
 * @method string getModelId() 获取要修改的模型ID
 * @method void setModelId(string $ModelId) 设置要修改的模型ID
 */
class ModifyCustomizationRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID，登录控制台创建应用得到的AppID
     */
    public $BizId;

    /**
     * @var string 文本文件
     */
    public $TextUrl;

    /**
     * @var string 要修改的模型ID
     */
    public $ModelId;

    /**
     * @param integer $BizId 应用 ID，登录控制台创建应用得到的AppID
     * @param string $TextUrl 文本文件
     * @param string $ModelId 要修改的模型ID
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("TextUrl",$param) and $param["TextUrl"] !== null) {
            $this->TextUrl = $param["TextUrl"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }
    }
}
