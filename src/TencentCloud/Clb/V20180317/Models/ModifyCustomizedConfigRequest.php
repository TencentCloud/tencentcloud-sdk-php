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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomizedConfig请求参数结构体
 *
 * @method string getConfigName() 获取配置名字
 * @method void setConfigName(string $ConfigName) 设置配置名字
 * @method string getUconfigId() 获取配置ID
 * @method void setUconfigId(string $UconfigId) 设置配置ID
 * @method string getConfigContent() 获取配置内容
 * @method void setConfigContent(string $ConfigContent) 设置配置内容
 */
class ModifyCustomizedConfigRequest extends AbstractModel
{
    /**
     * @var string 配置名字
     */
    public $ConfigName;

    /**
     * @var string 配置ID
     */
    public $UconfigId;

    /**
     * @var string 配置内容
     */
    public $ConfigContent;

    /**
     * @param string $ConfigName 配置名字
     * @param string $UconfigId 配置ID
     * @param string $ConfigContent 配置内容
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }
    }
}
