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
 * 语音消息转文本热句模型配置
 *
 * @method integer getBizId() 获取应用 ID，登录控制台创建应用得到的AppID
 * @method void setBizId(integer $BizId) 设置应用 ID，登录控制台创建应用得到的AppID
 * @method string getModelId() 获取模型ID
 * @method void setModelId(string $ModelId) 设置模型ID
 * @method integer getModelState() 获取模型状态，-1下线状态，1上线状态, 0训练中, -2训练失败, 3上线中, 4下线中
 * @method void setModelState(integer $ModelState) 设置模型状态，-1下线状态，1上线状态, 0训练中, -2训练失败, 3上线中, 4下线中
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getTextUrl() 获取文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
 * @method void setTextUrl(string $TextUrl) 设置文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
 * @method integer getUpdateTime() 获取更新时间，11位时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，11位时间戳
 */
class CustomizationConfigs extends AbstractModel
{
    /**
     * @var integer 应用 ID，登录控制台创建应用得到的AppID
     */
    public $BizId;

    /**
     * @var string 模型ID
     */
    public $ModelId;

    /**
     * @var integer 模型状态，-1下线状态，1上线状态, 0训练中, -2训练失败, 3上线中, 4下线中
     */
    public $ModelState;

    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var string 文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
     */
    public $TextUrl;

    /**
     * @var integer 更新时间，11位时间戳
     */
    public $UpdateTime;

    /**
     * @param integer $BizId 应用 ID，登录控制台创建应用得到的AppID
     * @param string $ModelId 模型ID
     * @param integer $ModelState 模型状态，-1下线状态，1上线状态, 0训练中, -2训练失败, 3上线中, 4下线中
     * @param string $ModelName 模型名称
     * @param string $TextUrl 文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
     * @param integer $UpdateTime 更新时间，11位时间戳
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

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelState",$param) and $param["ModelState"] !== null) {
            $this->ModelState = $param["ModelState"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("TextUrl",$param) and $param["TextUrl"] !== null) {
            $this->TextUrl = $param["TextUrl"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
